<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User List</title>

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

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Fullname</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Delete/Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $users )
            <tr>
                <th scope="row">{{$users->id}}</th>
                <td>{{$users->fullname}}</td>
                <td>{{$users->mobile}}</td>
                <td>{{$users->email}}</td>
                
               
                <td><button class="btn btn-dark"> <a href ={{ url("student-edit/". $users->id)}} >update</a></button></td> 
                {{-- add button further  --}}
                <td><button class="btn btn-danger"> <a href ={{"delete/".$users['id']}}>Delete</a></button></td></td>
              </tr>
                
            @endforeach
        </tbody>
      </table>        
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
