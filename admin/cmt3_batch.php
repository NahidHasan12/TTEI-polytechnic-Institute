
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
   	   <h1> Computer Department</h1>

 <div id="batch"> 

         <a href="Students.php"> 1st Batch </a>
         <a href="cmt2_batch.php"> 2nd Batch </a>
         <a href="cmt3_batch.php"> 3rd Batch </a>
         <a href="cmt4_batch.php"> 4th Batch </a>

       </div>


 

       <div id="main221"> 
          <h2> Insert Third Batch Student </h2>



 <?php 

  $a="";
  if ($_SERVER['REQUEST_METHOD']=='POST') {

    $name3 = $db->validate($_POST['name']) ;
    $roll3 = $db->validate($_POST['roll']) ;
    $reg3 = $db->validate($_POST['reg']) ;
    $gender3 = $db->validate($_POST['gender']) ;
    $contact3 =$db->validate($_POST['contact']);
    $address3 = $db->validate($_POST['address']);

     if (empty($name3) || empty($roll3) || empty($reg3) || empty($gender3) || empty($contact3) || empty($address3)){

          
     }
     else{

         $x="INSERT INTO cmt_3rd_batch_student(name,roll,reg,gender,contact,address) values ('$name3','$roll3','$reg3','$gender3','$contact3','$address3')";

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