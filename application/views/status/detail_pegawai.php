

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
                  <h3 class="box-title">DATA PEGAWAI</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td rowspan="7" width='250'><center><img style="width:210px;height:210px" src="<?php echo $pegawai['foto'];?>"  alt="User Image"></center></td>
                    </tr>
                  </table>
                </div>
                  <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td width="50"></td>
                          <td width="150">NIP</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['nip'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">NAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['nama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TANGGAL LAHIR</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['tgl_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">ALAMAT</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['alamat'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">CONTACT</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['no_telp'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">AGAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['agama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">EMAIL</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['email'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">JENIS KELAMIN</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['jk'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">JABATAN</td>
                          <td width="50">:</td>
                          <td ><?php echo $pegawai['jabatan'];?></td>
                      </tr>
                  </table>
                    </div><div class="box-header">
                </div></div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->