<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <style src="icon.css"></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
       
    
    <script>
        $(document).ready(function () {
  $(window).scroll(function () {
    //  sticky navbar on scroll script  //
    if (this.scrollY > 20) {
      $(".navbar").addClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }

    //  scroll-up button show/hide script  //
    if (this.scrollY > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });

  //  slide-up script  //

  $(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
    //  removing smooth scroll on slide-up button click  //
    $("html").css("scrollBehavior", "auto");
  });

  $(".navbar .menu li a").click(function () {
    //  Smooth scroll on Menu Items click  //

    $("html").css("scrollBehavior", "smooth");
  });

  //  Toggle Navbar  //

  $(".menu-btn").click(function () {
    $(".navbar .menu").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
  });

  //  Typing Text Animation  //

  var typed = new Typed(".typing", {
    strings: [
      "Fullstack Developer",
      "Software Developer",
      "Python Developer",
      "Founder",
      "Author"
    ],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
  });

  var typed = new Typed(".typing-2", {
    strings: [
      "Fullstack Developer",
      "Software Developer",
      "Python Developer",
      "Founder",
      "Author"
    ],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
  });

  //  Owl Carousel  //

  $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeOut: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: false
      }
    }
  });
});

    </script>
</head>
<body>
    <body>
        <div class="scroll-up-btn">
          <i class="fas fa-angle-up"></i>
        </div>
      
        <!-- Header -->
        <nav class="navbar">
          <div class="max-width">
            <div class="logo"><a href="#"><span>Shivam</span><span>chourashiya</span></a></div>
            <ul class="menu">
              <li><a href="#home" class="menu-btn"><strong>Home</strong></a></li>
              <li><a href="#about" class="menu-btn"><strong>About</strong></a></li>
              <li><a href="#services" class="menu-btn"><strong>Services</strong></a></li>
              <li><a href="#skills" class="menu-btn"><strong>Skills</strong></a></li>
              <li><a href="#projects" class="menu-btn"><strong>Projects</strong></a></li>
              <li><a href="#contact" class="menu-btn"><strong>Contact </strong></a></li>
            </ul>
            <div class="menu-btn">
              <i class="fas fa-bars"></i>
            </div>
          </div>
        </nav>
      
    <!-- contact message -->
    <?php if (isset($_GET['success'])): ?>
       <!-- <p style="color: green;">Your message has been sent successfully!</p> -->

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully!</strong> Your message has been sent successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


    <?php elseif (isset($_GET['fail'])): ?>
        <p style="color: red;">Failed to send your message. Please try again.</p>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Failed!</strong> Failed to send your message. Please try again.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php endif; ?>


        <!-- Home -->
        <section class="home" id="home">
          <div class="max-width">
            <div class="home-content">
              <div class="text-1">Hello, This is</div>
              <div class="text-2">Shivam chourashiya</div>
              <div class="text-3">And I'm a Software engineer <span class="typing"></span></div>
              <a href="#">Hire me</a>
            </div>
          </div>
        </section>
      
        <!--  About  -->
        <section class="about" id="about">
          <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
              <div class="column left">
                <img src="shivam.jpg" alt="Profile Image 626x626">
              </div>
              <div class="column right">
                <div class="text">I'm Shivam Chaurashiya and I'm a  software engineer<span class="typing-2"></span></div>
                <p>Seeking an entry-level opportunity with an esteemed organization where I can utilize my skills & enhance learning in the field of work. Capable of mastering new technologies.</p>
                <br>
                <div class="text">Why Work With Me</div>
                <p>I'm a great communicator & love to invest the necessary time to understand the customer's problem very well.</p>
      
                <a href="https://drive.google.com/file/d/1JkM4ECWcTpkoyoOcBLKJP_atkzkjV8F6/view?usp=sharing" 
                >Download CV</a>
              </div>
            </div>
          </div>
        </section>
      
        <!-- Services -->
        <section class="services" id="services">
          <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
              <div class="card">
                <div class="box">
                  <i class="fas fa-laptop-code"></i>
                  <div class="text">Web DEVELOPMENT</div>
                  <p>"Expert web development services tailored to your needs. Contact us for innovative solutions and top-notch results."</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <i class="fas fa-user-secret"></i>
                  <div class="text">Dashboard</div>
                  <p>"Crafting intuitive dashboard designs for actionable insights. Elevate your data visualization. Contact us for bespoke solutions."</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <i class="fas fa-code"></i>
                  <div class="text">Excel</div>
                  <p>"Boost your business with Excel expertise. Let us streamline your data and enhance your productivity. Contact us for tailored solutions."</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <!-- Skills -->
        <section class="skills" id="skills">
          <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
              <div class="column left">
      
                <div class="text">INTERNSHIP</div>
                <p>
                  <li class="intern">Online Training Program "Tech Mahindra"</li>  
                </p>
      
                <br>
                <div class="text">PROJECT</div>
      
                <p>
                  <li class="project">Portfolio (HTML, CSS, js, Bootstraps)</li>
                  <li class="project">Online Voting Site</li>
                  <li class="project">GST Billing App (Laravel, Bootstraps etc.)</li>
                  <li class="project">Dashoard (Chart.js)</li>
                </p>
      
                <br>
                <div class="text">DEVELOPMENT SKILLS</div>
      
                <p>
                  I'm familiar & work on a daily basis with HTML, CSS, JavaScript, Bootstrap, React js and other modern frameworks.
                </p>
                <a href="#" target="blank">Get Educate...</a>
              </div>
              <div class="column right">
                <div class="bars">
                  <div class="info">
                    <span>PHP</span>
                    <span>70%</span>
                  </div>
                  <div class="line python"></div>
                </div>
                <div class="bars">
                  <div class="info">
                    <span>HTML/CSS/JavaScript</span>
                    <span>70%</span>
                  </div>
                  <div class="line html"></div>
                </div>
                <div class="bars">
                  <div class="info">
                    <span>Laravel</span>
                    <span>60%</span>
                  </div>
                  <div class="line css"></div>
                </div>
                <div class="bars">
                  <div class="info">
                    <span>DevOps</span>
                    <span>40%</span>
                  </div>
                  <div class="line js"></div>
                </div>

                <div class="bars">
                  <div class="info">
                    <span>DataBase & Ad.Excel</span>
                    <span>68%</span>
                  </div>                
                  <div class="line bootstraps"></div>
                </div>
                
              
              </div>
            </div>
          </div>
        </section>
      
        <!-- Projects -->
        <section class="projects" id="projects">
          <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="carousel owl-carousel">
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?shopping" alt="">
                  <div class="text">Ecommerce</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?portfolio" alt="">
                  <div class="text">Portfolio</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?blog" alt="">
                  <div class="text">Blog</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?messanger" alt="">
                  <div class="text">Messaging App</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?app-clone" alt="">
                  <div class="text">Clone</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="https://source.unsplash.com/720x600/?code,demo" alt="">
                  <div class="text">Demo</div>
                  <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <!-- Contact -->
        <section class="contact" id="contact">
          <div class="max-width">
            <h2 class="title">Contact Me</h2>
            <div class="contact-content">
              <div class="column left">
                <div class="text">Get in Touch</div>
                <p>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be a part of your visions. Email me with any questions or inquiries. I'll happy to answer your questions and set up a meeting with you.</p>
                <div class="icons">
      
                  <a href="https://instagram.com/aistscience">
                    <div class="row">
                      <i class="fa-solid fa-user-large"></i>
                      <div class="info">
                        <div class="head">Name</div>
                        <div class="sub-title"><a href="https://aistechx.com/" style="text-decoration: none; color: #333;"> Shivam Chaurasiya</a></div>
                      </div>
                    </div>
                  </a>
      
                  <div class="row">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="info">
                      <div class="head">&nbsp;Address</div>
                      <div class="sub-title">&nbsp;Neelbad chok, Bhopal MP, India</div>
                    </div>
                  </div>
      
                  <div class="row">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="info">
                      <div class="head">Email</div>
                      <div class="sub-title"><a href="mailto:#" style="text-decoration: none; color: #333;"> Alokrewa1998@gmail.com</a></div>
                    </div>
                  </div>
      
                  <div class="row">
                    <i class="bi bi-translate"></i>
                    <div class="info">
                      <div class="head">Language Known</div>
                      <div class="sub-title">Hindi, English</div>
                    </div>
                  </div>
      
                  <br>
      
                  <!-- Social -->
                  <div class="social-menu">
                    <ul style="background-color: azure;">
                      <li><a href="https://github.com/Fc7049442832"> 
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                      </a></li>
                      <li><a href="http://www.linkedin.com/in/Fc7049442832">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                      </a></li>
                      <li><a href="https://www.instagram.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                      </a></li>
                      <li><a href="https://twitter.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                      </a></li>
                      <li><a href="https://" title="Get Educate with Us">
                        <i class="fa-solid fa-graduation-cap"></i>
                      </a></li>
                    </ul>
                  </div>
                </div>
              </div>
      
              <!-- Reach -->
              <div class="column right">
                <div class="text">Message me</div>
                <form action="contact.php" method="post">
                  <div class="fields">
                    <div class="field name">
                      <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="field email">
                      <input type="number" name="mob" placeholder="Your Mobile" required>
                    </div>
                  
                    <div class="field email">
                      <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="field">
                    <input type="text" name="sub" placeholder="Subject" required>
                  </div>
                  <div class="field textarea" name="commit">
                    <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                  </div>
                  <div class="button-area">
                    <button type="submit">Send message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      
        <!-- Footer -->
        <footer>
          <span>
            <a href="https://www.linkedin.com/in/Fc7049442832" style="color: rgb(192, 187, 196);"> Shivam Chaurasiya</a> | <span class="far fa-copyright"></span> 2022 All Rights Reserved. Privacy Policy
          </span>
        </footer>    
      </body>
</body>
</html>