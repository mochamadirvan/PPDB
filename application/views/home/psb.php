    <!--=========== BEGIN COURSE BANNER SECTION ================-->
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
                   <?php foreach ($psb->result() as $p): ?>
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" style="width:750px;height:400px" src="<?php echo $p->gambar;?>">
                      </a>
                    </div>
                    <h2 class="titile">Cara Daftar</h2>
                    <span align="justify" ><p><?php echo $p->keterangan; ?></p></span>
                    <h2 class="titile">Persyaratan</h2>
                    <span align="justify" ><p><?php echo $p->persyaratan; ?></p></span>
                    <h2 class="titile">Tanggal Daftar</h2>
                    <span align="justify" ><p><?php echo $p->tanggal; ?></p></span>
                    <?php endforeach; ?>
                    
                                      
                  </div>                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->
