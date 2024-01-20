<?php 

include'header.php';
include'../ayar/baglan.php';

if (isset($_POST['arama'])) {

  $aranan=$_POST['aranan'];

  $kullanicisor=$db->prepare("select * from kullanici where kullanici_ad LIKE '%$aranan%' order by kullanici_id ASC limit 25");
  $kullanicisor->execute();
  $say=$kullanicisor->rowCount();

} else {

   $kullanicisor = $db->prepare("select * from kullanici");
   $kullanicisor->execute();
   $say=$kullanicisor->rowCount();

}


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
                  <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" nplaceholder="Anahtar kelime girin...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara</button>
                    </span>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İçerik İşlemleri

                      <small>

                      <?php
                      
                      echo $say. "  kayıt listelendi"; 
                      if (@$_GET['durum']=='ok') { ?>

                         <b style="color: green">İşlem Başarılı...</b>



                      <?php } elseif (@$_GET['durum']=='no') {?>

                      <b style="color: red">İşlem Başarısız...</b>



                        <?php } ?>
                        

                      </small>

                    </h2>
                    <div align="right" class="col-md-12"><a href="kullanici-ekle.php"><button style="margin-top: -30px"  class="btn btn-success"><i class="success fa fa-plus"></i>Ekle</button></a></div>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th width="50" class="column-title">Sira No </th>
                            <th width="180" class="column-title">Kayıt Tarihi </th>
                            <th width="400" class="column-title">Kullanıcı Ad  </th>
                            <th width="300" class="column-title">Kullanıcı Ad-Soyad</th>
                            <th class="column-title">Kullanıcı Durumu </th>
                            <th class="column-title">Kullanıcı Yetkisi </th>
                            <th class="column-title"> </th>
                            <th class="column-title"> </th>
                            <th class="column-title no-link last"><span class="nobr"></span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>

                          <?php

                          $say=0;
                          while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) { $say++


                          ?>

                          
                          <tr>
                            <td class=" "><?php echo $say; ?></td>
                            <td class=" "><?php echo $kullanicicek['kullanici_zaman']; ?></td>
                            <td class=" "><?php echo $kullanicicek['kullanici_ad']; ?></td>
                            <td class=" "><?php echo $kullanicicek['kullanici_adsoyad']; ?></td>
                            <td class=" "><?php 

                              if ($kullanicicek['durum']=="1") {
                                echo "Aktif";
                              }else{
                                echo "Pasif";
                              }
                             ?></td>
                             <td class=" "><?php 

                              if ($kullanicicek['yetki']=="5") {
                                echo "Admin";
                              }else{
                                echo "User";
                              }
                             ?></td>
                            <td class=" "></td>
                            <td class="a-right a-right "><a href="profil.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button  class="btn btn-primary btn-xs"><i class="success fa fa-pencil"></i>Düzenle</button></a></td>
                            <td class=" last"><a href="../ayar/islem.php?kullanicisil=ok&kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button  class="btn btn-danger btn-xs"><i class="success fa fa-trash"></i>Sil</button></a>
                            </td>
                          </tr>
                        
                        <?php  } ?>
                        
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include'footer.php'; ?>