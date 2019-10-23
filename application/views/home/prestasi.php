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
                  <?php foreach ($record->result() as $r): ?>
                <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp">
                    <div class="blogimg_container"><?php $db = $r->id_prestasi ?>
                      <a href="detail_prestasi/<?php echo $db; ?>" class="blog_img">
                        <img alt="img" style="width:750px;height:400px" src="<?php echo $r->gambar;?>">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="detail_prestasi/<?php echo $db; ?>"> <?php echo $r->prestasi;?></a></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-clock-o"></i><?php echo $r->tgl_upload;?></p>
                      <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
                    </div>
                    <p class="blog_summary"><?php echo substr($r->keterangan,0,200);?>...</p>
                    <a class="blog_readmore" href="detail_prestasi/<?php echo $db; ?>">Read More</a>
                  </div>
                </div>
                <?php endforeach; ?>
                
                <!-- start single blog archive -->
              </div>
              <div class="col-md-12 text-right">
                  <?php echo $pagination; ?>
             </div>
              <!-- end blog archive  -->
              <!-- start previous & next button -->
              
            </div>
          </div>
          <!-- End course content -->
