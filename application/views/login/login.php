<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistem Informasi Sekolah</title>
<link rel=”icon”  href=”<?php echo base_url()?>assets/img/logofavicon.png”>
<link href="<?php echo base_url(); 
            ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); 
            ?>assets/css/font-awesome.css" rel="stylesheet" />

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <div class=""></div>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
               <h4>Login Now</h4>
                <br>
                <br>  
                </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <?php
                                    echo form_open('login/login');
                                ?>
                                <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name= "nip" id="nip" class="form-control" placeholder="Ketikan NIP Anda " />
                                        </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name= "password" id="password" class="form-control"  placeholder="Ketikan Password Anda" />
                                        </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input name="status"class="form-control" value="admin" />
                                                
                                    </div>  
                                <button name="submit" type="submit" class="btn btn-primary form-control">Login Now</button>                                 <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); 
   ?>assets/js/custom.js"></script>

   
</body>

</html>
