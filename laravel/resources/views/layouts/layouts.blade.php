<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php MyProject</title>
</head>
<header>
   @include('components.header')
</header>
<body>
    <div class="container">
       <div class="cds-container">
            @yield('content')
       </div>
    </div>
</body>

</html>