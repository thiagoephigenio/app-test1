<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/angular.min.js') }}"></script>
    <script src="{{ asset('js/angular-sanitize.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/www/build/web-components-lib.esm.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <h1 ng-class="{title: 1===1}">asdasd</h1>
    @include('teste')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
