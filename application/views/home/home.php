
    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">  
                  <?php foreach ($slide->result() as $s): ?>
                <li>
                   <img src="<?php echo $s->gambar;?>" alt="img">
                </li>
                  <?php endforeach; ?>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Tentang Kami</h2>
            <span align="justify" ><p><?php echo $p['profile']; ?></p></span>
          </div>
        </div>
       

          
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 



      </div>
    </section>

    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->    
