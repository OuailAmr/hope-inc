<?php
session_start();
if(isset($_GET["error"])){
 
}else{
  $_GET["error"] = "";
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="new form new ideas, Our management consulting services, We help to capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Nanotechnology immersion along the information highway will close the loop on focusing on the line., About Collaboration, business strategy, Modern Design, Contact Us">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="icon" type="image/x-icon" href="images/H_logo.svg">
    <title>Hope Inc.</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <div class="containsall"><header class="u-clearfix u-header u-header" id="sec-357e">
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/hope_logo.svg" alt="logo image" height="50px" width="150px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <div class="navigation">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li style="visibility:hidden;" class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li style="visibility:hidden;" class="nav-item"><a class="nav-link" href="#testimonials"> Testimonials</a></li>
          <li style="visibility:hidden;" class="nav-item"><a class="nav-link" href="#faq" style="text-transform:uppercase;">faq</a></li>
          <li style="visibility:hidden;" class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
          <li style="visibility:hidden;" class="nav-item"><a class="nav-link" href="#contact">contact</a>
          </li>
        </ul>
      </div>
      
        
      <?php
        if(!isset($_SESSION['email'])) {
        echo('<div class="btndiv">');
        echo('<button type="button" id="myBtn"  class="rounded-pill log">Log In</button>');
        echo('<button type="button" id="myBtn2" class="rounded-pill sign">Sign Up</button>');
        echo('</div>');
        }else{
      
      echo('<div class="dropdown2">');
      echo('<a class="avatar" href="javascript:myFunction()"><img class="dropbtn2" src="images/user-img.svg" alt ></a>');
      
      // echo('<button onclick="myFunction()"class="dropbtn2 rdm3">Hello '. $_SESSION["name"].' !</button>');
      
      echo('<div id="myDropdown" class="dropdown-content2 ">');
      
      echo('<div class="profilediv" >'. $_SESSION["name"] .'<hr></div>');
      echo('<a href="#" class="profilelink">Link 3</a>');
      echo('<a href="#" class="profilelink">Link 3</a>');
      echo('<a href="#" class="profilelink">Link 3</a>');

      echo('<a href="db_logout.php" class="profilelink logoutbtn" id="difid">Log Out</a>');
      echo('</div>');
      echo('</div>');
      
      
      
      
    }
    ?>

    </header>
    <div style="margin-top:30px;"></div>
    <section class="u-clearfix u-section-1" id="carousel_123b">
      <div class="u-clearfix u-sheet u-sheet-1" id="coding">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-24 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-1">
                <div class="icon d-block fas fa-code codingsvg"></div>
          
                <h3 class="display-3--title mt-1 ">Web Development</h3>
                  <p class="u-text u-text-2">At Hope, we are on a mission to redefine the web development landscape by delivering exceptional websites that surpass expectations. Our philosophy is simple: to provide our clients with a hassle-free experience while ensuring a flawless end product that stands the test of time. We believe in the power of a productocracy, where every website we create is meticulously crafted to perfection, leaving no room for future complaints.</p>
                </div>
              </div>
              <div class="u-align-right u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <img src="images/services/service-2.svg" alt="" class="u-image u-image-default u-image-1" data-image-width="1200" data-image-height="1500">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_fb8f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <p class="u-text u-text-1"> When you choose Hope, you can trust that we handle every aspect of web development ourselves. From the initial concept and design to the translation to the development and deployment, we take care of it all. With a dedicated team of expert developers, we ensure that your website is built with the utmost precision and attention to detail. <br>

Our expertise lies in creating websites for businesses across various industries. We understand that every business is unique, which is why we approach each project with a deep understanding of our clients' goals and concerns. By taking the time to truly comprehend your needs, we deliver a tailored website that aligns perfectly with your purpose. <br>

One of our notable accomplishments is the development of Usthb.dz, the official website of a prestigious university. This project showcases our ability to handle complex web development requirements while maintaining high standards of quality and functionality. <br>

But don't just take our word for it. The responsible of USTHB had this to say about our team: "Great developers who consistently deliver outstanding results. They do an excellent job and ensure that the final product is top-notch." <br>

                  At Hope, we pride ourselves on our unwavering commitment to excellence, our relentless pursuit of perfection, and our ability to exceed client expectations. When you choose us as your web development partner, you can be confident that you are in capable hands. <br>

                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <blockquote class="u-border-palette-2-light-1 u-text u-text-3">Unlock the full potential of your online presence with Hope. Contact us today to discuss how we can bring your vision to life and create a website that leaves a lasting impression. </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="coding" class="u-clearfix u-palette-2-light-2 u-section-3" id="carousel_e71d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-text-black u-icon-1"><img src="vector_5.svg" alt="" height="50px"></span>
                <h4 class="u-text u-text-1">Content Filling</h4>
                <p class="u-text u-text-2">We specialize in crafting compelling and engaging content that resonates with your target audience, leveraging words, visuals, and multimedia to convey your brand's message effectively and drive meaningful connections.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-black u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9d47"></use></svg><svg class="u-svg-content" viewBox="0 0 24 24" id="svg-9d47"><g><path style="fill:#58af53;" d="m4.75 16.57c-.414 0-.75-.336-.75-.75v-11.07c0-.414.336-.75.75-.75h12.65c.414 0 .75.336.75.75s-.336.75-.75.75h-11.9v10.32c0 .414-.336.75-.75.75z"></path>
</g><g><path style="fill:#58af53;" d="m19.25 20h-12.75c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h12v-10.32c0-.414.336-.75.75-.75s.75.336.75.75v11.07c0 .414-.336.75-.75.75z"></path>
</g><g><path style="fill:#58af53;" d="m5.768 22.004c-.196 0-.393-.077-.54-.229-.287-.298-.279-.773.02-1.061.291-.281.452-.653.452-1.048s-.161-.767-.453-1.048c-.276-.266-.307-.698-.071-1l1.919-2.467c.134-.173.173-.392.11-.592l-3.387 3.266c-.298.288-.772.28-1.061-.02-.288-.298-.279-.773.02-1.061l3.466-3.342c.322-.31.78-.45 1.224-.378.447.073.821.343 1.026.74.384.742.3 1.647-.215 2.309l-1.552 1.996c.309.472.474 1.022.474 1.597 0 .806-.324 1.562-.912 2.129-.145.14-.333.209-.52.209z"></path>
</g><g><path style="fill:#58af53;" d="m8.25 24h-7.5c-.414 0-.75-.336-.75-.75v-4.63c0-1.777.687-3.455 1.935-4.726l1.879-1.919c.289-.296.765-.3 1.061-.011.296.29.301.765.011 1.061l-1.88 1.92c-.971.989-1.506 2.294-1.506 3.675v3.88h6v-.38c0-.264.139-.508.365-.644.685-.41 1.12-1.172 1.135-1.991.008-.415.328-.727.764-.736.414.008.744.35.736.764-.022 1.181-.587 2.294-1.5 3v.735c0 .416-.336.752-.75.752z"></path>
</g><g><path style="fill:#58af53;" d="m16.765 10.996c-.077 0-.155-.006-.232-.019-.447-.073-.821-.343-1.026-.74-.384-.742-.3-1.647.215-2.309l1.552-1.996c-.309-.473-.474-1.023-.474-1.598 0-.806.324-1.562.912-2.129.299-.286.773-.279 1.061.02.287.298.279.773-.02 1.061-.292.281-.453.653-.453 1.048s.161.767.453 1.048c.276.266.307.698.071 1l-1.919 2.468c-.134.173-.173.392-.11.592l3.387-3.266c.299-.286.773-.279 1.061.02s.279.773-.02 1.061l-3.466 3.342c-.266.255-.624.397-.992.397z"></path>
</g><g><path style="fill:#58af53;" d="m19.65 12.25c-.189 0-.379-.071-.525-.214-.296-.29-.301-.765-.011-1.061l1.88-1.92c.971-.989 1.506-2.294 1.506-3.675v-3.88h-6v.38c0 .264-.139.508-.365.644-.685.409-1.12 1.172-1.135 1.99-.008.414-.356.728-.764.736-.414-.008-.744-.35-.736-.764.022-1.181.587-2.294 1.5-3v-.736c0-.414.336-.75.75-.75h7.5c.414 0 .75.336.75.75v4.63c0 1.777-.687 3.455-1.935 4.726l-1.879 1.919c-.147.15-.342.225-.536.225z"></path>
</g></svg></span>
                <h4 class="u-text u-text-3">Translation</h4>
                <p class="u-text u-text-4">Our expert translators bridge language barriers, delivering accurate and culturally nuanced translations that preserve the essence of your content, enabling effective communication and global expansion of your brand</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-icon-3"><img src="vector_2.svg" alt="" height="50px" width="60px"> </span>
                <h4 class="u-text u-text-5">Web deployment</h4>
                <p class="u-text u-text-6">Our seamless web deployment process ensures your website goes live effortlessly, optimizing performance, security, and compatibility across platforms to maximize your online presence and reach your target audience effectively.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-text-black u-icon-4">
              <div class="fas fa-code codingsvg" ></div>
              </span>
                <h4 class="u-text u-text-7 ">Coding</h4>
                <p class="u-text u-text-8">Our skilled coders bring ideas to life through clean, efficient code. With expertise in diverse languages and frameworks, we develop robust, scalable solutions that power your digital presence.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1 servicefix">
          <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-5">
            <h1 class="u-text u-text-9 " id="servicesfix">Our Web Development services</h1>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1 designfix"><span class="u-icon u-icon-circle u-text-black u-icon-1">
                <img src="vector_4.svg" alt="" height="50px">
              </span>
                <h4 class="u-text u-text-1">Design</h4>
                <p class="u-text u-text-2">
                Our expertise lies in crafting visually stunning websites, combining aesthetics and functionality to create immersive user experiences that leave a lasting impression on your audience.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-text-black u-icon-1"><img src="vector_3.svg" alt="" height="50px" width=""> </span>
                <h4 class="u-text u-text-1">Photography</h4>
                <p class="u-text u-text-2">Our skilled photographers have a keen eye for capturing moments, creating compelling visuals that tell stories, evoke emotions, and bring your brand's narrative to life with striking imagery."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-1" id="carousel_123b">
      <div class="u-clearfix u-sheet u-sheet-1" id="marketing">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-24 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-lg u-valign-top-xl u-container-layout-1">
                <div class="icon d-block fas fa-paper-plane codingsvg"></div>
          
                <h3 class="display-3--title mt-1 ">Marketing</h3>
                  <p class="u-text u-text-2">At Hope, we excel in harnessing the potential of websites to successfully market our clients' products. With innovative strategies and a deep understanding of consumer behavior, we drive visibility, engagement, and sales through various digital avenues.</p>
                </div>
              </div>
              <div class="u-align-right u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <img src="images/services/service-1.svg"  alt="" class="u-image u-image-default u-image-1" data-image-width="1200" data-image-height="1500">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_fb8f">
      <div class="u-clearfix u-sheet u-sheet-1" >
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <p class="u-text u-text-1"> Our team of digital marketing experts combines creativity with data-driven insights to create tailored campaigns that captivate audiences. From compelling content to visually stunning graphics, strategic SEO to targeted social media advertising, we ensure your products shine in the digital realm. <br>

                  With a customer-centric approach, we dive into the core of your brand, understanding its unique selling points and target audience. By aligning our efforts with your goals, we develop a comprehensive website marketing strategy that maximizes your online presence and generates tangible results. <br>

                  Optimizing product descriptions, user interfaces, and persuasive call-to-action elements, we design websites that guide visitors seamlessly through the purchasing journey. Our focus is on delivering an exceptional user experience that cultivates trust, engagement, and conversions. <br>

                  Through analytical tools and meticulous tracking, we continuously refine our strategies to adapt to changing market dynamics. Our commitment to staying ahead ensures your products remain relevant and visible in the ever-evolving online landscape. <br>

                  Don't let your products go unnoticed. Partner with Hope and unleash the power of effective website marketing. Together, we'll propel your brand to new heights, expanding your reach and unlocking the true potential of your products in the digital realm. <br>

                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <blockquote class="u-border-palette-2-light-1 u-text u-text-3">Contact us today to discuss how Hope can elevate your online marketing game and pave the way for unprecedented success.</blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section  class="u-clearfix u-palette-2-light-2 u-section-3" id="carousel_e71d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-text-black u-icon-1"><img src="vector_5_1.svg" alt="" height="50px"></span>
                <h4 class="u-text u-text-1">Email Marketing</h4>
                <p class="u-text u-text-2">Engage and nurture leads through targeted campaigns, delivering personalized content that drives conversions and builds lasting customer relationships, leveraging the power of effective communication and segmentation.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-black u-icon-2"> <img src="vector_6.svg" alt="" height="50px"> </span>
                <h4 class="u-text u-text-3">Conversion Rate Optimization</h4>
                <p class="u-text u-text-4">Improve website elements and user experience, testing and optimizing to increase the percentage of visitors who convert into customers, maximizing your marketing efforts' effectiveness and driving business growth.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-text-black u-icon-3"><img src="vector_2_1.svg" alt="" height="50px" width="60px"> </span>
                <h4 class="u-text u-text-5">Search Engine Optimization</h4>
                <p class="u-text u-text-6"> Optimize your website to rank higher in search results, increasing visibility, organic traffic, and attracting relevant visitors, boosting your online presence and attracting potential customers.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-text-black u-icon-4">
              <div class="fas fa-code codingsvg" ></div>
              </span>
                <h4 class="u-text u-text-7 ">Web Analytics</h4>
                <p class="u-text u-text-8">Gain valuable insights from data analysis, measuring website performance, user behavior, and key metrics to make data-driven decisions, improving your marketing strategies and achieving better results.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1 servicefix">
          <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-5">
            <h1 class="u-text u-text-9 " id="servicesfix">Our Maketing services</h1>
            
      
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_4436">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1" id="hosting">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-37 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-text u-text-1">About Web Hosting</h2>
                  <p class="u-text u-text-2">Unlock Your Online Potential with Hope's Reliable Web Hosting Services. We seamlessly deploy your website and handle hassle-free hosting renewals. With our expertise in web development and hosting, we ensure a smooth transition from development to a live website. Trust us for security, speed, and reliability as we safeguard your valuable data with robust infrastructure and regular backups. Choose Hope as your trusted partner for a worry-free digital presence. Experience seamless online performance, optimized accessibility, and uninterrupted service. Take your business to new heights with our comprehensive web hosting services. Contact us today and unlock the power of reliable web hosting with Hope.</p>
                  <h1 class="u-text  u-title u-text-3" style="color:rgba(81,105,69,1);">TRUST AND CARE</h1>
                </div>
              </div>
              <div class="u-container-style  u-layout-cell u-right-cell u-size-23 ">
              <img src="images/services/service-3.svg" alt="cloud hosting illustration" class="img-fluid">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <div class="u-gallery-inner u-gallery-inner-1">
    <footer class="footer">
  <div class="container">
    <div class="row">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path style="fill:#58af53;" d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path style="fill:#58af53;" d="M15 7a2 2 0 0 1 2 2" />
            <path style="fill:#58af53;" d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">+213 793 69 65 74</a>
          <p class="contact-box__info--subtitle">  Everyday until 11pm</p>
        </div>
      </div>  
      <!-- CONTENT FOR EMAIL  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path style="fill:#58af53;" d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">wailamroun2002@gmail.com</a>
          <p class="contact-box__info--subtitle">Online support</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path style="fill:#58af53;" d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">Algiers, Algeria</a>
          <p class="contact-box__info--subtitle">Ain Taya</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          connect with us on social media
        </div>
        <div class="col-lg-7 col-md-6">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6 mx-auto">
        <h5 class="text-capitalize fw-bold">Hope Inc.</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
        We can spend countless words explaining to you why we're the best, but it's better if You simply contact us and get to the next step to find out for urself !
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Products</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#contact">e-Commerce Website</a></li>
          <li><a href="#contact">Portfolio Website</a></li>
          <li><a href="#contact">Reservation's Website</a></li>
          <li><a href="#contact">And More ...</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">useful links</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#"> Your Account</a></li>
          <li><a href="#">Become an Affiliate</a></li>
          <li><a href="#">create an account</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">contact</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="mailto:wailamroun2002@gmail.com">wailamroun2002@gmail.com</a></li>
          <li><a href="numberto:+213793696574">0793 69 65 74</a></li>
          <li><a href="#contact">Send us a message !</a></li>
          <li><a href="#testimonials">Give us a Review !</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- START THE COPYRIGHT INFO  -->
  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright 2021 <a href="#">Hope</a> | Created by <a href="#" target="_blank">Ouail</a><br><br>    
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    
    <div class="modal" id="myModal2">
<section class="user-login section">
	<div class="container formsec">
		<div class="row">
			<div class="col-12">
        <div class="close3 ">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center">
						
						<div class="title-text">
							<h3>Sign Up for A New Account</h3>
						</div>
						<form action="database.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Your Name" name="name" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="Email Address" name="email" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Password"  name="password" required>
              <input class="form-control main" type="password" placeholder="Confirm the password" name="password2" required>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn">sign up</button>
						</form>
            
            <?php
              if($_GET["error"] == "invalidpw"){
              echo(' <div class="errordiv"><p  >password requires 8 characters minimum <br> password requires special characters</p></div></script>');
 }
            ?> 
            

						<div class="new-acount">
							<p class="subtext">By clicking “Sign Up” I agree to <a href="privacy-policy.php">Terms of Conditions.</a></p>
							<p class="subtext">Already have an account? <a href="#" id="myBtn4">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<div class="modal" id="myModal3">
<section class="user-login section" >
	<div class="container formsec formsec3" >
		<div class="row">
			<div class="col-12">
        <div class="close2">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center" >
						
						<div class="title-text" >
							<h3>Your Reviews are very helpful to us !</h3>
						</div>
						<form action="reviews.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Full Name" name="urname" required>
							<!-- Email -->
							<input class="form-control main" type="text" placeholder="position" name="position" required>
							<!-- Password -->
							<input class="form-control main" type="longtext" placeholder="ur review"  name="review" required>
              
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn subbtn3">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>



<!-- The Modal -->
<div>
</section>
<div id="myModal" class="modal">

  <!-- Modal content -->
   <section class="user-login section">
    <div class="container formsec">
      <div class="row">
        <div class="col-12">
          <div class="close">
          <span class="closediv">&times;</span>
        </div>
          <div class="block">
            <!-- Image -->
            
            <!-- Content -->
            <div class="content text-center">
              
              <div class="title-text">
                <h3>Sign in to To Your Account</h3>
              </div>
              <form action="auth.php" method="post" >
                <!-- Username -->
                <input class="form-control main" type="text" name="email2" placeholder="Email" required>
                <!-- Password -->
                <input class="form-control main" type="password" name="password3"placeholder="Password" required>
                <!-- Submit Button -->
                <button type="submit2" class="btn btn-main-sm">sign in</button>
              </form>
              <div class="new-acount">
                <a href="contact.php">Forget your password?</a>
                <p>Don't Have an account? <a id="myBtn3" href="#" > SIGN UP</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
</div>

<div class="modal" id="myModal4">
<section class="user-login section" >
	<div class="container formsec formsec4" >
		<div class="row">
			<div class="col-12">
        <div class="close4">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center" >
						
						<div class="title-text" >
							<h3>Send Us Your Question !</h3>
						</div>
						<form action="questions.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Full Name" name="qname" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="email" name="qemail" required>
							<!-- Password -->
							<input class="form-control main" type="longtext" placeholder="Your Question"  name="question" required>
              
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn subbtn4">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
    
  </section>

  <script>
    

    // Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 


// When the user clicks on <span> (x), close the modal
var all = document.getElementsByClassName("containsall")[0];
console.log(all);

span.onclick = function() {
  modal.style.display = "none";
  all.style.filter ="none"; 
}
span2.onclick = function() {
  modal3.style.display = "none";
  all.style.filter ="none"; 
}
span3.onclick = function() {
  modal2.style.display = "none";
  all.style.filter ="none"; 
}
span4.onclick = function() {
  modal4.style.display = "none";
  all.style.filter ="none"; 
}
</script>


<script>
// When the user clicks anywhere outside of the modal, close it

btn.onclick = function() {
  modal.style.display = "block";
  element.classList.remove("show");
  all.style.filter ="blur(6px)"; 
}




btn2.onclick = function() {
  modal2.style.display = "block";
  element.classList.remove("show");
  
  all.style.filter ="blur(6px)"; 

  modal2.style.filter = "none";
  console.log(all)

}

btn3.onclick = function() {
  modal.style.display = "none";
  modal2.style.display = "block";
  all.style.filter ="blur(6px)"; 
  
}

btn4.onclick = function() {
   modal2.style.display = "none";
  modal.style.display = "block";
  all.style.filter ="blur(6px)"; 

}
btn5.onclick = function() {
 
 modal.style.display = "none";
 modal4.style.display = "block";
 all.style.filter ="blur(6px)"; 
}
btn6.onclick = function() {
 
  modal.style.display = "none";
  modal3.style.display = "block";
  all.style.filter ="blur(6px)"; 
}


// nfjabnfjoabfebfjabfkfe


if(window.location.href == "http://localhost/new/Hope.github.io-main/index.php?error=invalidpw" || window.location.href == "http://localhost/new/Hope.github.io-main/index.php?error=invalidpw#"){
  modal2.style.display = "block";
  all.style.filter ="blur(6px)"; 
}
// Get the button that opens the modal



window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
  </script>
   
    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=lHE4wmYrsco&ab_channel=NoobMaster69',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});
      
    
    </script>
    <script>
      
      function openCity(cityName) {

      var i;
      var x = document.getElementsByClassName("city");
      var y =document.getElementsByClassName(cityName)
      for (i = 0; i < y.length; i++) {
              
              
              y[i].style.display = "block";

            }
      

       if(cityName === "all"){ 
        
        for (i = 0; i < x.length; i++) {
          
          x[i].style.display = "block";
        }}
        else{
      for (i = 0; i < x.length; i++) { 
        
          if(x[i].id === cityName){

            
          }
          else{
          x[i].style.display = "none";  
          
        }
      }}}
      


    </script>
    <script>
      var element = document.getElementById("navbarNav")
      function myFunction(){
        
        if(!element.classList.contains("show")){
        element.classList.add("show");
      }else{
        element.classList.remove("show");
      }
      }


   
    </script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>

     <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show2");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn2')) {
        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show2')) {
            openDropdown.classList.remove('show2');
          }
        }
      }
    }


    function myFunction3() {
      var closingbtn = document.getElementsByClassName("popupwrong")[0];
      closingbtn.style.display ="none"
      all.style.filter ="none"
      window.location.replace("index.php")
    }
    </script>

    <script>
      var popups = document.getElementsByClassName("popupwrong");
      var i;
      var all = document.getElementsByClassName("containsall")[0];
      
      console.log(window.location.href := "http://localhost/new/Hope.github.io-main/index.php"){
        all.style.filter ="blur(3px)"
      }else{
        all.style.filter ="none"
      }


      
      
    </script>
  
</body>
</html>
