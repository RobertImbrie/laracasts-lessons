<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>
    @include ('layouts.nav')
    @include ('layouts.header')
    <div class="container">
        @yield ('content')
        @include ('sidebar.index')
    </div><!-- /.container -->
    @include ('layouts.footer')
  </body>
</html>