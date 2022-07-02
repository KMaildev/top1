<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<div class="container">
	<br>
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #34479d; padding: 20px;">
			<form method="post" action="<?php echo site_url('job_seeker/save'); ?>" autocomplete="off">
				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<div class="job-bx-title clearfix">
						<h3 style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
							Apply for your job
						</h3>
					</div>
					<p style="color: white;">
						We help employees transition quickly and successfully into new jobs and career opportunities.
					</p>
					<?php $this->load->view('templates/shared/alert'); ?>
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Name</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">NRC No</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="NRC No" name="nrc" value="<?php echo set_value('nrc'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Email Address</label>
					<input type="email" style="background-color: white;" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Phone Number</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Date Of Birth</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Birth" name="date_of_birth" value="<?php echo set_value('name'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Health Status</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Health Status" name="health_status" value="<?php echo set_value('health_status'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Age</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Age" name="age" value="<?php echo set_value('age'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Gender</label>
					<select name="gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Height</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Height" name="height" value="<?php echo set_value('height'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Weight <small><i>(lb)</i></small></label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Weight" name="weight" value="<?php echo set_value('weight'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Passport</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Passport" name="passport" value="<?php echo set_value('passport'); ?>">
				</div>

				<div class="col-xl-6 col-md-6 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Date Of Expiry (Passport)</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Date Of Expiry (Passport)" name="expire_date" value="<?php echo set_value('expire_date'); ?>">
				</div>

				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Education Background</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Education" name="education" value="<?php echo set_value('education'); ?>">
				</div>

				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Skill(Special Skills)</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Skill" name="skill" value="<?php echo set_value('skill'); ?>">
				</div>

				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Language</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="English 4 skills, N5 Japanese" name="language" value="<?php echo set_value('language'); ?>">
				</div>

				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<label style="color: white;">Current Address</label>
					<input type="text" style="background-color: white;" class="form-control" placeholder="Current Address" name="current_address" value="<?php echo set_value('current_address'); ?>">
				</div>

				<div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
					<br>
					<button type="submit" class="btn btn-default">
						<i class="fa fa-envelope-o"></i>
						Apply Now
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<br>
<?php $this->load->view('templates/footer'); ?>