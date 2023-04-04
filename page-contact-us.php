<?php
/**
 * This is the page-contact-us.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 * 
 * 
 * 
 */

get_header();
?>

<div class="container">

    <div class="">

        <!-- BreadCrumbs -->
        <div class="breadcrumbs">
            <a href="" class="">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>"
                alt="Chevron Right" class="icon">
            <a href="" class="">Contact</a>
        </div>

        <!-- Contact Form -->
        <div class="contact">

            <!-- Contact Form Intro -->
            <div class="mb-3">
                <h1>Get in Touch</h1>
                <p>We would love to hear from you, so please get in touch with us if you have any inquiries or feedback.
                </p>
            </div>
            <!-- End of Contact Form Into -->


            <!-- Contact Form Input -->
            <div class="contact-form">
                <form action="">

                    <!--First name-->
                    <div class="">
                        <label for="fname">
                            <p>First name
                            <p>
                        </label>

                        <input type="text" id="fname" name="fname" required>
                    </div>

                    <!--Last name-->
                    <div class="">
                        <label for="lname">
                            <p>Last Name</p>
                        </label>

                        <input type="text" id="lname" name="lname" required>
                    </div>

                    <!--Email Address-->
                    <div class="">
                        <label for="email">
                            <p>Email Address</p>
                        </label>

                        <input type="email" id="email" name="email" required>

                    </div>

                    <!--Phone Number-->
                    <div class="">

                        <label for="phone">
                            <p>Phone Number (optional)</p>
                        </label>

                        <input type="tel" id="phone" name="phone">

                    </div>

                    <!-- Subject -->
                    <div class="">

                        <label for="subject">
                            <p>Subject</p>
                        </label>

                        <input type="text" id="subject" name="subject" required>

                    </div>

                    <!-- Message Text Area -->
                    <div class="">

                        <label for="message">
                            <p>Message</p>
                        </label>

                        <textarea name="message" id="message"></textarea>

                    </div>

                    <!-- Submit -->
                    <input type="submit" name="submit" id="submit">
                </form>

            </div>
            <!-- End of Contact Form Input -->

        </div>
        <!-- End of Form -->


        <!-- Contact SideBar -->
        <div class="">

            <!-- Contact Info -->
            <div class="">
                <h2>Contact Info</h2>

                <h3><a href="mailto:info@jalfamgamesinc.com">info@jalfamgamesinc.com</a></h3>

                <h3><a href="tel: 780-123-4556">780-123-4556</a></h3>
            </div>


            <!--Social Media-->
            <div class="">
                <h2>Social Media</h2>

                <div class="">
                    <img src="" alt="" href="" />
                    <a href="#">facebook.com/jalfamgamesinc</a>
                </div>

                <div class="">
                    <img src="" alt="" />
                    <a href="#">twitter.com/jafamgamesinc</a>
                </div>

                <div class="">
                    <img src="" alt="" />
                    <a href="#">instagram.com/jalfamgamesinc</a>
                </div>
            </div>

        </div>
        <!-- Emd of Contact SideBar -->

        <?php
get_sidebar();
get_footer();