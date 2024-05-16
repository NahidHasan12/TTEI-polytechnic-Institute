



<?php include 'inc/header.php';?>

<body>
 <?php include 'inc/menu.php';?>  


<?php

 $l_query = "SELECT * FROM gellary ORDER BY id DESC";
      $l_ref = $db->read($l_query);

        if ($l_ref) {
          $l_data = $l_ref->fetch_assoc();
                            

      }

?>


   <section class="main_service animated slideInUp">
     <div class="sec">
              





<div id="gallery"> 
   <h1> Computer Department Gallery </h1>
   <div class="gallery2">
 
 <!--    
 <?php

                       $lp_query = "SELECT * FROM gellary ORDER BY id DESC";

                         $lp_ref = $db->read($lp_query);

                          if ($lp_ref) {
                              $i = 0;
                            while ($a = $lp_ref->fetch_assoc()) {

                             $i++;

                        ?>
                      -->

          <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
            
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/113.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/113.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/114.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/114.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/115.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/115.jpg"> </a>
        </div>
          <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
            
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/113.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/113.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/114.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/114.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/115.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/115.jpg"> </a>
        </div>

        <!--
          <?php

                    }
                }
            ?>

     -->
 
    </div>
  

   <h1> Civil Department Gallery </h1>
   <div class="gallery2">
     
        <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
            
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/113.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/113.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/114.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/114.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/115.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/115.jpg"> </a>
        </div>
 
    </div>
  

  <h1> Electrical Department Gallery </h1>
   <div class="gallery2">
      
        <div class="gallery21">
            <a href="img/gellaryImg/116.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/116.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/113.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/113.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/114.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/114.jpg"> </a>
        </div>
 
    </div>
  

  <h1> Textile And GDPM Department Gallery </h1>
   <div class="gallery2">
     
        <div class="gallery21">
            <a href="img/gellaryImg/115.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/115.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/116.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/116.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/113.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/113.jpg"> </a>
        </div>
 
    </div>
    <h1> Sports Gallery </h1>
   <div class="gallery2">
    
        <div class="gallery21">
            <a href="img/gellaryImg/114.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/114.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/115.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/115.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/116.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/116.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/111.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/111.jpg"> </a>
        </div>
        <div class="gallery21">
            <a href="img/gellaryImg/112.jpg" data-lightbox="mygallery"> <img src="img/gellaryImg/112.jpg"> </a>
        </div>
 
    </div>


</div>


                                
     </div>
 </section>




<?php include 'inc/footer.php';?>

</body>