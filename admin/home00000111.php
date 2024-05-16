
<?php
  include"inc/header.php";
?>



<div id="main">

<?php
  include"inc/menu.php";
?>

 <div id="main2"> <h1> Dashbord Page </h1>

   <div id="view"> 
          <?php
  
            $a = "SELECT * FROM page_view WHERE id='1'";
            $b = $db->read($a);
              if ($b) {
                $c = $b->fetch_assoc();
                echo "<h2>  Total Page View ".$c['view']."</h2>";
              }
 
         ?>

   </div>
 </div>

 </div>




<?php
  include"inc/footer.php";
?>