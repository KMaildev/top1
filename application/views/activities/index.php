<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="portfolio light-gray-bg padding-top-70 padding-bottom-20" style="background-color: #34479d !important;">
	<div class="container">
		<div class="heading text-center">
			<h4 style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
				Our Recent Work And Activities
			</h4>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12">
				<!-- ajax-work col-4 -->
				<div class="">
					<?php
					foreach ($activities as $activitie) {
						$temp_arr = explode(',', $activitie->photo);
						$total_count = count($temp_arr);
						for ($i = 0; $i < $total_count; $i++) {
					?>
							<div class="col-md-3" style="padding: 7px;">
								<div class="ajax-work">
									<div class="cbp-item ana dial growth">
										<article class="item">
											<img class="img-responsive" src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="" style="width: 100%; height: 200px; object-fit: cover; background-size: corver; border: 3px solid white;" data-enlargeable="">
											<div class="over-detail">
												<div class="top-detail">
													<a href="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" class="cbp-lightbox" data-title="">
														<i class="icon-magnifier"></i>
													</a>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</section>

<?php $this->load->view('templates/footer'); ?>