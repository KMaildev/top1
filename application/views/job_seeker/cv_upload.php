<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12" style="background-color: #34479d; padding: 20px;">
            <form method="post" action="<?php echo site_url('job_seeker/upload_cv'); ?>" enctype="multipart/form-data">
                <div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
                    <div class="job-bx-title clearfix">
                        <h3 style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Upload Your CV
                        </h3>
                    </div>
                    <p style="color: white;">
                        We help employees transition quickly and successfully into new jobs and career opportunities.
                    </p>
                    <?php $this->load->view('templates/shared/alert'); ?>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-12" style="padding-top: 20px;">
                    <label style="color: white;">Name</label>
                    <input type="text" style="background-color: white;" class="form-control" required placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off">
                </div>

                <div class="col-xl-4 col-md-4 col-sm-12" style="padding-top: 20px;">
                    <label style="color: white;">Phone</label>
                    <input type="text" style="background-color: white;" class="form-control" required placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                </div>

                <div class="col-xl-4 col-md-4 col-sm-12" style="padding-top: 20px;">
                    <label style="color: white;">Choose Your CV File</label>
                    <input type="file" name="attached_file" accept=".pdf, .doc, .docx" class="form-control" required>
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