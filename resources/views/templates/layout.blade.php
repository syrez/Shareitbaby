<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<nav class="test navbar navbar-default bg-danger" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href={{ route('listlink') }}>Home</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
</nav>


<div class="container">
    <header class="page-header"><h1>@yield('title','Shareitbaby')</h1></header>
    @if(Session::has('success'))
        <div class="message alert alert-success">{{ Session::get('success') }}</div>
    @endif


    <ul class="col-xs-12  col-sm-1 col-lg-1" style="margin-top:0;">
        <li><a href={{ route('listlink') }} class="navbar-link">List Link</a></li>
        <li><a href={{ route('addlink') }} class="navbar-link">Add Link</a></li>
    </ul>
    @yield('content')
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(function () {
        setTimeout(function () {
            $('.message').fadeOut();
        }, 5000);
    })
</script>
</body>
</html>