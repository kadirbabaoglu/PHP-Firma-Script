<?php include'header.php'; 

$kullanicisor = $db->prepare("SELECT * From kullanici ");
$kullanicisor->execute(array());
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
$say=$kullanicisor->rowCount();

$dokumansor = $db->prepare("SELECT * From dokuman ");
$dokumansor->execute(array());
$dokumansay=$dokumansor->rowCount();

$iceriksor = $db->prepare("SELECT * From icerik ");
$iceriksor->execute(array());
$iceriksay=$iceriksor->rowCount();

$ticketsor = $db->prepare("SELECT * From ticket ");
$ticketsor->execute(array());
$ticketsay=$ticketsor->rowCount();

include'../../hesaplama.php'


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3></h3>
      </div>

      <div class="title_right">
                <!--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>-->
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>WorkBench<small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                        </div>
                        <div class="count"><?php echo $hesap?></div>

                        <h3>Sistemde Boyutu</h3>
                        <p>Sistemdeki Mevcut olan dosyaların toplam boyutu</p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i>
                        </div>
                        <div class="count"><?php echo $iceriksay?></div>

                        <h3>Paylaşılan İçerikler</h3>
                        <p><a href="icerik.php">Görüntülemek İçin Tıklayın...</a></p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                        </div>
                        <div class="count"><?php echo $dokumansay?></div>

                        <h3>Paylaşılmış dökümanlar</h3>
                        <p><a href="dokuman.php">Görüntülemek İçin Tıklayın...</a></p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="count"><?php echo $ticketsay?></div>

                        <h3>Açılmış Ticketlar</h3>
                        <p><a href="ticket.php">Görüntülemek İçin Tıklayın...</a></p>
                      </div>
                    </div>
                  </div>




                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Ayrıntılı Ticket Tablosu <small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            
                          </li>
                          
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <canvas id="canvasDoughnut"></canvas>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2> <small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <canvas id="pieChart"></canvas>
                      </div>
                    </div>
                  </div>







                </div>
              </div>
            </div>
          </div>
        </div>





        
        
        <?php include'footer.php'; ?>