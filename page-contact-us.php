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


    <section>
        <!--breadcrumbs here-->
        <div class="container breadcrumbs">
            <a href="" class="">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
            <a href="" class="">Contact</a>
        </div>
        
        <div class="container contact">
            <div class="mb-3">
                <div class="">
                    <h1>Get in Touch</h1>
                </div>
                <div class="">
                    <p>We would love to hear from you, so please get in touch with us if you have any inquiries or feedback.</p>
                </div>
            </div>
            
            <div class=""> <!--Form starts-->
                <form>
                <div class="">
                    <div class=""> <!--First name-->
                        <label for="fname"><p>First name<p></label>
                        <input type="text" id="fname" name="fname" required>
                    </div>
                    
                    <div class=""> <!--Last name-->
                        <label for="lname"><p>Last Name</p></label>
                        <input type="text" id="lname" name="lname" required>
                    </div>

                    <div class=""> <!--Email Address-->
                        <label for="email"><p>Email Address</p></label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class=""> <!--Phone Number-->
                        <label for="phone"><p>Phone Number (optional)</p></label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="">
                        <label for="subject"><p>Subject</p></label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="">
                        <label for="message"><p>Message</p></label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="">
                    

                    

                    <submit>Send Message</submit>

                </div>
                
        </div> <!--Form ends-->
        <div class="">
            <div class=""> <!--Contact Info-->
                <div class="">
                    <h2>Contact Info</h2>
                </div>
                <div class="">
                    <div class="">
                        <h3><a href="mailto:info@jalfamgamesinc.com">info@jalfamgamesinc.com</a></h3>
                    </div>
                    <div class="">
                        <h3><a href="tel: 780-123-4556">780-123-4556</a></h3>
                    </div>
                </div>
                
            </div>
            <div class=""> <!--Social Media-->
                <div class="">
                    <h2>Social Media</h2>
                </div>
                <div class="">
                    <div class="">
                        <img src="" alt=""/>
                        <a href="#">facebook.com/jalfamgamesinc</a>
                    </div>
                    <div class="">
                        <img src="" alt=""/>
                        <a href="#">twitter.com/jafamgamesinc</a>
                    </div>
                    <div class="">
                        <img src="" alt=""/>
                        <a href="#">instagram.com/jalfamgamesinc</a>
                    </div>

                </div>
            </div>
        </div>   
    
    </section>


    <?php
get_sidebar();
get_footer();
