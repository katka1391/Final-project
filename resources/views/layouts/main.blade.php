<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    {{-- <script src="https://kit.fontawesome.com/d59931b590.js" crossorigin="anonymous"></script> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @include('layouts/navBar')







    <script src="/script.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @yield('content')
    @include('layouts/footer')
    <script>
        const hamburger = document.querySelector('#hamburger');
         const title = document.querySelector('.title');
         
         const changeEvent = (event) =>{
             console.log(title.style.visibility);
             if ( title.style.visibility === 'hidden'){
                title.style.visibility = '';
             } else if (title.style.visibility === ''){
                title.style.visibility = 'hidden';
             }
         }
      


         hamburger.addEventListener('click', changeEvent)
     </script>

</body>

</html>
