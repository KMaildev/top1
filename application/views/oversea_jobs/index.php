<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<div id="content">
	<section class="job padding-bottom-70" style="background-color: #34479d !important;">
		<div class="container">
			<div class="col-md-9">
				<center>
					<h4 class="font-normal margin-top-50 margin-bottom-20" style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
						Available Jobs in <?php echo $country_title->name; ?>
					</h4>
				</center>
				<div id="accordion">
					<?php
					foreach ($oversea_jobs as $key => $value) {
						if ($value->country_id == $country_title->id) {
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
														Job in
														<?php echo $country_title->name; ?>
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
					<?php } ?>
				</div>
			</div>

			<div class="col-md-3">
				<center>
					<h4 class="font-normal margin-top-50 margin-bottom-20" style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
						Activites
					</h4>
				</center>
				<div class="job-sider-bar">
					<?php
					foreach ($activities as $activitie) {
						$temp_arr = explode(',', $activitie->photo);
						$total_count = count($temp_arr);
						for ($i = 0; $i < $total_count; $i++) {
					?>
							<img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="" style="width: 100%; height: auto; object-fit: cover; background-size: corver; border: 3px solid blue; margin: 5px;" data-enlargeable="">
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('templates/footer'); ?>