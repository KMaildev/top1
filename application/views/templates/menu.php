<header>
    <!-- Top bar -->
    <div class="top-bar">
        <div class="top-info">
            <div class="container">
                <ul class="personal-info">
                    <li>
                        <p>
                            <i class="fa fa-phone"></i>
                            +1 123 456 7890
                        </p>
                    </li>
                    <li>
                        <p>Hi! Here comes custom txt line </p>
                    </li>
                    <li>
                        <p>example@example.com </p>
                    </li>
                </ul>
                <div class="right-sec">
                    <ul class="social">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#."><i class="fa fa-google"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="sticky">
            <div class="container">

                <div class="logo">
                    <a href="<?php echo site_url('welcome'); ?>">
                        <img class="img-responsive" src="<?php echo base_url(); ?>public/assets/images/logo.png" alt="">
                    </a>
                </div>

                <!-- Nav -->
                <ul class="nav ownmenu">
                    <li class="active">
                        <a href="<?php echo site_url('welcome'); ?>">
                            Home
                        </a>
                    </li>

                    <li class="active">
                        <a href="<?php echo site_url('about'); ?>">
                            About Us
                        </a>
                    </li>

                    <li class="active">
                        <a href="javascript:void(0);">
                            Overseas Jobs
                        </a>
                        <ul class="dropdown">
                            <?php
                            foreach ($country_lists as $key => $value) {
                            ?>
                                <li>
                                    <a href="<?php echo site_url('oversea_jobs/category/' . $value->id); ?>">
                                        <?php echo $value->name; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="javascript:void(0);">
                            Application Form
                        </a>

                        <ul class="dropdown">
                            <li>
                                <a href="<?php echo site_url('job_seeker'); ?>">
                                    Job Seeker
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('job_seeker/cv_upload'); ?>">
                                    Upload CV
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('employers'); ?>">
                                    Employers
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="active">
                        <a href="<?php echo site_url('activities'); ?>">
                            Activities
                        </a>
                    </li>

                    <li class="active">
                        <a href="<?php echo site_url('contact'); ?>">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>