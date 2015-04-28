<?php 
/*
 * Template Name: Mary Kate Cary Contact Page!
 * Description: API Developed to Integrate social networks feeds and wp posts
 * Author: Xadim
 * Author URI: http://www.hoondesigns.com
 * Version: 1.0
 *
 * Copyright: (c) 2013 hoondesigns, LLC. (khadime@hoondesigns.com)
 *
 * License: License v1.0
 * License URI: http://www.hoondesigns.com/
 *
 * @author    Xadim
 * @category Social Network Feeds
 * @copyright Copyright (c) 2014, hoondesigns, LLC.
 * @license   http://www.hoondesigns.com/
*/



/*Content elements
	'post_status'
   'post_type'
   'post_author'
   'ping_status'
   'post_parent'
   'menu_order'
   'to_ping'
   'pinged'
   'post_password'
   'guid'
   'post_content_filtered'
   'post_excerpt'
   'import_id'
   'post_content'
   'post_title'
   'ID'
   'post_date'
   'post_date_gmt'
   'comment_status'
   'post_name'
   'post_modified'
   'post_modified_gmt'
   'post_mime_type'
   'comment_count'
   'ancestors'
   'post_category'
   'tags_input'
   'filter'
*/
get_header(); ?>



<div class="content-section-a header-contact">
    <div id="form-section"></div>
    <div class="inner">
        <div class="row">
            <div class="col-lg-6 pro-portrait">
                <img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/mary-kate-cary-professional.png">
            </div>
            <div class="col-lg-6">
                <div class="intro-message">
                  <form id="contactFrm" role="form" method="post" action="http://marykatecary.com/mail.php" class="contactForm" enctype="multipart/form-data" novalidate>
                    <?php
                      if(isset($_GET['send']) && ($_GET['send']=="yes")){
                        echo "<div class='reussi'>Wohooooo! Thank you for your message, we'll get back to you as soon as possible...</div>";
                      }elseif(isset($_GET['send']) && ($_GET['send']=="errors")){
                        echo "<div class='fail'>Oooooops! There's an error in your message, the email is not sent...</div>";
                      }elseif(isset($_GET['send']) && ($_GET['send']=="error")){
                        echo "<div class='fail'>Oooooops! There's an error in your form, the email is not sent...</div>";
                      }
                    ?>
                      <h2 class="section-head_white">GET IN TOUCH</h2>
                        <div class="col-lg-12">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label>First Name*</label>
                                    <input name="firstname" class="form-control" required x-moz-errormessage="Fill this out."> 
                              </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Last Name*</label>
                                    <input name="lastname" class="form-control" required x-moz-errormessage="Fill this out."> 
                              </div>
                            </div>
                            <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Email address*</label>
                                  <input name="email" type="email" class="form-control" required x-moz-errormessage="Fill this out."> 
                              </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Your message*</label>
                                      <textarea name="yourmessage"  class="form-control" rows="5" required x-moz-errormessage="Fill this out."></textarea> 
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group ">
                            <button type="submit" value="submit" class="btn btn-danger">SUBMIT</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
            <div class="col-lg-6 mobile-portrait">
                <img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/mary-kate-cary-professional.png" alt="Female speechwritter">
            </div>
        </div>

    </div>
<div id="seminar-section"></div>
</div>

<div class="content-section-a">
<div class="container contact-lead">
<div class="row">
<h2 class="section-title">LEADERSHIP SEMINARS</h2>
<div class="col-lg-6 col-md-6 col-sm-12">
  <a href="http://marykatecary.com/41on41/#leadership-seminar">
    <p class="leads"><iframe src="http://player.vimeo.com/video/121801633?title=0&amp;byline=0&amp;portrait=0" width="100%" height="260px" frameborder="0"></iframe></p>
  </a>
</div>
<div class="col-lg-6 col-md-6">
  <p class="plead">With the support of the Bush Library Foundation, Mary Kate Cary works with corporations, non-profit organizations and educational institutions to bring to life examples of President Bush’s leadership style. Using behind-the-scenes stories told by the 41 extraordinary storytellers she interviewed for 41ON41, Cary shares short video clips that have never been seen by the public of George H.W. Bush’s decision-making style and leadership traits, told by family members and Oval Office insiders ranging from Secret Service agents and Cabinet officers to fellow world leaders.  For example, here’s a clip on President Bush’s humility that Cary recently showed in a leadership seminar.
    </p><p class="plead">If you would like to contact Mary Kate Cary about speaking to your organization about President Bush and how your employees can learn from his leadership and decision-making style, please contact her by email using the <a href="#form-section">form above</a>.</p>
</div>
</div>
</div>
</div>



<?php get_footer(); ?>


