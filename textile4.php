



<?php include 'inc/header.php';?>

<body>
 <?php include 'inc/menu.php';?>  



        <section class="main_service animated slideInUp">
            <div class="sec">
              





<div id="student"> 
    <h1> Students Information </h1>

     <div id="student1"> 

         <table>
                    <tr>
                      <th>Name</th>
                      <th>Roll</th>
                      <th>Registration</th>
                      <th>Gender</th>
                      <th>Contact</th>
                      <th>Address</th>
                    </tr>


<?php
$data = "select * from textile_4th_batch_student";

$x = $db->read($data);
  if ($x) {

    $i=0;
    while($a = $x->fetch_assoc()){
        $i++;

    ?>


                    <tr>
                      <td> <?php echo $a['name']; ?> </td>
                      <td> <?php echo $a['roll']; ?> </td>
                      <td> <?php echo $a['reg']; ?> </td>
                      <td> <?php echo $a['gender']; ?> </td>
                      <td> <?php echo $a['contact']; ?> </td>
                      <td> <?php echo $a['address']; ?> </td>
                    </tr>


       <?php
         }
      }
 ?>


                </table>

     </div>
 
</div>


                                
     </div>
 </section>




<?php include 'inc/footer.php';?>

</body>