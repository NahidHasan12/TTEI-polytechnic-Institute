



<?php include 'inc/header.php';?>

<body>
 <?php include 'inc/menu.php';?>  



        <section class="main_service animated slideInUp">
            <div class="sec">
              




</script>


<?php 




if ($_SERVER['REQUEST_METHOD']=='POST') {

    $name = $db->validate($_POST['name']) ;
    $sscr = $db->validate($_POST['sscr']) ;
    $email = $db->validate($_POST['email']) ;
    $phn = $db->validate($_POST['phn']) ;
    $dob =$db->validate($_POST['dob']);
    $gender ="";
    if (isset($_POST['gender'])) {

        $gender =$db->validate($_POST['gender']) ;

    }
    $sub = $db->validate($_POST['sub']) ;
    
    $comment =$db->validate($_POST['comment']);

    
    

  


if (empty($name) || empty($sscr) || empty($email) || empty($phn) || empty($dob) || empty($gender) || empty($sub)  || empty($comment)){


echo "<script> alert('empty not allowed') </script>";

}
else{

    $x="INSERT INTO admission(name,ssc_roll,gmail,phn_number,dob,gender,subject,comment) values ('$name','$sscr','$email','$phn','$dob','$gender','$sub','$comment')";

$x = $db->insert($x);

if ($x) {
    
    echo "<script> alert('Submit Succesfully') </script>";
}else{
    echo "<script> alert('Insert failed') </script>";
}

}

}


 ?>




<div id="ragistration"> 

   <h2> Ragistrations </h2>

 <div id="ragistration2"> 
  
  <table>
  <form action="" method="post">
     <tr> 
        <td> Name :</td>
      </tr>
    <tr> 
        <td> <input class="frm" type="text" name="name" placeholder="Input Your Full Name"> </td>
     </tr>
     <tr> 
        <td> SSC Roll : </td>
     </tr>
    <tr> 
        <td> <input class="frm" type="text" name="sscr" placeholder="Input Your ssc roll"> </td>
     </tr>
     <tr> 
        <td> Email : </td>
      </tr>
    <tr> 
        <td> <input class="frm" type="text" name="email" placeholder="Input Your Full Email address"> </td>
     </tr>
     <tr> 
        <td> Phone NUmber : </td>
      </tr>
    <tr> 
        <td> <input class="frm" type="text" name="phn" placeholder="Input Your Phone Number"> </td>
     </tr>
     <tr> 
        <td> Dath Of Birth :</td>
      </tr>
    <tr> 
        <td> <input class="frm" type="date" name="dob" > </td>
     </tr>
     <tr> 
        <td> Gender : </td>
      </tr>
    <tr> 
        <td> <input type="radio" id="male" name="gender" value="male">
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender" value="female">
             <label for="female">Female</label><br>
             <input type="radio" id="other" name="gender" value="other">
             <label for="other">Other</label> </td>
     </tr>
     <tr> 
        <td> Select Your Subject Choise : </td>
      </tr>
    <tr> 
        <td>
         <select class="frm" name="sub">
            <option value="Select Your Subject">Select Your Subject</option>
            <option value="Computer Technology">Computer Technology</option>
            <option value="Civil Technology">Civil Technology</option>
            <option value="Textile Technology">Textile Technology</option>
            <option value="Electrical Technology">Electrical Technology</option>
            <option value="GDPM Technology">GDPM Technology</option>
      </select> 
</td>
     </tr>
     <tr> 
        <td> Comment :</td>
      </tr>
    <tr> 
        <td> <textarea class="frm" name="comment"></textarea> </td>
     </tr>
    <tr> 
        <td> <input class="btn" type="submit" name="submit" value="Submit"> </td>
     </tr>
    </form>
   </table>
  </div>
</div>


</div>


                                
     </div>
 </section>




<?php include 'inc/footer.php';?>

</body>