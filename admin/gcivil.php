
<?php
  include"inc/header.php";
?>



<div id="main">

<?php
  include"inc/menu.php";
?>

 <div id="main2"> 



<?php

 $text = "";
if ($_SERVER['REQUEST_METHOD']=='POST') {

  $img_name = $_FILES['img']['name'];
  $img_tname = $_FILES['img']['tmp_name'];
  $img_size = $_FILES['img']['size'];



   if(empty($img_name)){
    $text = "<span style='color:red'>empty not allowed</span>";
   }
   else{
       $y = move_uploaded_file($img_tname, "../img/gellaryImg/$img_name");

         if ($y == true) {
           $x = "INSERT INTO gellary (civil) values ('$img_name')";

          $x = $db->insert($x);
            if ($x) {
              echo "";
            }else{
              echo "insert failed";
            }
         }
   }
}
?>

<div id="glry">

   <h1> Gallery Page </h1>
  
    <div id="main21"> 

         <a href="gallerys.php"> Computer </a>
         <a href="gcivil.php"> Civil </a>
         <a href="gtextile.php"> Textile & GDMP </a>
         <a href="gelectrical.php"> Electrical </a>
         <a href="gsports.php"> Sports </a>

    </div>

<table> 
<form action="" method="post" enctype="multipart/form-data"> 

  
  <tr> 
     <th> Civil </th>
     <th> : </th>
     <td> <input type="file" name="img"> </td>
  </tr>
 
  <tr> 
     <td>  </td>
     <td>  </td>
     <td> <input class="insert" type="submit" name="submit" value="insert"> </td>
  </tr>


</form>


</table>
</div>
 </div>
 </div>




<?php
  include"inc/footer.php";
?>