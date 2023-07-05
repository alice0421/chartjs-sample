<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>chartjs-sample</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- import app.js by vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Chart</h1>
        <div>
            <canvas id="chart_getting_started"></canvas>
        </div>
    </body>
</html>
