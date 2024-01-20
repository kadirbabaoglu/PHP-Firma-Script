 <?php 

 include'header.php'; 
 include'../ayar/baglan.php';

 $ayarsor = $db->prepare("select * from ayar where ayar_id=?");
 $ayarsor->execute(array(0));
 $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);




 ?>

 <!-- page content -->
 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
     <div class="title_left">
      <h3></h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
                    <!--<input type="text" class="form-control" placeholder="arama...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $kullanicicek['kullanici_adsoyad'];?> profili ile ilgili güncelleme işlemi yapılmaktadır.<small>

                      <?php if (@$_GET['durum']=='ok') { ?>

                       <b style="color: green">Güncelleme Başarılı...!</b>



                     <?php } elseif (@$_GET['durum']=='no') {?>

                      <b style="color: red">Güncelleme Başarısız...!</b>



                    <?php } ?>


                  </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>


                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

               <form action="../ayar/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Yüklü Resim <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php 

                    if (strlen($kullanicicek['kullanici_resim'])>0) { ?>

                     <img width="200" height="200" src="../../<?php echo $kullanicicek['kullanici_resim'];?>">

                   <?php } else { ?>

                    <img width="200" height="200" src="../../dmg/person.png">

                  <?php } ?>

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Logo Güncelle <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="kullanici_resim" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['kullanici_resim'];?>">
              <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">

              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="kresimduzenle" class="btn btn-primary">Güncelle</button>
              </div>


            </form>

            <br><hr><br>

            <form action="../ayar/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Kullanıcı Adı <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name"  required="required" disabled="" name="ayar_siteurl" value="<?php echo $kullanicicek['kullanici_ad'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Kullanıcı Adı-Soyad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name"  required="required"  name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" id="first-name"  required="required" name="kullanici_password" value="<?php echo $kullanicicek['kullanici_password'];?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="kprofilguncelle" class="btn btn-primary">Güncelle</button>
              </div>





            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php include'footer.php'; ?>