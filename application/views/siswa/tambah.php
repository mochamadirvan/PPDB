        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">TAMBAH DATA SISWA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('siswa/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control"  name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan nama siplaceholderswa" required>
                    </div>
                      <div class="form-group">
                      <label for="">NISN</label>
                        <input type="text" class="form-control"  name="nisn" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nisn" required>
                    </div>
                       <div class="form-group">
                      <label for="">Wali</label>
                        <input type="text" class="form-control"  name="wali" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan wali" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" placeholder="Isikan tanggal lahir" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan tempat lahir" required>
                    </div>
                      <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control"  name="no_telp" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nomor telp" required>
                    </div>
                      <div class="form-group">
                      <label for="">Agama</label>
                        <input type="text" class="form-control"  name="agama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan agama" required>
                    </div>
                      <div class="form-group">
                          <label for="">Status</label>
                        <select name="status" class="form-control" required>
                          <option value="Aktif">Aktif</option>
                          <option value="Keluar">Keluar</option>
                          <option value="Alumni">Alumni</option>
                        </select> 
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
                      <label for="">Tahun Masuk</label>
                        <input type="text" class="form-control"  name="tahun_masuk" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan kegiatan" required>
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

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('siswa','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->