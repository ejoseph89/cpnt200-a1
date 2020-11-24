<?php 
include ('includes/_config.php');
$page_title = "About us";
?>




<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include("./includes/head.php"); ?>

<body>
  
  <main>
    
      <!-- Navigation -->
    <?php include("./includes/nav.php"); ?>

      <section class="container ">
        
          <h1>We are Immaculate Events</h1>
               
          <h6>We have been helping our community members plan their special for over a decade</h6>
        
      </section>
      
      <section class="card-container">
        
          <div class="card">
            <!-- background and profile images -->
            <div>
              <img src="./assets/images/Jamie-2.jpg" alt="" class="image-profile">
              <!-- Name and info -->
              <h2>Jamie</h2>
              <h2>Team <span class="text-colored" >lead</span></h2>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto repudiandae temporibus odio cupiditate corporis a dolores eveniet ipsa iure recusandae.</p>
            <!-- social media icons -->
            <article class="socials">
              <i class="fab fa-twitter fa-3x"></i>
              <i class="fab fa-facebook fa-3x"></i>
              <i class="fab fa-instagram fa-3x"></i>
            </article>
          </div>
         
          <div class="card">
            <!-- background and profile images -->
            <div>
              <img src="./assets/images/christian-2.jpg" alt="" class="image-profile">
              <!-- Name and info -->
              <h2>Christian</h2>
              <h2>Team <span class="text-colored" >lead</span></h2>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto repudiandae temporibus odio cupiditate corporis a dolores eveniet ipsa iure recusandae.</p>
            <!-- social media icons -->
            <article class="socials">
              <i class="fab fa-twitter fa-3x"></i>
              <i class="fab fa-facebook fa-3x"></i>
              <i class="fab fa-instagram fa-3x"></i>
            </article>
          </div>
        
      </section>
     
      
      
      <!-- Footer -->
  <?php include("./includes/footer.php"); ?>
    </main>
    
 



</body>
</html>