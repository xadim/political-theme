<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!doctype html>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- include jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/js/testimonials.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
   $('#testimonials')
    .before('<div id="nav">')
    .cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, scrollRight, shuffle
        speed: 800,
        timeout: 9000
       // pager:  '#nav'
     });

//audio player//

    var audio;
    var playlist;
    var tracks;
    var current;

    init();
    function init(){
        current = 0;
        audio = $('audio');
        playlist = $('#playlist');
        tracks = playlist.find('li a');
        len = tracks.length - 1;
        audio[0].volume = .70;
        audio[0].play();
        playlist.find('a').click(function(e){
            e.preventDefault();
            link = $(this);
            current = link.parent().index();
            run(link, audio[0]);
        });
        audio[0].addEventListener('ended',function(e){
            current++;
            if(current == len){
                current = 0;
                link = playlist.find('a')[0];
            }else{
                link = playlist.find('a')[current];    
            }
            run($(link),audio[0]);
        });
    }
    function run(link, player){
            player.src = link.attr('href');
            par = link.parent();
            par.addClass('active').siblings().removeClass('active');
            audio[0].load();
            audio[0].play();
    }    
});
</script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <meta name="author" content="Mary Kate Cary is a professional speechwriter specializing in political and corporate communications. Located in Washington, D.C.">
    <meta name="keywords" content="female, Conservative, Republican, Speechwriter, female speechwriter, female republican, female conservative">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

<meta name="viewport" content="width=device-width, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#444">
<!--[if lt IE 9]><script type="text/javascript">window.location = "/unsupported_browser/";</script><![endif]-->
<link rel="icon" type="image/png" href="/static/images/favicon.png">

<link rel="stylesheet" href="http://marykatecary.com/wp-content/themes/MARYKATECARY/css/mary_kate.css" type="text/css" />
<link rel="stylesheet" href="http://marykatecary.com/wp-content/themes/MARYKATECARY/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="http://marykatecary.com/wp-content/themes/MARYKATECARY/css/landing-page.css" type="text/css" />
</head>

<body class='homepage'>
<div class="header-front">
<?php 

  if ( is_front_page()) {
    ?>
    <div class="header-front">
    <a id="top" class="anchor"></a>
    <div id="isMobile"></div>

    <div class="bgimage-container">
        <style type="text/css">
            
                   #bgimage-2 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-01.jpg');
                        opacity: 1;
                    }    
            
            @media screen and (min-width : 44em) {
            
                #bgimage-1 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-01.jpg');
                        display: block;
                }
            
                #bgimage-2 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-02.jpg');
                        display: block;
                }
            
                #bgimage-3 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-03.jpg');
                        display: block;
                }
                #bgimage-4 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-04.jpg');
                        display: block;
                }
                #bgimage-5 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-05.jpg');
                        display: block;
                }
                #bgimage-6 {
                        background-image: url('http://marykatecary.com/wp-content/themes/MARYKATECARY/img/slides/Mary-Kate-Cary-Speechwriter-41ON41-06.jpg');
                        display: block;
                }
            
            }
        </style>
        
            <div class="bgimage" id="bgimage-1" style="z-index: 0;"></div>
        
            
            <div class="bgimage mobile" id="bgimage-2" style="z-index: 0;"></div>
        
            <div class="bgimage" id="bgimage-3" style="z-index: 0;"></div>
            <div class="bgimage" id="bgimage-4" style="z-index: 0;"></div>
            <div class="bgimage" id="bgimage-5" style="z-index: 0;"></div>
            <!--<div class="bgimage" id="bgimage-6" style="z-index: 0;"></div>-->
        
        <header id="hero">
            <div id="logo">
                <a href="/#about"><h1 style="fill:blue;" class="logo-color"></h1></a>
                
               <!--<div class="tagline" id="tagline1" style="display:none;">large-scale information technology</div>
                <div class="tagline" id="tagline2" style="display:none;">business and strategic consulting</div>
                <div class="tagline" id="tagline3" style="display:none;">veteran-owned small business</div>
                <div class="tagline longfade" id="tagline4" style="display:none;">It&rsquo;s about service.</div>-->
            </div>

            <a href="/#about" class="scroll-down animate">
                <div class="ic_scroll_down"></div>
            </a>

            <nav id="main">
                <a href="javascript:toggleMobileMenu();" id="mobileMenuOpen"><svg xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 32 32" enable-background="new 0 0 32 32"><path d="m4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2h-24c-1.104 0-2 .896-2 2s.896 2 2 2m24 4h-24c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2m0 8h-24c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2" fill="#B1B1B1"/></svg></a>
                <a href="/#top" id="nav-logo"><h1 class="logo-dark logo">MaryKate</h1></a>
                <ul id="fullmenu">
                    <li><a href="#about" id="nav-about">ABOUT</a>
                    <li><a href="#multimedia" id="nav-multimedia">MULTIMEDIA</a>
                    <li><a href="/41on41/" id="nav-41on41">41 ON 41</a>
                    <li><a href="/blog/" id="nav-contact">BLOG</a>
                    <li><a href="/contact/" id="nav-contact">CONTACT</a>
                    <li class="overMobileView"><a href="https://twitter.com/mkcary" target="_blank" id="nav-linkedin">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="24px" viewBox="114.823 93.315 43.743 35.549" enable-background="new 114.823 93.315 43.743 35.549"
                         xml:space="preserve">
                          <path fill="#5FA9DD" d="M158.566,97.523c-1.609,0.714-3.339,1.196-5.154,1.413c1.853-1.111,3.276-2.87,3.945-4.965
                        c-1.733,1.028-3.654,1.775-5.698,2.178c-1.637-1.744-3.97-2.834-6.551-2.834c-4.956,0-8.975,4.018-8.975,8.974
                        c0,0.704,0.08,1.389,0.232,2.045c-7.458-0.375-14.071-3.947-18.497-9.376c-0.772,1.325-1.215,2.867-1.215,4.512
                        c0,3.113,1.584,5.86,3.992,7.47c-1.471-0.047-2.855-0.45-4.065-1.123c0,0.038-0.001,0.075-0.001,0.113
                        c0,4.348,3.094,7.976,7.199,8.8c-0.753,0.205-1.546,0.314-2.365,0.314c-0.578,0-1.14-0.057-1.688-0.161
                        c1.143,3.565,4.457,6.16,8.384,6.233c-3.072,2.406-6.941,3.841-11.146,3.841c-0.725,0-1.439-0.042-2.141-0.125
                        c3.972,2.546,8.689,4.032,13.757,4.032c16.507,0,25.534-13.675,25.534-25.534c0-0.389-0.009-0.776-0.026-1.161
                        C155.842,100.903,157.363,99.323,158.566,97.523z"/>
                    </svg>
                    </a>
                    <li class="overMobileView"><a href="https://www.facebook.com/41on41"  target="_blank" id="nav-linkedin">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="24px" height="24px" viewBox="141.318 101.674 28 28" enable-background="new 141.318 101.674 28 28" xml:space="preserve">
                            <path fill="#3C5A9A" d="M167.773,101.674h-24.91c-0.854,0-1.545,0.692-1.545,1.545v24.909c0,0.854,0.691,1.545,1.545,1.545h13.411
                            v-10.843h-3.649v-4.226h3.649v-3.116c0-3.617,2.208-5.586,5.435-5.586c1.545,0,2.873,0.115,3.261,0.167v3.779l-2.238,0.001
                            c-1.754,0-2.094,0.833-2.094,2.057v2.698h4.185l-0.545,4.226h-3.64v10.843h7.136c0.853,0,1.545-0.692,1.545-1.545v-24.909
                            C169.318,102.365,168.625,101.674,167.773,101.674z"/>
                        </svg>
                    </a>
                    <li class="overMobileView"><a href="https://www.linkedin.com/pub/mary-kate-cary/28/79/106"  target="_blank" id="nav-linkedin">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="24px" height="24px" viewBox="9.226 9.228 35.552 35.549" enable-background="new 9.226 9.228 35.552 35.549"
                             xml:space="preserve">
                            <path fill="#007BB6" d="M42.144,9.228H11.85c-1.448,0-2.624,1.148-2.624,2.562v30.423c0,1.415,1.176,2.564,2.624,2.564h30.294
                            c1.449,0,2.634-1.149,2.634-2.564V11.789C44.778,10.375,43.593,9.228,42.144,9.228z M19.771,39.52h-5.275V22.555h5.275V39.52z
                             M17.133,20.237c-1.69,0-3.057-1.37-3.057-3.059c0-1.686,1.366-3.057,3.057-3.057c1.687,0,3.056,1.371,3.056,3.057
                            C20.189,18.866,18.82,20.237,17.133,20.237z M39.518,39.52h-5.267v-8.249c0-1.969-0.039-4.499-2.741-4.499
                            c-2.743,0-3.163,2.144-3.163,4.356v8.392h-5.27V22.555h5.058v2.318h0.072c0.704-1.333,2.425-2.741,4.988-2.741
                            c5.336,0,6.322,3.513,6.322,8.083V39.52z"/>
                        </svg>
                    </a><li class="inMobileView">
                        <span><a href="https://twitter.com/mkcary" target="_blank" id="nav-twitter"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/twitter.png" alt="Mary Kate Cary is a female speechwriter."></a></span>
                        <span><a href="https://www.facebook.com/41on41"  target="_blank" id="nav-linkedin"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/facebook.png" alt="Mary Kate Cary is a female conservative."></a></span>
                        <span><a href="https://www.linkedin.com/pub/mary-kate-cary/28/79/106"  target="_blank" id="nav-linkedin"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/linkedin.png" alt="Mary Kate Cary is a female republican."></a></span>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <?php
  }else{
$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
?>
<header class="not-fullscreen">
        <nav id="main">
            <a href="javascript:toggleMobileMenu();" id="mobileMenuOpen"><svg xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" enable-background="new 0 0 32 32"><path d="m4 10h24c1.104 0 2-.896 2-2s-.896-2-2-2h-24c-1.104 0-2 .896-2 2s.896 2 2 2m24 4h-24c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2m0 8h-24c-1.104 0-2 .896-2 2s.896 2 2 2h24c1.104 0 2-.896 2-2s-.896-2-2-2" fill="#B1B1B1"/></svg></a>
            <a href="/#top" id="nav-logo"><h1 class="logo-dark logo">MaryKate</h1></a>
            <ul id="fullmenu">
                <li><a href="/#about" id="nav-about">ABOUT</a>
                <li><a href="/#multimedia" id="nav-multimedia">MULTIMEDIA</a>
                <li><a href="/41on41/" id="nav-41on41"<?php if ($monUrl == "http://marykatecary.com/41on41/") { echo 'class="activate"';}?>>41 ON 41</a>
                <li><a href="/blog/" id="nav-contact"<?php if ($monUrl == "http://marykatecary.com/blog/") {echo 'class="activate"';}?>>BLOG</a>
                <li><a href="/contact/" id="nav-contact"<?php if ($monUrl == "http://marykatecary.com/contact/") {echo 'class="activate"';}?>>CONTACT</a>
                <li class="overMobileView"><a href="https://twitter.com/mkcary" target="_blank" id="nav-linkedin">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="24px" height="24px" viewBox="114.823 93.315 43.743 35.549" enable-background="new 114.823 93.315 43.743 35.549"
                     xml:space="preserve">
                      <path fill="#5FA9DD" d="M158.566,97.523c-1.609,0.714-3.339,1.196-5.154,1.413c1.853-1.111,3.276-2.87,3.945-4.965
                    c-1.733,1.028-3.654,1.775-5.698,2.178c-1.637-1.744-3.97-2.834-6.551-2.834c-4.956,0-8.975,4.018-8.975,8.974
                    c0,0.704,0.08,1.389,0.232,2.045c-7.458-0.375-14.071-3.947-18.497-9.376c-0.772,1.325-1.215,2.867-1.215,4.512
                    c0,3.113,1.584,5.86,3.992,7.47c-1.471-0.047-2.855-0.45-4.065-1.123c0,0.038-0.001,0.075-0.001,0.113
                    c0,4.348,3.094,7.976,7.199,8.8c-0.753,0.205-1.546,0.314-2.365,0.314c-0.578,0-1.14-0.057-1.688-0.161
                    c1.143,3.565,4.457,6.16,8.384,6.233c-3.072,2.406-6.941,3.841-11.146,3.841c-0.725,0-1.439-0.042-2.141-0.125
                    c3.972,2.546,8.689,4.032,13.757,4.032c16.507,0,25.534-13.675,25.534-25.534c0-0.389-0.009-0.776-0.026-1.161
                    C155.842,100.903,157.363,99.323,158.566,97.523z"/>
                </svg>
                </a>
                <li class="overMobileView"><a href="https://www.facebook.com/41on41"  target="_blank" id="nav-linkedin">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="24px" viewBox="141.318 101.674 28 28" enable-background="new 141.318 101.674 28 28" xml:space="preserve">
                        <path fill="#3C5A9A" d="M167.773,101.674h-24.91c-0.854,0-1.545,0.692-1.545,1.545v24.909c0,0.854,0.691,1.545,1.545,1.545h13.411
                        v-10.843h-3.649v-4.226h3.649v-3.116c0-3.617,2.208-5.586,5.435-5.586c1.545,0,2.873,0.115,3.261,0.167v3.779l-2.238,0.001
                        c-1.754,0-2.094,0.833-2.094,2.057v2.698h4.185l-0.545,4.226h-3.64v10.843h7.136c0.853,0,1.545-0.692,1.545-1.545v-24.909
                        C169.318,102.365,168.625,101.674,167.773,101.674z"/>
                    </svg>
                </a>
                <li class="overMobileView"><a href="https://www.linkedin.com/pub/mary-kate-cary/28/79/106"  target="_blank" id="nav-linkedin">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="24px" viewBox="9.226 9.228 35.552 35.549" enable-background="new 9.226 9.228 35.552 35.549"
                         xml:space="preserve">
                        <path fill="#007BB6" d="M42.144,9.228H11.85c-1.448,0-2.624,1.148-2.624,2.562v30.423c0,1.415,1.176,2.564,2.624,2.564h30.294
                        c1.449,0,2.634-1.149,2.634-2.564V11.789C44.778,10.375,43.593,9.228,42.144,9.228z M19.771,39.52h-5.275V22.555h5.275V39.52z
                         M17.133,20.237c-1.69,0-3.057-1.37-3.057-3.059c0-1.686,1.366-3.057,3.057-3.057c1.687,0,3.056,1.371,3.056,3.057
                        C20.189,18.866,18.82,20.237,17.133,20.237z M39.518,39.52h-5.267v-8.249c0-1.969-0.039-4.499-2.741-4.499
                        c-2.743,0-3.163,2.144-3.163,4.356v8.392h-5.27V22.555h5.058v2.318h0.072c0.704-1.333,2.425-2.741,4.988-2.741
                        c5.336,0,6.322,3.513,6.322,8.083V39.52z"/>
                    </svg>
                </a>
                <li class="inMobileView">
                    <span><a href="https://twitter.com/mkcary" target="_blank" id="nav-twitter"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/twitter.png" alt="Mary Kate Cary is a female speechwriter."></a></span>
                    <span><a href="https://www.facebook.com/41on41"  target="_blank" id="nav-linkedin"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/facebook.png" alt="Mary Kate Cary is a female conservative."></a></span>
                    <span><a href="https://www.linkedin.com/pub/mary-kate-cary/28/79/106"  target="_blank" id="nav-linkedin"><img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/icons/socials/linkedin.png" alt="Mary Kate Cary is a female republican."></a></span>
                </li>
            </ul>
        </nav>
    </header>
<?php
}
?>