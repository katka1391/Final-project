@extends('layouts/main')
@section('content')



   <div class="container blog">
      <h1 class="title blog" style="font-size: 10rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Register Page</h2>
   </div>
 
<div class="register-container">

    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach

    <form  class="register-form" action="{{ route('register') }}" method="post">
        @csrf
        <label for="Name">Name:</label>
        <input class="register_input" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <label for="Email">Email:</label>
        <input class="register_input" type="email" name="email" placeholder="email" value="{{ old('email') }}">
        <label for="Paswoord">Paswoord:</label>
        <input class="register_input" type="password" name="password" placeholder="password" value="">
        <label for="Paswoord-confirmation">Paswoord confirmation:</label>
        <input class="register_input" type="password" name="password_confirmation" placeholder="password_confirmation">

        <button class="btn-register"> 
            <span data-text="R">R</span>
            <span data-text="E">E</span>
            <span data-text="G">G</span>
            <span data-text="I">I</span>
            <span data-text="S">S</span>
            <span data-text="T">T</span>
            <span data-text="E">E</span>
            <span data-text="R">R</span>
            <span data-text="!">!</span>
        </button>
    </form>
    <div class="space-between"  style="margin-right: 20px;">

    </div>
    <!-- left bar -->
    <div class="carousel-onTheRight blog">
        <p class="text-decoration-none" > <a href="" class="text-dark" ><u>Search Recipes</u></a> </p>
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