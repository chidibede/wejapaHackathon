<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeJapa</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @yield('content')


    <script>
        document.getElementById('nav-toggle').onclick = function(){
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
</body>
</html>