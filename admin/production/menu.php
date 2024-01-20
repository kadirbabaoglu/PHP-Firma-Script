<?php 

include'header.php';
include'../ayar/baglan.php';

if (isset($_POST['arama'])) {

  $aranan=$_POST['aranan'];

  $menusor=$db->prepare("select * from menu where menu_ad LIKE '%$aranan%' order by menu_id ASC limit 25");
  $menusor->execute();
  $say=$menusor->rowCount();

} else {

 $menusor = $db->prepare("select * from menu where menu_ust=:menu_ust order by menu_sira ASC");
 $menusor->execute(array(
  'menu_ust' => 0
 ));
 $say=$menusor->rowCount();

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
            <h2>Menü İşlemleri

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
          <div align="right" class="col-md-12"><a href="menu-ekle.php"><button style="margin-top: -30px"  class="btn btn-success"><i class="success fa fa-plus"></i>Ekle</button></a></div>

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


                        <th class="column-title">Menü Ad  </th>
                        <th class="column-title">Menü Üst  </th>
                        <th class="column-title">Menü Sıra  </th>
                        <th class="column-title">Menü Durum </th>
                        <th class="column-title"> </th>
                        <th class="column-title"> </th>
                        <th class="column-title no-link last"><span class="nobr"></span>
                        </th>

                      </tr>
                    </thead>

                    <tbody>

                      <?php



                      while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) {

                        $menu_id=$menucek['menu_id'];
                        ?>


                        <tr>


                          <td class=" "><?php echo $menucek['menu_ad']; ?></td>
                          <td class=" "><?php echo $menucek['menu_ust']; ?></td>
                          <td class=" "><?php echo $menucek['menu_sira']; ?></td>
                          <td class=" "><?php 

                          if ($menucek['menu_durum']=="1") {
                            echo "Aktif";
                          }else{
                            echo "Pasif";
                          }
                          ?></td>
                          <td class=" "></td>
                          <td class="a-right a-right "><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button  class="btn btn-primary btn-xs"><i class="success fa fa-pencil"></i>Düzenle</button></a></td>
                          <td class=" last"><a href="../ayar/islem.php?menusil=ok&menu_id=<?php echo $menucek['menu_id']; ?>"><button  class="btn btn-danger btn-xs"><i class="success fa fa-trash"></i>Sil</button></a>
                          </td>
                        </tr>

                        <?php 
                        $altmenusor = $db->prepare("select * from menu where menu_ust=:menu_id order by menu_sira ");
                        $altmenusor->execute(array(

                          'menu_id' => $menu_id
                        ));
                        while ($altmenucek = $altmenusor->fetch(PDO::FETCH_ASSOC)) {


                          ?>

                          <tr>


                            <td class=" ">-->&nbsp<?php echo $altmenucek['menu_ad']; ?></td>
                            <td class=" "><?php echo $altmenucek['menu_ust']; ?></td>
                            <td class=" "><?php echo $altmenucek['menu_sira']; ?></td>
                            <td class=" "><?php 

                            if ($altmenucek['menu_durum']=="1") {
                              echo "Aktif";
                            }else{
                              echo "Pasif";
                            }
                            ?></td>
                            <td class=" "></td>
                            <td class="a-right a-right "><a href="menu-duzenle.php?menu_id=<?php echo $altmenucek['menu_id']; ?>"><button  class="btn btn-primary btn-xs"><i class="success fa fa-pencil"></i>Düzenle</button></a></td>
                            <td class=" last"><a href="../ayar/islem.php?menusil=ok&menu_id=<?php echo $altmenucek['menu_id']; ?>"><button  class="btn btn-danger btn-xs"><i class="success fa fa-trash"></i>Sil</button></a>
                            </td>
                          </tr>



                        <?php  } } ?>
                        
                        
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