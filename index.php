<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portfolio</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./CSS/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <style>
      body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
      .w3-row-padding img {margin-bottom: 12px}
      /* Set the width of the sidebar to 120px */
      .w3-sidebar {width: 120px;background: #222;}
      /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
      #main {margin-left: 120px}
      /* Remove margins from "page content" on small screens */
      @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>

  <body class="w3-black" data-new-gr-c-s-check-loaded="14.1094.0" data-gr-ext-installed="">

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
      <!-- Avatar image in top left corner -->
      <img src="./CSS/riya.jpg" style="width:100%">
      <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
      </a>
      <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
      </a>
      <a href="#projects" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-briefcase w3-xxlarge"></i>
        <p>PROJECTS</p>
      </a>
      <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
      </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
      <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="#projects" class="w3-bar-item w3-button" style="width:25% !important">PROJECTS</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
      </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
      
      <!-- Header/Home -->
      <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Riya.</h1>
        <!-- <p>Photographer and Web Designer.</p> -->
        <img src="./CSS/riya.jpg" alt="riya" class="w3-image" width="992" height="1108">
      </header>

      <!-- About Section -->
      <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">About Me</h2>
        <hr style="width:160px" class="w3-opacity">
        <p class="w3-large">Hello There!</p>
        <p class="w3-large">
          I am Riya Shrestha Koirala. I have completed a Bachelor of Science, majoring in Computer Science with a minor in Mathematics from Purdue School of Science, IUPUI. I have a passion for web development and design. I love to write clean and efficient code.
        </p>
        <p class="w3-large">
          Beside my love for web development and design, I also have love for art. In my free time, I do hand lettering, sketching, painting and cooking.
        </p>

        <!--Skills-->
        <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
        <div class="w3-container">    
          
          <!--First row-->
          <div class="w3-row">
            <div class="w3-third">
              <h4>Web Technologies</h4>
              <ul class="w3-large">
                <li>HTML</li>
                <li>CSS</li>
              </ul>
            </div>

            <div class="w3-third">
              <h4>Scripting Languages</h4>
              <ul class="w3-large">
                <li>JavaScript</li>
                <li>PHP</li>
              </ul>  
            </div>

            <div class="w3-third">
              <h4>Programming Languages</h4>
              <ul class="w3-large">
                <li>C</li>
                <li>R</li>
              </ul>  
            </div>
          </div>
          <!--End of first row-->

          <!--Second row-->
          <div class="w3-row">
            <div class="w3-third">
              <h4>Operating Systems</h4>
              <ul class="w3-large">
                <li>Linux</li>
                <li>Windows</li>
              </ul>
            </div>
            <div class="w3-third">
              <h4>Database</h4>
              <ul class="w3-large">
                <li>Oracle</li>
                <li>PL/SQL</li>
                <li>MySQL</li>
              </ul>  
            </div>
            <div class="w3-third">
              <h4>Tools</h4>
                <ul class="w3-large">
                  <li>GIT</li>
                  <li>VS Code</li>
                  <li>Dev Tools</li>
                  <li>Figma</li>
                </ul>
            </div>
          </div>
          <!--End of second row-->
        </div>
        <!--End of Skills-->

        <button class="w3-button w3-light-grey w3-padding-large w3-section">
          <a style="text-decoration: none" href="Riya_Resume.pdf" download>
            <i class="fa fa-download"></i> Download Resume
          </a>
        </button>

      <!-- End About Section -->
      </div>
       
        <!-- <p class="w3-wide">Photography</p>
        <div class="w3-white">
          <div class="w3-dark-grey" style="height:28px;width:95%"></div>
        </div>
        <p class="w3-wide">Web Design</p>
        <div class="w3-white">
          <div class="w3-dark-grey" style="height:28px;width:85%"></div>
        </div>
        <p class="w3-wide">Photoshop</p>
        <div class="w3-white">
          <div class="w3-dark-grey" style="height:28px;width:80%"></div>
        </div><br> -->
        
        <!-- <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">11+</span><br>
            Partners
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">55+</span><br>
            Projects Done
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">89+</span><br>
            Happy Clients
          </div>
          <div class="w3-quarter w3-section">
            <span class="w3-xlarge">150+</span><br>
            Meetings
          </div>
        </div> -->

        
        
        
        <!-- Grid for pricing tables -->
        <!-- <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half w3-margin-bottom">
            <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
              <li class="w3-padding-16">Web Design</li>
              <li class="w3-padding-16">Photography</li>
              <li class="w3-padding-16">5GB Storage</li>
              <li class="w3-padding-16">Mail Support</li>
              <li class="w3-padding-16">
                <h2>$ 10</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div>

          <div class="w3-half">
            <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
              <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
              <li class="w3-padding-16">Web Design</li>
              <li class="w3-padding-16">Photography</li>
              <li class="w3-padding-16">50GB Storage</li>
              <li class="w3-padding-16">Endless Support</li>
              <li class="w3-padding-16">
                <h2>$ 25</h2>
                <span class="w3-opacity">per month</span>
              </li>
              <li class="w3-light-grey w3-padding-24">
                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
              </li>
            </ul>
          </div> -->
        <!-- End Grid/Pricing tables -->
        <!-- </div> -->
        
        <!-- Testimonials -->
        <!-- <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
        <img src="./CSS/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
        <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
        <p>John Doe saved us from a web disaster.</p><br>
        
        <img src="./CSS/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
        <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
        <p>No one is better than John Doe.</p> -->
      
      
      
      <!-- Portfolio Section -->
      <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="projects">
        <h2 class="w3-text-light-grey">Projects</h2>
        <hr style="width:140px" class="w3-opacity">

        <!--Projects-->
        <h3 class="w3-padding-16 w3-text-light-grey">Indiana State Science Fair</h3> 
        <p class="w3-large w3-margin-right">Web Application | PHP Project</p>
        <p class="w3-large">A grading system with two roles Judge and Student where the judge provides rank to students based on their projects. We created the website and hosted it on a local server. End-to-end testing was done for the site.</p><br>

        <h3 class="w3-padding-16 w3-text-light-grey">Movie Rental System</h3> 
        <p class="w3-large w3-margin-right">Web Application | DBMS Project</p>
        <p class="w3-large">A movie rental system in which customers can view movie catalogs and rent movies based on their availability. I implemented CRUD operation to manage the movie catalog. I created the website and hosted it on a local server. Unit testing and regression testing were done to maintain the quality of the web application.</p><br>

        <h3 class="w3-padding-16 w3-text-light-grey">Open-source Vulnerability Scanner</h3> 
        <p class="w3-large w3-margin-right">Research</p>
        <p class="w3-large">It was a real-time project done for Trava Company (https://www.travasecurity.com/) where our main task was to research an open-source vulnerability scanner and compare it to Qualis (Vulnerability scanner used by Trava Security). We made use of OpenVAS Docker image and GCP to achieve our goal.</p><br>

        <h3 class="w3-padding-16 w3-text-light-grey">DarkSearch API</h3> 
        <p class="w3-large w3-margin-right">Web Application | DBMS Project</p>
        <p class="w3-large">I used Postman to make API call. Imported CSV file to get requests and saved JSON responses in a separate file.</p><br>

      </div>
        
        <!-- Grid for photos -->
        <!-- <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="./CSS/wedding.jpg" style="width:100%">
            <img src="./CSS/rocks.jpg" style="width:100%">
            <img src="./CSS/sailboat.jpg" style="width:100%">
          </div>

          <div class="w3-half">
            <img src="./CSS/underwater.jpg" style="width:100%">
            <img src="./CSS/chef.jpg" style="width:100%">
            <img src="./CSS/wedding.jpg" style="width:100%">
            <img src="./CSS/p6.jpg" style="width:100%">
          </div> -->
        <!-- End photo grid -->
        <!-- </div> -->
      
      <!-- End Portfolio Section -->

      <!-- Contact Section -->
      <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:190px" class="w3-opacity">

        <div class="w3-section">
          <p class="w3-large"><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Indianapolis, IN, US</p>
          <p class="w3-large"><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +1 4637018354</p>
          <p class="w3-large"><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: riya.shrestha1995@mail.com</p>
        </div><br>
        <p class="w3-large">Let's get in touch. Send me a message:</p>

        <!--PHP Code--->
        <?php
          //initialize variables to be used
          $name = "";
          $email = "";
          $subject = "";
          $message = "";

          if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
          {
            //take the information submitted and send to a process file
            //always trim the user input to get rid of the additional white spaces on both ends of the user input
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $subject = trim($_POST['subject']);
            $message = trim($_POST['message']);

            echo $name . $email . $subject . $message . "\r\n";

            //if everything is filled out
            if ($name !== "" && $email !== "" && $subject !== "" && $message !== "") 
            {
              $to = 'riya.shrestha1995@gmail.com';
              // use wordwrap() if lines are longer than 70 characters
              $message = wordwrap($message,70);
              $msg = $message."\n"."From: ".$name."\n"."Email: ".$email;
              $headers = 'From: webmaster@example.com' . "\r\n" .
              'Reply-To: webmaster@example.com' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
              
              //Send mail
              mail($to, $subject, $msg, $headers);
            }
          }
        ?>

        <!--Contact Form-->
        <form method="post" action="index.php" target="_self">
          <p><input class="w3-input w3-padding-16" type="text"  placeholder="Name" required="" name="name" id="name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required="" name="email" id="email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required="" name="subject" id="subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required="" name="message" id="message"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit" name="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
      <!-- End Contact Section -->
      </div>
      
      <!-- Footer -->
      <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <a style="text-decoration: none" href="https://github.com/riyashrestha">
          <i class="fa fa-github w3-hover-opacity"></i>
        </a>
        <a style="text-decoration: none" href="https://www.instagram.com/happinessfromart/">
          <i class="fa fa-instagram w3-hover-opacity"></i>
        </a>
        <a style="text-decoration: none" href="https://www.linkedin.com/in/riya-shrestha-06b270ab/">
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </a>
        
        
        <!-- <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i> -->
      <!-- End footer -->
      </footer>

    <!-- END PAGE CONTENT -->
    </div>


  </body>
  <!-- <grammarly-desktop-integration data-grammarly-shadow-root="true">

  </grammarly-desktop-integration> -->
</html>