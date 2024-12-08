<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE | Admin Update Page</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- iCheck Bootstrap -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    @include('auth.Layouts.InternalNav')
    @include('auth.Layouts.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <div class="register-box mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Update User Data</p>

                        @if(session()->has('added'))
                        <div class="alert alert-success">
                            {{ session()->get('added') }}
                        </div>
                        @endif

                        {{-- Update Form --}}
                        <form action="{{ route('update', ['id' => $user->id]) }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            @method('POST')

                            <!-- Full Name -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="{{ $user->fullname }}" name="fullname" placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            @error('fullname')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror

                            <!-- Email -->
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror

                            <!-- Mobile -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="{{ $user->mobile }}" name="mobile" placeholder="Mobile">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                            @error('mobile')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="{{ $user->password }}" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror

                            <!-- Submit Buttons -->
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger btn-block">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.register-box -->
        </section>
    </div>

    @include('auth.Layouts.InternalFooter')

    <!-- Scripts -->
    <script src="{{ asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('Admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/demo.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/pages/dashboard3.js') }}"></script>
</body>

</html>
