<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online Sticky Notes created using Laravel Framework</title>
    <!-- Styles -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/StickyNotes.css') }}

    <!-- Scripts -->
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/custom.js') }}
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="">Online Sticky Notes</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="">Home</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
    <hr>
    @yield('content')
    <footer>
        <div class="pull-right">Created using Laravel Framework by Steve Popoola</div>
    </footer>
</div> <!-- /container -->

</body>
</html>
