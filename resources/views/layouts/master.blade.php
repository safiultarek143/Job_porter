<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>

  @include('partials.styles')
 
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
      <!-- Nav bar -->
        @include('partials.nav')
        <!-- Left sidebar  -->
       @include('partials.left-sidebar')

       
        <div class="content-wrapper">
          <!-- Content -->
          @yield('content')
        </div>
        @include('partials.footer')
        <!-- Control right Sidebar -->
        @include('partials.right-sidebar')
       
        <div class="control-sidebar-bg"></div>
  </div>

@include('partials.scripts')

</body>
</html>


