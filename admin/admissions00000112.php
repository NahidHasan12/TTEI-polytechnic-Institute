
<?php
  include"inc/header.php";
?>



<div id="main">

<?php
  include"inc/menu.php";
?>

 <div id="main2"> 

   <h1> Admission Page </h1>

   <div id="adm"> 
        <table id="table">
        <tr id="tr">
          <th id="th">Name</th>
          <th id="th">SSC Roll</th>
          <th id="th">Email</th>
          <th id="th">Phone Number</th>
          <th id="th">Date Of Birth</th>
          <th id="th">Gender</th>
          <th id="th">Choise</th>
        </tr>

<?php 

$data = "select * from admission";

$x = $db->read($data);
  if ($x) {

    $i=0;
    while($a = $x->fetch_assoc()){
        $i++;

    ?>


        <tr>
          <td id="td"> <?php echo $a['name']; ?> </td>
          <td id="td"> <?php echo $a['ssc_roll']; ?> </td>
          <td id="td"> <?php echo $a['gmail']; ?> </td>
          <td id="td"> <?php echo $a['phn_number']; ?> </td>
          <td id="td"> <?php echo $a['dob']; ?> </td>
          <td id="td"> <?php echo $a['gender']; ?> </td>
          <td id="td"> <?php echo $a['subject'];?> </td>
       </tr>

       <?php
         }
      }
 ?>


      </table>
   </div>

 </div>
 </div>




<?php
  include"inc/footer.php";
?>