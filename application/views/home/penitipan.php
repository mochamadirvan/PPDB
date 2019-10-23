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
                    <h2 class="blog_title"><center>Informasi Penitipan Anak</center></h2>
                    <div class="blog_commentbox">
                      <table class="table table-striped course_table">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th >Nama</th>
                        <th >Lahir</th>
                        <th >Wali</th>
                        <th >Alamat</th>
                        <th >L/P</th>
                        <th >Masuk</th>
                        <th >Keluar</th> 
                        <th >AKSI</th>
                      </tr>
                    </thead>
                    <tbody><?php $no=1;?>
                              <?php foreach ($record->result() as $p): ?>

                                <tr>
                                <th scope="row"><?php echo $no++;?></th>
                                <td><?php echo $p->nama;?></td>
                                <td><?php echo $p->tgl_lahir;?></td>
                                <td><?php echo $p->wali;?></td>
                                <td><?php echo $p->alamat;?></td>
                                <td><?php echo $p->jk;?></td>
                                <td><?php echo $p->tgl_mulai;?></td>
                                <td><?php echo $p->tgl_selesai;?></td>
                                <td><a href="<?php echo base_url()?>home/detail_penitipan/<?php echo $p->id_penitipan; ?>">Detail</a></td>
                              </tr>
                              <?php endforeach; ?>
                    </tbody>
                  </table>
                    </div>
                  </div>
                </div>
                
                
                <!-- start single blog archive -->
              </div>
              
              <!-- end blog archive  -->
              <!-- start previous & next button -->
              
            </div>
          </div>
          <!-- End course content -->
