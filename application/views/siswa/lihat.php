        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">MENU DATA SISWA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                    <?php echo anchor('siswa/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                    <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th >Nama</th>
                        <th >NISN</th>
                        <th >Wali</th>
                        <th >HP</th>
                        <th >Tgl lahir</th>
                        <th width="1">Status</th>
                        <th width="1">L/P</th>
                        <th >Masuk</th>
                        <th >Kelas</th>
                        <th >Foto</th>
                        <th >AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                        echo "
                            <tr>
                            <td width='10'>".$no++."</td>
                            <td>$r->nama</td>
                            <td>$r->nisn</td>
                            <td>$r->wali</td>
                            <td>$r->no_telp</td>
                            <td>$r->tgl_lahir</td>
                            <td>$r->status</td>
                            <td>$r->jk</td>
                            <td>$r->tahun_masuk</td>
                            <td>$r->kelas</td>
                            <td><img src='$r->foto' width='80'></td>
                            <td>
                            ".anchor('siswa/edit/'.$r->id_siswa,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('siswa/hapus/'.$r->id_siswa,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('siswa/detail/'.$r->id_siswa,'<i class="fa fa-pencil-square-o"></i> Detail',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->