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

        <!-- BreadCrumbs -->
        <div class="breadcrumbs">
            <a href="" class="">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>"
                alt="Chevron Right" class="icon">
            <a href="" class="">Contact</a>
        </div>

     <div class="split-contact">   
        
        <!-- Contact Form Left -->
        <div class="split-contact-left">

            <!-- Contact Form -->
            <div class="contact mb-3">

                <!-- Contact Form Intro -->
                <div class="mb-3">
                    <h2>Get in Touch</h2>
                    <p>We would love to hear from you, so please get in touch with us if you have any inquiries or
                        feedback.
                    </p>
                </div>
                <!-- End of Contact Form Into -->


                <!-- Contact Form Input -->
                <div class="contact-form">
                    <form action="">

                        <!--First name-->
                        <div class="mb-2">
                            <p><label for="fname">First name</label>
                            <p>

                                <input class="input" type="text" id="fname" name="fname" required>
                        </div>

                        <!--Last name-->
                        <div class="mb-2">

                            <p><label for="lname">Last Name</label></p>

                            <input type="text" id="lname" name="lname" required>
                        </div>

                        <!--Email Address-->
                        <div class="mb-2">

                            <p><label for="email">Email Address</label></p>

                            <input type="email" id="email" name="email" required>

                        </div>

                        <!--Phone Number-->
                        <div class="mb-2">

                            <p><label for="phone">Phone Number (optional)</label></p>

                            <input type="tel" id="phone" name="phone">

                        </div>

                        <!-- Subject -->
                        <div class="mb-2">

                            <p><label for="subject">Subject</label></p>

                            <input type="text" id="subject" name="subject" required>

                        </div>

                        <!-- Message Text Area -->
                        <div class="mb-2">

                            <p><label for="message">Message</label></p>

                            <textarea name="message" id="message"></textarea>

                        </div>

                        <!-- Submit -->
                        <input type="submit" class="form-submit" name="submit" id="submit">
                    </form>

                </div>
                <!-- End of Contact Form Input -->

            </div>
            <!-- End of Form -->
        </div>


        <!-- Contact SideBar -->
        <div class="split-contact-right">

            <!-- Contact Info -->
            <div class="contact-info mb-3">
                <h4 class="mb-2">Contact Info</h4>

                <p class="mb-2"><a href="mailto:info@jalfamgamesinc.com">info@jalfamgamesinc.com</a></p>

                <p class="mb-2"><a href="tel: 780-123-4556">204-230-8771</a></p>
            </div>


            <!--Social Media-->
            <div class="mb-3">
                <h4 class="mb-2">Social Media</h4>

                <p class="mb-1">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/facebook-orange.png' ?>"
                        class="icon" alt="" href="#" />
                    <a href="#">facebook.com/jalfamgamesinc</a>
                </p>

                <p class="mb-1">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/twitter-orange.png' ?>"
                        class="icon" alt="" />
                    <a href="#">twitter.com/jafamgamesinc</a>
                </p>

                <p class="mb-1">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/instagram-orange.png' ?>"
                        class="icon" alt="" />
                    <a href="#">instagram.com/jalfamgamesinc</a>
                </p>
            </div>

        </div>
        <!-- Emd of Contact SideBar -->
    </div>

    <?php
get_footer();