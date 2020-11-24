<?php 
include ('includes/_config.php');
$page_title = "Services";
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
        
          <h1>Our Services</h1>
               
          <h6>Birthdays to weddings, we can help make all of your events memorable</h6>
        
      </section>
      
      <section class="card-container">
        
          <div class="card">
            <!-- background and profile images -->
            <div>
              <img src="./assets/images/birthday.jpg" alt="" class="image-profile">
              <!-- Name and info -->
              <h2>Birthdays</h2>
            </div>
          </div>
         
          <div class="card">
            <!-- background and profile images -->
            <div>
              <img src="./assets/images/wedding.jpg" alt="" class="image-profile">
              <!-- Name and info -->
              <h2>Weddings</h2>
            </div>
          </div>
        
         
          <div class="card">
            <!-- background and profile images -->
            <div>
              <img src="./assets/images/corporateevent.jpg" alt="" class="image-profile">
              <!-- Name and info -->
              <h2>Corporate events</h2>
            </div>
          </div>
        
      </section>
     
      
      
      <!-- Footer -->
    <?php include("./includes/footer.php"); ?>
    </main>
    
 



</body>
</html>