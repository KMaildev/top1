<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<div id="content">
	<section class="padding-bottom-70">
		<div class="contact-info padding-top-100 padding-bottom-100" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url('public/data/contact_bg.webp') ?>);">
			<div class="container">

				<div class="heading white text-center">
					<h4>
						Contact Us
					</h4>
					<span>
						Alternatively, you may contact us by filling up the contact form. Our team will response you shortly.
					</span>
				</div>

				<ul class="row">
					<li class="col-sm-4">
						<article>
							<h5 style="color: #34479d; text-shadow: 5px 5px 5px gray; font-weight: bold;">
								Company Address
							</h5>
							<span>
								<i class="fa fa-map primary-color"></i>
								Office: No.637/B, Zakwal Blk.EainDar 5th st, North Okkalapa, Yangon, Myanmar
							</span>
						</article>
					</li>

					<li class="col-sm-4">
						<article>
							<h5 style="color: #34479d; text-shadow: 5px 5px 5px gray; font-weight: bold;">Phone</h5>
							<span class="primary-color">
								<i class="fa fa-phone-square"></i>
								<a href="tel:09-261588208">
									09 261 588 208,
								</a>
								<a href="tel:09-451653997">
									09 451 653 997
								</a>
							</span>

							<span class="primary-color">
								<i class="fa fa-phone-square"></i>
								<a href="tel:09799843990">
									09 799 843 990,
								</a>
								<a href="tel:09-787060907">
									09 787 060 907
								</a>
							</span>
							<br><br>
						</article>
					</li>

					<li class="col-sm-4">
						<article>
							<h5 style="color: #34479d; text-shadow: 5px 5px 5px gray; font-weight: bold;">
								Email
							</h5>
							<span class="primary-color">
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@top1services.com">
									info@top1services.com,
								</a>
							</span>
							<span class="primary-color">
								<i class="fa fa-envelope"></i>
								<a href="mailto:op1serviceco.ltd@gmail.com">
									op1serviceco.ltd@gmail.com
								</a>
							</span>
							<br><br>
						</article>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="heading text-left margin-top-70 margin-bottom-30">
				<h4 style="color: #34479d; text-shadow: 5px 5px 5px gray; font-weight: bold;">
					Interested in discussing?
				</h4>
			</div>
			<div class="row">
				<div class="col-md-6" style="background-color: #34479d; padding: 20px;">
					<div class="contact-form">
						<form method="post" action="<?php echo site_url('contact/save'); ?>" autocomplete="off" class="contact-form">
							<div class="col-lg-12" style="padding-top: 15px;">
								<?php $this->load->view('templates/shared/alert'); ?>
								<span for="" style="color: white;">Name</span>
								<input name="name" type="text" class="form-control" placeholder="Your Name">
							</div>

							<div class="col-lg-12" style="padding-top: 15px;">
								<span for="" style="color: white;">Email</span>
								<input name="email" type="email" class="form-control" placeholder="Your Email Address">
							</div>

							<div class="col-lg-12" style="padding-top: 15px;">
								<span for="" style="color: white;">Phone</span>
								<input name="phone" type="text" class="form-control" placeholder="Your Phone">
							</div>

							<div class="col-lg-12" style="padding-top: 15px;">
								<span for="" style="color: white;">Subject</span>
								<input name="subject" type="text" class="form-control" placeholder="Subject">
							</div>

							<div class="col-lg-12" style="padding-top: 15px;">
								<span for="" style="color: white;">Message</span>
								<textarea name="message" rows="4" class="form-control" placeholder="Your Message..."></textarea>
							</div>

							<div class="col-lg-12" style="padding-top: 15px;">
								<button type="submit" value="submit" class="btn btn-1" id="btn_submit" onClick="proceed();">Send Message <i class="fa fa-caret-right"></i></button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.7940720095016!2d96.12535801498412!3d16.83656902288809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c6ed51d62f%3A0xd4167f379ab6ac56!2sTop%201%20Overseas%20Employment%20Services%20Co.%2C%20Ltd.!5e0!3m2!1sen!2smm!4v1656772145583!5m2!1sen!2smm" width="600" height="605" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('templates/footer'); ?>