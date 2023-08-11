<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INEC Login </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('frsc/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('frsc/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frsc/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frsc/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frsc/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frsc/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frsc/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('logos/inec_logo.png') }}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('logos/inec_logo.png') }}" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="fw-light">Sign in to continue.</h6>
                        <form class="pt-3" method="post" action="{{ route('inec.login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="@error('emailUsername') is-invalid @enderror form-control form-control-lg" id="emailUsername" placeholder="Username">
                                @error('emailUsername')
                                <div class="alert alert-danger">{{ ＄message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="@error('pass') is-invalid @enderror form-control form-control-lg" id="pass" placeholder="Password">
                                @error('pass')
                                <div class="alert alert-danger">{{ ＄message }}</div>
                                @enderror
                            </div>

                            @error('title')
                            <div class="alert alert-danger">{{ ＄message }}</div>
                            @enderror

                            <button type="submit">submit</button>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
{{--{{ asset('frsc/') }}--}}
<script src="{{ asset('frsc/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('frsc/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('frsc/js/off-canvas.js') }}"></script>
<script src="{{ asset('frsc/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('frsc/js/template.js') }}"></script>
<script src="{{ asset('frsc/js/settings.js') }}"></script>
<script src="{{ asset('frsc/js/todolist.js') }}"></script>
<!-- endinject -->
</body>

</html>
