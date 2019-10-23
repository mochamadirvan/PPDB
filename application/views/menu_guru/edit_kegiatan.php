        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-laptop"></i>
                  <h3 class="box-title">EDIT DATA KEGIATAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                <!-- form start -->
                <?php echo form_open_multipart('menu_guru/edit_kegiatan');?>
                  <input type="hidden" name="id" value="<?php echo $record['id_kegiatan']?>">
                    
                    <div class="form-group">
                      <label for="">Penulis</label>
                        <select name="id_guru" class="form-control" required>
                          <?php  
                              foreach ($guru as $d) {
                                  echo "<option value='$d->id_guru'>$d->nama</option>";
                              }
                              ?>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label for="">Kegiatan</label>
                        <input type="text" value="<?php echo $record['kegiatan']?>" class="form-control"  name="kegiatan" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Mulai</label>
                        <input type="date" value="<?php echo $record['tgl_mulai']?>" class="form-control"  name="tanggal_mulai" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Selesai</label>
                        <input type="date" value="<?php echo $record['tgl_selesai']?>" class="form-control"  name="tanggal_selesai" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tempat</label>
                        <input type="text" value="<?php echo $record['tempat']?>" class="form-control"  name="tempat" placeholder="Isikan Tempat" required>
                    </div>
                    <div>
                      <label for="">Keterangan</label>
                        <textarea style="height:100px"  class="ckeditor" name="keterangan" placeholder="Isikan kegiatan Prestasi"><?php echo $record['keterangan']?></textarea>                
                    </div>
                        <input type="hidden" name="gambar" value="<?php echo $record['gambar']?>">
                   
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="">
                                             
                    </div>
                        <div class="form-group">
                      <img src="<?php echo $record['gambar'];?>"  width="200" /><br />
                    </div>
                    
                  </div>
                  
                  
                </div><!-- /.item -->
                <div class="form-group">
                    <button type="submit" value="upload" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-floppy-o"></i> Simpan</button>
                  <a href="<?php echo base_url(); ?>menu_guru/kegiatan" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-out"></i> Kembali</a>
                </div><!-- /.col -->
               </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->





