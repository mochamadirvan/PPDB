        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA KURIKULUM</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kurikulum/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Kurikulum</label>
                      <textarea type="text" name="kurikulum" required="" class="form-control" placeholder="Masukan kurikulum"></textarea>
                     </div>
                      
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('kurikulum','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->