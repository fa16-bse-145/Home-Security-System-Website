<?php session_start(); ?> 


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


<h1 class="page-header">
    Welcome  
                   
    <small><?php echo $_SESSION['username'] ?></small>
 </h1>


 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Members -->
            
            <div class="col-md-8">
            
                

                <!--bxhbcbB-->

    <div class="container">
        
        <img src="images/door.png" alt="">
               
    </div>
    
   
    <div class = "camera">
         <img src="images/cam_bg.png" alt="" width="90px" height="90px" id="camera">
        <?php

        $query_camera = "SELECT * from camera";

        $result = mysqli_query($connection, $query_camera);

        while($row = mysqli_fetch_assoc($result)) {
                    
            $status   = $row['status'];
            $time     = $row['Time'];

?>
         <br>
          <p id="camera_p">Status:<?php echo $status ?>
          <br>
          Time:<?php echo $time ?>
          </p>  
    <?php } ?>
    </div> 
    
    
    <div class = "lock">
        
        <img src="images/door_lock.png" alt="" width="70px" height="70px" id="lock">
        
        <?php

        $query_lock = "SELECT * from DoorLock";

        $result = mysqli_query($connection, $query_lock);

        while($row = mysqli_fetch_assoc($result)) {
                    
            $status   = $row['status'];
            $time     = $row['Time'];

?>
       <br>
        <p id="lock_p">Status:<?php echo $status ?>
          <br>
          Time:<?php echo $time ?>
          </p>  
    <?php } ?>
    </div>        
    
       
    <div class = "motion">
         <img src="images/foot_bg.png" alt="" id="motion">   
         
         <?php

        $query_sensor = "SELECT * from PIRSensor";

        $result = mysqli_query($connection, $query_sensor);

        while($row = mysqli_fetch_assoc($result)) {
                    
            $status   = $row['status'];
            $time     = $row['Time'];

?>
       <br>
        <p id="motion_p">Status:<?php echo $status ?>
          <br>
          Time:<?php echo $time ?>
          </p>  
    <?php } ?> 
    </div> 
         
     
        

<!--bxhjbhsvh-->
   
              </div>
               
             

            </div>
<hr>

<?php
include "addons/footer.php";
?>