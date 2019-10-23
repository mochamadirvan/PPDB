        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-laptop"></i>
                  <h3 class="box-title">EDIT DATA USER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                <!-- form start -->
                <?php echo form_open_multipart('prestasi/edit');?>
                  <input type="hidden" name="id" value="<?php echo $record['id_prestasi']?>">
                    
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
                      <label for="">Prestasi</label>
                        <input type="text" class="form-control" id="" value="<?php echo $record['prestasi']?>" name="prestasi" placeholder="Isikan Prestasi" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal</label>
                        <input type="date" class="form-control"  name="tanggal" value="<?php echo $record['tanggal']?>" placeholder="Isikan Prestasi" required>
                    </div>
                    <div class="form-group">
                      <label for="">Keterangan</label>
                        <textarea style="height:100px"  class="ckeditor" name="keterangan" placeholder="Isikan Keterangan Prestasi"><?php echo $record['keterangan']?></textarea>                
                    </div>
                        <input type="hidden" name="gambar" value="<?php echo $record['gambar']?>">
                   
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control"  name="foto" placeholder="">
                                            
                    </div>
                      <div class="form-group">
                      <img src="<?php echo $record['gambar'];?>"  width="200" /><br />
                    </div>
                      
                  </div>
                  
                  
                </div><!-- /.item -->
                <div class="form-group">
                    <button type="submit" value="upload" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-floppy-o"></i> Simpan</button>
                  <a href="<?php echo base_url(); ?>prestasi" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-out"></i> Kembali</a>
                </div><!-- /.col -->
               </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->





