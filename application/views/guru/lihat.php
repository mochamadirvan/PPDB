        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">MENU DATA GURU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                    <?php echo anchor('guru/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                    <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="1">NO</th>
                        <th >Nama</th>
                        <th >Nip</th>
                        <th >HP</th>
                        <th width="1">Agama</th>
                        <th >Email</th>
                        <th width="1">L/P</th>
                        <th >Kelas</th>
                       <th >Foto</th>
                        <th  width="120">AKSI</th>
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
                            <td>$r->nip</td>
                            <td>$r->no_telp</td>
                            <td>$r->agama</td>
                            <td>$r->email</td>
                            <td>$r->jk</td>
                            <td>$r->kelas</td>
                            <td><img src='$r->foto' width='70'></td>
                            <td>
                            ".anchor('guru/edit/'.$r->id_guru,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('guru/hapus/'.$r->id_guru,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('guru/detail/'.$r->id_guru,'<i class="fa fa-pencil-square-o"></i> Detail',array('class'=>'btn btn-danger btn-sm"'))."
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