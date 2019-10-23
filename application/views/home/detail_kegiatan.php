   <section id="imgBanner">
      
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" style="width:750px;height:400px" src="<?php echo $record['gambar']; ?>">
                      </a>
                    </div>
                    <h2 class="blog_title"><?php echo $record['kegiatan']; ?></a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i><?php echo $record['nama']; ?></p>
                      <p><i class="fa fa-calendar"></i><?php echo $record['tgl_mulai']; ?></p>
                    </div>
                    <span align="justify" ><p><?php echo $record['keterangan']; ?></p></span>
                   
                    
                                       
                  </div>                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->

