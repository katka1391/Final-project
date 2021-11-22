@extends('layouts/main')
@section('content')


   <div class="container blog">
      <h1 class="title blog" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Login Page</h2>
   </div>

   @foreach ($errors->all() as $error)
   <div class="error">{{ $error }}</div>
@endforeach

<div class="login-container">
    <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        <p class="login-notRegister" >Not register yet? Go to the <a href="/register">register</a> page</p>
        <label for="Username">Email or Username:</label>
        <input class="login_input" type="email" name="email" value="{{ old('email') }}">
        <label for="Username">Password:</label>
        <input class="login_input" type="password" name="password" value="">

        <button class="btn-login"> 
            <span data-text="L">L</span>
            <span data-text="O">O</span>
            <span data-text="G">G</span>
            <span data-text="I">I</span>
            <span data-text="N">N</span>
            <span data-text="!">!</span>
        </button>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="logout-btn" >Logout</button>
        </form>
   
    </form>
    <div class="space-between__log"  style="margin-right: 20px;">

    </div>
    <!-- left bar -->
    <div class="carousel-onTheRight__log">
        <p class="first-p__log" class="text-decoration-none" > <a href="" class="text-dark" ><u>Search Recipes</u></a> </p>
        <br>
        <p class="text-decoration-none"> <a href="" class="text-dark"><u>BREAKFAST  /  MAIN DISH  /  DESSERT</u></a> </p>
        <br>
        <p class="text-decoration-none"> <a href="" class="text-dark"><u>VEGAN  /  GLUTEN FREE</u></a> </p>
        <br>
        <br>
        <p  class="text-decoration-none"><a href="" class="text-danger">ALL RECIPES >></a></p>
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <br>
        <p>TAKE A LOOK AT OUR BLOG PAGE...</p>
        <br>
        <br>
        <p class="text-decoration-none"><a href="" class="text-danger">BLOG>></a></p>
    </div>
    
</div>
@endsection