<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
</head>
@include('auth.Layouts.InternalNav') ;
<body class="hold-transition sidebar-mini">
  @include('auth.Layouts.sidebar')
    <section class="content">
    Content of this page 
    </section>
  </aside>
 
  @include('auth.Layouts.InternalFooter');
 
</div>
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Admin/dist/js/adminlte.js"></script>
<script src="Admin/plugins/chart.js/Chart.min.js"></script>
<script src="Admin/dist/js/demo.js"></script>
<script src="Admin/dist/js/pages/dashboard3.js"></script>
</body>
</html>
