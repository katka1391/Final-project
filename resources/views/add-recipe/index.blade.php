@extends('layouts/main')
@section('content')

   <div className="addRecipe-container">

      <form action="" method="post">
         @csrf
         <label for="name">Pet's name:</label>
         <br>
         <input type="text" id="name" name="name" required/>
         <br>
         <label for="species">Species:</label>
         <br>
         <input type="text" id="species" name="species" required/>
         <br>
         <label for="breed">Breed:</label>
         <br>
         <input type="text" id="breed" name="breed" required/>
         <br>
         <label for="age">Age:</label>
         <br>
         <input type="text" id="age" name="age" required/>
         <br>
         <label for="weight">Weight:</label>
         <br>
         <input type="text" id="weight" name="weight" required/>
         <br>
         <br>
         {{-- <label for="image">Image (http link):</label>
         <br>
         <input type="text" id="image" name="image" />
         <br>
         <br> --}}
         <input type="submit" value="Submit"/>
     </form>

















            <div class="addRecipe-icons-left-panel">
                <img class="addRecipe-icon" src="/img/Icons/fb.png" />
                <img class="addRecipe-icon" src="/img/Icons/twitter.png" />
                <img class="addRecipe-icon" src="/img/Icons/instagram.png" />

            </div>

            <div className="addRecipe-leftSite">
                <h2>hello </h2>
                <h2>hello </h2>
                <h2>hello </h2>
                <h2>hello </h2>
                <h2>hello </h2>
            </div>

           
                
           <div className="addRecipe-rightSite">
                <h4 className="addRecipe-all-recipes">Fresh and zesty </h4>
                <div className="addRecipe-rightSite-container">
                    <h3 className="addRecipe-rightSite-search">SEARCH RECIPES</h3>
                    <p className="addRecipe-rightSite-menu">
                        <strong>
                            BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                            GLUTEN FREE
                        </strong>
                    </p>
                    <a>
                        <p>ALL RECIPES </p>
                    </a>
                    <p>
                        <strong>━━━━━━⤞●⤝━━━━━━</strong>
                    </p>

                    <img
                        className="addRecipe-rightSite-img"
                        src="/img/Capture.PNG"
                        alt="us"/>

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
                        <img class="addRecipe-icon-right" src="/img/Icons/fb.png" />
                        <img class="addRecipe-icon-right" src="/img/Icons/twitter.png" />
                        <img class="addRecipe-icon-right" src="/img/Icons/instagram.png" />
                     </div>
                </div>
            </div>

        </div>


      
@endsection 
      
   






   
   
