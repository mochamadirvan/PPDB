
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
                  <h3 class="box-title">DETAIL GURU</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td width="50"></td>
                          <td width="150"></td>
                          <td width="50"></td>
                          <td width="100"></td>
                          <td ><img style="width:210px;height:210px" src="<?php echo $guru['foto'];?>"  alt="User Image"></center></td>
                  </tr>
                  </table>
                </div>
                    <div class="form-group">
                  <table class="table table-condensed" border='0'>
                  <tr>
                          <td width="50"></td>
                          <td width="150">NIP</td>
                          <td width="50">:</td>
                          <td ><?php echo $guru['nip'];?></td>
                      </tr>
                      <tr>
                          
                          <td width="1"></td>
                          <td>NAMA LENGKAP</td>
                          <td>:</td>
                          <td><?php echo $guru['nama'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
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
                          <td width="1"></td>
                          <td>NO TELP</td>
                          <td>:</td>
                          <td><?php echo $guru['no_telp'];?></td>
                      </tr>
                      <tr>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>STATUS</td>
                          <td>:</td>
                          <td><?php echo $guru['status'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>KELAS</td>
                          <td>:</td>
                          <td><?php echo $guru['kelas'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>Tanggal Lahir</td>
                          <td>:</td>
                          <td><?php echo $guru['tgl_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>AGAMA</td>
                          <td>:</td>
                          <td><?php echo $guru['agama'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>EMAIL</td>
                          <td>:</td>
                          <td><?php echo $guru['email'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>PASSWORD</td>
                          <td>:</td>
                          <td><?php echo $guru['password'];?></td>
                      </tr>
                      <tr>
                          <td width="1"></td>
                          <td>ALAMAT</td>
                          <td>:</td>
                          <td><?php echo $guru['alamat'];?></td>
                      </tr>
                      
                  </table>
                    </div><div class="box-header">
                </div></div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->