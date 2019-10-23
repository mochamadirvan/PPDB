        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA KELAS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kelas/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                         <input type="hidden" name="id" value="<?php echo $record['id_kelas']?>">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Kelas</label>
                      <input type="text" name="kelas" required="" class="form-control" placeholder="Masukan Kelas" value="<?php echo $record['kelas']?>">
                    </div>
                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('kelas','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->