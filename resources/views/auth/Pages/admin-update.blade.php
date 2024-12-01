<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE  | Admin Update Page </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition register-page">
<div class="register-box">
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

            {{-- FORM --}}
            <form action="{{ route('update', ['id' => $user->id]) }}" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                @method('POST')
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{$user->fullname}}" name="fullname" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                </div>

                @error('fullname')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                </div>
                @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{$user->mobile }}" name="mobile" placeholder="Mobile">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>

                </div>
                @error('mobile')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="text" class="form-control"  value="{{$user->password}}" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                </div>
                @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror


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
    </div><!-- /.card -->
</div><!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>