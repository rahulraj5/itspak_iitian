<!DOCTYPE html>

    <html lang="en">
        <?php 
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $currentpage_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        ?> 

<head>
        <!-- Define Charset -->
        <?php  $pagename = $this->router->fetch_method(); ?>
        <meta charset="utf-8">

        <?php if($pagename == "index"){ ?>
        <title>IIT JEE Best Coaching Indore | NEET | NTSE | Foundation Course -Dr. IITian</title>
        <meta name="description" content="Dr. IITian: Best JEE Coaching In Indore, provides JEE Mains, NTSE, NEET, KVPY, Olympiads competitive exams & Foundation Courses for students. Indore's Best Coaching for IIT-JEE Classes.">
		<link rel="canonical" href="https://www.driitian.com/" />
		<meta name="robots" content="index, follow"/>
        <?php } ?>
        
        <?php if($pagename == "about"){ ?>
        <title>About Us: Dr. IITian JEE Coaching Classes Indore</title>
        <meta name="description" content="About Us: Dr.IITian Indore Best Institue for Competitive Exam Preparation Such as IIT JEE, NTSE, NEET. Our vision to provide the best Education to our students. Join us now.">
		<link rel="canonical" href="https://www.driitian.com/about" />
		<meta name="robots" content="index, follow"/>
        <?php } ?>
        
        <?php if($pagename == "contact"){ ?>
        <title>Contact Us: For any doubt and queries | Gumasta Nagar | Geeta Bhavan -Dr.IITian</title>
        <meta name="description" content="Dr. IITain provides 24*7 facilities for doubt clearing. Dr.IITian always ready to help our students to crack competitive exam in a short period of time.">
		<link rel="canonical" href="https://www.driitian.com/contact" />
		<meta name="robots" content="index, follow"/>
        <?php } ?>
        
        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        // print_r($uriSegments[2]);
        if( isset($uriSegments[2]) && $uriSegments[2]=="best-iit-jee-coaching-in-indore" && $pagename == "courses"){ ?>
        <title>Best IIT-JEE Coaching in Indore | JEE Mains Coaching Classes -Dr. IITian</title>
        <meta name="description" content="JEE Mains Coaching Classes in Indore, Dr. IITian are the best IIT-JEE coaching in Indore offering premium courses and conducting batches for JEE Mains Preparation in our JEE Mains coaching classes.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="best-jee-main-advanced-coaching-indore" && $pagename == "courses"){ ?>
        <title>Best JEE Advanced Coaching in Indore | JEE Advanced Coaching Classes -Dr. IItian</title>
        <meta name="description" content="Shape up your JEE Advanced 2020 preparation with the Best JEE Advanced Coaching in Indore, Dr. IITian. We will help you with our properly designed mock test papers and useful test series.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="best-neet-coaching-institute-indore" && $pagename == "courses"){ ?>
        <title>NEET Coaching in Indore | Best Neet Coaching Institute -Dr. IITian</title>
        <meta name="description" content="Boost up your NEET 2020 Preparation with Best NEET Coaching in Indore, Dr. IITian. NEET classes & institute help you with the best mock test papers and test series.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="kvpy-coaching-classes-in-indore" && $pagename == "courses"){ ?>
        <title>KVPY Coaching Classes in Indore | KVPY Preparation -Dr. IITian</title>
        <meta name="description" content="KVPY Coaching Classes in Indore for Maths and Science subjects to prepare for KVPY Exam at Dr. IITian. Experienced faculties guide the Students of classes 11th & 12th for KVPY exam preparation.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="ntse-coaching-in-indore" && $pagename == "courses"){ ?>
        <title>NTSE Coaching in Indore | NTSE Coaching Classes -Dr. IITian</title>
        <meta name="description" content="Dr. IITian provides the best NTSE Coaching in Indore for classes 8th, 9th & 10th students with high intelligence and skills. Get high-quality guidance from experienced teachers to students applying for NTSE Exam through mock test papers and test series.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="foundation-courses-8th-9th-10th" && $pagename == "courses"){ ?>
        <title>Foundation Course Coaching | Foundation Courses 8th 9th 10th -Dr. IITian</title>
        <meta name="description" content="Dr. IITian is the best coaching classes for Foundation Course in Indore, for preparation of school exams, board examinations, and IIT JEE & NEET exams to students of classes 8th, 9th, and 10th. Grow your basics in Science and Maths with Dr. IITian.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>


        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        if( isset($uriSegments[2]) && $uriSegments[2]=="olympiad-exam-coaching-in-indore" && $pagename == "courses"){ ?>
        <title>Olympiad Competitive Exams in Indore | Olympiad Exam Coaching -Dr.IITian</title>
        <meta name="description" content="Dr. IITian provides Olympiad Exam Coaching in Indore. Olympiad exams are a competitive examination at the school level where primary level students showcase their talent at state, national and international levels.">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>        

        <?php
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
        // print_r($uriSegments[4]);
        $blog_data = $this->CommonModel->getSingleData('addblog',array(1=>1));
        $blog_dat = $blog_data['title_slug'];
        // print_r($blog_dat);
       
        if(isset($uriSegments[4]) && $uriSegments[4]==$blog_dat && $pagename == "blogdetail"){ ?>
        <title><?php echo $blog_data["meta_title"]?></title>
        <meta name="description" content="<?php echo $blog_data["meta_description"]?>">
        <link rel="canonical" href="<?php echo $currentpage_url;?>" />
        <meta name="robots" content="index, follow"/>
        <?php } ?>   

        <?php if($pagename == "blog"){ ?>
        <title>Dr. IITian Blog -Engineering and Medical Entrance Exam Latest News</title>
        <meta name="description" content="Dr. IITian Blog - That IITians and Doctors are writing for students preparing for IIT JEE (Main and Advanced) and Medical Exams (NEET, AIIMS).">
    		<link rel="canonical" href="https://www.driitian.com/blog" />
    		<meta name="robots" content="index, follow"/>
        <?php } ?>

        <?php if($pagename == "career"){ ?>
        <title>Career -Dr. IITian</title>
        <meta name="description" content="">
		<link rel="canonical" href="https://www.driitian.com/career" />
		<meta name="robots" content="noindex, nofollow"/>
        <?php } ?>
        
        <?php if($pagename == "gallery"){ ?>
        <title>Dr. IITian IIT JEE Coaching: Gallery</title>
        <meta name="description" content="Dr. IITian Coaching Class in Indore, only Institute which provides best Education in the field of IIT JEE, NTSE, NEET. Check our gallery for our achievements.">
		<link rel="canonical" href="https://www.driitian.com/gallery" />
		<meta name="robots" content="noindex, nofollow"/>
        <?php } ?>
        
        <?php if($pagename == "thankyou"){ ?>
        <title>Thank You -Dr. IITian</title>
        <meta name="description" content="Thank You for showing your interest in Dr. IITian. We will contact you soon...">
		<link rel="canonical" href="https://www.driitian.com/thankyou" />
		<meta name="robots" content="index, follow"/>
        <?php } ?>
        
        <meta name="author" content="Dr. IITian">
        <meta name="theme-color" content="#1e7273">
		<link rel="alternate" href="https://www.driitian.com/" hreflang="en-in" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <!-- Favicon -->
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/fevicon1.png" type="image/gif" sizes="16x16">
        
        <!-- fontello -->   
        <!--[if IE 7 ]><link href="css/fonts/fontello-ie7.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
        <link href="<?php echo base_url(); ?>frontassets/css/fonts/fontello.css" rel="stylesheet" type="text/css" media="screen" />

        <!-- owl-carousel -->   
        <link href="<?php echo base_url(); ?>frontassets/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" media="screen" />            
        <!-- Custom style -->               
        <link href="<?php echo base_url(); ?>frontassets/css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>frontassets/css/media-queries.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Font-awesome CSS-->
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

        <!-- Preload -->   
        <!-- <link href="css/pace/pace-theme-barber-shop.css" rel="stylesheet" type="text/css" media="screen" /> -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <!-- Fav and touch icons -->
       <!--  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.html"> -->
<!--        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.html">
 -->       <!--  <link rel="shortcut icon" href="assets/ico/favicon.html"> -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&display=swap" rel="stylesheet">
        <link href="<?php echo base_url(); ?>frontassets/notify/metro/notify-metro.css" rel="stylesheet" /> 
		<script src="<?php echo base_url(); ?>frontassets/js/jquery.min.js"></script>
		<!-- Bootstrap-->
        <script src="<?php echo base_url(); ?>frontassets/js/bootstrap.js"></script>

        <script src="<?php echo base_url(); ?>frontassets/notify/metro/notify.js"></script>
        <script src="<?php echo base_url(); ?>frontassets/notify/metro/notify-metro.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>-->
 <!-- rahul Undo -->
  <style>
          .dropbtn {
            background-color: #46909300;
            color: #000;
            padding: 7px 15px;
            margin: 11px 0px 0px 12px;
            font-size: 15px;
            border: none;
            text-decoration: none;
          }

          .dropdown {
            position: relative;
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #e7e7e7;
            min-width: 190px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: -81px;
          }

          .dropdown-content a {
            color: black;
            padding: 5px 16px;
            text-decoration: none;
            display: block;
          }
          @media handheld, only screen and (min-width: 767px){
          .dropdown:hover .dropdown-content {display: block; }
                    .dropdown:focus .dropdown-content{
                      display: block!important;
                    }
          }
          .dropdown-content a:hover {background-color: #469093;}

          
          .dropdown .dropbtn{
            transition: all 700ms ease 0s;
          }
          .dropdown-content{
            animation: animate 1s ease 0s;
          }
          @keyframes animate{
              0%{transform: translateY(20px);}
              100%{transform: translateY(0px);}
          }

          .dropdown:hover .dropbtn {background-color: #469093; color: #fff;}
          @media handheld, only screen and (max-width: 767px){
            .dropbtn{
          padding-left: 25px!important;
        }
            .dropdown-content{
              position: unset;
            }
          .dropdown:focus .dropdown-content{
            display: block!important;
          }
          .navbar-nav > li > a{
              margin-left: 0;
            }
            .navbar-default .navbar-nav > li > a:hover{
              background-color: #3ca8a9;
            }
          }
          .d-none{
            display: none!important;
          }
          .d-block{
            display: block!important;

          }
      </style>

      
<!-- rahul Undo -->       

<!-- Schema Starts -->
    <script>
        var windowHeight = $(window).height(); 
        var windowWidth = $(window).width();
        //alert(windowHeight);
        setwidthheight();
        //$.cookie('sw', windowWidth);
        function setwidthheight(){
            $.ajax({
            type: 'POST',
            url:"<?php echo base_url()?>home/setscreensize",
            data:{ width: windowWidth, height: windowHeight},
            dataType: 'html',
            success : function(data){
                    //alert('hi');
                    // alert(windowWidth);
                    $(".slider").html(data);
                },
    
            });
        }
    </script>
    <script type="application/ld+json">
        
        // alert(windowWidth);
        {  "@context" : "https://schema.org",
           "@type" : "WebSite",
           "name" : "Dr. IITian",
           "alternateName" : "Dr. IITian",
           "url" : "https://www.driitian.com/"
        }
    </script>

    <script type="application/ld+json">
        {
          "@context" : "https://schema.org",
          "@type" : "Organization",
          "name" : "Dr. IITian",
          "url" : "https://www.driitian.com/",
          "logo" : "https://driitian.com/uploads/logo11.png",

         "contactPoint" : [{
        "@type" : "ContactPoint",
        "telephone" : "+91-9009477477",
        "contactType" : "Sales"

      }],

      "address" : [{
            "@type" : "PostalAddress",
            "addressCountry" : "India",
            "streetAddress" : "38, Gumasta Nagar, Ranjeet Hanuman Main Road,",
            "addressLocality" : "Indore",
            "addressRegion" : "IN",
            "postalCode" : "452009",
            "telephone" : "+91-9009477477",
      "email" : "info@driitian.com"

      }],
      "description": "Dr. IITian provides IIT JEE Mains & Advanced, NEET/Pre-Medical/AIIMS, NTSE, KVPY, Olympiads competitive exams coaching and Foundation Courses for students of classes 8th, 9th & 10th.",

       "sameAs": [
        "https://www.facebook.com/DrIITian-361725731335811/",
        "https://www.instagram.com/dr.iitian_indore/"
      ]

        }
    </script>

    <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "Place",
      "geo" : {
        "@type" : "GeoCoordinates",
        "latitude" : "22.719568",
        "longitude" : "75.857727"
      },
      "name" : "Dr. IITian"
    }
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1490418121109749');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1490418121109749&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155025147-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-155025147-1');
		  
		  gtag('config', 'AW-752087103');
		</script>

        <!-- Event snippet for Subscribe to Newsletter conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
              'send_to': 'AW-752087103/OsWwCLjF0roBEL_gz-YC',
              'event_callback': callback
          });
          return false;
        }
        </script>

<script>
(function() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check if the user is okay to get some notification
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
  $blog_data = $this->CommonModel->getSingleData('addblog',array(1=>1));
  print_r($blog_data);
  var options = {
        body: "New Notification !",
        icon: "icon.jpg",
        dir : "ltr"
    };
  var notification = new Notification("Hello",options);
  }

  // Otherwise, we need to ask the user for permission
  // Note, Chrome does not implement the permission static property
  // So we have to check for NOT 'denied' instead of 'default'
  else if (Notification.permission !== 'denied') 
  {
    Notification.requestPermission(function (permission) 
    {
      // Whatever the user answers, we make sure we store the information
      if (!('permission' in Notification)) 
      {
        Notification.permission = permission;
      }

      // If the user is okay, let's create a notification
      if (permission === "granted") 
      {
        var options = 
        {
              body: "New Notification !",
              icon: "icon.jpg",
              dir : "ltr"
          };
        var notification = new Notification("Hello",options);
      }
    });
  }

})();
</script>
</head>

      <body id="top" data-spy="scroll" data-target=".navbar" data-offset="60" style="background-color: #E7E4D3;">
        
    <!-- Header-->
    <header>
        <div class="top-info" style="border-radius: 0px 0px 20px 20px;">
            <div class="container">
                <ul class="inline-list contact-top">
                    <li><i class="icon-mobile"></i> <?php echo getWebOptionValue('mobile_no');?></li>
                    <li><i class="icon-paper-plane"></i><a href="<?php echo base_url();?>contact"><?php echo getWebOptionValue('email');?></a></li>
                    <div class="s_icon" style="float: right;">
						<li><a href="<?php echo base_url(); ?>registration" class="btn" style="    background-color: #469093;padding: 6px;">Registration</a></li>
                      <li ><a href="<?php echo getWebOptionValue('facebook_url');?>" target="_blank"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="<?php echo getWebOptionValue('instagram_url');?>" target="_blank"><span class="fa fa-instagram"></span></a></li>
                      
                      <li><a href="<?php echo getWebOptionValue('yt_url');?>" target="_blank"><span class="fa fa-youtube"></span></a></li>
                  </div>
                </ul>               
            </div>
        </div>
        <div class="container header_container">
            <nav class="navbar navbar-default nm" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a id="logo" class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url().'uploads/'.getWebOptionValue('front_logo'); ?>" alt="Dr. IITian Logo" class="frontlogoimg" /></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse nb np cont1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url();?>" class="anchor">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about" class="anchor">About Us</a></li>
                    <li><a href="<?php echo base_url();?>#whyiit" class="anchor">Why Dr.iiTian?</a></li>
                    <!-- <li><a href="<?php echo base_url();?>Home/#course" class="anchor">Courses</a></li> -->
                    <li><a href="<?php echo base_url();?>#testimonial" class="anchor">Testimonial</a></li>
                    <!-- <li><a href="<?php echo base_url();?>Home/#course" class="anchor">Courses</a></li> -->
                    <li class="dropdown">
                      <a class="dropbtn">Courses <i class="fa fa-chevron-down" ></i></a>
                      <div class="dropdown-content">
                        <?php 
                        $categorydata = $this->CommonModel->getWhereData('courses',array(1=>1));
                        if(isset($categorydata) && !empty($categorydata))
                        {
                        foreach ($categorydata as $categoryarray)
                        {                               
                        ?>   
                          <a href="<?php echo base_url().'courses/'.$categoryarray["url_slug"]?>"><?php echo $categoryarray["title"]?></a>
                        <?php    
                        }
                        }
                        ?>
                      </div>
                    </li>
                    <li><a href="<?php echo base_url();?>#video" class="anchor">Videos</a></li>
                    <li><a href="<?php echo base_url();?>gallery" class="anchor">Gallery</a></li>
                    <!--<li><a href="<?php echo base_url();?>career" class="anchor">Career</a></li>-->
                    <li><a href="<?php echo base_url();?>blog" class="anchor">Blog</a></li>
                    <li><a href="<?php echo base_url();?>contact" class="anchor">Contact</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
              <!-- <a class="register" href="<?php echo base_url();?>registration" style="">
			    	<span>Register</span>
			  </a> -->
            </nav>
        </div>
    </header>
	<div class="close-marq">X</div>
	<div class="news-line" style="font-weight:bold; letter-spacing: 1px;
    word-spacing: 1px;">
		<marquee onmouseover="this.stop();" onmouseout="this.start();" width="100%" direction="left" height="20px" style="color: #f7f766;
    font-weight: 700;
    font-family: 'Titillium Web', sans-serif;">
		<?php echo getWebOptionValue('scrolling_text');?>
		</marquee>
	</div>
    <!-- End Header--> 

<a href="<?php echo getWebOptionValue('yt_url');?>" target="_blank" id="subscribe_youtube" class="">
      <img class="img-responsive you" src="<?php echo base_url();?>frontassets/img/youtube.png" alt="subscribe-youtube-channel" title="subscribe">

  </a>    