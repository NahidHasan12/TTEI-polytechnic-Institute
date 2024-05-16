
<?php
  include"inc/header.php";
?>



<div id="main">

<?php
  include"inc/menu.php";
?>

 <div id="main2"> 


<?php
  include"inc/menu2.php";
?>


   <div id="main22">
       <h1> Electrical Department </h1>

 <div id="batch"> 

         <a href="electrical.php"> 1st Batch </a>
         <a href="elec2_batch.php"> 2nd Batch </a>
         <a href="elec3_batch.php"> 3rd Batch </a>
         <a href="elec4_batch.php"> 4th Batch </a>

       </div>


       <div id="main221"> 
          <h2> Insert Second Batch Student </h2>



 <?php 

  $a="";
  if ($_SERVER['REQUEST_METHOD']=='POST') {

    $name = $db->validate($_POST['name']) ;
    $roll = $db->validate($_POST['roll']) ;
    $reg = $db->validate($_POST['reg']) ;
    $gender = $db->validate($_POST['gender']) ;
    $contact =$db->validate($_POST['contact']);
    $address = $db->validate($_POST['address']);

if (empty($name) || empty($roll) || empty($reg) || empty($gender) || empty($contact) || empty($address)){


echo "<script> alert('empty not allowed') </script>";

}
else{

    $x="INSERT INTO electrical_2nd_batch_student(name,roll,reg,gender,contact,address) values ('$name','$roll','$reg','$gender','$contact','$address')";

$x = $db->insert($x);

if ($x) {
    
    echo "<script> alert('Submit Succesfully') </script>";
}else{
    echo "<script> alert('Insert failed') </script>";
}

}

}
 ?>

             
             <table> 

                <form action="" method="post"> 
                   <tr> 
                     <td> Name </td>
                     <td> : </td>
                     <td> <input type="text" name="name" placeholder="Input That Name"></td>
                   </tr>
                   <tr> 
                     <td> Roll </td>
                     <td> : </td>
                     <td> <input type="text" name="roll" placeholder="Input That roll"></td>
                   </tr>
                   <tr> 
                     <td> Ragistration </td>
                     <td> : </td>
                     <td> <input type="text" name="reg" placeholder="Input That registration"></td>
                   </tr>
                   <tr> 
                     <td> Gender </td>
                     <td> : </td>
                     <td> <input type="text" name="gender" placeholder="Input That gender"></td>
                   </tr>
                   <tr> 
                     <td> Contact </td>
                     <td> : </td>
                     <td> <input type="text" name="contact" placeholder="Input That contact"></td>
                   </tr>
                   <tr> 
                     <td> Address </td>
                     <td> : </td>
                     <td> <input type="text" name="address" placeholder="Input That address"></td>
                   </tr>
                   <tr> 
                     <td> </td>
                     <td>  </td>
                     <td> <input class="btns" type="submit" name="submit" value="Insert"></td>
                   </tr>
                </form>
             </table>

       </div>
   </div>

 </div>
 </div>




<?php
  include"inc/footer.php";
?>