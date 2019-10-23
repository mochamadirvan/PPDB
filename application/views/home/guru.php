    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
                 <!-- start blog archive  -->
              <div class="row">
                <?php foreach ($record->result() as $r): ?>
                <!-- start single course -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                        <img style="width:375px;height:250px" src="<?php echo $r->foto;?>" />
                      <div class="mask">                         
                        <a href="detail_guru/<?php echo $r->id_guru; ?>" class="course_more">Lihat Detail</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="detail_guru/<?php echo $r->id_guru; ?>"></a></h3>
                    <p><?php echo $r->alamat;?></p>
                    </div>
                    <div class="singCourse_author">
                      <img src="<?php echo $r->foto;?>" alt="img">
                      <p><?php echo $r->nama;?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                
                <!-- End single course -->
              </div>
                
                
              <!-- start previous & next button -->
              <div class="single_blog_prevnext">
                <a href="#" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a>
                <a href="#" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End course content -->

    <!--=========== END GALLERY SECTION ================-->