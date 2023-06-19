<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('images/radiaActiveLogo.png') }}" type="image/x-icon">

    <style>

body {
    background-color: #EBECF0;
    
}

.header {
    background-color: #9C51B5;
    padding: 0.1rem;
    color: white;
    text-align: center;
  
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

.logo{
    margin: 0.1rem;
}


    </style>

    <title>Ticket Support</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><img src="{{ asset('images/radiaActiveLogo.png') }}" class="logo"> Ticket Support</h1>
        </div>
        
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
