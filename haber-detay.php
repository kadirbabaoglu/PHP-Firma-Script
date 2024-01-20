
<?php include'header.php';

$iceriksor=$db->prepare("SELECT * from icerik WHERE icerik_id=:icerik_id");
$iceriksor->execute(array(

  'icerik_id' => $_GET['icerik_id']
  ));
$icerikcek = $iceriksor->fetch(PDO::FETCH_ASSOC);

?>



			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none"><?php echo $icerikcek['icerik_ad'];?></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="row mt-xl">

									

								<!--Haber başlangıç-->

								<div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none ">
											
												<img src="<?php echo $icerikcek['icerik_resimyol'];?>" class="img-responsive" alt="" style="width: 395px; height: 250px; padding: 10px;">
											
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												
												<span class="post-meta">
													<!--<span>January 10, 2016 | <a href="#">John Doe</a></span>-->
												</span>
												<p class="font-size-md"><?php echo $icerikcek['icerik_detay'];?>...</p>
												<i class=""></i>
											</span>
										</span>
									</span>

								</div>

								

								
							</div>

						</div>

						
					</div>

				</div>
			</div>

			<?php include 'footer.php';?>