<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<div class="container">
     @include('paratials.errors')
     @include('paratials.success')
</div>
@section('main-content')
  @show



@include('admin.layouts.footer')
</div>
</body>
</html>