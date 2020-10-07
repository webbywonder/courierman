<?php
header ("Content-Type:text/css");
$color = "#ea0117"; // Change your Color Here

function checkhexcolor($color) {
  return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
  $color = "#" . $_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
  $color = "#ea0117";
}

?>

[Table of contents]

1. Base CSS Start
2. Site Preloader Css Start
3. HOME PAGE CSS START
    3.1 Main Menu Area Start
    3.2 Welcome Area Start
    3.3 Service Area start
    3.4 Testimonial Area Start
    3.5 Video Section Start 
    3.6 Counter Area Star
    3.7 Minimal Slider Area Start
    3.8 gallery Area Start
    3.9 Pricing plan start
    3.10 Footer Area Start
    3.11  Click BottomToTop
4. ABOUT PAGE CSS START
5. TEAM PAGE CSS START
    5.1 Team section css start
    5.2 Member Section Start
6. Blog Page CSS Start
    6.1 Main Blog  Page Css Start
    6.2 Blog Details Area Start
7. Classes Page css start
8. Yoga class schedule Area css Start
9. shope Catagori page css start
10. Add To cart css Start 
11. Product Details Start
12. Checkout page Css start
13. Faq Page CSS Start
14. login page content area start 
15. SignUp page content area Start 
16. Contact Form Area
17. 404 Page Css Start


==================================================================*/

/*====================================================================
1. Base CSS Start
======================================================================*/

/* Google Font */
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Quicksand:300,400,500,700");


html,
body {
    margin: 0;
    padding: 0;
    font-weight: 400;
    color: #203566;
    font-family: 'Open Sans', sans-serif;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0
}

a,
a:visited,
a:focus,
a:active,
a:hover {
    text-decoration: none;
    outline: none;
}

a,
button {
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

a {
    color: #2c3e50;
}

h1,
h2,
h3,
h4,
h5,
h6,
h1,
.h1,
.h2,
.h3 {
    margin-bottom: 0px;
}

h1 {
    font-size: 50px;
    font-family: 'Quicksand', sans-serif;
}

h2 {
    font-size: 40px;
    font-family: 'Quicksand', sans-serif;
}


h3 {
    font-size: 30px;
}

h4 {
    font-size: 40px;
}

h5 {
    font-size: 20px;
}

h6 {
    font-size: 16px;
}

p {
    font-size: 16px;
    line-height: 24px;
    font-weight: normal;
    color: rgba(32, 53, 102, .9);
    margin-bottom: 0px;
}

.margin-0 {
    margin: 0
}

.form-control {
    border: 1px solid #e2e2e2;
    -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0) inset;
    box-shadow: 0 0px 0px rgba(255, 255, 255, 0);
    border-radius: 2px;
}

.form-control:focus {
    box-shadow: 0 0px 0px rgba(255, 255, 255, 0);
}

.modal {
    z-index: 9999999;
    background: rgba(0, 0, 0, 0.49);
}

.slick-initialized .slick-slide:focus {
    outline: 0px;
}

.affix {
    width: 100%;
}

#map {
    width: 100%;
    height: 725px;
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    padding: 0px;
}

/* Ckeck Box Design CSs */
.checkboxContainer {
    display: block;
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.checkboxContainer input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    border: 1px solid #ddd;
}


.checkboxContainer input:checked~.checkmark {
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.checkboxContainer input:checked~.checkmark:after {
    display: block;
}

.checkboxContainer .checkmark:after {
    left: 7px;
    top: 3px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.checkboxContainer .labelText {
    font-size: 16px;
    color: #232b37;
    font-weight: 600;
}

.sectionTheading {
    text-align: center;
}

.sectionTheading h2 {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 50px;
    line-height: 60px;
    margin-bottom: 20px;
}

.sectionTheading P {
    font-size: 16px;
    margin-top: 25px;
}

/*=================================================
2. Site Preloader Css Start
===================================================*/
.site-preloader {
    background-color: <?php echo $color; ?>;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999999;
}

.site-preloader .spinner {
    width: 60px;
    height: 60px;
    margin: 21% auto;
    background-color: #fff;
    border-radius: 100%;
    -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
    animation: sk-scaleout 1.0s infinite ease-in-out;
}

@-webkit-keyframes sk-scaleout {
    0% {
        -webkit-transform: scale(0)
    }

    100% {
        -webkit-transform: scale(1.0);
        opacity: 0;
    }
}

@keyframes sk-scaleout {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0);
    }

    100% {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
        opacity: 0;
    }
}



/* ============================================
3. HOME PAGE CSS START
=============================================== */

/* ================================================
3.1 Main Menu Area Start
===================================================*/

.support-bar-area {
    display: none;
}

header.header {
    position: relative;
    z-index: 2;
    /* padding: 34px 0px 34px; */
    background: rgb(255, 255, 255);
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.10);


}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.3)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-toggler:focus {
    outline: 0px;
}



.header.header.stiky {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    background: #fff;
    border-bottom: 0px;
}

.header.header .nav-link {
    color: #4d516e;
    font-size: 14px;
    margin-right: 10px;
    font-weight: 700;
    position: relative;
    text-transform: uppercase;
    padding: 44px 0px 44px;
    margin-right: 28px;
    display: block;
}

.header.header .nav-link.active,
.header.header .nav-link:hover {
    color: <?php echo $color; ?>;
}

.header.header .nav-link.active::before {
    position: absolute;
    content: " ";
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 4px;
    background-color: <?php echo $color; ?>;
}




.header.header .nav-item.dropdown .dropdown-item {
    color: rgb(119, 119, 119);
    font-size: 14px;
    margin-right: 10px;
    font-weight: 700;
    position: relative;
    text-transform: uppercase;
    padding: 7px 15px 7px;
}

.header.header .nav-item.dropdown .dropdown-item.active,
.header.header .nav-item.dropdown .dropdown-item:hover {
    background: <?php echo $color; ?>;
    color: #fff;
}



.navbar-nav .dropdown-menu {
    border-radius: 0px;
    margin-top: -1px;
}

.header.header .nav-link.active::before {
    width: 100%;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.header.header .nav-link:hover::before {
    width: 100%;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.header.header .nav-item:last-child .nav-link {
    margin-right: 0px;
    padding-right: 0px;
}

.navbar-light .navbar-toggler {
    border: 0px;
}

.header .call_btn a {
    border-radius: 4px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
    width: 170px;
    height: 50px;
    color: #fff;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 700;
    line-height: 50px;
    margin-left: 50px;

}

.header .call_btn a i {
    transform: rotate(90deg);
    font-size: 12px;
    margin-right: 5px;
}

.header .call_btn a:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}




/* mega */

.header .navbar-collapse .navbar-nav .nav-item.mega-menu {
    position: static;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu.show .mega-menu-wrapper {
    visibility: visible;
    opacity: 1;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu:hover .mega-menu-wrapper {
    visibility: visible;
    opacity: 1;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper {
    position: absolute;
    left: 0;
    top: 100%;
    width: 100%;
    z-index: 2;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper .mega-menu-container {
    background-color: #fff;
    padding: 26px 30px 20px 30px;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper .mega-menu-container .mega-menu-columns .title {
    font-size: 18px;
    font-weight: 700;
    color: #242424;
    text-transform: uppercase;
    font-family: 'Quicksand', sans-serif;
    margin-bottom: 17px;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper .mega-menu-container .mega-menu-columns .menga-menu-page-links li {
    line-height: 30px;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper .mega-menu-container .mega-menu-columns .menga-menu-page-links li a {
    color: #4d516e;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.header .navbar-collapse .navbar-nav .nav-item.mega-menu .mega-menu-wrapper .mega-menu-container .mega-menu-columns .menga-menu-page-links li a:hover {
    color: <?php echo $color; ?>;
}
.header .nav-item.mega-menu .thumb a {
    text-align: center;
    display: block;
}
.header .nav-item.mega-menu .thumb a img{
    border: 2px solid #f1f1f1;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}
.header .nav-item.mega-menu .thumb a:hover img{
    border-color:  <?php echo $color; ?>;
}
/* =============================================
3.2 Welcome Area Start
================================================ */

.banner {
    padding: 265px 0px 280px;
    background: url(../images/banner.jpg) no-repeat center;
    background-size: cover;
    position: relative;

}
.sectionOverlay{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.40);
}
.banner h1 {
    font-weight: 700;
    line-height: 80px;
    color: #fff;
    font-size: 70px;
    margin-bottom: 24px;
}
.banner .content{
    text-align: center;
}

.banner .tagline {
    font-size: 20px;
    line-height: 30px;
    color: #f1f1f1;
    display: block;
    max-width: 750px;
    margin: 11px auto 40px auto;
}

.banner .links a {
    width: 170px;
    border-radius: 4px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
    color: #fff;
    text-transform: uppercase;
    display: inline-block;
    font-weight: 700;
    margin-right: 15px;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.banner .links .link2 {
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.banner .links .link1:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.banner .links .link2 {
    background-color: rgb(23, 60, 90);
}

.banner .links .link2:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

/* =============================================
Welcome Area End
================================================ */



/* ============================================
3.3 Service Area start
=============================================== */
.services {
    padding: 130px 0px 111px;
}

.services h3 {    
    font-size: 26px;
    line-height: 36px;
    color: rgb(23, 60, 90);
    font-weight: 600;
    margin-top: 32px;
    text-transform: capitalize;
    font-family: 'Quicksand', sans-serif;
}

.services .sBox {
    text-align: center;
}
.services .sBox:hover .img i{
    color: #333;
}
.services .sBox:hover .img{
    background-color: #ee005f;
    color: #333;
}
.services .sBox:hover .img:before{
    background-color: #ee005f;
}
.services .sBox .img {
    margin: 0 auto;
    width: 180px;
    height: 180px;
    background-color: rgb(23, 60, 90);
    border-radius: 50%;
    display: flex;
    text-align: center;
    justify-content: center;
    position: relative;
    transition: .3s ease-in;
}

.services .sBox .img::before {
    position: absolute;
    content: " ";
    top: -10px;
    left: -10px;
    border-radius: 50%;
    background-color: rgb(23, 60, 90);
    opacity: 0.302;
    position: absolute;
    width: 200px;
    height: 200px;
    transition: .3s ease-in;
}

.services .sBox .img i {
    line-height: 180px;
    font-size: 80px;
    color: #fff;
    transition: .3s ease-in;
}




/* ============================================
Service Area start
=============================================== */



/* ===============================================
3.4 Testimonial Area Start
=================================================== */

.testimonial {
    background: url(../images/features_slider.jpg) no-repeat center;
    background-size: cover;
    padding: 108px 0px 120px;
    position: relative;
}
.testimonial .sectionOverlay{
    background: rgba(0, 0, 0, 0.70);
}


.testimonial .sectionTheading {
    margin-bottom: 58px;
}

.testimonial .single-testimonials p {
    color: rgba(255, 255, 255, 0.6);
}
.testimonial .single-testimonials .name-box-wrapper .text-box span{
    color: rgba(255, 255, 255, 0.8);
}
.testimonial .single-testimonials .name-box-wrapper .text-box h4{
    color: #fff;
    font-size: 21px;
    line-height: 30px;
}

.testimonial h2{
    color: #fff;
}
.testimonial .sectionTheading p{
    color: rgba(255,255,255,.8);
}
.single-testimonials {
    position: relative;
    padding-top: 10px;   
    background: rgba(0, 0, 0, 0.9);
    padding: 35px 30px 39px;
}

.single-testimonials img.testi-icon {
    position: absolute;
    top: 0px;
    left: 0;
    width: auto;
    max-width: none;
}

.single-testimonials p {
    margin: 0;
    color: rgb(153, 153, 153);
    font-size: 16px;
    line-height: 27px;
    position: relative;
    z-index: 9;
}

.single-testimonials .name-box-wrapper {
    margin-top: 25px;
}

.single-testimonials .name-box-wrapper .img-box,
.single-testimonials .name-box-wrapper .text-box {
    display: table-cell;
    vertical-align: middle;
}

.single-testimonials .name-box-wrapper .img-box {
    width: 70px;
}

.single-testimonials .name-box-wrapper .img-box img {
    width: auto;
    max-width: none;
    width: 100%;
    border-radius: 50%;
}

.single-testimonials .name-box-wrapper .text-box {
    padding-left: 20px;
}

.single-testimonials .name-box-wrapper .text-box h4,
.single-testimonials .name-box-wrapper .text-box span {
    margin: 0;
}

.single-testimonials .name-box-wrapper .text-box h4 {
    font-size: 18px;
    text-transform: capitalize;
}

.single-testimonials .name-box-wrapper .text-box span {
    font-size: 12px;
    text-transform: uppercase;
    color: #989898;
    font-weight: 500;
    font-style: italic;
}



/* ============================================ 
3.5 Video Section Start 
===============================================*/

.video {
    background: url(../images/videobg.jpg) no-repeat center;
    background-size: cover;
    padding: 120px 0px 120px;
    background-position: 0px 0px;
    position: relative;
}

.video .v-box h2 {
    font-size: 50px;
    color: rgb(23, 60, 90);
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 12px;

}

.video .v-box {
    border-style: solid;
    border-width: 10px;
    border-color: rgb(23, 60, 90);
    background-color: rgb(255, 255, 255);
    padding: 39px 84px 43px 50px;
    position: relative;
}

.video .v-box p {
    font-size: 16px;
    line-height: 30px;
    color: rgb(119, 119, 119);
}

.video .v-box a {
    border-radius: 50%;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
    position: absolute;
    width: 80px;
    height: 80px;
    top: 50%;
    transform: translateY(-50%);
    right: -46px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.video .v-box a:before {
    content: "";
    position: absolute;
    z-index: 0;
    left: 50%;
    top: 50%;
    -ms-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 90px;
    height: 90px;
    background:  rgba(238, 0, 95);
    border-radius: 50%;
    -webkit-animation: pulse-border 1500ms ease-out infinite;
    -moz-animation: pulse-border 1500ms ease-out infinite;
    animation: pulse-border 1500ms ease-out infinite;
    z-index: -1;
}

@-webkit-keyframes pulse-border {
    0% {
        -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        opacity: 0;
    }
}

@-moz-keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        opacity: 0;
    }
}

@-o-keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        opacity: 0;
    }
}

@keyframes pulse-border {
    0% {
        -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.3);
        opacity: 0;
    }
}

.video .v-box a i {
    color: #fff;
    line-height: 83px;
    font-size: 20px;
}


/* ============================================ 
Video Section End 
===============================================*/

/* ==============================================
3.6 Counter Area Star
================================================= */
.counter {
    background: rgb(246, 246, 246);
    padding: 120px 0px 89px;
}

.counter p {
    font-size: 50px;
    font-weight:700;
    color: <?php echo $color; ?>;
    display: inline-block;
}

.counter span {
    font-weight: 600;
    color: <?php echo $color; ?>;
    font-size: 60px;
}

.counter h3 {
    color: rgb(23, 60, 90);
    text-transform: capitalize;
    font-weight: 600;
    font-size: 22px;
    margin-top: 2px;
}
.c-box {
    border: 2px solid rgb(23, 60, 90, 0.3);
    padding: 26px 15px 60px;
    text-align: center;
    margin-bottom: 30px;
}

/* ==============================================
Counter Area End
================================================= */



/* ============================================
3.8 gallery Area Start
============================================== */

.gallery {
    padding: 109px 0px 90px;
}

.gallery .sectionTheading {
    margin-bottom: 58px;
}

.gallery .img_box {
    position: relative;
    margin-bottom: 30px;
}

.gallery .img_box .overlay {
    position: absolute;
    background: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.gallery .img_box .overlay .links {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.gallery .img_box:hover .overlay .links {
    top: 50%;
    opacity: 1;
}

.gallery .img_box:hover .overlay {
    opacity: 1;
}

.gallery .img_box a {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: inline-block;
    text-align: center;
    margin-right: 5px;
}

.gallery .img_box a i {
    color: #fff;
    line-height: 50px;
    font-size: 14px;
}

.gallery .img_box a.search {
    background-color: <?php echo $color; ?>;
}

.gallery .img_box a.search:hover {
    background-color: rgb(23, 60, 90);
}

.gallery .img_box a.link {
    background-color: rgb(23, 60, 90);

}

.gallery .img_box a.link:hover {
    background-color: <?php echo $color; ?>;
}



/* ============================================
8. gallery Area End
============================================== */

/* ===========================================
3.9 Pricing plan start
============================================= */
.pricePlan {
    background: #f6f6f6;
    padding: 108px 0px 120px;
}

.pricePlan .sectionTheading {
    margin-bottom: 58px;
}

.pricePlan .p_box {
    border-style: solid;
    border-width: 10px;
    border-color: rgb(23, 60, 90);
    background-color: rgba(0, 0, 0, 0);
    padding: 45px 30px 50px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.pricePlan .p_box h3 {
    color: rgb(23, 60, 90);
    font-weight: 600;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    font-size: 20px;
}

.pricePlan .p_box .title p {
    font-weight: 400;
    font-size: 16px;
    color: <?php echo $color; ?>;
    text-transform: uppercase;
    margin: 7px 0px 12px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}


.pricePlan .p_box .doller span {
    font-size: 40px;
    color: rgb(23, 60, 90);
    font-weight: 700;
    text-transform: uppercase;
    margin: 10px 0px 22px;
    display: inline-block;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;

}

.pricePlan .p_box .list li {
    margin-bottom: 13px;
    color: rgb(23, 60, 90);
    font-weight: 500;
}

.pricePlan .p_box .phurchaseBtn {
    border-radius: 4px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
    width: 150px;
    height: 50px;
    display: inline-block;
    font-size: 14px;
    color: rgb(255, 255, 255);
    font-weight: 700;
    text-transform: uppercase;
    line-height: 50px;
    margin-top: 25px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;

}

.pricePlan .p_box:hover {
    border-color: <?php echo $color; ?>;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.pricePlan .p_box:hover .doller span {
    color: rgb(23, 60, 90);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.pricePlan .p_box:hover .phurchaseBtn {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

/* ===========================================
Pricing plan End
============================================= */



/* ===========================================
3.10 Footer Area Start
============================================== */
.footer {
    
    background-color:  rgb(23, 60, 90);
}


.footer .widget1 p {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
    margin-top: 26px;
    line-height: 26px;
    max-width: 282px;
}

.footer .socialLinks {
    margin-top: 24px;
}

.socialLinks ul li {
    display: inline-block;
}


.socialLinks ul li a i {
    display: block;
    margin: 0 2px;
    width: 40px;
    height: 40px;
    background: #fafafa;
    border-radius: 50%;
    text-align: center;
    margin-right: 5px;
    line-height: 40px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.socialLinks ul li a .fa-facebook-f {
    color: #4267b2;
}

.socialLinks ul li a .fa-twitter {
    color: #1da1f2;
}

.socialLinks ul li a .fa-google-plus-g {
    color: #dd5044;
}

.socialLinks ul li a .fa-linkedin-in {
    color: #0177b5;
}


.socialLinks ul li a:hover i {
    color: #fff;
}

.socialLinks ul li a:hover .fa-facebook-f {
    background: #4267b2;
}

.socialLinks ul li a:hover .fa-twitter {
    background: #1da1f2;
}

.socialLinks ul li a:hover .fa-google-plus-g {
    background: #dd5044;
}

.socialLinks ul li a:hover .fa-linkedin-in {
    background: #0177b5;
}


.footer h5 {
    color: rgb(255, 255, 255);
    font-weight: 600;
    margin-bottom: 30px;
    text-transform: uppercase;
}

.footer .widget2 .media img {
    margin-right: 20px;
}

.footer .widget2 .media p {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.9);
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    font-weight: 600;
}

.footer .widget2 .media span {
    font-size: 12px;
    color: #ddd;
    text-transform: uppercase;
    margin-top: 15px;
    display: block;
}

.footer .widget2 .media {
    margin-bottom: 20px;
}

.footer .widget3 ul li a,
.footer .widget4 ul li a {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
    text-transform: capitalize;
    margin-bottom: 15px;
    display: block;
}

.footer .widget3 ul li a:hover,
.footer .widget4 ul li a:hover,
.footer .widget2 a:hover p {
    color: <?php echo $color; ?>;
}

.footer .widget3 h5 {
    margin-bottom: 25px;
}

.footer .widget4 h5 {
    margin-bottom: 25px;
}

.copyRightArea {
    
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding: 25px 0px 28px;
}

.copyRightArea p {
    color: #f1f1f1;
}


/* ===========================================
Footer Area End
============================================== */


/*==================================================
3.11  Click BottomToTop
====================================================*/
.totop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    opacity: 1;
    display: none;
}

.totop.show {
    display: block;
}

.totop:hover {
    animation: none;
}

.totop.show {
    opacity: 1;
}

.totop>a {
    color: #fff;
    display: block;
    border-radius: 750%;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.09);
    background-color: <?php echo $color; ?>;
}

.totop>a p {
    line-height: 50px;
    font-size: 20px;
    color: #fff;
}

.totop>a:hover {
    background-color: <?php echo $color; ?>;
}

/* ==============================================
HOME PAGE CSS END
================================================= */



/* ==============================================
4. ABOUT PAGE CSS START
================================================= */

.yogabreadcrumb.category{
    padding-bottom: 168px;
}
.yogabreadcrumb {
    padding: 157px 0px 164px;
    background: url(../images/breadcrumb.jpg) no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
}

.yogabreadcrumb .bcoverlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
}

.yogabreadcrumb h2 {
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 13px;
    font-size: 50px;
    line-height: 60px;
}
.yogabreadcrumb .links li {
    display: inline-block;
}

.yogabreadcrumb .links li a {
    color: #fff;
    font-weight: 600;
}

.yogabreadcrumb .links li a:hover,
.yogabreadcrumb .links li a.active {
    color: <?php echo $color; ?>;
}


.yogabreadcrumb .links li span {
    display: inline-block;
    padding: 0px 6px;
    color: #fff;
}


.yogabreadcrumb.extraPaddimg{
    padding-bottom: 168px;
}

/* ==============================================
 ABOUT PAGE CSS END   
================================================= */


/* ==============================================
5. TEAM PAGE CSS START
=================================================*/

/* ===============================================
5.1 Team section css start
================================================= */
.team {
    padding: 109px 0px 70px;
    background: #f6f6f6;
}

.team .t-box {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 50px;
}

.team .sectionTheading {
    margin-bottom: 58px;
}

.team .t-box .right {
    -ms-flex-item-align: center;
    align-self: center;
}

.team .t-box .img {
    position: relative;
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 30px;
    width: 250px;
    height: 250px;
}

.team .t-box .img::after {
    position: absolute;
    content: " ";
    width: 100%;
    height: 100%;
    background-color: rgb(241, 158, 142);
    top: -20px;
    left: -20px;
    border-radius: 20px;
}

.team .t-box .img img {
    position: inherit;
    border-radius: 20px;
    z-index: 9;
}

.team .t-box .right h4 {
    color: #2c3e50;
    font-weight: 700;
    font-size: 24px;
    margin-bottom: 6px;
    font-family: 'Quicksand', sans-serif;
}

.team .t-box .right h6 {
    color: <?php echo $color; ?>;
    text-transform: uppercase;
    margin-bottom: 18px;
    font-size: 12px;
    font-weight: 600;
}

.team .t-box .right p {
    font-size: 14px;
    color: rgb(153, 153, 153);
    line-height: 26px;
}

.team .t-box .right .tm-social-link li {
    display: inline-block;
}

.team .t-box .right .tm-social-link {
    margin-top: 25px;
}

.team .t-box .right .tm-social-link li a i {
    border-style: solid;
    border-width: 2px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0);
    width: 40px;
    height: 40px;
    display: block;
    text-align: center;
    line-height: 37px;
    margin-right: 6px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.team .t-box .right .tm-social-link li:last-child a i {
    margin-right: 0px;
}

.team .t-box .right .tm-social-link li a i.fa-facebook-f {
    border-color: rgb(0, 90, 255);
    color: rgb(0, 90, 255);
}

.team .t-box .right .tm-social-link li a i.fa-twitter {
    border-color: rgb(2, 231, 207);
    color: rgb(2, 231, 207);
}

.team .t-box .right .tm-social-link li a i.fa-dribbble {
    border-color: rgb(255, 0, 102);
    color: rgb(255, 0, 102);
}

.team .t-box .right .tm-social-link li a i.fa-instagram {
    border-color: rgb(241, 158, 142);
    color: rgb(241, 158, 142);
}


.team .t-box .right .tm-social-link li a:hover i.fa-facebook-f {
    background: rgb(0, 90, 255);
    color: #fff;
}

.team .t-box .right .tm-social-link li a:hover i.fa-twitter {
    background: rgb(2, 231, 207);
    color: #fff;
}

.team .t-box .right .tm-social-link li a:hover i.fa-dribbble {
    background: rgb(255, 0, 102);
    color: #fff;
}

.team .t-box .right .tm-social-link li a:hover i.fa-instagram {
    background: rgb(241, 158, 142);
    color: #fff;
}

/* ===============================================
 Team section css End
================================================= */

/* ===============================================
5.2 Member Section Start
================================================== */
.member {
    padding: 106px 0px 91px;
}

.member .sectionTheading {
    margin-bottom: 58px;
}


.member .content h5 {
    color: #222222;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
}

.member .content span {
    font-size: 12px;
    text-transform: uppercase;
    color: <?php echo $color; ?>;
    font-weight: 600;
}

.member .t-box {
    text-align: center;
    margin-bottom: 30px;
    overflow: hidden;
}

.member .t-box .img {
    position: relative;
}

.member .t-box .img .tm-social-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.member .t-box:hover .img .tm-social-link {
    opacity: 1;
}

.member .t-box .img .tm-social-link i {
    color: #fff;
}

.member .t-box .img .tm-social-link ul {
    position: absolute;
    top: 20px;
    right: 15px;
}

.member .t-box .img .tm-social-link li a i {
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0);
    width: 40px;
    height: 40px;
    display: block;
    text-align: center;
    line-height: 40px;
    color: #fff;
    margin-right: 6px;
    margin-bottom: 10px;
    position: relative;
    opacity: 0;
}

.member .t-box .img .tm-social-link li:last-child a i {
    margin-right: 0px;
}

.member .t-box .img .tm-social-link li a i.fa-facebook-f {
    background: rgb(0, 90, 255);
    right: -50px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.member .t-box .img .tm-social-link li a i.fa-twitter {
    background: rgb(2, 231, 207);
    right: -50px;
    -webkit-transition: all 0.7s ease-in-out;
    -moz-transition: all 0.7s ease-in-out;
    -o-transition: all 0.7s ease-in-out;
    transition: all 0.7s ease-in-out;
}

.member .t-box .img .tm-social-link li a i.fa-dribbble {
    background: rgb(255, 0, 102);
    right: -50px;
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}


.member .t-box .img .tm-social-link li a:hover i.fa-facebook-f {
    background: rgb(0, 90, 255);
    color: #fff;
}

.member .t-box .img .tm-social-link li a:hover i.fa-twitter {
    background: rgb(2, 231, 207);
    color: #fff;
}

.member .t-box .img .tm-social-link li a:hover i.fa-dribbble {
    background: rgb(255, 0, 102);
    color: #fff;
}



.member .t-box:hover .img .tm-social-link li a i {
    right: 0px;
    opacity: 1;
}

.member .t-box {
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.member .t-box:hover {
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.11);
}

.member .t-box .content {
    padding: 26px 0px 25px;
}

/* ==============================================
TEAM PAGE CSS  END
=================================================*/



/* ===============================================
6. Blog Page CSS Start
==================================================*/
/* ================================================
6.1 Main Blog  Page Css Start
=================================================== */

.mainBlog {
    padding: 120px 0px 120px;
}

.blog-box {
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10);
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.blog-box:hover {
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.11);
}

.blog-box h3 {
    font-size: 24px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    margin: 15px 0px 23px;
    line-height: 34px;
}

.blog-box h3:hover a {
    color: <?php echo $color; ?>;
}

.blog-box h5 {
    font-size: 14px;
    color: <?php echo $color; ?>;
    font-weight: 600;
}

.blog-box p {
    font-size: 16px;
    color: rgb(153, 153, 153);
}

.blog-box .read-more-link {
    margin-top: 22px;
    display: inline-block;
    color: rgb(23, 60, 90);
    text-transform: capitalize;
    font-weight: 600;
    font-size: 14px;
}

.blog-box .read-more-link:hover {
    color: <?php echo $color; ?>;
}

.blog-box .read-more-link i {
    display: inline-block;
    margin-left: 10px;
    line-height: 24px;
    font-size: 14px;
}

.blog-box .blog-item-description {
    padding: 28px 20px 23px;
}

.blog-box .topImg {
    overflow: hidden;
}

.blog-box .topImg img {
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}

.blog-box:hover .topImg img {
    transform: scale(1.3);
}

/* ================================================
 Main Blog  Page Css End
=================================================== */

/* ============================================
6.2 Blog Details Area Start
=============================================== */

.blogDetails {
    padding: 120px 0px 120px;
}

.blogDetails .details-img {
    overflow: hidden;
}

.blogDetails .details-img img {
    width: 100%;
    -webkit-transition: 0.4s all linear;
    -o-transition: 0.4s all linear;
    transition: 0.4s all linear;
}

.blogDetails .details-text {
    padding: 20px 20px 20px 20px;
    border: 2px solid #e3e3e3;
    border-top: none;
}

.blogDetails .details-sulf h3 {
    text-transform: capitalize;
    margin-bottom: 5px;
}

.blogDetails .details-sulf p {
    padding: 10px 0;
    color: #696565;
}


.blogDetails .blockquote{
    display: flex;
    background: #e3e3e3;
    margin: 14px 0px 15px;
    padding: 15px 30px 18px;

}
.blogDetails .blockquote i {
    display: inline-block;
    color: <?php echo $color; ?>;
    font-size: 40px;
    align-self: center;
    margin-right: 30px;
}

.blogDetails .details-sulf ul {
    border-top: 2px solid #e3e3e3;
    padding-top: 20px;
    margin-top: 14px;

}

.blogDetails .details-sulf ul li {
    display: inline;
    padding: 0 10px;
}

.blogDetails .details-sulf ul li a {
    color: #777;
    text-decoration: none;
    transition: .3s ease-in;
}

.blogDetails .details-sulf ul li a:hover {
    color: <?php echo $color; ?>;
}

.blogDetails .details-sulf ul li img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 50%;
}

.blogDetails .comment-text {
    padding-top: 30px;
}

.blogDetails .comment-text h3 {
    padding-bottom: 5px;

}

.blogDetails .commtent-item {
    padding: 30px 0 27px;
}
.blogDetails .comment-text hr{
    margin: 0px;
}
.blogDetails .ma-l {
    margin-left: 100px;
}

.blogDetails .commtent-item img {
    display: inline-block;
    float: left;
    margin-right: 20px;
}

.blogDetails .commtent-text {
    overflow: hidden;
}

.blogDetails .commtent-text h6 {
    font-weight: 600;
    margin-bottom: 10px;    
    font-size: 18px;
}

.blogDetails .commtent-text h6 a:hover span {
    color: <?php echo $color; ?>;
}

.blogDetails .commtent-text h6 span {
    float: right;
    font-size: 15px;
    color: #696565;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.blogDetails .commtent-text span {
    font-size: 15px;
    font-weight: 500;
    color: #777;
}

.blogDetails .commtent-text p {
    padding-top: 15px;
    font-size: 16px;
    color: #696565;
    line-height: 26px;
}

.blogDetails .contacts-frome {
    padding-top: 26px;
}

.blogDetails .contacts-frome h3 {
    padding-bottom: 40px;
}

.blogDetails .profile img {
    width: 140px;
    height: 140px;
    border-radius: 50%;
}

.blogDetails .form-inlines {
    margin: 0px 0px 25px;
}

.blogDetails .form-inlines input {
    width: 98%;
    height: 60px;
    padding: 0 14px;
    background: #f2f2f2;
    border: 0;
    font-size: 16px;
    color: rgb(36, 36, 36);
    font-family: "Open Sans";
}

.blogDetails .form-inlines input:focus {
    outline: 0px;
}

.blogDetails .form-inlines button {
    background: none;
    border: none;
    width: 0;
    height: 0;
    padding: 0;
    margin-left: -37px;
    margin-top: -25px;
    color: #b3b3b3;
}

.blogDetails a:hover {
    text-decoration: none;
}

.blogDetails .categories h3 {
    padding-bottom: 16px;
}

.blogDetails .categories ul li a {
    color: #656262;
    font-size: 16px;
    padding: 8px 5px;
    display: inherit;
    text-decoration: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.blogDetails .categories ul li a:hover {
    color: <?php echo $color; ?>;
}

.blogDetails .categories ul li a i {
    font-size: 14px;
}

.blogDetails .relative-item {
    overflow: hidden;
    margin: 15px 0;
}

.blogDetails .relative h3 {
    padding-top: 15px;
    padding-bottom: 10px;
}

.blogDetails .relative-item img {
    display: inline-block;
    float: left;
    margin-right: 10px;
}

.blogDetails .relative-item span {
    padding-top: 0;
    display: inherit;
    color: rgb(23, 60, 90);
    font-size: 14px;
}

.blogDetails .relative-item p {
    font-size: 16px;
    font-weight: 600;
    line-height: 26px;
    padding-top: 10px;
}

.blogDetails .teg h3 {
    padding-top: 10px;
    padding-bottom: 24px;
}

.blogDetails .teg a {
    background: #f2f2f2;
    padding: 10px 20px;
    display: inline-block;
    margin: 5px 3px;
    text-transform: uppercase;
    color: #656262;
    font-size: 13px;
    font-weight: 400;
    text-decoration: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.blogDetails .teg a:hover {
    color: #fff;
    background-color: <?php echo $color; ?>;
}

.categories h3,
.relative h3,
.blogDetails .teg h3,
.blogDetails .comment-text h3,
.blogDetails .commentForm h3,
.blogDetails .details-sulf h3 {
    font-size: 24px;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;

}
.blogDetails .comment-text h3,
.blogDetails .commentForm h3 {
    font-size: 30px;
    line-height: 40px;
}
.blogDetails .details-sulf h3 {
    font-size: 30px;
    line-height: 40px;
}
.commentForm .myform {
    width: 100%;
    height: 60px;
    margin-bottom: 20px;
    padding: 0px 20px;
}

.commentForm .myform:focus,
.commentForm textarea:focus {
    outline: 0px;
}

.blogDetails .commentForm h3 {
    margin-bottom: 30px;
    margin-top: 30px;
}

.commentForm textarea {
    width: 100%;
    height: 150px;
    resize: none;
    padding: 20px;
}

.blogDetails .commentForm .submitcomment {
    width: 190px;
    height: 60px;
    border-radius: 4px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
    color: #fff;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 700;
    border: 0px;
    margin-top: 15px;
    cursor: pointer;
}

.blogDetails .commentForm .submitcomment:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.commentForm .myform:focus,
.commentForm textarea:focus {
    border: 1px solid rgb(23, 60, 90);
}

/* ============================================
Blog Details Area End
=============================================== */

/* ===============================================
Blog Page CSS End
==================================================*/


/* ===============================================
7. Classes Page css start
================================================== */
.yogaclasses {
    padding: 120px 0px 120px;
}

.classes-box {
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10);
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.classes-box:hover {
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.11);
}

.classes-box h3 {
    font-size: 24px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    margin: 0px 0px 14px;
}

.classes-box h3:hover a {
    color: <?php echo $color; ?>;
}

.classes-box p {
    font-size: 16px;
    color:   rgba(32, 53, 102 );
}

.classes-box .duration ul li {
    display: inline-block;
}

.classes-box .duration ul li p {
    font-size: 14px;
}

.classes-box .duration ul li p i {
    font-size: 12px;
}

.classes-box .duration ul li p {
    margin-right: 20PX;
}


.classes-box .duration ul li p a:hover {
    color: <?php echo $color; ?>;
}

.classes_text {
    padding: 24px 20px 26px;
    border: 1px solid rgb(0, 0, 0, 0.1);
    border-top: none;
}

.classes_text .duration {
    margin-top: 11px;
}

.classes-box .topImg {
    overflow: hidden;
    position: relative;
}

.classes-box .topImg .classesoverlay {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.60);
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.classes-box .topImg .classesoverlay i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid #fff;
    text-align: center;
    line-height: 56px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.classes-box .topImg .classesoverlay i:hover {
    background: #fff;
    color: <?php echo $color; ?>;
}

.classes-box:hover .classesoverlay {
    opacity: 1;
}

.topClasses {
    background: rgb(246, 246, 246);
    padding: 109px 0px 90px;
}

.classes-box:hover {
    box-shadow: none;
}

.classes-box {
    box-shadow: none;
}

.topClasses .sectionTheading {
    margin-bottom: 58px;
}

.yoganametrainer ul li {
    display: inline-block;
}

.yoganametrainer ul li a,
.yoganametrainer ul li p {
    font-size: 16px;
    color: rgb(119, 119, 119);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.yoganametrainer ul li a:hover {
    color: <?php echo $color; ?>;
}

.pagination .page-item .page-link {
    font-size: 15px;
    color: rgb(153, 153, 153);
    margin: 0px 2px;
    display: inline-block;
    font-weight: 600;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 0px;
    text-align: center;
    padding: 0px;
}

.pagination .page-item .page-link:hover,
.pagination .page-item .page-link.active {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border-color: <?php echo $color; ?>;
}

ul.pagination {
    margin-top: 21px;
}

.pagination .page-item .page-link:focus {
    outline: 0px;
    box-shadow: 0 0 0 0rem rgba(0, 123, 255, 0);
}

.searchArea input {
    width: 100%;
    padding: 0px 20px;
    height: 50px;
    border-radius: 4px;
    border: 1px solid rgb(0, 0, 0, 0.2);
    margin-bottom: 24px;
}

.searchArea input:focus,
.SelectArea select:focus {
    outline: 0px;
    color: rgb(153, 153, 153);
}

.searchArea input::placeholder {
    color: rgb(153, 153, 153);
}

.searchArea input::-webkit-placeholder {
    color: rgb(153, 153, 153);
}

.SelectArea {
    margin-bottom: 40px;
}

.SelectArea label {
    display: block;
    color: rgb(23, 60, 90);
    font-weight: 600;
    font-size: 16px;
}

.SelectArea select {
    width: 100%;
    height: 50px;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 4px;
    padding: 0px 20px;
    color: rgb(153, 153, 153);
}

.SelectArea select option {
    color: rgb(153, 153, 153);
}

.submitBtnWrapper {
    width: 100%;
}

.SelectArea button {
    border-radius: 4px;
    border: 0px;
    width: 100%;
    height: 50px;
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
    color: #fff;
    cursor: pointer;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 14px;
}
.SelectArea button:focus{
    outline: none;
}
.SelectArea button:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}


/* ===============================================
Classes Page css End
================================================== */

/* ===============================================
8. Yoga class schedule Area css Start
================================================== */

.schedule {
    padding: 120px 0px 104px;
}

.schedule .table thead {
    background-color: rgb(23, 60, 90);
}

.schedule .table thead tr th {
    color: #fff;
    border: 0px;
    font-size: 16px;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
    text-transform: uppercase;
    height: 80px;
    line-height: 53px;
    border: 1px solid #f1f1f147;
}

.schedule td,
.schedule p {
    font-size: 14px;
    color: rgb(153, 153, 153);
    text-transform: capitalize;
    font-weight: 600;
}

.schedule td a {
    font-size: 16px;
    font-weight: 600;
    font-family: 'Quicksand', sans-serif;
    color: rgb(23, 60, 90);
    text-transform: capitalize;
    margin-bottom: 12px;
}

.schedule td {
    border: 1px solid #f1f1f1;
}
.schedule td, .schedule th {
    padding-left: 20px!important;
}

.schedule table {
    width: 1110px;
}

.schedule .note {
    margin-top: 9px;
    font-weight: 400;
}


.schedule table .paddingTop {
    padding-top: 26px;
}

.schedule select {
    height: 50px;
    padding: 0px 30px;
    margin-bottom: 50px;
    border: 2px solid #f1f1f1;
    border-radius: 4px;
    padding: 0px 20px;
    color: rgb(153, 153, 153);
}

.schedule select option {
    color: rgb(153, 153, 153);
}

.schedule select:focus {
    outline: 0px;
}



/* ===============================================
 Yoga class schedule Area css End
================================================== */

/* ===============================================
9. shope Catagori page css start
=================================================== */

.category-block-area {
    padding: 120px 0 50px 0;
}

.category-content-area ul.pagination {
    margin-top: 19px;
}

.category-block-area .single-cateogy-block-item {
    text-align: center;
    border: 1px solid rgb(238, 0, 95, 0.6);
    padding: 60px 0px 60px 0px;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.category-block-area .single-cateogy-block-item:hover {
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>;
    color: #fff;
}

.category-block-area .single-cateogy-block-item:hover .title {
    color: #fff;
}

.category-block-area .single-cateogy-block-item:hover .icon {
    color: #fff;
    -ms-transform: rotateY(360deg);
    /* IE 9 */
    -webkit-transform: rotateY(360deg);
    /* Chrome, Safari, Opera */
    transform: rotateY(360deg);
}

.category-block-area .single-cateogy-block-item .icon {
    font-size: 100px;
    line-height: 50px;
    margin-bottom: 47px;
    color: <?php echo $color; ?>;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.category-block-area .single-cateogy-block-item .icon.puzzle {
    font-size: 140px;
}

.category-block-area .single-cateogy-block-item .icon.laptop {
    font-size: 120px;
}

.category-block-area .single-cateogy-block-item .icon.bathtub {
    font-size: 110px;
}

.category-block-area .single-cateogy-block-item .icon.first-aid {
    font-size: 115px;
}

.category-block-area .single-cateogy-block-item .icon.watermelon {
    font-size: 180px;
}

.category-block-area .single-cateogy-block-item .title {
    font-size: 16px;
    color: #7a8591;
    line-height: 26px;
    font-weight: 700;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.category-content-area {
    padding-bottom: 90px;
}

.category-content-area.search-page {
    padding: 120px 0 120px 0;
}

.category-content-area .category-sidebar {
    margin-bottom: 30px;
}

.category-content-area .category-sidebar .category-filter-widget {
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 4px;
    padding: 31px 30px 33px 30px;
}

.category-content-area .category-sidebar .category-filter-widget .title {
    font-size: 22px;
    font-weight: 600;
    color: rgb(23, 60, 90);
    text-transform: capitalize;
    margin-bottom: 22px;
    font-family: 'Open Sans', sans-serif;
    line-height: 32px;
}

.category-content-area .category-sidebar .category-filter-widget .title .right {
    float: right;
}

.category-content-area .category-sidebar .category-filter-widget .cat-list li {
    display: block;
    font-size: 14px;
    font-weight: 700;
    color: #bbc4d1;
    margin: 13px 0;
}

.category-content-area .category-sidebar .category-filter-widget .cat-list li:last-child {
    margin-bottom: 0;
}

.category-content-area .category-sidebar .category-filter-widget .cat-list li a {
    color: rgb(23, 60, 90);
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    font-size: 16px;
    font-weight: 400;
}
.category-content-area .category-sidebar .category-filter-widget .cat-list li a i{
    font-size: 14px;
}
.category-content-area .category-sidebar .category-filter-widget .cat-list li a:hover {
    color: <?php echo $color; ?>;
}

.category-content-area .category-sidebar .category-filter-widget .cat-list li .right {
    float: right;
}


.category-content-area .right-content-area .top-content {
    position: relative;
    z-index: 0;
}

.category-content-area .right-content-area .top-content:after {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 2px;
    background-color: #f0f0f0;
    content: '';
    -ms-transform: translateY(-50%);
    /* IE 9 */
    -webkit-transform: translateY(-50%);
    /* Chrome, Safari, Opera */
    transform: translateY(-50%);
    z-index: -1;
}

.category-content-area .right-content-area .top-content .left-conent {
    display: inline-block;
}

.category-content-area .right-content-area .top-content .left-conent .cat {
    width: 160px;
    height: 50px;
    border: 1px solid rgb(238, 0, 95, 0.6);
    color: #b1b6bd;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    line-height: 50px;
    border-radius: 25px;
    background-color: #fff;
}

.category-content-area .right-content-area .top-content .right-content {
    display: inline-block;
    float: right;
}

.category-content-area .right-content-area .top-content .right-content ul li {
    display: inline-block;
    margin: 0 8px;
}

.category-content-area .right-content-area .top-content .right-content ul li:last-child {
    margin-right: 0;
}

.category-content-area .right-content-area .top-content .right-content ul li .form-element {
    display: inline-block;
    width: 160px;
}

.category-content-area .right-content-area .top-content .right-content ul li .form-element .select2-container--default .select2-selection--single {
    height: 50px;
    border-radius: 30px;
    border: 1px solid rgb(238, 0, 95, 0.6);
}

.category-content-area .right-content-area .top-content .right-content ul li .form-element .select2-container--default .select2-selection--single:focus {
    outline: none;
}

.category-content-area .right-content-area .top-content .right-content ul li .form-element .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 50px;
    text-align: center;
    text-transform: uppercase;
    color: #b1b6bd;
    font-size: 14px;
    font-weight: 700;
}

.category-content-area .right-content-area .top-content .right-content ul li .form-element .select2-container--default .select2-selection--single .select2-selection__arrow {
    display: none;
}

.category-content-area .right-content-area .top-content .right-content ul li.icon {
    background-color: #ebebeb;
    color: #afb6bf;
    cursor: pointer;
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    text-align: center;
    line-height: 50px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.category-content-area .right-content-area .top-content .right-content ul li.icon.active,
.category-content-area .right-content-area .top-content .right-content ul li.icon:hover {
    background-color: <?php echo $color; ?>;
    color: #fff;
}

.category-content-area h4 {
    font-size: 22px;
    line-height: 32px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    margin-bottom: 5px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}
.category-content-area a:hover h4{
    color: <?php echo $color; ?>;
}

.single-new-collection-item {
    border: 1px solid rgb(0, 0, 0, 0.2);
    margin-bottom: 30px;
    border-radius: 4px;
}

.single-new-collection-item .content {
    border-top: 1px solid rgb(0, 0, 0, 0.2);
    padding: 23px 15px 24px;
    text-align: center;
}

.single-new-collection-item .thumb {
    position: relative;
    border-radius: 4px;
}

.single-new-collection-item .thumb img {
    border-radius: 4px 4px 0px 0px;
    width: 100%;
}

.single-new-collection-item .thumb .hover {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    border-radius: 4px 4px 0px 0px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.single-new-collection-item:hover .thumb .hover {
    opacity: 1;
}

.single-new-collection-item .thumb .hover a {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 4px;
    width: 140px;
    height: 50px;
    color: #fff;
    display: inline-block;
    text-align: center;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: 700;
    line-height: 50px;
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}

.single-new-collection-item .thumb .hover a:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.single-new-collection-item:hover .thumb .hover a {
    top: 50%;
}

.single-new-collection-item .content .price del {
    font-size: 14px;
}

.single-new-collection-item .content .price span.sprice {
    font-size: 16px;
    font-weight: 700;
}

.category-content-area .topElement select {
    height: 50px;
    padding: 0px 30px;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 4px;
    padding: 0px 20px;
    color: rgb(153, 153, 153);
    font-size: 16px;
    font-weight: 400;
    font-family: 'Quicksand', sans-serif;
    background-color: transparent;
}

.category-content-area .topElement select option {
    color: rgb(153, 153, 153);
    font-size: 16px;
    font-weight: 400;
    font-family: 'Quicksand', sans-serif;
}

.category-content-area .topElement select:focus {
    outline: 0px;
}

.topElement {
    margin-bottom: 30px;
}

.category-content-area .topElement .right p {
    color: rgb(23, 60, 90);
    font-size: 16px;
    font-weight: 400;
    font-family: 'Quicksand', sans-serif;
}

.productsearchform {
    margin-bottom: 80px;
}

.productsearchform form {
    position: relative;
}

.productsearchform form input {
    width: 100%;
    position: absolute;
    top: 0;
    height: 50px;
    color: rgb(153, 153, 153);
    font-size: 14px;
    padding: 0px 50px 0px 15px;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 4px;
}

.productsearchform form input::placeholder {
    color: rgb(153, 153, 153);
    font-size: 14px;
}

.productsearchform form input::-webkit-placeholder {
    color: rgb(153, 153, 153);
    font-size: 14px;
}

.productsearchform form button {
    position: absolute;
    z-index: 1;
    color: red;
    right: 0px;
    height: 50px;
    background: none;
    border: none;
    color: rgb(153, 153, 153);
    padding-right: 15px;
    font-size: 12px;
    cursor: pointer;
}

.productsearchform form input:focus,
.productsearchform form button:focus {
    outline: 0px;
}

/* ===============================================
9. shope Catagori page css End
=================================================== */

/* ================================================
10. Add To cart css Start 
====================================================*/

.cart-content-area {
    padding: 115px 0 100px 0;
}

.cart-content-area .table {
    width: 1110px;
}

.cart-content-area .cart-content-inner .top-content table thead th {
    color: rgb(23, 60, 90);
    font-weight: 600;
    border-bottom: 1px solid #efefef;
    border-top: none;
    padding-top: 0;
}

.cart-content-area .cart-content-inner .top-content table thead th:first-child {
    padding-left: 0;
}

.cart-content-area .cart-content-inner .top-content table tbody tr {
    border-bottom: 1px solid #efefef;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td {
    padding: 30px 0 30px 0;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .product-details {
    position: relative;
    min-height: 160px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .product-details .close-btn {
    color: #ff3d3d;
    position: absolute;
    left: 0;
    top: 50%;
    -ms-transform: translateY(-50%);
    /* IE 9 */
    -webkit-transform: translateY(-50%);
    /* Chrome, Safari, Opera */
    transform: translateY(-50%);
    cursor: pointer;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .product-details .thumb {
    position: absolute;
    left: 40px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .product-details .content {
    padding-left: 230px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .product-details .content .title {
    font-size: 18px;
    color: rgb(23, 60, 90);
    font-weight: 600;
    padding-top: 70px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .price {
    font-size: 18px;
    color: rgb(23, 60, 90);
    padding-top: 70px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul {
    margin-top: 60px;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li {
    display: inline-block;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qttotal,
.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qtminus,
.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qtplus {
    display: inline-block;
    width: 40px;
    height: 40px;
    border: 2px solid #e5e5e5;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    font-weight: 500;
}

.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qttotal:focus,
.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qtminus:focus,
.cart-content-area .cart-content-inner .top-content table tbody tr td .qty ul li .qtplus:focus {
    outline: none;
}

.cart-content-area .cart-content-inner .bottom-content {
    margin-top: 24px;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area {
    display: inline-block;
    width: 450px;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper {
    position: relative;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .form-element .input-field {
    border: 2px solid #efefef;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .form-element .input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #8e96a1;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .form-element .input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #8e96a1;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .form-element .input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #8e96a1;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .form-element .input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #8e96a1;
}

.cart-content-area .cart-content-inner .bottom-content .left-content-area .coupon-code-wrapper .submit-btn {
    position: absolute;
    right: 0;
    top: 0;
    width: 190px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    font-size: 14px;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area {
    display: inline-block;
    float: right;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .btn-wrapper .boxed-btn {
    padding: 0 30px;
    cursor: pointer;
    width: auto;
    margin: 0 10px;
    background-color: <?php echo $color; ?>;
    border: 2px solid transparent;
    border-radius: 6px;
    text-transform: uppercase;
    font-size: 14px;
    color: #fff;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .btn-wrapper .boxed-btn:first-child {
    background-color: transparent;
    border: 2px solid #e5e5e5;
    border-radius: 6px;
    font-size: 14px;
    text-transform: uppercase;
    color: #9a9da7;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .btn-wrapper .boxed-btn:first-child:hover {
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>;
    color: #fff;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .btn-wrapper .boxed-btn:hover {
    background-color: transparent;
    border-color: #e5e5e5;
    color: #9a9da7;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .btn-wrapper .boxed-btn:last-child {
    margin-right: 0;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total {
    float: right;
    margin-top: 30px;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .title {
    font-size: 24px;
    line-height: 40px;
    color: rgb(23, 60, 90);
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
    margin-bottom: 7px;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .cart-list li {
    font-size: 16px;
    line-height: 26px;
    color: rgb(23, 60, 90);
    font-weight: 600;
    border-bottom: 1px solid #e5e5e5;
    padding: 14px 0;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .cart-list li:first-child {
    padding-top: 8px;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .cart-list li:last-child {
    border-bottom: none;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .cart-list li .right {
    font-weight: 400;
    float: right;
    margin-left: 30px;
    color: #838b97;
}

.cart-content-area .cart-content-inner .bottom-content .right-content-area .cart-total .cart-list li.total .right {
    color: rgb(23, 60, 90);
    font-weight: 600;
}

.submit-btn {
    width: 250px;
    height: 60px;
    text-align: center;
    font-weight: 700;
    font-size: 16px;
    line-height: 40px;
    color: #fff;
    text-transform: uppercase;
    background-color: <?php echo $color; ?>;
    border: none;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: rgb(23, 60, 90);
}

.submit-btn.btn-rounded {
    border-radius: 30px;
}

.submit-btn.btn-center {
    display: block;
    margin: 0 auto;
    margin-top: 25px;
}

.submit-btn:focus {
    outline: none;
}

.input-field {
    width: 100%;
    height: 60px;
    padding: 0 30px;
    border-radius: 4px;
    color: #7c7c90;
}

.input-field:focus {
    outline: 0px;
}

.checkout-page-content-area .left-content-area .form-element .input-field:focus {
    border: 1px solid rgb(23, 60, 90);
}

.input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #7c7c90;
}

.input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #7c7c90;
}

.input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #7c7c90;
}

.input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #7c7c90;
}

.input-field.borderd {
    border: 2px solid rgba(0, 0, 0, 0.1);
}

.input-field.borderd:focus {
    border: 2px solid rgba(0, 0, 0, 0.1);
}

.input-field.textarea {
    min-height: 120px;
    padding: 20px 30px;
    resize: none;
}

.input-field.error {
    border: 1px solid #dc3545;
}

.input-field.error::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #dc3545;
}

.input-field.error:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #dc3545;
}

.input-field.error::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #dc3545;
}

.input-field.error:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #dc3545;
}

.input-field.error:focus {
    border-color: #dc3545;
}

.boxed-btn {
    display: inline-block;
    text-align: center;
    height: 60px;
    line-height: 57px;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    width: 160px;
    background-color: <?php echo $color; ?>;
    padding: 0 20px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.boxed-btn:hover {
    color: #fff;
    background-color: <?php echo $color; ?>;
}

.boxed-btn.btn-rounded {
    border-radius: 30px;
}

.boxed-btn.blank {
    background-color: transparent;
    border: 2px solid rgb(23, 60, 90);
    color: rgb(23, 60, 90);
}

.boxed-btn.blank:hover {
    background-color: <?php echo $color; ?>;
    color: #fff;
}

/* ================================================
 Add To cart css End 
====================================================*/


/* =================================================
11. Product Details Start
===================================================== */
.product-details-content-area {
    padding: 120px 0 115px 0;
}

.product-details-content-area .left-content-area .product-details-slider {
    margin-bottom: 30px;
    border: 2px solid #f1f1f1;
}

.product-details-content-area .slick-slide img {
    margin: 0 auto;
    width: 100%;
}

.product-details-content-area .left-content-area .product-deails-thumb li {
    display: inline-block;
    margin: 0 0px;
    cursor: pointer;    
    border: 1px solid #f1f1f1;
}

.product-details-content-area .owl-thumb-item.slick-slide.slick-current.slick-active {
    border: 1px solid <?php echo $color; ?>;
}

.product-details-content-area .left-content-area .product-deails-thumb li:first-child {
    margin-left: 0px;
}

.product-details-content-area .left-content-area .product-deails-thumb li:last-child {
    margin-right: 0px;
}

.product-details-content-area .right-content-area .top-content .review {
    display: inline-block;
}

.product-details-content-area .right-content-area .top-content .review li {
    display: inline-block;
    font-size: 14px;
    color: #ffb400;
}

.product-details-content-area .right-content-area .top-content .review li.reviewes {
    color: #808a98;
    margin-left: 10px;
}

.product-details-content-area .right-content-area .top-content .orders {
    display: inline-block;
    background-color: <?php echo $color; ?>;
    color: #fff;
    padding: 8px 20px;
    border-radius: 6px;
    margin-left: 20px;
    position: relative;
}

.product-details-content-area .right-content-area .top-content .orders:after {
    position: absolute;
    left: -5px;
    top: 10px;
    width: 15px;
    height: 15px;
    background-color: <?php echo $color; ?>;
    content: '';
    -ms-transform: rotate(50deg);
    /* IE 9 */
    -webkit-transform: rotate(50deg);
    /* Chrome, Safari, Opera */
    transform: rotate(50deg);
    border-radius: 6px;
}

.product-details-content-area .right-content-area .bottom-content {
    margin-top: 27px;
}

.product-details-content-area .right-content-area .bottom-content .cat {
    display: inline-block;
    font-size: 14px;
    text-transform: uppercase;
    color: <?php echo $color; ?>;
    font-weight: 600;
    letter-spacing: 2px;
}

.product-details-content-area .right-content-area .bottom-content .title {
    font-size: 30px;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
}

.product-details-content-area .right-content-area .bottom-content .price-area {
    margin-top: 17px;
}

.product-details-content-area .right-content-area .bottom-content .price-area .left {
    display: inline-block;
    font-size: 50px;
    color: #bfc7d3;
    font-weight: 400;
}

.product-details-content-area .right-content-area .bottom-content .price-area .left .sprice {
    color: <?php echo $color; ?>;
}

.product-details-content-area .right-content-area .bottom-content .price-area .right {
    display: inline-block;
    margin-top: 15px;
    float: right;
}

.product-details-content-area .right-content-area .bottom-content .price-area .right .size {
    display: inline-block;
    width: 150px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: #efefef;
    color: #abaeb4;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 12px;

    letter-spacing: 2px;
    border-radius: 4px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.product-details-content-area .right-content-area .bottom-content .price-area .right .size:hover {
    background-color: <?php echo $color; ?>;
    color: #fff;
}

.product-details-content-area .right-content-area .bottom-content .product-spec {
    margin-top: 20px;
    width: 280px;
    margin-bottom: 28px;
}

.product-details-content-area .right-content-area .bottom-content .product-spec li {
    color: #173c5a;
    font-weight: 600;

    margin: 10px 0;
}

.product-details-content-area .right-content-area .bottom-content .product-spec li .right {
    font-weight: 400;
    float: right;
    color: #6b7686;
}

.product-details-content-area .right-content-area .bottom-content .product-spec li .right.base-color {
    color: <?php echo $color; ?>;
}

.product-details-content-area .right-content-area .bottom-content .pdescription .title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 17px;
    font-family: 'Quicksand', sans-serif;
}

.product-details-content-area .right-content-area .bottom-content .pdescription p {
    font-size: 16px;
    line-height: 26px;
    color: #838b97;

}

.product-details-content-area .right-content-area .bottom-content .paction {
    margin-top: 35px;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty {
    display: inline-block;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li {
    display: inline-block;
    margin-left: -5px;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li:first-child {
    margin-left: 0;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qttotal,
.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtminus,
.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtplus {
    display: inline-block;
    width: 40px;
    height: 40px;
    border: 2px solid #e5e5e5;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    font-weight: 500;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qttotal:focus,
.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtminus:focus,
.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtplus:focus {
    outline: none;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtplus {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.product-details-content-area .right-content-area .bottom-content .paction .qty ul li .qtminus {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities {
    display: inline-block;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities li {
    display: inline-block;
    margin: 0 8px;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities li:first-child {
    margin-left: 16px;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    background-color: #eeeeee;
    border: 2px solid #eeeeee;
    color: #838b97;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    font-weight: 500;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities li a:focus {
    outline: none;
}

.product-details-content-area .right-content-area .bottom-content .paction .activities li a:hover {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border-color: <?php echo $color; ?>;
}

.product-details-content-area .right-content-area .bottom-content .paction .btn-wrapper {
    margin-top: 30px;
}

.product-details-content-area .right-content-area .bottom-content .paction .btn-wrapper .boxed-btn {
    width: 174px;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0px;
    border-radius: 50px;
    height: 50px;
    line-height: 50px;
}

.product-details-content-area .right-content-area .bottom-content .paction .btn-wrapper .boxed-btn:hover {
    background-color: #173C5A;
}

.product-details-tab-nav {
    padding-top: 60px;
}

.product-details-tab-nav .nav.nav-tabs {
    border: none;
    text-align: center;
    display: block;
    width: 100%;
    position: relative;
    z-index: 0;
}

.product-details-tab-nav .nav.nav-tabs:after {
    position: absolute;
    left: 0;
    top: 25px;
    background-color: #f0f0f0;
    content: '';
    width: 100%;
    height: 2px;
    z-index: -1;
}

.product-details-tab-nav .nav.nav-tabs .nav-item {
    display: inline-block;
    margin: 0 10px;
}

.product-details-tab-nav .nav.nav-tabs .nav-item .nav-link {
    border: none;
    width: 200px;
    border: 2px solid #f0f0f0;
    background-color: #fff;
    border-radius: 25px;
    height: 50px;
    line-height: 45px;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 700;
    color: #b1b6bd;
    padding: 0;
    letter-spacing: 1px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.product-details-tab-nav .nav.nav-tabs .nav-item .nav-link.active {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border-color: <?php echo $color; ?>;
}

.product-details-tab-nav .nav.nav-tabs .nav-item .nav-link:hover {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border-color: <?php echo $color; ?>;
}

.product-details-area .title {
    font-size: 24px;
    line-height: 40px;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
}

.product-details-area .item_review_content {
    padding-top: 33px;
}

.product-details-area .item_review_content .product-specification {
    margin-top: 32px;
}

.product-details-area .item_review_content .product-specification li {
    padding-bottom: 20px;
    margin-top: 20px;
    border-bottom: 1px solid #f0f0f0;
}

.product-details-area .item_review_content .product-specification li:first-child {
    margin-top: none;
}

.product-details-area .item_review_content .product-specification li:last-child {
    padding-bottom: 0;
    border-bottom: none;
}

.product-details-area .item_review_content .product-specification li .single-spec .heading {
    font-size: 16px;
    line-height: 26px;
    font-weight: 700;
    min-width: 220px;
    display: inline-block;
    font-family: 'Quicksand', sans-serif;
}

.product-details-area .item_review_content .product-specification li .single-spec .details {
    color: #838b97;
    font-size: 16px;
    line-height: 26px;
    font-weight: 500;
    font-family: 'Quicksand', sans-serif;
}

.product-details-area .descr-tab-content {
    padding-top: 33px;
}

.product-details-area .descr-tab-content .title {
    margin-bottom: 20px;
}

.product-details-area .descr-tab-content p {
    font-size: 16px;
    line-height: 26px;
    color: #838b97;
}

.product-details-area .descr-tab-content p:last-child {
    margin-bottom: 0;
}

.product-details-area .more-feature-content {
    padding-top: 33px;
}

.product-details-area .more-feature-content p {
    color: #838b97;
    line-height: 26px;
    font-size: 16px;
}

.product-details-area .more-feature-content p:last-child {
    margin-bottom: 0;
}

.product-details-area .more-feature-content .feature-list-wrapper {
    margin-bottom: 22px;
}

.product-details-area .more-feature-content .feature-list-wrapper .features-list li {
    margin: 8px 0;
    font-size: 16px;
    line-height: 26px;
    color: #838b97;
}

.product-details-area .more-feature-content .feature-list-wrapper .features-list li i {
    color: <?php echo $color; ?>;
}



/* =================================================
 Product Details End
===================================================== */


/*==========================================
12. Checkout page Css start
============================================*/
.checkout-page-content-area {
    padding: 120px 0 89px 0;
}

.checkout-page-content-area .account .checkbox-wrapper {
    display: flex;
}

.checkout-page-content-area .account .checkbox-wrapper a {
    margin-left: 10px;
    color: #656262;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.checkout-page-content-area .account .checkbox-wrapper a:hover {
    color: <?php echo $color; ?>;
}

.checkout-page-content-area .notification-area {
    color: #fff;
    font-size: 16px;
    background-color: <?php echo $color; ?>;
    margin-bottom: 20px;
    padding: 30px 40px;
    border-radius: 4px;
}

.checkout-page-content-area .notification-area:last-child {
    margin-bottom: 50px;
}

.checkout-page-content-area .notification-area a {
    font-weight: 700;
    color: #fff;

    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.checkout-page-content-area .left-content-area .title {
    font-size: 24px;
    line-height: 40px;
    color: rgb(23, 60, 90);
    font-weight: 700;
    margin-bottom: 17px;
    font-family: 'Quicksand', sans-serif;
}

.checkout-page-content-area .left-content-area .form-element {
    margin-bottom: 25px;
}

.checkout-page-content-area .left-content-area .form-element.has-icon .the-icon {
    top: 70px;
}

.checkout-page-content-area .left-content-area .form-element label {
    color: rgb(23, 60, 90);
    font-weight: 600;
}

.checkout-page-content-area .left-content-area .form-element label.blank {
    padding-top: 17px;
}

.checkout-page-content-area .left-content-area .form-element .input-field {
    border: 1px solid rgb(0, 0, 0, 0.1);
    border-radius: 4px;
    background-color: transparent;
}

.checkout-page-content-area .left-content-area .form-element .input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #b1b7c0;
}

.checkout-page-content-area .left-content-area .form-element .input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #b1b7c0;
}

.checkout-page-content-area .left-content-area .form-element .input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #b1b7c0;
}

.checkout-page-content-area .left-content-area .form-element .input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #b1b7c0;
}


.checkout-page-content-area .left-content-area .checkbox-element .checkbox-inner {
    color: #232b37;
    font-weight: 600;
}

.checkout-page-content-area .left-content-area .checkbox-element .checkbox-inner .checkmark {
    border-color: #e5e5e5;
}

.checkout-page-content-area .left-content-area .shipping-details {
    margin-top: 15px;
}

.checkout-page-content-area .left-content-area .shipping-details .title {
    font-size: 24px;
    line-height: 40px;
    margin-bottom: 27px;
    color: rgb(23, 60, 90);
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
    margin-top: 19px;
}

.checkout-page-content-area .left-content-area .shipping-details .checkbox-element {
    margin-bottom: 15px;
}

.checkout-page-content-area .left-content-area .shipping-details .form-element.textarea label {
    color: #232b37;
    font-weight: 500;
    margin-top: 8px;

}

.checkout-page-content-area .right-content-area .title {
    font-size: 24px;
    line-height: 40px;
    margin-bottom: 22px;
    color: rgb(23, 60, 90);
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
}

.checkout-page-content-area .checkbox-element .checkbox-wrapper .checkbox,
.checkout-page-content-area .checkbox-element .checkbox-wrapper .checkbox-inner {
    cursor: pointer;
}

.checkout-page-content-area .right-content-area .checkbox-element .checkbox-inner {
    color: #232b37;
    font-weight: 600;
}

.checkout-page-content-area .right-content-area .checkbox-element .checkbox-inner .checkmark {
    border-color: #e5e5e5;
}

.checkout-page-content-area .right-content-area .btn-wrapper {
    margin-top: 15px;
}

.checkout-page-content-area .right-content-area .btn-wrapper .submit-btn {
    width: 200px;
    border-radius: 4px;
    margin-top: 4px;
    font-size: 14px;
}

.checkout-page-content-area .right-content-area .checkbox-element.account .checkbox-wrapper .checkbox-inner .base-color {
    font-weight: 500;

    color: <?php echo $color; ?>;
}

.checkout-page-content-area .right-content-area .credit-card-area {
    margin-bottom: 18px;
}

.checkout-page-content-area .right-content-area .credit-card-area .left-content {
    display: inline-block;
    padding-top: 7px;
}

.checkout-page-content-area .right-content-area .credit-card-area .right-content {
    display: inline-block;
    float: right;
}

.checkout-page-content-area .right-content-area .credit-card-area .right-content ul li {
    display: inline-block;
    margin: 0 2px;
}

.checkout-page-content-area .right-content-area .credit-card-area .right-content ul li:last-child {
    margin-right: 0;
}

.checkout-page-content-area .right-content-area .notify-area {
    font-size: 16px;
    font-weight: 600;
    background-color: <?php echo $color; ?>;
    padding: 22px 40px;
    border-radius: 4px;
    color: #fff;
    margin-top: 19px;
    margin-bottom: 30px;
}

.checkout-page-content-area .right-content-area .order-list {
    margin-bottom: 30px;
}

.checkout-page-content-area .right-content-area .order-list li {

    border-bottom: 1px solid #e5e5e5;
    padding: 30px 0;
}

.checkout-page-content-area .right-content-area .order-list li:first-child {
    padding-top: 0;
}

.checkout-page-content-area .right-content-area .order-list li.shipping .single-order-list .normal-text {
    display: block;
    color: #838b97;
    font-weight: 400;
    margin-top: 13px;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list {
    color: #838b97;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list.title-bold {
    font-weight: 600;
    color: #232b37;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list.title-bold .right {
    font-weight: 400;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list .right {
    float: right;
    color: #838b97;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list.heading {
    color: #232b37;
    font-weight: 600;
}

.checkout-page-content-area .right-content-area .order-list li .single-order-list.heading .right {
    float: right;
}



/*====================================================
13. Faq Page CSS Start
======================================================*/

.faq-page-content-area {
    padding: 120px 0 60px 0;
}

.faq-page-content-area .faq-search-wrapper {
    text-align: center;
    border: 2px solid #e5e5e5;
    padding: 50px 80px 60px 80px;
    margin-bottom: 88px;
}

.faq-page-content-area .faq-search-wrapper .title {
    font-size: 30px;
    line-height: 40px;
    color: #232b37;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
    margin-bottom: 25px;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form {
    position: relative;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field {
    border-radius: 0px;
    padding-right: 170px;
    border: 2px solid #e5e5e5;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field:focus {
    outline: 0px;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #b1b7c0;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #b1b7c0;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #b1b7c0;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .form-element .input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #b1b7c0;
}

.faq-page-content-area .faq-search-wrapper .faq-search-form .submit-btn {
    position: absolute;
    right: 0;
    top: 0;
    width: 150px;
    border-radius: 4px;
    font-size: 14px;
}

.faq-page-content-area .single-faq-item {
    position: relative;
    border: 2px solid #e5e5e5;
    margin-bottom: 58px;
    padding: 57px 30px 25px 30px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.faq-page-content-area .single-faq-item:hover {
    border-color: <?php echo $color; ?>;
}

.faq-page-content-area .single-faq-item:hover .number {
    background-color: <?php echo $color; ?>;
    color: #fff;
    border-color: <?php echo $color; ?>;
}

.faq-page-content-area .single-faq-item .number {
    position: absolute;
    left: 30px;
    top: -30px;
    width: 60px;
    height: 60px;
    border-radius: 30px;
    border: 2px solid #e5e5e5;
    background-color: #fff;
    text-align: center;
    line-height: 60px;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Quicksand', sans-serif;
    color: <?php echo $color; ?>;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.faq-page-content-area .single-faq-item .content .title {
    color: #232b37;
    font-size: 20px;
    font-weight: 700;
    line-height: 25px;
    margin-bottom: 20px;
    font-family: 'Quicksand', sans-serif;
}

.faq-page-content-area .single-faq-item .content p {
    font-size: 16px;
    line-height: 26px;
    color: #7d7c8f;
}

.faq-page-content-area .single-faq-item .content p:last-child {
    margin-bottom: 0;
}

/*====================================================
13. Faq Page CSS  End
======================================================*/


/* ===================================================
14. login page content area start 
===================================================== */

.login-page-content-area {
    padding: 120px 0;
}

.login-page-content-area .login-page-wrapper {
    border: 2px solid rgb(0, 0, 0, 0.1);
    padding: 70px 80px 78px 80px;
    position: relative;
    z-index: 0;
}

.login-page-content-area .login-page-wrapper:after {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 2px;
    height: 100%;
    background-color: rgb(0, 0, 0, 0.1);
    content: '';
    -ms-transform: translate(-50%, -50%);
    /* IE 9 */
    -webkit-transform: translate(-50%, -50%);
    /* Chrome, Safari, Opera */
    transform: translate(-50%, -50%);
    z-index: -1;
}

.login-page-content-area .login-page-wrapper .or {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid rgb(0, 0, 0, 0.1);
    line-height: 80px;
    text-align: center;

    font-weight: 700;
    font-size: 14px;
    -ms-transform: translate(-50%, -50%);
    /* IE 9 */
    -webkit-transform: translate(-50%, -50%);
    /* Chrome, Safari, Opera */
    transform: translate(-50%, -50%);
}

.login-page-content-area .login-page-wrapper .top-content {
    margin-bottom: 33px;
}

.login-page-content-area .login-page-wrapper .top-content .title {
    color: #232b37;
    font-weight: 700;
    font-size: 40px;
    line-height: 50px;
    margin-bottom: 14px;
    font-family: 'Quicksand', sans-serif;
}

.login-page-content-area .login-page-wrapper .top-content p {
    color: #7d7c8f;
    font-size: 16px;
    line-height: 26px;
}

.login-page-content-area .right-contnet-area {
    padding-left: 80px;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .form-element .input-field {
    font-size: 14px;
    border-radius: 4px;
    border: 1px solid rgb(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .form-element .input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #b1b7c0;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .form-element .input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #b1b7c0;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .form-element .input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #b1b7c0;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .form-element .input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #b1b7c0;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .btn-wrapper .submit-btn {
    display: inline-block;
    width: 130px;
    border-radius: 4px;
    font-size: 14px;
    letter-spacing: 2px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .btn-wrapper .submit-btn:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .btn-wrapper .link {
    display: inline-block;
    float: right;
    color: rgb(160, 160, 160);
    font-size: 14px;
    margin-top: 20px;
    font-weight: 600;
}

.login-page-content-area .right-contnet-area .bottom-content .login-form .btn-wrapper .link:hover{
    color: <?php echo $color; ?>; 
}
.login-page-content-area .left-content-area {
    padding-right: 80px;
}

.login-page-content-area .left-content-area .bottom-content {
    display: inline-block;
    position: relative;
}

.login-page-content-area .left-content-area .bottom-content .left-content {
    min-height: 120px;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

.login-page-content-area .left-content-area .bottom-content .left-content .thumb img {
    max-width: 120px;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 25px 0 rgb(238, 0, 95, 0.50);
    box-shadow: 0 0 25px 0 rgb(238, 0, 95, 0.50);
}

.login-page-content-area .left-content-area .bottom-content .right-content {
    padding-left: 150px;
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li {
    margin: 20px 0;
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:first-child {
    margin-top: 0;
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:last-child {
    margin-bottom: 0;
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:first-child a {
    color: #fff;
    border-radius: 4px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:last-child a {
    border-radius: 4px;
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:last-child a:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li:hover a {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.login-page-content-area .left-content-area .bottom-content .right-content ul li a {
    width: 220px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    display: inline-block;
    color: #d0cee1;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}


/* ===================================================
 login page content area End 
===================================================== */

/* ===================================================
15. SignUp page content area Start 
===================================================== */
.signup-page-wrapper {
    border: 2px solid rgb(0, 0, 0, 0.1);
    position: relative;
    z-index: 0;
}

.SignUp-page-content-area {
    padding: 118px 0px 118px;
}

.signup-page-wrapper .right-contnet-area {
    padding: 68px 40px 80px 64px;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .form-element .input-field {
    font-size: 14px;
    border-radius: 4px;
    border: 1px solid rgb(0, 0,0, 0.1);
    margin-bottom: 20px;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .form-element .input-field::-webkit-input-placeholder {
    /* WebKit browsers */
    color: #b1b7c0;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .form-element .input-field:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
    color: #b1b7c0;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .form-element .input-field::-moz-placeholder {
    /* Mozilla Firefox 19+ */
    color: #b1b7c0;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .form-element .input-field:-ms-input-placeholder {
    /* Internet Explorer 10+ */
    color: #b1b7c0;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .block-link a {
    display: block;
    background-color: #000;
    margin-bottom: 20px;
    font-size: 14px;
    text-transform: uppercase;

    font-weight: 700;
    color: #fff;
    text-align: center;
    height: 60px;
    border-radius: 4px;
    line-height: 60px;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    letter-spacing: 1px;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .block-link a.facebook {
    background-color: #1375c5;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .block-link a.facebook:hover {
    -webkit-box-shadow: 0 0 25px 0 rgba(19, 117, 197, 0.5);
    box-shadow: 0 0 25px 0 rgba(19, 117, 197, 0.5);
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .block-link a.google {
    background-color: #e40036;
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .block-link a.google:hover {
    -webkit-box-shadow: 0 0 25px 0 rgba(228, 0, 54, 0.5);
    box-shadow: 0 0 25px 0 rgba(228, 0, 54, 0.5);
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .btn-wrapper .submit-btn {
    display: inline-block;
    width: 160px;
    border-radius: 4px;
    letter-spacing: 2px;
    font-size: 14px;
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .btn-wrapper .submit-btn:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .btn-wrapper .link {
    display: inline-block;
    float: right;
    font-size: 16px;
    line-height: 26px;
    margin-top: 20px;
    font-weight: 600;
    color: rgb(119, 119, 119);

}

.signup-page-wrapper .right-contnet-area .bottom-content .login-form .btn-wrapper .link:hover {
    color: <?php echo $color; ?>;
}

.signup-page-wrapper .left-content-area {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    z-index: 0;
}

.signup-page-wrapper .left-content-area.signup-bg {
    background-image: url(../images/signup.jpg);
    background-position: top;
    background-size: cover;
}

.signup-page-wrapper .left-content-area:after {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    content: '';
    z-index: -1;
}

.signup-page-wrapper .left-content-area .img-wrapper .boxed-btn {
    width: 256px;
    border-radius: 4px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
}

.signup-page-wrapper .left-content-area .img-wrapper .boxed-btn:hover {
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.signup-page-wrapper:after {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 2px;
    height: 100%;
    background-color: #f0f0f0;
    content: '';
    -ms-transform: translate(-50%, -50%);
    /* IE 9 */
    -webkit-transform: translate(-50%, -50%);
    /* Chrome, Safari, Opera */
    transform: translate(-50%, -50%);
    z-index: -1;
}

.signup-page-wrapper .or {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #fff;
    border: 2px solid rgb(0, 0, 0, 0.1);
    line-height: 80px;
    text-align: center;

    font-weight: 700;
    font-size: 14px;
    -ms-transform: translate(-50%, -50%);
    /* IE 9 */
    -webkit-transform: translate(-50%, -50%);
    /* Chrome, Safari, Opera */
    transform: translate(-50%, -50%);
    z-index: 1;
}

.signup-page-wrapper .top-content {
    margin-bottom: 37px;
}

.signup-page-wrapper .top-content .title {
    color: rgb(36, 36, 36);
    font-weight: 700;
    font-size: 40px;
    line-height: 50px;
    margin-bottom: 21px;
    font-family: 'Quicksand', sans-serif;
}

.signup-page-wrapper .top-content p {
    color: #7d7c8f;
    font-size: 16px;
    line-height: 26px;
}

.padding-right-0 {
    padding-right: 0 !important;
}



/* ===================================================
 SignUp page content area End 
===================================================== */


/* ====================================================
16. Contact Form Area
======================================================= */

.contact-info-area {
    padding: 120px 0 120px 0;
}

.contact-info-area .left-content-area .inner-section-title {
    margin-bottom: 30px;
}

.contact-info-area .left-content-area .inner-section-title .subtitle {
    font-size: 16px;
    font-weight: 700;
    color: <?php echo $color; ?>;
}

.contact-info-area .left-content-area .inner-section-title .title {
    color: rgb(23, 60, 90);
    font-weight: 700;
    font-size: 30px;
    line-height: 50px;
    font-family: 'Quicksand', sans-serif;
    text-transform: uppercase;
}

.contact-info-area .left-content-area ul li {
    margin-bottom: 25px;
}

.contact-info-area .left-content-area ul li:last-child {
    margin-bottom: 0;
}

.contact-info-area .left-content-area ul li .single-contact-info-item {
    position: relative;
    min-height: 40px;
}

.contact-info-area .left-content-area ul li .single-contact-info-item .icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    border-radius: 6px;
    background-color: <?php echo $color; ?>;
    text-align: center;
    line-height: 40px;
    color: #fff;
}

.contact-info-area .left-content-area ul li .single-contact-info-item .content {
    padding-left: 60px;
}

.contact-info-area .left-content-area ul li .single-contact-info-item .content .subtitle {
    font-size: 14px;
    color: #8892a2;
    line-height: 20px;
    display: block;
    margin-bottom: 0;
}

.contact-info-area .left-content-area ul li .single-contact-info-item .content .title {
    font-size: 20px;
    line-height: 30px;
    color: #232b37;
    font-weight: 500;
}

.contact-info-area .map-wrapper #map {
    height: 384px;
}

.contact-form-area {
    padding: 106px 0 120px 0;
    background: #f1f1f1;

}
.contact-form-area .sectionTheading{
    margin-bottom: 58px;
}

.contact-form-area .contact_form .form-element .input-field {
    border: none;
    background-color: #fafafa;
    margin-bottom: 30px;
}

.contact-form-area .contact_form .form-element .input-field:focus {
    outline: 0px;
}

.contact-form-area .contact_form .form-element .input-field.textarea {
    min-height: 300px;
}

.contact-form-area .contact_form .btn-wrapper {
    text-align: center;
}

.contact-form-area .contact_form .btn-wrapper .submit-btn {
    width:170px;
    border-radius: 4px;
    font-size: 14px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.contact-form-area .contact_form .btn-wrapper .submit-btn:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

.contact-form-area .section-title-two h2 {
    margin-bottom: 60px;
    font-weight: 700;
}

/* ====================================================
 Contact Form Area
======================================================= */

/* ====================================================
17. 404 Page Css Start
======================================================= */


.error-404-content-area {
    padding: 119px 0px 119px;
}

.error-404-content-area .left-content-area .img-wrapper img {
    border: 1px solid #f0f0f0;
}

.error-404-content-area .right-content-area {
    text-align: center;
    width: 100%;
}

.error-404-content-area .right-content-area .title {
    font-weight: 700;
    font-size: 220px;
    line-height: 180px;
    color: #232b37;
    margin-bottom: 17px;
}

.error-404-content-area .right-content-area .details {
    color: #778293;
    font-size: 30px;
    line-height: 40px;
}

.error-404-content-area .right-content-area .btn-wrapper {
    margin-top: 38px;
}

.error-404-content-area .right-content-area .btn-wrapper .boxed-btn {
    width: 200px;
    text-transform: uppercase;
    color: #fff;
    font-size: 14px;
    border-radius: 4px;
    background-color: <?php echo $color; ?>;
    box-shadow: 0px 8px 16px 0px rgba(238, 0, 95, 0.5);
}

.error-404-content-area .right-content-area .btn-wrapper .boxed-btn:hover {
    background-color: rgb(23, 60, 90);
    box-shadow: 0px 8px 16px 0px rgba(23, 60, 90, 0.5);
}

/* ====================================================
404 Page Css End
======================================================= */
