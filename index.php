    <?php include('partials-front/menu.php'); ?>

  
    <section class="food-search text-center">
        <div class="container">
            
          
        </div>
    </section>
  

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>


    <section>
        <div class="container">
          

            <h2 style="text-align:center ">Best Recipes</h2>

<div class="row">
      <div class="column">
    <img src="images\BISTEK-TAGALOG.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images\Beef-Caldereta-Recipe.jpg" style="width:100%" >
  </div>

  <div class="column">
    <img src="images\Dinuguan1.jpg" style="width:100%">
  </div>
 
</div>

<div>

</div>
            

<div class="row">
  <div class="column">
    <img src="images\Lechong-Paksiw.jpg" style="width:100%" >
  </div>
  <div class="column">
    <img src="images\menudo.webp" style="width:100%">
  </div>
  <div class="column">
    <img src="images\Tinolang-Manok-Recipe.jpg" style="width:100%">
  </div>
 
</div>
  

    </section>
  
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Our Food Menu</h2>

            <?php 
            
          
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' LIMIT 20";

          
            $res2 = mysqli_query($conn, $sql2);

            $count2 = mysqli_num_rows($res2);

            if($count2>0)
            {
            
                while($row=mysqli_fetch_assoc($res2))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                             
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                   
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">&#8369;<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
               
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            

        </div>

        
    </section>
 
    <section class="footer">
        <div class="container text-center">
            <p>@All rights reserved. |Sofie's Best Eatery.</p>
        </div>
    </section>
 

</body>
    
    <?php?>