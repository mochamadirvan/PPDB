    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      
    </section>
   
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Pendaftaran Siswa Baru SMK GAMA TANGERANG</h2>
              <span></span> 
              <p>Assalamu’alaikum</p>
              <p>Selamat Datang di Halaman Pendaftaran Peserta Didik Baru</p>
              <p>SMK GAMA TANGERANG</p>
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <?php echo form_open('home/tk_daftar');?>
              
               <p>&nbsp;NISN :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan NISN" name="nisn"  title="Tuliskan NISN" required>

                  <p>&nbsp;Nama Siswa :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Nama" name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>

                  <p>&nbsp;Tempat Lahir Siswa :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Tempat Lahir" name="tempat_lahir" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>

                  <p>&nbsp;Tanggal Lahir Siswa :</p>
                  <input type="date" min="<?php echo date('Y')-6; ?>-01-01" max="<?php echo date('Y')-4; ?>-12-31" class="wp-form-control wpcf7-text" placeholder="Ketikan Tanggal Lahir" name="tgl_lahir" required>

                  <p>&nbsp;Jenis Kelamin Siswa :</p>
                  <select class="wp-form-control wpcf7-text"  name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                  </select>

                   <p>&nbsp;Asal Sekolah :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Asal Sekolah" name="asal_sekolah" required>

                  <p>&nbsp;Jurusan :</p>
                  <select class="wp-form-control wpcf7-text"  name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="tkj">TKJ</option>
                    <option value="multimedia">Multimedia</option>
                    <option value="akutansi">Akutansi</option>
                  </select>

                  <p>&nbsp;Agama :</p>
                  <select class="wp-form-control wpcf7-text"  name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option value="tkj">Islam</option>
                    <option value="multimedia">Kristen</option>
                    <option value="akutansi">Buddha</option>
                    <option value="akutansi">Hindu</option>
                  </select>

                  <p>&nbsp;Nama Wali Siswa :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Nama Wali" name="wali" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>

                  <p>&nbsp;No Telp :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan No Telepon" name="no_telp" pattern="[0-9]+" title="Tuliskan Angka 0-9"  required>

                  <p>&nbsp;Alamat Siswa :</p>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Ketikan Alamat" name="alamat" pattern="[A-Za-z0-9 ]+" required></textarea>

                   <p>&nbsp;Alamat Wali :</p>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Ketikan Alamat" name="alamat_wali" pattern="[A-Za-z0-9 ]+" required></textarea>

                  <div class="form-group">
                      <p>&nbsp;Upload Dokumen :</p>
                        <input type="file" class="form-control"  name="dokumen">
                                             
                    </div>
                  <button type="submit"  class="wpcf7-submit" name="submit"> Submit</button>

              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Alamat</h3>
             <div class="address_group">
               <p>Jl. H.R. Rasuna Said</p>
               <p>Kel. Pakojan Kec. Pinang</p>
               <p>Kota Tangerang</p>
             </div>
             <div class="address_group">
              <ul class="footer_social">
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
             </div>
           </div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->
