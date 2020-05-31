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

<style>
    #exhibit{
        background-image: url('/img/background3.jpg');
        background-repeat:no-repeat;
        background-size: 100%;
}

@media only screen and (max-width: 500px) {
    #exhibit{
        background-image: url('/img/background3.jpg');
        
        background-size: 120%;
}
}


</style>

<body>

        <div class="bg-scroll sm:bg-scroll md:bg-scroll lg:bg-scroll xl:bg-scroll h-screen" id='exhibit'>
           
           <!-- Navigation -->
            @include('includes.nav')

            <!-- exhibition -->
            @include('includes.exhibit')
           
            

                <script>
                    document.getElementById('nav-toggle').onclick = function(){
                        document.getElementById("nav-content").classList.toggle("hidden");
                    }
                </script>
        </div>

</body>
</html>