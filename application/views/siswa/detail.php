

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
                  <h3 class="box-title">DATA SISWA</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td rowspan="7" width='250'><center><img style="width:210px;height:210px" src="<?php echo $siswa['foto'];?>"  alt="User Image"></center></td>
                    </tr>
                  </table>
                </div>
                  <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td width="50"></td>
                          <td width="150">NISN</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['nisn'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">NAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['nama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">KELAS</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['kelas'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">WALI</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['wali'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">CONTACT</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['no_telp'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">JENIS KELAMIN</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['jk'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TANGGAL LAHIR</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['tgl_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TEMPAT LAHIR</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['tempat_lahir'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">AGAMA</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['agama'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">STATUS</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['status'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">TAHUN MASUK</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['tahun_masuk'];?></td>
                      </tr>
                      <tr>
                          <td width="50"></td>
                          <td width="150">ALAMAT</td>
                          <td width="50">:</td>
                          <td ><?php echo $siswa['alamat'];?></td>
                      </tr>
                  </table>
                    </div><div class="box-header">
                </div></div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->