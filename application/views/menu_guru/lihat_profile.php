
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-laptop"></i>
                  <h3 class="box-title">DATA GURU</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td rowspan="7" width='250'><center><img style="width:210px;height:210px" src="<?php echo $guru['foto'];?>"  alt="User Image"></center></td>
                          <td width='250'>NIP</td>
                          <td>:</td>
                          <td><?php echo $guru['nip'];?></td>
                      </tr>
                      <tr>
                          <td>NAMA LENGKAP</td>
                          <td>:</td>
                          <td><?php echo $guru['nama'];?></td>
                      </tr>
                      <tr>
                          <td>JENIS KELAMIN</td>
                          <td>:</td>
                          <td><?php if ($guru['jk'] =='l') {
                                        echo 'Laki - Laki';
                                    } else 
                                    {
                                        echo 'Perempuan';
                                    } 
                          /*echo $record['jenis_kelamin'];*/?></td>
                      </tr>
                      <tr>
                          <td>NO TELP</td>
                          <td>:</td>
                          <td><?php echo $guru['no_telp'];?></td>
                      </tr>
                      <tr>
                      </tr>
                      <tr>
                          <td>STATUS</td>
                          <td>:</td>
                          <td><?php echo $guru['status'];?></td>
                      </tr>
                      <tr>
                          <td>KELAS</td>
                          <td>:</td>
                          <td><?php echo $guru['kelas'];?></td>
                      </tr>
                      
                  </table>
                </div>
                    <?php //<td><a href='<?= base_url("dashboard_user/edit/$record[id_user]") ' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                ?>
                <td><a href='<?= base_url("menu_guru/edit_guru/$guru[id_guru]") ?>' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                <td><a href='<?= base_url("menu_guru/detail_profile/$guru[id_guru]") ?>' class="btn btn-primary btn-block btn-dangert"><i class="fa fa-pencil-square-o"></i>Detail</a></td>
                </div><!-- /.chat -->
              </div><!-- /.box (chat box) -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
