        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">TAMBAH DATA ANAK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('anak/proses');?>
                  <div class="box-body">
                      <input type="hidden" class="form-control"  name="id" value="<?php echo $record['id_penitipan']?>"  placeholder="Isikan kegiatan" required>
                    
                    <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $record['nama']?>"  name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan nama anak" required>
                    </div>
                      <div class="form-group">
                          <label for="">Jenis Kelamin</label>
                      <select name="jk" value="<?php echo $record['jk']?>" class="form-control" required>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select> 
                          </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" value="<?php echo $record['tgl_lahir']?>" placeholder="Isikan tgl lahir" required>
                    </div>
                       <div class="form-group">
                      <label for="">Wali</label>
                        <input type="text" class="form-control"  name="wali" value="<?php echo $record['wali']?>" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan wali" required>
                    </div>
                      <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control"  name="no_telp" value="<?php echo $record['no_telp']?>" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nomor telp" required>
                    <div class="form-group">
                      <label for="">Agama</label>
                        <input type="text" class="form-control"  name="agama" value="<?php echo $record['agama']?>" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan agama" required>
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control" name="alamat" placeholder="Masukan Saran"><?php echo $record['alamat']?></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control"  name="tgl_masuk" value="<?php echo $record['tgl_mulai']?>" placeholder="Isikan tgl mulai" required>
                    </div>
                        <div class="form-group">
                      <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control"  name="tgl_keluar" value="<?php echo $record['tgl_selesai']?>" placeholder="Isikan tgl selesai" required>
                    </div>
                      
                       <div class="form-group">
                          <label for="">Status</label>
                        <select name="status" value="<?php echo $record['status']?>" class="form-control" required>
                          <option value="pendaftar">Pendaftar</option>
                          <option value="terdaftar">Terdaftar</option>
                        </select> 
                          </div>
                      
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('anak/daftar','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->