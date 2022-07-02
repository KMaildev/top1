<footer>
    <div class="container">
        <div class="row">

            <!-- ABOUT -->
            <div class="col-md-3"> <img src="<?php echo base_url(); ?>public/assets/images/logo-footer.png" alt="">
                <div class="about-foot">
                    <ul>
                        <li>
                            <p><i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> (123) 456-7890</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> example@example.com</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Twitter Feed -->
            <div class="col-md-3">
                <h6>Twitter Feed</h6>
                <ul class="tweet">
                    <li>
                        <p>A Guide to Better Brainstorming <a href="#." class="primary-color">http://enva.to/nfNrz</a> by @jeff_haden </p>
                        <span>May 22, 2014</span>
                    </li>
                    <li>
                        <p>Are you a student? You only have 48 hours left to grab a full year on Tuts+ for just $45! Don't miss out. <a href="#." class="primary-color">http://ow.ly/McvuJ</a> </p>
                        <span>May 22, 2014</span>
                    </li>
                </ul>
            </div>

            <!-- Photostream -->
            <div class="col-md-3">
                <h6>Photostream</h6>
                <ul class="photo-steam">
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-1.jpg" alt=""></a></li>
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-2.jpg" alt=""></a></li>
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-3.jpg" alt=""></a></li>
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-4.jpg" alt=""></a></li>
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-5.jpg" alt=""></a></li>
                    <li><a href="#."><img src="<?php echo base_url(); ?>public/assets/images/photo-img-6.jpg" alt=""></a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h6>Categories</h6>
                <ul class="tags">
                    <li><a href="#.">User Experience</a></li>
                    <li><a href="#.">html 5</a></li>
                    <li><a href="#.">Css 3</a></li>
                    <li><a href="#.">Web Design</a></li>
                    <li><a href="#.">Social Media</a></li>
                    <li><a href="#.">Web Development</a></li>
                    <li><a href="#.">Print Design</a></li>
                    <li><a href="#.">e-commerce</a></li>
                    <li><a href="#.">Java script</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- RIGHTS -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p> © All Rights Reserved <span class="primary-color">IOD </span></p>
            </div>
            <div class="col-md-6 text-right"> <a href="#.">Privacy Policy</a> <a href="#.">Terms & Conditions</a> </div>
        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url(); ?>public/assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/own-menu.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery.colio.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>
</body>

</html>
<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>