<html lang="en" ng-app="notesApp">
<head>
    <meta charset="utf-8">
    <title>Sticky Notes created using Laravel and Angular Js</title>
    <!-- Styles -->
    <% HTML::style('css/bootstrap.min.css') %>
    <% HTML::style('css/style.css') %>
    <% HTML::style('css/StickyNotes.css') %>

    <!-- Scripts -->
    <script src="/js/bower_components/angular/angular.js"></script>
    <script src="/js/bower_components/angular-route/angular-route.js"></script>
    <script src="/js/bower_components/angular-resource/angular-resource.js"></script>
    <script src="/js/app/main.js"></script>
    <script src="/js/app/controllers.js"></script>
    <script src="/js/app/filters.js"></script>
    <script src="/js/app/services.js"></script>
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
            <a class="brand" href="">Online Sticky Notes created with Laravel and Angular</a>
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
