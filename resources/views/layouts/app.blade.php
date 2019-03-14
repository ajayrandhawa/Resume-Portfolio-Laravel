<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" >
    <title>Resume</title>
</head>
<body>
      @include('inc.navbar')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
        @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
        @if(Request::is('/'))
        @include('inc.sidebar')
        @endif
        @if(Request::is('/'))
             @include('inc.messages')
        @endif
        </div>
        
    </div> 
</div>
<footer class="footer-bg"><p>Copyright © 2019 Ajay</p></footer>
    <script src="js/app.js"></script>
</body>
</html>