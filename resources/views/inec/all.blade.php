@extends('inec.dashboard')
@section('inec')


    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">Bordered Table</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>date of birth</th>
                                <th>height(in metres)</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            @foreach($all_inec as $item)
                            <tbody>
                                <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->full_name }}</strong>
                                </td>
                                <td>{{ $item->date_of_birth }}</td>
                                <td>{{ $item->height }}</td>
                                <td>
                                    <span class="badge {{ $item->pvc_id ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                            {{ $item->pvc_id ? 'REGISTERED' : 'NOT REGISTERED' }}
                                        </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('show.record', $item->nin) }}"><i class="bx bx-edit-alt me-1"></i> REGISTER</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Bordered Table -->

            <hr class="my-5">










        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>

@endsection

