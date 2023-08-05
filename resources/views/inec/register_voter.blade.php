@extends('inec.dashboard')
@section('inec')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Register a new Voter/</span> INEC</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">

            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">REGISTER NEW VOTER</h5>
                        <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('search.nin') }}">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NIN</label>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input name="nin" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="SEARCH BY NIN" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
