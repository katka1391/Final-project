@extends('layouts/main')
@section('content')

   <div class="container">
      <h1 class="title" style="font-size: 10rem">Sweet Cuisine</h1>  
   </div>

   <div class="addRecipe-main-container">
      <div class="addRecipe-icons-left-panel">
          <img class="addRecipe-icon" src="/img/Icons/fb.png" />
          <img class="addRecipe-icon" src="/img/Icons/twitter.png" />
          <img class="addRecipe-icon" src="/img/Icons/instagram.png" />
      </div>

      <div class="addRecipe-leftSite">
          <h2 class="addRecipe-leftSite-title">Contact</h2>
          

          <form class="contact-form" action="action_page.php">
      
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
         
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
         
            <label for="country">Country you comming from</label>
            <select id="country" name="country">
               <option value="australia">Australia</option>
               <option value="canada">Canada</option>
               <option value="usa">USA</option>
               <option value="italy">Italy</option>
               <option value="france">France</option>
               <option value="slovakia">Slovakia</option>
               <option value="poland">Poland</option>
               <option value="uk">UK</option>
               <option value="others">Others</option>
            </select>

            <label for="lsubject">Subject</label>
            <input type="text" id="lsubject" placeholder="Subject..">
         
            <label for="subject">Your Message</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
         
            <input class="contact-submit" type="submit" value="Submit">
      
      </form>
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
      
   






   
   
