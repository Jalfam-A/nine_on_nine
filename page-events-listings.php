<?php
/**
 * This is the page-events-listings-us.php file
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


    <section class="event-listing-page">
        <div class=""> 
            <div class=""> <!--top cards start-->
                <div class="">
                    <h1>Upcoming Events</h1>
                </div>
                <div class=""> <!--First card start-->
                    <?php
                        get_template_part('template-parts/single', 'chinese_new_years')
                    ?>
                </div> <!--First card end-->
                <div class=""> <!--Second card start-->
                    <div class="">
                        <img src="" alt="" class="">
                    </div>
                    <div class="">
                        <div class="">
                            <h2>Event</h2>
                        </div>
                        <div class=""> <!--Main text section-->
                            <h3>9 on 9 Tournament - University Edition</h3>
                        </div>
                        <div class="">
                            <p>Think your skills surpass your friends? Then show them what you can do in the official
                                9on9 Tournament - University Edition. Hope you can all attend and have fun. All ages welcome!
                                Brings lot of water though.</p>
                        </div>
                        <div class=""> <!--time, date, place, price-->
                            <div class="">
                                <div class="">
                                    <p>11:00 AM</p>
                                </div>
                                <div class="">
                                    <p>Wed, Feb 22, 2023</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <p>SUB, University of Alberta</p>
                                </div>
                                <div class="">
                                    <p>$10</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p>SEE EVENT DETAILS</p>
                            <svg></svg><!--arrow-->
                        </div>
                    </div>
                </div> <!--Second card end-->
            </div> <!--top cards end-->
            <div class="">
                <div class="">
                    <h3>Previous News and Events</h3>
                </div>
                <div class=""> <!--event bottom cards-->
                    <div class=""> <!--top-layer event bottom cards-->
                        <div class=""> <!--card 1-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>NEWS</h2>
                                    </div>
                                    <div class="">
                                        <h3>400 games sold in Edmonton</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 1-->
                        <div class=""> <!--card 2-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>EVENT</h2>
                                    </div>
                                    <div class="">
                                        <h3>9 on 9 Tournament - All Ages Welcome!</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 2-->
                    </div> <!--end of top-layer event bottom cards-->


                    <div class=""> <!--middle-layer event bottom cards-->
                        <div class=""> <!--card 3-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>NEWS</h2>
                                    </div>
                                    <div class="">
                                        <h3>Holiday Madness</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 3-->
                        <div class=""> <!--card 4-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>NEWS</h2>
                                    </div>
                                    <div class="">
                                        <h3>Black Friday Sales</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 4-->
                    </div> <!--end of middle-layer event bottom cards-->


                    <div class=""> <!--bottom-layer event bottom cards-->
                        <div class=""> <!--card 5-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>EVENT</h2>
                                    </div>
                                    <div class="">
                                        <h3>9 on 9 Tournament - Seniors Edition</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 5-->
                        <div class=""> <!--card 6-->
                            <div class=""> <!--image side of card-->
                                <img src="" alt="">
                            </div>
                            <div class=""> <!--text side of card-->
                                <div class="">
                                    <div class="">
                                        <h2>EVENT</h2>
                                    </div>
                                    <div class="">
                                        <h3>9 on 9 Tournament - Fundraiser</h3>
                                    </div>
                                </div>
                                <div class="">
                                    <p>01/30/2023</p>
                                </div>
                            </div>
                        </div> <!--end of card 6-->
                    </div> <!--end of bottom-layer event bottom cards-->
                </div> <!--end of event bottom cards-->
            </div>
        </div>

        <div class=""> <!--Previous and Next Updates button-->
            <div class="">
                <svg></svg>
                <p>Previous Updates</p>
            </div>
            <div class="">
                <svg></svg>
                <p>Next Updates</p>
            </div>
        </div>
        
        
    </section>

<!-- 
    Add comments to all html later
-->

<?php
get_sidebar();
get_footer();
