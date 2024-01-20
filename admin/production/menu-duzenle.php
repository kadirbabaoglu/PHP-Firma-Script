 <?php 

 include'header.php'; 
 include'../ayar/baglan.php';

// $ayarsor = $db->prepare("select * from ayar where ayar_id=?");
// $ayarsor->execute(array(0));
// $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

$iceriksor=$db->prepare("SELECT * from menu where menu_id=:menu_id");
$iceriksor->execute(array(
  'menu_id' => $_GET['menu_id']
));

$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);

 ?>



 <head>

  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">



</head>
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
                    <h2>Slider İşlemleri <small>

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
                <form action="../ayar/islem.php" method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1">

                      
                      <?php

                      $menusor = $db->prepare("select * from menu order by menu_ad ASC");
                      $menusor->execute();

                      while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) {


                        ?>

                        <option value="<?php echo $menucek["menu_id"]; ?>"><?php echo $menucek["menu_ad"]; ?></option>

                      <?php } ?>

                      </select>
                    </div>
                  </div>




                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Menü Ad <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  name="menu_ad"  value="<?php echo $icerikcek['menu_ad'];?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Menü URL <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  name="menu_url" value="<?php echo $icerikcek['menu_url'];?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Detay <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="ckeditor" id="editor1" name="menu_detay"><?php echo $icerikcek['menu_detay'];?></textarea>

                    </div>
                  </div>

                  <script type="text/javascript">

                    CKEDITOR.replace('editor1',
                    {
                      filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                      filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Image',
                      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                      forcePasteAsPlainText: true
                    }

                    );

                  </script>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Menü Sıra <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  name="menu_sira" value="<?php echo $icerikcek['menu_sira'];?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Menü Durum <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="menu_durum" required>
                       

                        <?php 
                            if ($icerikcek['menu_durum']==1) { ?>
                              
                              <option value="1">Aktif</option>
                              <option value="0">Pasif</option>

                            <?php } else { ?>
                              
                              <option value="0">Pasif</option>
                              <option value="1">Aktif</option>
                              
                              <?php  }  ?>

                      </select>
                    </div>
                  </div>





                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="menuduzenle" class="btn btn-primary">Kaydet</button>
                  </div>





                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>


    <?php include'footer.php'; ?>

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->