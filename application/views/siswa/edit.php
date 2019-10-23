        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">EDIT DATA SISWA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('siswa/edit');?>
                  <div class="box-body">
                      <input type="hidden" class="form-control"  name="id_siswa" value="<?php echo $record['id_siswa']?>" placeholder="Isikan " required>
                    
                    <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control"  name="nama" value="<?php echo $record['nama']?>"  pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan nama siswa" required>
                    </div>
                      <div class="form-group">
                      <label for="">NISN</label>
                        <input type="text" class="form-control"  name="nisn" value="<?php echo $record['nisn']?>"  pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nisn" required>
                    </div>
                       <div class="form-group">
                      <label for="">Wali</label>
                        <input type="text" class="form-control"  name="wali" value="<?php echo $record['wali']?>"  pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan nama wali" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" value="<?php echo $record['tgl_lahir']?>" placeholder="Isikan tgl lahir" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir" value="<?php echo $record['tempat_lahir']?>" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan tempat lahir" required>
                    </div>
                      <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control"  name="no_telp" value="<?php echo $record['no_telp']?>"  pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nomor telp" required>
                    </div>
                      <div class="form-group">
                      <label for="">Agama</label>
                        <input type="text" class="form-control"  name="agama" value="<?php echo $record['agama']?>"  pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan agama" required>
                    </div>
                      <div class="form-group">
                          <label for="">Status</label>
                        <select name="status" value="<?php echo $record['status']?>" class="form-control" required>
                          <option value="aktif">Aktif</option>
                          <option value="keluar">Keluar</option>
                          <option value="alumni">Alumni</option>
                        </select> 
                          </div>
                      
                      <div class="form-group">
                          <label for="">Jenis Kelamin</label>
                      <select name="jk" value="<?php echo $record['jk']?>" class="form-control" required>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select> 
                          </div>
                      <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control" name="alamat" value="" placeholder="Masukan Saran"><?php echo $record['alamat']?></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="">Tahun Masuk</label>
                        <input type="text" class="form-control"  name="tahun_masuk" value="<?php echo $record['tahun_masuk']?>" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan tahun masuk" required>
                    </div>
                    <div class="form-group">
                     <label for="">Kelas</label>
                        <select name="id_kelas" class="form-control" required>
                            <?php
                            foreach ($kelas as $p)
                            {
                                echo "<option value='$p->id_kelas'";
                                echo $record['id_kelas']==$p->id_kelas?'selected':'';
                                echo">$p->kelas</option>";
                            }
                            ?>
                        </select> 
                    </div>
                    <input type="hidden" name="gambar" value="<?php echo $record['foto']?>">
                   
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="">
                                             
                    </div>
                      <div class="form-group">
                      <img src="<?php echo $record['foto'];?>"  width="200" /><br />
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