 <?php 

 include'header.php'; 
 include'../ayar/baglan.php';

 $ayarsor = $db->prepare("select * from ayar where ayar_id=?");
 $ayarsor->execute(array(0));
 $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

 $ticketsor=$db->prepare("SELECT * from ticket where ticket_id=:ticket_id");
 $ticketsor->execute(array(
  'ticket_id' => $_GET['ticket_id']
));

 $ticketcek=$ticketsor->fetch(PDO::FETCH_ASSOC);

 ?>



 <head>

  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

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
                    <h2>Ticket Atama İşlemleri <small>

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
                <?php 
                if ($ticketcek['ticket_yuzde']==100) { ?>

                  <div class="alert alert-danger alert-dismissible fade in"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong aling"center">Dikkat !</strong>Eğer ticket durumu %100 ulaştıysa kapatmayı unutmayın ...
                  </div>


                <?php } else { ?>



                <?php  }  ?>

                <form action="../ayar/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="ticket_id" value="<?php echo $ticketcek['ticket_id']; ?>">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Ticket İsmi <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  required="required" name="ticket_baslik" value="<?php echo $ticketcek["ticket_baslik"]; ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ticket Detay <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                      <textarea class="ckeditor" id="editor1" name="ticket_aciklama"><?php echo $ticketcek["ticket_aciklama"]; ?></textarea>

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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kullanici Seçin</label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <select class="select2_single form-control" required="" name="ticket_kullanici" tabindex="-1">

                        <option disabled="" value="0">Ticket Atanacak Kullaniciyi Seçin...</option>

                        <?php

                        $kullanicisor = $db->prepare("select * from kullanici");
                        $kullanicisor->execute();

                        while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) {


                          ?>

                          <option value="<?php echo $kullanicicek["kullanici_id"]; ?>"><?php echo $kullanicicek["kullanici_ad"]; ?></option>

                        <?php } ?>

                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Ticket Tamamlama <span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="ticket_yuzde" required>
                        <option value="<?php echo $ticketcek["ticket_id"]; ?>">%<?php echo $ticketcek["ticket_yuzde"]; ?></option>
                        <option value="10">%10</option>
                        <option value="20">%20</option>
                        <option value="30">%30</option>
                        <option value="40">%40</option>
                        <option value="50">%50</option>
                        <option value="60">%60</option>
                        <option value="70">%70</option>
                        <option value="80">%80</option>
                        <option value="90">%90</option>
                        <option value="100">%100</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Ticket Durum <span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <select id="heard" class="form-control" name="ticket_durum" required>

                        <?php 
                        if ($ticketcek['ticket_durum']==1) { ?>

                          <option value="1">Devam Ediyor</option>
                          <option value="0">Kapandı</option>

                        <?php } else { ?>

                          <option value="0">kapandı</option>
                          <option value="1">Devam Ediyor</option>

                        <?php  }  ?>


                      </select>
                    </div>
                  </div>






                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="ticketduzenle" class="btn btn-primary">Kaydet</button>
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

  