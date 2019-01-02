<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="qzPxwZ4rrASbDUo7IkjXyO0jjIuqJzyRar7l82X5">
        <title>Contact Us</title>
        <!-- Scripts -->
        <script src="http://localhost:8000/js/app.js" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="http://localhost:8000/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="http://localhost:8000">
                    Laravel
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/register">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Contact Us</div>
                                <div class="card-body">
                                    <form method="POST" action="http://localhost:8000/register">
                                        <input type="hidden" name="_token" value="qzPxwZ4rrASbDUo7IkjXyO0jjIuqJzyRar7l82X5">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Your Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="can_we_help" class="col-md-4 col-form-label text-md-right">Can we help?</label>
                                            <div class="col-md-6">
                                                <textarea id="password" rows=5 cols=10 type="password" class="form-control" name="can_we_help"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                Submit Contact
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
