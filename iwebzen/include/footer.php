<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="f-first-box">
                    <img src="images/designsbullslogofooter.png" alt="" class="img-fluid" />
                    <p>We are a fully in-house digital agency focusing on branding, marketing, web design and development with clients ranging from start-ups.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="f-links-box">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="logo-design.php">Logo design</a></li>
                        <li><a href="branding.php">Branding</a></li>
                        <li><a href="web-design.php">Web design & development</a></li>
                        <li><a href="e-commerce.php">e-Commerce</a></li>
                        <li><a href="video-animation.php">Video animation</a></li>
                        <li><a href="social-media-marketing.php">Social marketing</a></li>
                        <li><a href="content-writing.php">Content writing</a></li>
                        <li><a href="seo-services.php">SEO</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="f-links-box">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                        <li><a href="combo-packages.php">Combo Pakcages</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="order/terms.php">Terms & Condition</a></li>
                        <li><a href="order/privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="f-last-box">
                    <h5>quick links</h5>
                    <ul>
                        <li><a href="mailto:<?= SITE_INFO_EMAIL ?>"><?= SITE_INFO_EMAIL ?></a></li>
                        <!--<li><a href="tel:<?= SITE_PHONE_NUMBER ?>"><?= SITE_PHONE_NUMBER ?></a></li>-->
                        <li><a href="javascript:void(0);"><?= SITE_ADDRESS ?></a></li>
                    </ul>
                    <div class="social-links-box">
                        <a href="javascript:void(0);"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-sec">
    <div class="container">
        <div class="copyright-box">
            <p>© copyright <?php echo date('Y'); ?> <?= SITE_NAME_TEXT ?>. All rights reserved</p>
        </div>
    </div>
</div>

<script src="js/plugin.js"></script>
<script src="js/form_validator.min.js"></script>
<script src="js/custom.js"></script>

<?php
include 'chat.php';
?>

</body>

</html>