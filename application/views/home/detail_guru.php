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
                        <img alt="img" style="width:750px;height:400px" src="<?php echo $record['foto']; ?>">
                      </a>
                    </div>
                    <h2 class="blog_title">DETAIL GURU</h2>
                    <div class="form-group">
                      <table class="table table-striped " border='0'>
                        <tr>
                          <td width="50"></td>
                          <td width="150">NIP</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['nip'];?></td>
                      </tr>
                      <tr>
                          
                          <td width="1"></td>
                          <td>NAMA LENGKAP</td>
                          <td>:</td>
                          <td><?php echo $record['nama'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>JENIS KELAMIN</td>
                          <td>:</td>
                          <td><?php if ($record['jk'] =='l') {
                                        echo 'Laki - Laki';
                                    } else 
                                    {
                                        echo 'Perempuan';
                                    } 
                          /*echo $record['jenis_kelamin'];*/?></td>
                      </tr>
                    
                      <tr>
                          <td width="1"></td>
                          <td>KELAS</td>
                          <td>:</td>
                          <td><?php echo $record['kelas'];?></td>
                      </tr>
                      
                      <tr>
                          <td width="1"></td>
                          <td>Tanggal Lahir</td>
                          <td>:</td>
                          <td><?php echo $record['tgl_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>AGAMA</td>
                          <td>:</td>
                          <td><?php echo $record['agama'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>EMAIL</td>
                          <td>:</td>
                          <td><?php echo $record['email'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>ALAMAT</td>
                          <td>:</td>
                          <td><?php echo $record['alamat'];?></td>
                      </tr>
                      </table>
                    </div>                 
                  </div>                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->
