        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-users"></i>
                  <h3 class="box-title">MENU DATA CONTACT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="5">NO</th>
                        <th width="180">NAMA</th>
                        <td width="170">EMAIL</td>
                        <td width="100">TELP</td>
                        <td width="100">TGL</td>
                        <td>PESAN</td>
                        <th  width="10">AKSI</th>
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
                            <td width='5'>".$no++."</td>
                            <td>$r->nama</td>
                            <td>$r->email</td>
                            <td>$r->no_telp</td>
                            <td>$r->tgl_kirim</td>
                            <td>$r->pesan</td>
                            <td>
                            ".anchor('contact/hapus/'.$r->id_contact,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        
                    }
                    }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body --></div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->