@extends('layouts/main')
@section('content')

   <div class="container blog">
      <h1 class="title blog" style="font-size: 8rem">Sweet Cuisine</h1>  
      <h2 class="subTitle blog">Blog Page</h2>
   </div>


<!-- caroulsen -->
     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--carousel 1 -->
<div class="blog-container">
      <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         
         <div class="carousel-inner" style="width: 40rem;"> 
            <div class="carousel-item active">
                 <a href="/article1"><img  src="/img/Brownies/Brownie.jpg" alt="First slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article1">Best Ever Chocolate Brownies</a></h3>
                  <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>                 </div>
             </div>
             <div class="carousel-item">
                 <a href="/article1"><img  src="/img/Brownies/brownies1.jpg" alt="Second slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article1">Best Ever Chocolate Brownies</a></h3>
                  <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>                 </div>
             </div>
             <div class="carousel-item">
                 <a href="/article1"><img  src="/img/Brownies/brownies3.jpg" alt="Third slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article1">Best Ever Chocolate Brownies</a></h3>
                  <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>
                 </div>
             </div>
        </div>

        <div class="space-between__blog" >
            
        </div>
        <!-- left bar -->
        <div class="carousel-onTheRight-blog">
            <h4 class="recipes-all-recipes-blog">Fresh and zesty </h4>
            <div class="recipe-rightSite-container">
                <h3 class="recipe-rightSite-search">SEARCH RECIPES</h3>
                <p class="recipe-rightSite-menu">
                    <strong>
                        BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                        GLUTEN FREE
                    </strong>
                </p>
                <a>
                    <a href="/recipes"><p>ALL RECIPES</p></a>
                </a>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
    
                <img
                    class="recipe-rightSite-img"
                    src="/img/Capture.PNG"
                    alt="us"
                />
    
                <p>
                    <strong>Hello, we're Gloria and Katarina.</strong>
                </p>
                <p>
                    We love to eat, travel, cook, and eat some more! We
                    created this recipe website from scratch during the
                    coding Bootcamp Praha 2021. As an example we used
                    www.loveandlemons.com and all our recipes are from
                    www.bbcgoodfood.com.
                </p>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
                <div>
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/fb.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/twitter.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/instagram.png"
                    />
                </div>
            </div>
        </div>
       
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>

   <!--carousel 2 -->

      <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         
         <div class="carousel-inner" style="width: 40rem;"> 
            <div class="carousel-item active">
                 <a href="/article2"><img  src="/img/Pancakes/pancakes.jpg" alt="First slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article2">Easy Oatmeal Pancakes</a></h3>
                  <p>A simple, homey recipe for pancakes made with old-fashioned rolled oats.</p>                 </div>
             </div>
             <div class="carousel-item">
                 <a href="/article2"><img  src="/img/Pancakes/pancakes1.jpg" alt="Second slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article2">Easy Oatmeal Pancakes</a></h3>
                  <p>A simple, homey recipe for pancakes made with old-fashioned rolled oats.</p>                 </div>
             </div>
             <div class="carousel-item">
                 <a href="/article2"><img  src="/img/Pancakes/pancakes2.jpg" alt="Third slide" ></a>
                 <div class="carousel-caption d-none d-md-block">
                  <h3><a href="/article2">Easy Oatmeal Pancakes</a></h3>
                  <p>A simple, homey recipe for pancakes made with old-fashioned rolled oats.</p>
                 </div>
             </div>
        </div>
        <div class="space-between__blog" >

        </div>
         <div class="carousel-onTheRight-blog" style="visibility: hidden">
            <h4 class="recipes-all-recipes-blog">Fresh and zesty </h4>
            <div class="recipe-rightSite-container">
                <h3 class="recipe-rightSite-search">SEARCH RECIPES</h3>
                <p class="recipe-rightSite-menu">
                    <strong>
                        BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                        GLUTEN FREE
                    </strong>
                </p>
                <a>
                    <a href="/recipes"><p>ALL RECIPES</p></a>
                </a>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
    
                <img
                    class="recipe-rightSite-img"
                    src="/img/Capture.PNG"
                    alt="us"
                />
    
                <p>
                    <strong>Hello, we're Gloria and Katarina.</strong>
                </p>
                <p>
                    We love to eat, travel, cook, and eat some more! We
                    created this recipe website from scratch during the
                    coding Bootcamp Praha 2021. As an example we used
                    www.loveandlemons.com and all our recipes are from
                    www.bbcgoodfood.com.
                </p>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
                <div>
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/fb.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/twitter.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/instagram.png"
                    />
                </div>
            </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>



        <!--carousel 3 -->
      <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         
            <div class="carousel-inner" style="width: 40rem;"> 
                <div class="carousel-item active">
                    <a href="/article3"><img  src="/img/Pumpkin/pumpkin.jpg" alt="First slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article3">Best Ever Pumpkins</a></h3>
                    <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>                 </div>
                </div>
                <div class="carousel-item">
                    <a href="/article3"><img  src="/img/Pumpkin/pumpkin1.jpg" alt="Second slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article3">Best Ever Pumpkins</a></h3>
                    <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>                 </div>
                </div>
                <div class="carousel-item">
                    <a href="/article3"><img  src="/img/Pumpkin/pumpkin2.jpg" alt="Third slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article3">Best Ever Pumpkins</a></h3>
                    <p>These Gooey Chocolate Brownies have a crisp, sugary top and are deliciously soft, gooey and fudgy inside. Why not get baking with the kids this Easter?</p>
                    </div>
                </div>
            </div>
            <div class="space-between__blog" >

            </div>
            <div class="carousel-onTheRight-blog" style="visibility: hidden">
            <h4 class="recipes-all-recipes-blog">Fresh and zesty </h4>
            <div class="recipe-rightSite-container">
                <h3 class="recipe-rightSite-search">SEARCH RECIPES</h3>
                <p class="recipe-rightSite-menu">
                    <strong>
                        BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                        GLUTEN FREE
                    </strong>
                </p>
                <a>
                    <a href="/recipes"><p>ALL RECIPES</p></a>
                </a>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
    
                <img
                    class="recipe-rightSite-img"
                    src="/img/Capture.PNG"
                    alt="us"
                />
    
                <p>
                    <strong>Hello, we're Gloria and Katarina.</strong>
                </p>
                <p>
                    We love to eat, travel, cook, and eat some more! We
                    created this recipe website from scratch during the
                    coding Bootcamp Praha 2021. As an example we used
                    www.loveandlemons.com and all our recipes are from
                    www.bbcgoodfood.com.
                </p>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
                <div>
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/fb.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/twitter.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/instagram.png"
                    />
                </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--carousel 4 -->
      <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         
            <div class="carousel-inner" style="width: 40rem;"> 
                <div class="carousel-item active">
                    <a href="/article4"><img  src="/img/Bread/bread1.jpg" alt="First slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article4">Best Ever Bread</a></h3>
                    <p>Sourdough is naturally leavened bread, which means it doesn’t use commercial yeast to rise. Instead, it uses a ‘starter’ – a fermented flour and water mixture that contains wild yeast and good bacteria – to rise...</p>                 </div>
                </div>
                <div class="carousel-item">
                    <a href="/article4"><img  src="/img/Bread/bread2.jpg" alt="Second slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article4">Best Ever Bread</a></h3>
                    <p>Sourdough is naturally leavened bread, which means it doesn’t use commercial yeast to rise. Instead, it uses a ‘starter’ – a fermented flour and water mixture that contains wild yeast and good bacteria – to rise...</p>                 </div>
                </div>
                <div class="carousel-item">
                    <a href="/article4"><img  src="/img/Bread/bread3.jpg" alt="Third slide" ></a>
                    <div class="carousel-caption d-none d-md-block">
                    <h3><a href="/article4">Best Ever Bread</a></h3>
                    <p>Sourdough is naturally leavened bread, which means it doesn’t use commercial yeast to rise. Instead, it uses a ‘starter’ – a fermented flour and water mixture that contains wild yeast and good bacteria – to rise...</p>
                    </div>
                </div>
            </div>
            <div class="space-between__blog" >

            </div>
            <div class="carousel-onTheRight-blog" style="visibility: hidden">
            <h4 class="recipes-all-recipes-blog">Fresh and zesty </h4>
            <div class="recipe-rightSite-container">
                <h3 class="recipe-rightSite-search">SEARCH RECIPES</h3>
                <p class="recipe-rightSite-menu">
                    <strong>
                        BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                        GLUTEN FREE
                    </strong>
                </p>
                <a>
                    <a href="/recipes"><p>ALL RECIPES</p></a>
                </a>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
    
                <img
                    class="recipe-rightSite-img"
                    src="/img/Capture.PNG"
                    alt="us"
                />
    
                <p>
                    <strong>Hello, we're Gloria and Katarina.</strong>
                </p>
                <p>
                    We love to eat, travel, cook, and eat some more! We
                    created this recipe website from scratch during the
                    coding Bootcamp Praha 2021. As an example we used
                    www.loveandlemons.com and all our recipes are from
                    www.bbcgoodfood.com.
                </p>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>
                <div>
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/fb.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/twitter.png"
                    />
                    <img
                        class="recipe-icon-right"
                        src="/img/Icons/instagram.png"
                    />
                </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


</div>


      
@endsection 
      
   






   
   
