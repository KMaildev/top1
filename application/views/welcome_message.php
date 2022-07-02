<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<?php $this->load->view('templates/slider'); ?>

<div id="content">
	<section class="job padding-bottom-70" style="background-color: #34479d !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="font-normal margin-top-50 margin-bottom-20" style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
						<center>
							Available Jobs
						</center>
					</h4>
					<div id="accordion">
						<?php
						foreach ($oversea_jobs as $key => $value) {
							if ($key == 5) {
								break;
							}
						?>
							<div class="job-content job-post-page margin-top-20">
								<div class="panel panel-default">
									<div class="star-save">
										<a href="<?php echo site_url('job_seeker'); ?>" title="Job Seeker" style="background-color: blue;">
											<i class="fa fa-upload"></i>
										</a>
										<a href="<?php echo site_url('job_seeker/cv_upload'); ?>" title="Upload CV" style="background-color: green;">
											<i class="fa fa-file"></i>
										</a>

										<a href="<?php echo site_url('contact'); ?>" title="Contact Us" style="background-color: red;">
											<i class="fa fa-phone"></i>
										</a>
									</div>
									<div class="panel-heading">
										<a href="<?php echo site_url('job_seeker'); ?>">
											<div class="job-tittle">
												<div class="media-left">
													<div class="date" style="background-color: #34479d; padding: 4px;">
														<i class="fa fa-briefcase fa-lg"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														<?php echo $value->name; ?>
													</h5>
													<span>
														Available Jobs
													</span>
												</div>
											</div>
										</a>
										<p style="text-align: justify;">
											<?php echo $value->description ?>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('templates/footer_slider'); ?>
</div>

<?php $this->load->view('templates/footer'); ?>