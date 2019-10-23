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
                    
                    <h2 class="blog_title">DETAIL PENITIPAN</h2>
                    <div class="form-group">
                      <table class="table table-condensed" border='0'>
                       
                        <tr>
                          <td width="50"></td>
                          <td width="150">NAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['nama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TEMPAT LAHIR</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['tempat_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TANGGAL LAHIR</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['tgl_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">JENIS KELAMIN</td>
                          <td width="50">:</td>
                          <td><?php if ($record['jk'] =='l') {
                                        echo 'Laki - Laki';
                                    } else 
                                    {
                                        echo 'Perempuan';
                                    } 
                          /*echo $record['jenis_kelamin'];*/?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">AGAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['agama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">WALI</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['wali'];?></td>
                      </tr>
                      
                      <tr>
                          <td width="50"></td>
                          <td width="150">ALAMAT</td>
                          <td width="50">:</td>
                          <td ><?php echo $record['alamat'];?></td>
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