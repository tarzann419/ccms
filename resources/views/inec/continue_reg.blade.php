@extends('inec.dashboard')
@section('inec')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> VOTER DETAILS</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">

            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">REGISTER NEW VOTER</h5>
                        <small class="text-muted float-end">VOTER PERSONAL DETAILS</small>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('generate.pvc', ['nin' => $nin]) }}">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">First Name</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->first_name }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">MIDDLE Name</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->middle_name }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Surame</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->surname }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">date of birth</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->date_of_birth }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">height</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->height }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">VOTER'S ID</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->pvc_id ? $record->pvc_id : "NOT REGISTERED" }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">VOTER'S ID EXPIRY DATE</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname" value="{{ $record->pvc_id_exp ? $record->pvc_id_exp : "NOT REGISTERED" }}" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button {{ $record->pvc_id ? 'disabled' : '' }} type="submit" class=" btn {{ $record->pvc_id ? 'btn-success' : 'btn-primary'}}">{{ $record->pvc_id ? 'ALREADY ACTIVE' : 'GENERATE VOTERS ID'}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
