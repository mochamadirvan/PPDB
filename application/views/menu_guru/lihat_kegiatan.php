        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">Menu Data Kegiatan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <?php echo anchor('menu_guru/tambah_kegiatan','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="80">NO</th>
                        <th>kegiatan</th>
                        <th>upload</th>
                        <th>mulai</th>
                        <th>selesai</th>
                        <th>tempat</th>
                        <th>keterangan</th>
                        <th>gambar</th>
                        <th  width="120">AKSI</th>
                      </tr>
                    </thead>
                    
                    <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else 
                    {
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                            echo "<tr>
                                <td>".$no++."</td>
                                <td>$r->kegiatan</td>
                                <td>$r->tgl_upload</td>
                                <td>$r->tgl_mulai</td>
                                <td>$r->tgl_selesai</td>
                                <td>$r->tempat</td>
                                <td>".substr($r->keterangan,0,200)."</td>
                                <td><img src='$r->gambar' width='50'></td>
                                <td>
                                ".anchor('menu_guru/edit_kegiatan/'.$r->id_kegiatan,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm'))."
                                ".anchor('menu_guru/hapus_kegiatan/'.$r->id_kegiatan,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm'))."
                                </td>
                            </tr>";
                        }
                    }
                    
                    ?>
                    
                    <tbody>
                     
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->