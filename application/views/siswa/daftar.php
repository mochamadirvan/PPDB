        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">MENU DATA PENDAFTAR </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                    <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th >Nama</th>
                        <th>NISN</th>
                        <th >Lahir</th>
                        <th >Agama</th>
                        <th >Wali</th>
                        <th >HP</th>
                        <th >Alamat</th>
                        <th >L/P</th>
                        
                        <th >Daftar</th>
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
                            <td>$r->tgl_lahir</td>
                            <td>$r->agama</td>
                            <td>$r->wali</td>
                            <td>$r->no_telp</td>
                            <td>$r->alamat</td>
                            <td>$r->jk</td>
                          
                            <td>$r->daftar</td>
                            <td>
                            ".anchor('siswa/proses/'.$r->id_pendaftar,'<i class="fa fa-pencil-square-o"></i> Proses',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('siswa/hapus2/'.$r->id_pendaftar,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
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