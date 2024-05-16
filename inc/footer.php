        <div class="footer_area">
            <div class="sec">
                <div class="footer"> 

                    <section class="sec-3">
                        <div class="part-1">
                            <div class="child"></div>
                            <div class="contact" id="f_dtls">
                                <h1>Institute Address</h1>
                                <li>Tmss textile engineering Institute</li>
                                <li>Thengamara, Bogra</li>
                                <li>Bogura, Bangladesh – 5840</li>
                                <p>Cell: +8801730-041662</p>
                            </div>
                        </div>

                        <div class="part-2">
                            <h3>TMSS <span style="color: #ff0000">TTEI</span></h3>
                            <a href="https://www.facebook.com/tteiBogura"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <section class="sec-2"></section>   
                        </div>

                        <div class="part-3">
                            <div class="childs"></div>
                            <div class="contact">
                                <h1>Developer Address</h1>
                                <li>Village : Hazradighi</li>
                                <li>Post Office: Hazradighi</li>
                                <li>Nungola,Bogura</li>
                                <p>Cell: +8801305-193123</p>
                            </div>
                        </div>
                    </section>                      
                    <section class="watermark">
                        <div class="copy">
                            
Copyright &#169 <?php echo date('M-Y');?> <span style="color: #089CFF;">Tmss Textile Engineering Institute </span> -<span style="color: #ff0000"><TTEI></span> All Rights 
                        </div>
                        <div class="dev">
                            Developed by <a href="https://www.facebook.com/profile.php?id=100036523093263" target="_blank" title="DeveloperNahid">Nahid Hasan</a>
                        </div>
                    </section>       
               </div>
           </div>
        </div>
        <script type="text/javascript">

            var menuId = document.getElementById('navi');

            function showmenu(){

                if (menuId.style.display == 'none') {
                    menuId.style.display = 'block';
                }else{
                    menuId.style.display = 'none';
                }
                
            }
        </script>


         <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


    <?php


          $a = "SELECT * FROM page_view WHERE id='1'";
            $b = $db->read($a);
              if ($b) {
                $c = $b->fetch_assoc();
               // echo "<h2>  Total Page View ".$c['view']."</h2>";
                $old_v = $c['view'];
                $new_v = ($old_v+1);
                $u = "UPDATE page_view
                    SET 
                    view = '$new_v'
                    where id = '1'";
                $p = $db->edit($u); 
          }

        ?>
