        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">EDIT DATA GURU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('menu_guru/edit_guru');?>
                  <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $record['id_guru']?>">
                  <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $record['nama']?>"  name="nama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">NIP</label>
                        <input type="text" class="form-control" value="<?php echo $record['nip']?>"  name="nip" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan nip" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" value="<?php echo $record['tgl_lahir']?>"  name="tgl_lahir"  required>
                    </div>
                      <div class="form-group">
                      <label for="">HP</label>
                        <input type="text" class="form-control" value="<?php echo $record['no_telp']?>"  name="no_telp" pattern="[0-9]+" title="Tuliskan Angka 0-9 placeholder="Isikan no_telp" required>
                    </div>
                      <div class="form-group">
                      <label for="">Agama</label>
                        <input type="text" class="form-control" value="<?php echo $record['agama']?>"  name="agama" pattern="[A-Za-z ]+" title="Tuliskan Huruf A-Z / a-z" placeholder="Isikan agama" required>
                    </div>
                      <div class="form-group">
                      <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $record['email']?>"  name="email" placeholder="Isikan email" required>
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
                        <textarea style="height:100px"  class="form-control" name="alamat" placeholder="Masukan Saran"><?php echo $record['alamat']?></textarea>                
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                        <input type="text" class="form-control" value="<?php echo $record['password']?>"  name="password" placeholder="Isikan password" required>
                    </div>
                    <div class="form-group">
                     <label for="">Kelas</label>
                        <select name="kelas" class="form-control" required>
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
                        <input type="file" class="form-control"  name="foto" placeholder="">
                                            
                    </div>
                      <div class="form-group">
                      <img src="<?php echo $record['foto'];?>"  width="200" /><br />
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('guru','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->