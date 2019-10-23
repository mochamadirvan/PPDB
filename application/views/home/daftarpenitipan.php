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
              <h2 class="title_two">Pendaftaran Penitipan Anak</h2>
              <span></span>
               <p>Assalamu’alaikum</p>
               <p>Ayah Bunda Selamat Datang di Halaman Pendaftaran Penitipan Anak Tumus Asih</p>
              <p>Syarat Pendaftaran Anak Usia Minimal 3 Bulan</p>
              <p>Fasilitas : Perawatan, Mandi, Makan, Snack, Pendidikan</p>
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <?php echo form_open('home/penitipan_daftar');?>
                  <p>&nbsp;Nama Anak :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Nama Anak" name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>
                  <p>&nbsp;Tempat Lahir Anak :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Tempat Lahir Anak" name="tempat_lahir" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>
                  <p>&nbsp;Tanggal Lahir Anak :</p>
                  <input type="date" class="wp-form-control wpcf7-text" placeholder="Ketikan Tanggal Lahir" name="tgl_lahir" required>
                  <p>&nbsp;Jenis Kelamin Anak :</p>
                  <select class="wp-form-control wpcf7-text"  name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                  <p>&nbsp;Agama :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Agama Anak" name="agama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>
                  <p>&nbsp;Nama Wali Anak :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan Nama Wali" name="wali" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" required>
                  <p>&nbsp;Telp Wali :</p>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Ketikan No Telpon" name="no_telp" pattern="[0-9]+" title="Tuliskan Angka 0-9"  required>
                  <p>&nbsp;Alamat Anak :</p>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Ketikan Alamat Anak" name="alamat" pattern="[A-Za-z0-9 ]+" required></textarea>
                  <button type="submit"  class="wpcf7-submit" name="submit"> Submit</button>
              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Alamat</h3>
             <div class="address_group">
               <p>JlRajawali No.05 Pringwulung</p>
               <p>55281 Condong Catur</p>
               <p>Yogyakarta</p>
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
