@extends('layouts/main')
@section('content')


    <div class="addRecipe-main-container">
        <div class="addRecipe-icons-left-panel">
        <a href="https://www.facebook.com/Katkas.Cakes.Ilkley"><img class="addRecipe-icon" src="/img/Icons/fb.png" /></a>
        <img class="addRecipe-icon" src="/img/Icons/twitter.png" />
        <a href="https://www.instagram.com/katkas.cakes/"><img class="addRecipe-icon" src="/img/Icons/instagram.png" /></a>       

        </div>

        <div class="addRecipe-leftSite">
            <h2 class="addRecipe-leftSite-title">Add Recipe</h2>
            <div>
                {{-- <p class="addRecipe-p-head"><strong>🖤We cannot wait to share your favorite recipe with the world 🖤</strong> --}}
                </p>
                <p class="addRecipe-p-head">Please fill<strong> all details</strong> from the formular below to be able to submit new recipe.
                </p>
            </div>
            <form action="/addRecipe" method="post">
                @csrf
                <div class="addRecipe-form">
                    <div class="addRecipe-form1">
                        <label for="name">Name of your recipy:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="name" name="name" required />
    
                        <label for="calories">Calories per portion:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="calories" name="calories" required />
    
                        <label  for="cooktime">Cooktime in minutes:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="cooktime" name="cooktime" required />
    
                        <label  for="preptime">Preptime in minutes:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="preptime" name="preptime" required />
    
                        <label  for="difficulty">Difficulty, select one from below:</label>
    
                        <select class="addRecipe-input-nospacearound" id="difficulty" name="difficulty">
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
                        </select>
    
                        <label  for="servings">For how many people:</label>
                       
                        <input class="addRecipe-input-nospacearound" type="text" id="servings" name="servings" required /> <br/>
    
                        <label  for="fat">Fat:</label>
                        <br/>
                        <input class="addRecipe-input-nospacearound" type="text" id="fat" name="fat" required />
    
    
                        <label  for="carbs">Carbs:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="carbs" name="carbs" required />
    
                        <label  for="fiber">Fiber:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="fiber" name="fiber" required />
    
                        <label  for="sugar">Sugar:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="sugar" name="sugar" required />
    
                        <label for="protein">Protein:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="protein" name="protein" required />
    
                        <label for="image">Image url path:</label>
    
                        <input class="addRecipe-input-nospacearound" type="text" id="image" name="image" />
    
                    </div>
                    <div class="addRecipe-form2">
                        <label for="ingredients">Ingredients:</label>
    
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" required />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
    
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
    
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
                        <input class="addRecipe-input" type="text" id="ingredients" name="ingredients[]" />
    
                    </div>
                    <div class="addRecipe-form3">
    
                        <label for="instructions">Instructions:</label><br/>
    
                        <label for="instructions">Step 1</label><br/>
                       <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" required />
                       <label for="instructions">Step 2</label><br/>
    
                       <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
                        <label for="instructions">Step 3</label><br/>
    
                        <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
                        <label for="instructions">Step 4</label><br/>
    
                        <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
                        <label for="instructions">Step 5</label><br/>
    
                         <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
                         <label for="instructions">Step 6</label><br/>
    
                         <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
                         <label for="instructions">Step 7</label><br/>
    
                        <input class="addRecipe-input" type="text" id="instructions" name="instructions[]" />
    
                    </div>

                </div>
                
                <div class="addrecipe-button">

                    <input class="addrecipe-submit-button" type="submit" value="Submit" />
                </div>
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
                    <a href="/recipes">
                        <p>ALL RECIPES </p>
                    </a>
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
                    <a href="https://www.facebook.com/Katkas.Cakes.Ilkley"><img class="recipe-icon-right" src="/img/Icons/fb.png" /></a>
                    <img class="recipe-icon-right" src="/img/Icons/twitter.png" />
                    <a href="https://www.instagram.com/katkas.cakes/"><img class="recipe-icon-right" src="/img/Icons/instagram.png" /></a>    
                </div>
            </div>
        </div>

    </div>



@endsection
