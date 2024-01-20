<?php include'header.php'; 

$ticketsor=$db->prepare("SELECT * FROM ticket INNER JOIN kullanici ON kullanici.kullanici_id = ticket.ticket_kullanici");
$ticketsor->execute();
$say=$ticketsor->rowCount();
$say=0;

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
                    <h2>Ticket Yönetimi<small>
                      
                    <?php
                      
                      
                      if (@$_GET['durum']=='ok') { ?>

                         <b style="color: green">İşlem Başarılı...</b>



                      <?php } elseif (@$_GET['durum']=='no') {?>

                      <b style="color: red">İşlem Başarısız...</b>



                        <?php } ?>
                    </small></h2>
                    <div align="right" class="col-md-12"><a href="ticket-ekle.php"><button style="margin-top: -30px"  class="btn btn-success"><i class="success fa fa-plus"></i> YEni Ticket Ata</button></a></div>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <p>Yeni açılmış ve henüz tamamlanmamış ticket göstesterir</p>
                   
                   <table id="datatable" class="table table-striped table-bordered" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">Sıra</th>
                          <th style="width: 20%">Ticket Adı</th>
                          <th>Ticket Görevlisi</th>
                          <th>Proje işlemi</th>
                          <th>Durum</th>
                          <th style="width: 20%">#Düzenlemeler</th>
                        </tr>
                      </thead>

                        <?php while ($ticketcek = $ticketsor->fetch(PDO::FETCH_ASSOC)) { $say++
                          
                         ?>

                      <tbody>
                        <tr>
                          <td><?php echo $say; ?></td>
                          <td>
                            <a><?php echo $ticketcek['ticket_baslik']; ?></a>
                            <br />
                            <small>Oluşturulma Tarihi :<?php echo $ticketcek['ticket_zaman']; ?></small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="../../<?php echo $ticketcek['kullanici_resim']; ?>" class="avatar" alt="Avatar">&nbsp;&nbsp;<a><?php echo $ticketcek['kullanici_ad']; ?></a>
                              </li>
                              
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $ticketcek['ticket_yuzde']; ?>"></div>
                            </div>
                            <small>%<?php echo $ticketcek['ticket_yuzde']; ?> Tamamlandı...</small>
                          </td>
                          <td>

                            <?php 
                            if ($ticketcek['ticket_durum']==1) {
                              echo'<button type="button" class="btn btn-success btn-xs">Devam Eden Ticket</button>';
                            }else{

                              echo'<button type="button" class="btn btn-danger btn-xs">Kapatılmış Ticket</button>';
                            }
                             ?>
                            

                            
                          </td>
                          <td>
                            <a href="ticket-goruntule.php?ticket_id=<?php echo $ticketcek['ticket_id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Görüntüle </a>
                            <a href="ticket-duzenle.php?ticket_id=<?php echo $ticketcek['ticket_id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Düzenle </a>
                            <a href="../ayar/islem.php?ticketsil=ok&ticket_id=<?php echo $ticketcek['ticket_id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Sil </a>
                          </td>
                        </tr>
                      </tbody>
                    <?php } ?>
                    </table>
                    
                   



                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include'footer.php'; ?>