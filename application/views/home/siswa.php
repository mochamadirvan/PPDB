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
                <!-- start single blog archive -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive  fadeInUp">
                    <div class="form-group"></div>
                    <h2 class="blog_title"><center>Informasi Siswa</center></h2>
                    <div class="blog_commentbox">
                      <table class="table table-striped course_table">
                            <thead >
                              <tr>
                               <th >NISN</th>
                                <th >Nama</th>
                                <th >Kelas</th>
                                <th >AKSI</th>
                              </tr>
                            </thead>
                            <tbody><?php $no=1;?>
                              <?php foreach ($record->result() as $k): ?>

                                <tr>
                                <td><?php echo $k->nisn;?></td>
                                <td><?php echo $k->nama;?></td>
                                <td><?php echo $k->kelas;?></td>
                                <td><a href="<?php echo base_url()?>home/detail_siswa/<?php echo $k->id_siswa; ?>">Detail</a></td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                      </table></div>
                  </div>
                </div>
                
                <div class="col-md-12 text-right">
                  <?php echo $pagination; ?>
             </div>
                <!-- start single blog archive -->
              </div>
              
              <!-- end blog archive  -->
              <!-- start previous & next button -->
              
            </div>
          </div>
          <!-- End course content -->
