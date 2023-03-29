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
        
        <div class="">
            <div class="">
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
                        <label for="fname">First name</label>
                        <input type="text" id="fname" name="fname" required>
                    </div>
                    <div class=""> <!--Last name-->
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" required>
                    </div>
                    <div class=""> <!--Email Address-->
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class=""> <!--Phone Number-->
                        <label for="phone">Phone Number (optional)</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                </div>
                </form>
                <form>
                <div class="">
                    <div class="">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                </form>
                    <div class="">
                        <textarea></textarea>
                    </div>
                <form>
                    <submit>Send Message</submit>
                </form>
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
