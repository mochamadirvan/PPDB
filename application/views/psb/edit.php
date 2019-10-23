        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA PSB</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open_multipart('psb/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $record['id_psb']?>">
                      
                      <label for="">Keterangan</label>
                        <textarea style="height:100px"  class="ckeditor" name="keterangan" placeholder="Isikan Informasi Berita"><?php echo $record['keterangan']?></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="">Persyaratan</label>
                        <textarea style="height:100px"  class="ckeditor" name="persyaratan" placeholder="Isikan Informasi Berita"><?php echo $record['persyaratan']?></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="">Tanggal</label>
                        <textarea style="height:100px"  class="ckeditor" name="tanggal" placeholder="Isikan Informasi Berita"><?php echo $record['tanggal']?></textarea>                
                    </div>
                      <input type="hidden" name="gambar" value="<?php echo $record['gambar']?>">
                      
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="foto" placeholder="">
                                             
                    </div>
                        <div class="form-group">
                      <img src="<?php echo $record['gambar'];?>"  width="200" /><br />
                    </div>

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('psb','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->