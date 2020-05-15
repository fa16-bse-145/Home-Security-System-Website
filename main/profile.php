<?php
include "addons/db_conn.php";
?>

<!-- Header -->
<?php
include "addons/header.php";
?>
    
<!-- Navigation -->
<?php
include "addons/nav.php";
?>



 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Members -->
            
            <div class="col-md-8">
            
                <?php
                $query = "SELECT * from user";
                
                $user_profile_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($user_profile_query)) {
                    
                    $username   = $row['Username'];
                    $user_name       = $row['Name'];
                    $user_email   = $row['Email'];
                    $user_phone   = $row['Phone'];
                    $user_password   = $row['Password'];
                    
                    
                    
                ?>

                <!-- displaying the Members -->
                
                
                <div class="col-md-8" >
                
                <img class="img-responsive" src="images/prof_1.png"> 
                <hr>
                
                <h2 class="page-header">
                    User: 
                    <a href="#"><?php echo $user_name  ?></a>                                   <!--dynamically getting user name -->
                   <hr>
                
                    <small>    
                        <p class="lead">
                    Username: <a href="#"><?php echo  $username ?></a>                   <!--dynamically member username -->
                        </p>    
                    </small>
                    
                    <small>    
                        <p class="lead">
                    Email: <a href="#"><?php echo  $user_email ?></a>                   <!--dynamically member username -->
                        </p>    
                    </small>
                    
                    <small>    
                        <p class="lead">
                    Password: <a href="#"><?php echo  $user_password ?></a>                   <!--dynamically member username -->
                        </p>    
                    </small>
                    
                    <small>    
                        <p class="lead">
                    Phone: <a href="#"><?php echo  $user_phone ?></a>                   <!--dynamically member username -->
                        </p>    
                    </small>
                </h2>
                  
                 
                
                </div>
      
                <?php   }   ?>
   
              </div>
                

                <!-- Pager (addons) -->
            

            </div>
<hr>

<?php
include "addons/footer.php";
?>