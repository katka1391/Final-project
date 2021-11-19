@extends('layouts/main')
@section('content')

<div class="container home">
    <h1 class="title home" style="font-size: 10rem">Sweet Cuisine</h1>  
    <h2 class="subTitle home">home Page</h2>
 </div>

<div class="home-container">

    <div class="home-up">
        
                <div class="home-recipe__desc">
                    <h3>{{$recipes[22]->name}}</h3>
                    <br>
                    <img src="{{$images[44]->path}}" />
                    <p><a href="#">Go to the recipe>>></a></p>
                    <q>{{$recipes[22]->description}}</q>
                    
                </div>
            
                    <div class="space-between" style="margin-right: 20px;">
                        
                    </div>
                    <!-- left bar -->
                <div class="carousel-onTheRight-home">
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

    <div class="circle">
        <p class="circle__ph">
            MORE RECIPES BELOW
        </p>
    </div>

    <div class="home-btn">
        <div class="home-btn__buttons"><p>RECENT POST</p></div>
        <div class="home-btn__buttons"><p>FAN FAVOURITE</p></div>
    </div>

    <div class="home-down">
        <!---->

        <div class="home-down-recipe__desc">
            <img src="{{$images[0]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[0]->name}}</h4>
            <q>{{$recipes[0]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[2]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[1]->name}}</h4>
            <q>{{$recipes[1]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[4]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[2]->name}}</h4>
            <q>{{$recipes[2]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            
            <img src="{{$images[6]->path}}" />
            <br>
     .
      <div class="home-down-recipe__desc-ph">           
           <h4>{{$recipes[3]->name}}</h4>
            <q>{{$recipes[3]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>       <!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[8]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[4]->name}}</h4>
            <q>{{$recipes[4]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[10]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[5]->name}}</h4>
            <q>{{$recipes[5]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div><!---->
        <div class="home-down-recipe__desc">
            <img src="{{$images[12]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[6]->name}}</h4>
            <q>{{$recipes[6]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[14]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[7]->name}}</h4>
            <q>{{$recipes[7]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[16]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[8]->name}}</h4>
            <q>{{$recipes[8]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[18]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[9]->name}}</h4>
            <q>{{$recipes[9]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[20]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[10]->name}}</h4>
            <q>{{$recipes[10]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[22]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[11]->name}}</h4>
            <q>{{$recipes[11]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[24]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[12]->name}}</h4>
            <q>{{$recipes[12]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[26]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[13]->name}}</h4>
            <q>{{$recipes[13]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[28]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[14]->name}}</h4>
            <q>{{$recipes[14]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[30]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[15]->name}}</h4>
            <q>{{$recipes[15]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[32]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[16]->name}}</h4>
            <q>{{$recipes[16]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[34]->path}}" />
            <br>
           
            <div class="home-down-recipe__desc-ph"> 
                <h4>{{$recipes[17]->name}}</h4>
            <q>{{$recipes[17]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[36]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[18]->name}}</h4>
            <q>{{$recipes[18]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[38]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[19]->name}}</h4>
            <q>{{$recipes[19]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[40]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[20]->name}}</h4>
            <q>{{$recipes[20]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[42]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[21]->name}}</h4>
            <q>{{$recipes[21]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[44]->path}}" />
            <br>
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[22]->name}}</h4>
            <q>{{$recipes[22]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[46]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[23]->name}}</h4>
            <q>{{$recipes[23]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[43]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[24]->name}}</h4>
            <q>{{$recipes[24]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[50]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[25]->name}}</h4>
            <q>{{$recipes[25]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[52]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[26]->name}}</h4>
            <q>{{$recipes[26]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
        <div class="home-down-recipe__desc">
            <img src="{{$images[54]->path}}" />
            <br>
            
             <div class="home-down-recipe__desc-ph">
            <h4>{{$recipes[27]->name}}</h4>
            <q>{{$recipes[27]->description}}</q>
            <br>
            <br>
            <p><a href="#">Go to the recipe>>></a></p>    
        </div>
            
        </div>
       






    </div>









</div>








@endsection