<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>
      <?php
                if ($kullanicicek['yetki']==5) {
                 echo "Yönetici Hesabı";
                }else{
                  echo "User Hesabı";
                }
                ?>
    </h3>

    <?php if ($kullanicicek['yetki']==5) { ?>

      <ul class="nav side-menu">
      <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa <span class="label label-success pull-right"></span></a></li>
      <li><a href="hakkimizda.php"><i class="fa fa-book"></i> Hakkımızda <span class="label label-success pull-right"></span></a></li>
      <li><a href="menu.php"><i class="fa fa-list"></i> Menü İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="slider.php"><i class="fa fa-image"></i> Slider İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="icerik.php"><i class="fa fa-file-text"></i> İçerik İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="dokuman.php"><i class="fa fa-upload"></i> Döküman Paylaşımı <span class="label label-success pull-right"></span></a></li>
      <li><a href="kullanici.php"><i class="fa fa-user"></i> Kullanıcı İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="ticket.php"><i class="fa fa-ticket"></i> Ticket İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="hesaplama.php"><i class="fa fa-calculator"></i> Hesaplama <span class="label label-success pull-right"></span></a></li>

      <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
          <li><a href="iletisim-ayar.php">İletişim Ayarları</a></li>
          <li><a href="api-ayar.php">Api Ayarları</a></li>
          <li><a href="sosyal-ayar.php">Sosyal Medya Ayarları</a></li>
          <li><a href="mail-ayar.php">Mail Ayarları</a></li>
        </ul>
      </li> 
    
  <?php  }else { ?>
    
    <ul class="nav side-menu">
      
      <li><a href="hakkimizda.php"><i class="fa fa-book"></i> Hakkımızda <span class="label label-success pull-right"></span></a></li>
      <li><a href="menu.php"><i class="fa fa-list"></i> Menü İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="slider.php"><i class="fa fa-image"></i>Slider İşlemleri <span class="label label-success pull-right"></span></a></li>
      <li><a href="icerik.php"><i class="fa fa-file-text"></i>İçerik İşlemleri <span class="label label-success pull-right"></span></a></li>
      

      <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
          <li><a href="iletisim-ayar.php">İletişim Ayarları</a></li>
          <li><a href="api-ayar.php">Api Ayarları</a></li>
          <li><a href="sosyal-ayar.php">Sosyal Medya Ayarları</a></li>
          <li><a href="mail-ayar.php">Mail Ayarları</a></li>
        </ul>
      </li> 

    <?php } ?>



    </div>

  </div>