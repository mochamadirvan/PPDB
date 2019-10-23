        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">Menu Data Prestasi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                  <div class="form-group"></div>
                  <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="5">NO</th>
                        <th>Gambar</th>
                        <th  width="5">AKSI</th>
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
                                <td><img src='$r->gambar' width='200'></td>
                                <td>
                                ".anchor('slide/edit/'.$r->id_slide,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm'))."
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