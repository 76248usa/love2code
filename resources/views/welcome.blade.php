
<!DOCTYPE html>
<html>
<title>Website Development|PHP Application Development</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif;}
body, html {
    height: 100%;
    line-height: 1.8;
}

#logo {
  font-family: "Pacifico";
  font-size: 1.8em;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("http://localhost:8888/mysite/public/images/copy1 copy.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}

.big-logos-holder {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-top: 95px;
    margin-bottom: 100px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}





</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button" id='logo' "><i class="fa fa-heart"></i>2<i class="fa fa-code"></i>  love2code</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close &times;</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">We build functional web applications</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">We build functional web applications</span><br>
    <span class="w3-large">That are fast and attractive</span>
    <p><a href="#contact" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get a free demo today!</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Responsive frontend development based on the lastest Javascript technologies.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Beautiful</p>
      <p>Functional websites can be beautiful too!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-database w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Database</p>
      <p>Database artitechture developed for performance and scale.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-server w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Server</p>
      <p>Attractive applications built with PHP in Laravel framework.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m12">
      <h3>PHP development.</h3>
      <p>We build modern client-server applications based on the latest PHP frameworks. We believe in using best practices to provide the highest quality code for easy extensibility and cost-effective maintenance. We will work with you to manage scope, schedule, budget, risk, and quality. We manage resources to successfully deliver your project and meet your business objectives.</p>




      <section class="big-logos-holder padded-section"><div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/php/big_logos/php5.png" alt=""><span class="big-logo-title">PHP 5.x / 7</span></div><div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/php/big_logos/laravel.png" alt=""><span class="big-logo-title">Laravel</span></div><div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/php/big_logos/symphony.png" alt=""><span class="big-logo-title">Symfony</span></div><!-- <div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/nodejs/big_logos/Amazone AWS.jpg" alt=""><span class="big-logo-title">AmazonAWS</span></div> --><div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/php/big_logos/mysql.png" alt=""><span class="big-logo-title">MySQL</span></div><!-- <div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/frontend/big_logos/react.png" alt=""><span class="big-logo-title">ReactJS</span></div> --><!-- <div class="big-logo-item"><img src="//d3ot0t2g92r1ra.cloudfront.net/img/technology/php/big_logos/mongodb.png" alt=""><span class="big-logo-title">MongoDB</span></div> --></section>



      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th">&nbsp;</i> View Our Works</a></p>
    </div>
    
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who run this company</p>

  


  <!-- <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="col-sm-4 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team2.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>


  </div>
</div>
    <!<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div> -->
 <!--  </div>
</div>  -->

<div class="w3-row-padding w3-grayscale" style="margin-top:64px;">

<div class="container">
  <div class="row">

    <div class="col-sm-6">
      <div class="w3-card">
        <img height="280px" src="http://localhost:8888/mysite/public/images/didi.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Elsabe Crous</h3>
          <p class="w3-opacity">PHP Developer</p>
          <p>PHP Laravel developer, use RESTful API and Javascript technologies to improve performace.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="w3-card">
        <img height = "280px" src="http://localhost:8888/mysite/public/images/gert.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Gerhard Crous</h3>
          <p class="w3-opacity">Photographer</p>
          <p>See Gerhard's stunning pictures on Flicr.</p>
          <br>
          <p><a href="#contact" class="w3-button w3-light-grey w3-block"><i class="fa fa-camera"></i> Contact</a></p>
        </div>
      </div>
    </div>
<!-- 
    <div class="col-sm-4">
      <div class="w3-card">
        <img height = "280px" src="http://localhost:8888/mysite/public/images/tahnee.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Tahnee Brewer</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div> -->

  </div>

</div>

</div>

<br><br><br><br>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">I developed several web application resources available for the elementary classroom teacher using JAVA Processing.js. These apps can be used on iPad and SMART board. Tap screen to start.</p>
  <br><br><br>


<div class="container w3-grayscale">
  <div class="row">
    <div class="col-md-6">

      <iframe height="500px" width="550px" src="https://www.openprocessing.org/sketch/488658">
        <p>Your browser does not support iframes.</p>
      </iframe>

    </div>

    <div class="col-md-6">

      <iframe height="500px" width="550px" src="https://www.openprocessing.org/sketch/180553">
        <p>Your browser does not support iframes.</p>
      </iframe>

    </div>

  </div>
  </div>

  <br><br>

  <div class="container w3-grayscale">

  <p class="w3-center w3-large">The application to the right is a digital music staff for the elementary classroom. Tap on staff to draw notes</p><br><br>

  
  <div class="row">

    <div class="col-md-6">

      <iframe height="500px" width="550px" src="https://www.openprocessing.org/sketch/180466">
        <p>Your browser does not support iframes.</p>
      </iframe>

    </div>

    <div class="col-md-6">

      <iframe height="500px" width="550px" src="https://www.openprocessing.org/sketch/489794">
        <p>Your browser does not support iframes.</p>
      </iframe>

    </div>

    </div>
  </div><br><br>

<h3 class="w3-center">MORE WORK</h3>
  <p class="w3-center w3-large">This is a jobboard website with fully functioning Admin page for registered users. Jobs can be posted, applied to and registered users have access to applications through Admin.
  Do you need a career page on your business website? We can setup the application utilizing your website template. </p>
  <br><br><br>

  <div class="container w3-grayscale">
  <div class="row">

    <div class="col-md-12">
      <iframe height="600px" width="1100px" src="http://localhost:8888/jobboard/public">
        <p>Your browser does not support iframes.</p>
      </iframe>

    </div>
  </div>
</div>












</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">&times;</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Whether you need a complete interactive web application, custom extension or MVP, we develop PHP solutions of any size and complexity.</p>
      <p>I'm simply passionate about PHP. I don’t code in PHP some of the time, 
        I code in PHP all of the time! -- Elsabe Crous</p>


    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-code w3-margin-right"></i>PHP Development</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>

      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">70%</div>
      </div>

      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section --><!-- 
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>
 -->

<!-- <!Contact Section -->
<!-- <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Fort Worth, Texas, US</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 682-552 3338</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: 76248usa@gmail.com</p>
      <br>

      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    <div class="w3-half"> -->
      <!-- Add Google Maps -->
      <!-- <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
    </div>
  </div>
</div>
  -->

@include('clients.create');




<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <h5>Powered by</h5>
  <h4 class="w3-hover-text-green">love2code</h4>
</footer>
 
<!-- Add Google Maps --> 
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>













