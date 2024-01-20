<?php include'header.php'; 



?>

<!-- page content -->

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Maliyet - Sevkiyat Fişi</h3>
      </div>
<?php 

$metrekare = 49;
$adsoyad = $_POST['adsoyad'];
$adres = $_POST['adres'];
$iletisim = $_POST['iletisim'];
$urunmetre = $_POST['urunmetre'];
$odeme = $_POST['odeme'];
$aciklama = $_POST['aciklama'];
$tarih = $_POST['tarih'];
$sevkiyat = $_POST['sevkiyat'];

$metrehesap = $urunmetre * $metrekare;
$kdv = $metrehesap / 100 * 18 + $metrehesap;
$toplamfiyat = $kdv + $sevkiyat;

 ?>

    </div>
    <div class="clearfix"></div>


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Acıklama ! <small>Bu bölümdeki bilgileri muhase programına işledikten sonra teslim ediniz...</small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Ad Soyad</th>
                  <th>Adres</th>
                  <th>Tel No</th>
                  <th>Ödeme</th>
                  <th>Acıklama</th>
                  <th>Tarih</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td><?php echo $adsoyad; ?></td>
                  <td><?php echo $adres; ?></td>
                  <td><?php echo $iletisim; ?></td>
                  <td><?php echo $odeme; ?></td>
                  <td><?php echo $aciklama; ?></td>
                  <td><?php echo $tarih; ?></td>
                </tr>
                <tr>
                  <th scope="row">*</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Fiyat</td>
                  <td><?php echo $metrehesap; ?></td>
                  
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Kdv Dahil</td>
                  <td><?php echo $kdv; ?></td>
                  
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Nakliyat</td>
                  <td><?php echo $sevkiyat; ?></td>
                  
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Toplam Fiyat</td>
                  <td><h2><b><?php echo $toplamfiyat; ?></b></h2></td>
                  
                </tr>
              </tbody>
            </table>
            
          </div>
          <button onclick="yazdir()" type="submit" class="btn btn-primary"><i class="fa fa-print"> Yazdır </i></button>



        </div>
      </div>

    </div>





  </div>
</div>

<!-- /page content -->

<?php include'footer.php'; ?>
<script>
function yazdir() {
  window.print();
}
</script>

