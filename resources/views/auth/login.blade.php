<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <style media="screen">
    body {
        margin-bottom: 0px;
    }
    </style>
    <title>Login!</title>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">AKPI</a>
            </div>
        </div>
    </nav>
    <div class="container body">
        <div class="login-panel">
            <div class="">
                <div class="panel-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="usr">Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div id="copyright" style="background-color: #333; color: white; padding: 10px;">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">&copy; 2017 Asosiasi Konselor Pastoral Indonesia</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Powered by <a href="http://www.kevingiovanni.com">Kevin Giovanni</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
