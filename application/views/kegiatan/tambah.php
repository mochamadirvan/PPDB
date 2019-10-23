        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-laptop"></i>
                  <h3 class="box-title">TAMBAH DATA KEGIATAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                <!-- form start -->
                <?php echo form_open_multipart('kegiatan/tambah');?>
                  
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
                        <input type="text" class="form-control"  name="kegiatan" placeholder="Isikan kegiatan" required>
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control"  name="tgl_mulai" placeholder="Isikan kegiatan" required>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control"  name="tgl_selesai" placeholder="Isikan kegiatan" required>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat</label>
                        <input type="text" class="form-control"  name="tempat" placeholder="Isikan tempat" required>
                    </div>
                    <div class="form-group">
                      <label for="">Keterangan</label>
                        <textarea style="height:100px"  class="ckeditor" name="keterangan" placeholder="Isikan Keterangan kegiatan"></textarea>                
                    </div>
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="">
                    </div>
                    <div class="form-group">
                    <button type="submit" value="upload" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-floppy-o"></i> Simpan</button>
                  <a href="<?php echo base_url(); ?>kegiatan" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-out"></i> Kembali</a>
                </div><!-- /.col -->
                  </div>
                  
                  
                </div><!-- /.item -->
                
               </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->





