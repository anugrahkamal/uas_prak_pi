<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
    
    <!-- Dasbor --> 
    <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>       

    <!-- Berita -->           
   <li><a href="#"><i class="fa fa-newspaper-o"></i> Berita<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/berita')?>">Data Berita</a></li>
            <li><a href="<?php echo base_url('admin/berita/tambah')?>">Tambah Berita</a></li>
            <li><a href="<?php echo base_url('admin/kategori_berita')?>">Kategori Berita</a></li>
        </ul>
    </li> 

    <!-- Modul User -->
    <li><a href="#"><i class="fa fa-users"></i> User/Administrator<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/user')?>">Data User/Administrator</a></li>
            <li><a href="<?php echo base_url('admin/user/tambah')?>">Tambah User/Admin</a></li>
        </ul>
    </li> 

</ul>

</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
     <h2><?php echo $title?></h2>         
    </div>
</div>
 <!-- /. ROW  -->
 <hr />

<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
