<?php include'header.php';

	


?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Sirketimizle ilgili bütün haberleri burada bulabilirsiniz..</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="row mt-xl">

									<!-- sayfalama kodu -->
									<?php 

									$sayfada = 4; // sayfada gösterilecek içerik miktarı.
									$sorgu=$db->prepare("select * from icerik");
									$sorgu->execute();
									$toplam_icerik=$sorgu->rowCount();
									$toplam_sayfa = ceil($toplam_icerik / $sayfada);
									$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;//sayfa girilmediyse 1 gönderir
									if ($sayfa < 1) $sayfa = 1; //1 den küçükse 1 gönderir.
									if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; //girilen sayfa sayısından fazla ise son sayfaya gönerir.
									$limit = ($sayfa - 1 ) * $sayfada;
									$iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
									$iceriksor->execute();

									while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {
										
									?>

								<!--Haber başlangıç-->

								<div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none ">
											
												<img src="<?php echo $icerikcek['icerik_resimyol'];?>" class="img-responsive" alt="" style="width: 395px; height: 250px; padding: 10px;">
											
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><?php echo $icerikcek['icerik_ad'];?></h2>
												<span class="post-meta">
													<!--<span>January 10, 2016 | <a href="#">John Doe</a></span>-->
												</span>
												<p class="font-size-md"><?php echo substr($icerikcek['icerik_detay'],0,350);?>...</p>
												<a class="mt-md" href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>">Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>

								</div>

								


								<?php }  ?>
								<!--haber bitiş-->

									<div align="right" class="col-md-12">
								<ul class="pagination">
									<?php

									$s=0;
									while ($s < $toplam_sayfa) {
										$s++; ?>

										<?php
										if ($s==$sayfa) { ?>
											
											<li class="active">
												<a href="haberler?sayfa=<?php echo $s;?>"><?php echo $s; ?></a>

											</li>

											<?php } else { ?>

											<li>
												<a href="haberler?sayfa=<?php echo $s;?>"><?php echo $s; ?></a>

											</li>

											<?php }

										}

										?>

								</ul>
								</div>
							

							</div>

						</div>

						
					</div>

				</div>
			</div>

			<?php include 'footer.php';?>