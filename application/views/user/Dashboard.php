<!DOCTYPE html>
<html>
<head>
    <title> Dashboard - Login CodeIgniter & Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">WELCOME <b><?php echo $this->session->userdata("username") ?></b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
</nav>
<div class="container" style="margin-top: 80px">
    <div class="row" style="padding-left: 50px;">
        <div class="col-lg-6" style="padding: 30px;">
            <a href="<?php echo site_url('user/Biodata') ?>" class="btn btn-primary btn-lg">INPUT BIODATA</a>
        </div>
        <div class="col-lg-6" style="padding: 30px;">
            <a href="#" class="btn btn-primary btn-lg">UPLOAD BERKAS</a>
        </div>
        <div class="col-lg-6" style="padding: 30px;">
            <a href="<?php echo site_url('user/Biodata/bio') ?>" class="btn btn-primary btn-lg">BIODATA SISWA</a>
        </div>
        <div class="col-lg-6" style="padding: 30px;">
            <a href="#" class="btn btn-primary btn-lg">BERKAS SISWA</a>  
        </div>
        <div class="col-lg-6" style="padding: 30px;">
            <a href="#" class="btn btn-primary btn-lg">PENGUMUMAN</a>
        </div> 
        <div class="col-lg-6" style="padding: 30px;">
            <a href="#" class="btn btn-primary btn-lg">AKUN</a>
        </div> 
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>