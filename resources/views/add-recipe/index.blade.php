@extends('layouts/main')
@section('content')


    <div class="addRecipe-main-container">
        <div class="addRecipe-icons-left-panel">
            <img class="addRecipe-icon" src="/img/Icons/fb.png" />
            <img class="addRecipe-icon" src="/img/Icons/twitter.png" />
            <img class="addRecipe-icon" src="/img/Icons/instagram.png" />
        </div>

        <div class="addRecipe-leftSite">
            <h2 class="addRecipe-leftSite-title">Add Recipe</h2>
            <div>
                <p class="addRecipe-p-head"><strong>🖤We cannot wait to share your favorite recipe with the world 🖤</strong></p>
                <p class="addRecipe-p-head">Please fill all details from the formular below to be able to submit new recipe.</p>
            </div>
            <form action="/addRecipe" method="post">
                @csrf
                <label for="name">Name of your recipy:</label>
                <br>
                <input type="text" id="name" name="name" required />
                <br>
                <label for="calories">How much calories per portion:</label>
                <br>
                <input type="text" id="calories" name="calories" required />
                <br>
                <label for="cooktime">Cooktime in minutes:</label>
                <br>
                <input type="text" id="cooktime" name="cooktime" required />
                <br>
                <label for="preptime">Preptime in minutes:</label>
                <br>
                <input type="text" id="preptime" name="preptime" required />
                <br>
                <label for="difficulty">Difficulty, select one from below:</label>
                <br>
                <select id="difficulty" name="difficulty">
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
                <br>
                <label for="servings">For how many people:</label>
                <br>
                <input type="text" id="servings" name="servings" required />
                <br>
                <label for="fat">Fat:</label>
                <br>
                <input type="text" id="fat" name="fat" required />
                <br>
                <label for="carbs">Carbs:</label>
                <br>
                <input type="text" id="carbs" name="carbs" required />
                <br>
                <label for="fiber">Fiber:</label>
                <br>
                <input type="text" id="fiber" name="fiber" required />
                <br>
                <label for="sugar">Sugar:</label>
                <br>
                <input type="text" id="sugar" name="sugar" required />
                <br>
                <label for="protein">Protein:</label>
                <br>
                <input type="text" id="protein" name="protein" required />
                <br>
                <label  for="image">Image url path:</label>
                <br>
                <input type="text" id="image" name="image" />

                <label for="ingredients">Ingredients:</label>
                       <br>
                       {{-- required => means that user have to fill this input --}}
                       <input type="text" id="ingredients" name="ingredients[]" required/>
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <br>
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <br>
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <input type="text" id="ingredients" name="ingredients[]" />
                       <br>
                       <label for="instructions">Instructions:</label>
                       <br>
                       Step 1 <input type="text" id="instructions" name="instructions[]" required/>
                       <br>
                       <br>
                       Step 2 <input type="text" id="instructions" name="instructions[]" />
                       <br>
                       <br>
                       Step 3 <input type="text" id="instructions" name="instructions[]" />
                       <br>
                       <br>
                       Step 4 <input type="text" id="instructions" name="instructions[]" />
                       <br>
                       <br>
                       Step 5 <input type="text" id="instructions" name="instructions[]" />
                      
                       <br>
                       <br>

                {{-- <label for="image">Image (http link):</label>
                       <br>
                       <input type="text" id="image" name="image" />
                       <br>
                       <br> --}}
                <input type="submit" value="Submit" />
            </form>
        </div>



        <div class="addRecipe-rightSite">
            <h3 class="addRecipe-rightSite-search">SEARCH RECIPES</h3>

            <div class="addRecipe-rightSite-container">
                <p class="addRecipe-rightSite-menu">
                    <strong>
                        BREAKFAST / LUNCH / DINNER / DESSERT / VEGAN /
                        GLUTEN FREE
                    </strong>
                </p>
                <a>
                    <a href="/recipes"><p>ALL RECIPES </p></a>
                </a>
                <p>
                    <strong>━━━━━━⤞●⤝━━━━━━</strong>
                </p>

                <img class="addRecipe-rightSite-img" src="/img/Capture.PNG" alt="us" />

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
                <img class="addRecipe-logo" src="/img/logo.png">
            </div>
        </div>

    </div>



@endsection
