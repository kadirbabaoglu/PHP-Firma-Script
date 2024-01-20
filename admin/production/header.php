<?php 
ob_start();
session_start();
include "../ayar/baglan.php";

date_default_timezone_set('Europe/Istanbul');

$kullanicisor = $db->prepare("SELECT * From kullanici where kullanici_ad=:ad");
$kullanicisor->execute(array(
  'ad' => $_SESSION['kullanici_ad'],
 
));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$say=$kullanicisor->rowCount();

if ($say==0) {
  header("location:login.php?durum=izinsiz-giris");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Crm Ödev İçin Yönetim Paneli</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome --> 
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  


  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>


<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/index.php" class="site_title"><i class="fa fa-paw"></i> <span>Yönetim Paneli</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../../<?php echo $kullanicicek["kullanici_resim"]; ?>" alt="..." class="img-circle profile_img">

            </div>
            <div class="profile_info">
              <span>Hoşgeldin</span>
              <h2><?php echo $_SESSION['kullanici_ad']; ?></h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <?php include'sidebar.php'; ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <?php 
      $id = $kullanicicek['kullanici_id'];
      $ticketsor=$db->prepare("SELECT * FROM ticket INNER JOIN kullanici ON kullanici.kullanici_id = ticket.ticket_kullanici Where ticket_kullanici=? and ticket_durum=1 LIMIT 10");
      $ticketsor->execute(array($id));
      $saydır = $ticketsor->rowCount();


      ?>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="../../<?php echo $kullanicicek["kullanici_resim"]; ?>" alt=""><?php echo $_SESSION['kullanici_ad']; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="kullanici-profil.php"> Profil</a></li>

                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green"><?php echo $saydır; ?></span>
                </a>

                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <?php while ($ticketcek = $ticketsor->fetch(PDO::FETCH_ASSOC)) { 

                    ?>
                      
                      <li>
                        <a href="ticket-duzenle.php?ticket_id=<?php echo $ticketcek['ticket_id']; ?>">
                        <span>
                          <span><?php echo $ticketcek['ticket_baslik']; ?></span>
                          <span class="time"><?php echo $ticketcek['ticket_zaman']; ?></span>
                        </span>
                        <span class="message">
                          <?php echo substr($ticketcek['ticket_aciklama'],0,150); ?>
                        </span>
                      </a>
                    </li>
                     
                    
                    
                  <?php } ?>

                  <li>
                    <div class="text-center">
                      <a>
                        <strong>Hepsini Göster</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>

              </li>


              
            </ul>
          </nav>
        </div>
      </div>