<?php include'header.php'; 



?>

<!-- page content -->

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Maliyet - Sevkiyat Hesaplama Alanı</h3>
      </div>


    </div>
    <div class="clearfix"></div>


    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Parke Hesaplama<small>Aşağıdaki alanı eksiksiz olarak doldurun</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="hesapla.php" method="POST" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri Ad Soyad</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="adsoyad" class="form-control" placeholder="Müşteri adını ve soyadını girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri Adresi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="adres" class="form-control" placeholder="Müşteri adresini yazın">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri İletişim No</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="iletisim" class="form-control" placeholder="Müşteri' ait iletişim numarası">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Metre Karesi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="urunmetre" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ödeme Şekli</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="odeme" class="form-control">
                    <option value="Nakit">Nakit</option>
                    <option value="Cek">Çek</option>
                    <option value="Senet">Senet</option>
                    
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="aciklama" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sevkiyat Tarihi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="date" name="tarih" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Seckiyat Mesafesi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="sevkiyat" class="form-control">
                    <option value="450">10-20 km</option>
                    <option value="650">20-40 km</option>
                    <option value="850">40-60 km</option>
                    <option value="1050">60-80 km</option>
                    <option value="1250">80-100 km</option>
                    <option value="1500">100 km uzun</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                  <br>
                  <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat" checked="checked"> Checked
                    </label>
                  </div>

                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button name="parkehesapla" type="submit" class="btn btn-primary">Hesapla</button>
                  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- ------------------------------------------------------------------------------------------>      
      
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Parke Hesaplama<small>Aşağıdaki alanı eksiksiz olarak doldurun</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="hesapla1.php" method="POST" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri Ad Soyad</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="adsoyad" class="form-control" placeholder="Müşteri adını ve soyadını girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri Adresi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="adres" class="form-control" placeholder="Müşteri adresini yazın">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Müşteri İletişim No</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="iletisim" class="form-control" placeholder="Müşteri' ait iletişim numarası">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ürün Metre Karesi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="urunmetre" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ödeme Şekli</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="odeme" class="form-control">
                    <option value="Nakit">Nakit</option>
                    <option value="Cek">Çek</option>
                    <option value="Senet">Senet</option>
                    
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="aciklama" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sevkiyat Tarihi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="date" name="tarih" class="form-control" placeholder="Sayısal değer girin">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Seckiyat Mesafesi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="sevkiyat" class="form-control">
                    <option value="450">10-20 km</option>
                    <option value="650">20-40 km</option>
                    <option value="850">40-60 km</option>
                    <option value="1050">60-80 km</option>
                    <option value="1250">80-100 km</option>
                    <option value="1500">100 km uzun</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                  <br>
                  <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" class="flat" checked="checked"> Checked
                    </label>
                  </div>

                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button name="parkehesapla" type="submit" class="btn btn-primary">Hesapla</button>
                  
                </div>
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