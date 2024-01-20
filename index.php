<?php 
include'header.php';
include'slider.php';

$hakkimizdasor = $db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>


			
				<section class="section section-default section-no-border mt-none">
					<div class="container">
						<div class="row mb-xl">
							<div class="col-md-7">
								<h2 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_baslik'];?></h2>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg"><?php echo substr($hakkimizdacek['hakkimizda_icerik'],0,400);?></p>

								<a class="mt-md" href="hakkimizda">Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<h4 class="mt-xl mb-none">Vizyon</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg"><?php echo substr($hakkimizdacek['hakkimizda_vizyon'],0,400);?>  </p>
							</div>
						</div>
					</div>
				</section>

<!--				<div class="container" id="practice-areas">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Practice Areas</h2>
							<div class="divider divider-primary divider-small divider-small-center mb-xl">
								<hr>
							</div>
						</div>
					</div>

					<div class="row mt-lg">
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/criminal-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Criminal Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/business-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Business Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/health-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Health Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="row mt-md mb-xl">
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/divorce-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Divorce Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/capital-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Capital Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<img src="img/demos/law-firm/icons/accident-law.png" alt="" />
								</div>
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Accident Law</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									<a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>







				

				<section class="parallax section section-text-light section-parallax section-center mt-xl" data-plugin-parallax data-plugin-options='{"speed": 1.5}' data-image-src="img/demos/law-firm/parallax-law-firm-2.jpg">
					<div class="container">
						<div class="row">
							<div class="counters counters-text-light">
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-user-following icons"></i>
										<strong data-to="20000" data-append="+">0</strong>
										<label>Happy Clients</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-diamond icons"></i>
										<strong data-to="15">0</strong>
										<label>Years in Business</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-badge icons"></i>
										<strong data-to="3">0</strong>
										<label>Awards</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-paper-plane icons"></i>
										<strong data-to="178">0</strong>
										<label>Successful Stories</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Son Haberler</h2>
							<div class="divider divider-primary divider-small divider-small-center mb-xl">
								<hr>
							</div>
						</div>
					</div>
					<div class="row mt-xl">
						
						<?php  
						$iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit 4");
						$iceriksor->execute();

						while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {
										
						?>

						<div class="col-md-6">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none ">
											
												<img src="<?php echo $icerikcek['icerik_resimyol'];?>" class="img-responsive" alt="" style="width: 250px; height: 150px; padding: 10px;">
											
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><?php echo $icerikcek['icerik_ad'];?></h2>
												<span class="post-meta">
													<!--<span>January 10, 2016 | <a href="#">John Doe</a></span>-->
												</span>
												<p class="font-size-md"><?php echo substr($icerikcek['icerik_detay'],0,350);?>...</p>
												<a class="mt-md" href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"><hr>Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>

								</div>
					

							<?php } ?>

					</div>
				</div>

			</div>

			

<?php include 'footer.php';?>