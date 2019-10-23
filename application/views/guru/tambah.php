        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">TAMBAH DATA GURU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('guru/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control"  name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z"placeholder="Isikan Nama" required>
                    </div>
                      <div class="form-group">
                      <label for="">NIP</label>
                        <input type="text" class="form-control"  name="nip" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan NIP" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control"  name="no_telp" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan No_Telp" required>
                    </div>
                      <div class="form-group">
                      <label for="">Agama</label>
                        <input type="text" class="form-control"  name="agama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z"placeholder="Isikan Agama" required>
                    </div>
                      <div class="form-group">
                      <label for="">Email</label>
                        <input type="text" class="form-control"  name="email" placeholder="Isikan Email" required>
                    </div>
                      
                      <div class="form-group">
                          <label for="">Jenis Kelamin</label>
                      <select name="jk" class="form-control" required>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select> 
                          </div>
                      <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control" name="alamat" placeholder="Masukan Saran"></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="">Password</label>
                        <input type="text" class="form-control"  name="password" placeholder="Isikan Passowrd" required>
                    </div>
                    <div class="form-group">
                          <label for="">Status</label>
                      <select name="status" class="form-control" required>
                          <option value="admin">Admin</option>
                          <option value="guru">Guru</option>
                        </select> 
                    </div>
                      
                    <div class="form-group">
                      <label for="">Kelas</label>
                        <select name="id_kelas" class="form-control" required>
                          <option>--Pilih Kelas--</option>
                            <?php  
                              foreach ($kelas as $d) {
                                  echo "<option value='$d->id_kelas'>$d->kelas</option>";
                              }
                              ?>
                        </select> 
                    </div>
                    
                      <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="">
                                             
                    </div>
                      
                  </div><!-- /.box-body -->

                <div class="form-group">
                    <button type="submit" value="upload" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-floppy-o"></i> Simpan</button>
                  <a href="<?php echo base_url(); ?>guru" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-out"></i> Kembali</a>
                </div><!-- /.col -->
               </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->