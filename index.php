<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slider-pro.min.css" media="screen"/>
<style>
.left{float:left;padding-left: 20px;}
.content-tab{display: nonez;}
.content-tab.first{display: blockz;}
.sp-thumbnails-container{position: absolute;
    top: 18px;}
.sp-slides-container{margin-top: 40px;} 
</style>
<?php
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "multi_form";

    
   
   //$servername = "localhost";
//   $username = "d01c8fdb";
//   $password = "xhTgWp3yVFFwTuzU";
//   $dbname = "d01c8fdb";
      
   $countPage = 5;
 
            
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>
<div id="example1" class="slider-pro">
    <div class="sp-thumbnails">
        <?php for($i=1;$i<=$countPage;$i++){ ?>
          <div class="left tab-header sp-thumbnail" tab="<?php echo $i ?>">page<?php echo $i ?></div>
        <?php }?>
    </div>
    <!--<div class="left tab-header" tab="1">page1</div>
    <div class="left tab-header" tab="2">page2</div>
    <div class="left tab-header" tab="3">page3</div>
    <div class="left tab-header" tab="4">page4</div>
    <div class="left tab-header" tab="5">page5</div> !-->
    <div style="clear: left;"></div>
    <br /><br />
    <div class="sp-slides">
        <?php for($i=1;$i<=$countPage;$i++){ ?>
          <div class="sp-slide content-tab <?php if($i == 1) echo 'first'?>" parent-tab="<?php echo $i ?>">
          <?php 
            $row_question = 1;
            $sql = "SELECT * FROM question where page=".$i."";
            $result = $conn->query($sql);
            // output data of each row
            while($row = $result->fetch_assoc()) {
              ?>
                <div data-show-transition="left" data-hide-transition="up" data-show-delay="<?php echo 200*$row_question ?>" data-hide-delay="<?php echo 200*$row_question ?>" style="margin-bottom: 20px;padding-bottom: 20px" row="<?php echo $row_question ?>">
                     <div class="conten-tab-text col-md-6"><?php echo $row['description'] ?></div>
                     <div class="col-md-6">
                          <input type="checkbox" value="1" />
                          <input type="checkbox" value="2" />
                          <input type="checkbox" value="3" />
                          <input type="checkbox" value="4" />
                          <input type="checkbox" value="5" />
                          <input type="checkbox" value="6" />
                     </div>
                </div>
                <div style="clear: left;"></div>
              <?php  
              $row_question++;          
            }
          ?>
          </div>
        <?php }?>
    </div>
</div>

<input type="button" class="send" value="send" />


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Slider Pro -->
<script src="js/jquery.sliderPro.min.js"></script>

<script src="js/init.js"></script>

