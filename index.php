<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edapt";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
  <!-- git push origin main -->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/fav.png" type="image/gif" sizes="16x16">
 <meta title="Edapt : Embrace The Change">
 <meta name="description" content="Edapt is born from the natural need of people to connect with oneself and with others in a critical period such as the one we are living .">
  <meta name="keywords" content="Edapt wellness,Edapt school, edapt classroom,psychological counselling,online counselling,online mentoring, online class,nios study center,nios school, online courses, online courses with certificates,online certificate courses, edtech app,learning app,online learning">
  <title>Edapt : Embrace The Change</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="edapt.css" media="screen" />
 
  </head>

  <body>
   
    <div class="navt" id="main">
     
      <nav class="navbar navbar-expand yeah px-0  navbar-light  ">
        <!-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse navi d-flex justify-content-lg-center" id="navbarNav">
          <ul class="navbar-nav d-flex justify-content-between  ">
            <li class="nav-item active px-5">
              <a class="nav-link text-light" href="#edw">Edapt Wellness <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link text-light" href="#edp">Edapt Plus</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link text-light" href="#spr">Superachievers</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link  text-light" href="#sch">School</a>
            </li>
            <li class="nav-item px-5">
              <a class="nav-link  text-light" href="#cla">Classroom</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
      $.get("nav.html", function (data) {
        $("#nav-placeholder").replaceWith(data);
      });
      $.get("footer.html", function (data1) {
        $("#footer").replaceWith(data1);
      });
    </script>
    </div>
    <div  class="container-fluid top" id="main">
      <div id="nav-placeholder"></div>
      <div class="all">
        <h1 class="head">Edapt </h1>
        <p class="detail">
          Education for Today and Tomorrow
        </p>
        <!-- <p class="detail-2">Register now</p> -->
        <!-- <button type="button" class="btn btn-primary btn-lg my-2">Register now</button> -->
        <!-- <i style="font-size: 24px; margin-top: 10%; color: white" class="fas"
        >&#xf309;</i> -->
      
      </div>
     <a class=" ico" href="#scr"> <i class="fa fa-angle-double-down mx-auto bounce"  aria-hidden="true"></i></a>
    </div>
    <div class="container-fluid py-5"  id="scr" style="background: #FAFAFA; ">
      <div
        class="container-fluid three py-5 "
        data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
        data-aos-duration="1500"
      >
        <div class=" col-sm-12 col-md-5 col-lg-5  ">
          <!-- <img class="himg" src="assets/twopic.png" /> -->
          <div class="bor">
            <img
              class="r1"
              data-aos="fade-up-right"
              data-aos-duration="1500"
              src="assets/r1.png"
            />
            <img
              class="r2"
              data-aos="fade-up-left"
              data-aos-duration="1500"
              src="assets/r2.png"
            />
          </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 py-2 px-0">
          <h1 class="head2">
            Our Vision
            <span class="dot"><h1 class="head21"  data-aos="fade-left"
              data-aos-anchor-placement="center-bottom"
              data-aos-duration="1500">And</h1></span>Mission<span
              class="sdot"
              >.</span
            >
          </h1>
          <p class="detail3 pt-3">
            Bring inspiration and innovation to every student. Our purpose is to empower every student in this world to achieve their best.
          </p>
          <p class="detail3">
            Our goal at EDAPT is not only to prepare young minds for an exciting and desirable future but also inspire them to create it.
             We want to equip and empower future generations to develop civilization-level change and contribute to human progress in a meaningful way.
              The Fourth Industrial Revolution is combining with other socio-economic and demographic factors to create a perfect storm of changes in all industries, 
              resulting in vital disruptions to labour markets. 
          </p>
          <p class="detail3">
            The present-day education system is ill-equipped to provide students with the skill set required to have a successful career in the present-day job market. 
            Our courses offer students with 21st-century education which will make them relevant and well equipped to survive in the future job ecosystem.
          </p>
          <p class="detail3">
            New categories of jobs will emerge, partly or wholly displacing others. 
The skill sets required in both old and new occupations will change in most industries and transform how and where people work
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid mb-lg-5" id="edp">
      <div class="container row p-lg-5 m-lg-5 my-xl-4">
        <!-- <div class="dot3">.</div> -->
        <div
          class="col-sm-12 col-md-5 col-lg-4 "
          data-aos="fade-right"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1500"
        >
          <h1 class="plush pt-3">Edapt Plus</h1>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-8 pr-0">
          <p class="plusp">
            Curious about the exponential growth of technologies? This is the right place for you. Get access to 30+ Advanced Courses.
             We want to promote upskilling in an era of rapid technological disruption and help people reinvent themselves through educational empowerment.
              Through Edapt plus, we are breaking shackles of conventional education to prepare our users to succeed in an era of global uncertainty.
          </p>
          <button type="button" class="btn btn-lg btn-dark">Learn more</button>
        </div>
      </div>
      <div class=" mb-lg-5" id="carousel" data-aos="fade-right" data-aos-duration="1500">
        <div class="space"></div>
        <div class="slide">
          <img class="imc" src="assets/im1.png" />
        </div>
        <div class="slide">
          <img class="imc" src="assets/im2.png" />
        </div>
        <div class="slide">
          <img class="imc" src="assets/im3.png" />
        </div>
        <div class="slide">
          <img class="imc" src="assets/im4.png" />
        </div>
        
      </div>
    </div>
    <!-- <script>
      (function () {
        function scrollHorizontally(e) {
          e = window.event || e;
          var delta = Math.max(-1, Math.min(1, e.wheelDelta || -e.detail));
          document.getElementById("carousel").scrollLeft -= delta * 100; // Multiplied by 40
          e.preventDefault();
        }
        if (document.getElementById("carousel").addEventListener) {
          // IE9, Chrome, Safari, Opera
          document
            .getElementById("carousel")
            .addEventListener("mousewheel", scrollHorizontally, false);
          // Firefox
          document
            .getElementById("carousel")
            .addEventListener("DOMMouseScroll", scrollHorizontally, false);
        } else {
          // IE 6/7/8
          document
            .getElementById("carousel")
            .attachEvent("onmousewheel", scrollHorizontally);
        }
      })();
    </script> -->
    <div class="container-fluid mt-lg-5" id="spr">
      <div class=" row   my-4 py-4" 
      data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
      data-aos-duration="1500">
        <div class="col-sm-12 col-md-6 col-lg-6  p-0">
          <img
          class="himg  p-0"
            src="assets/iml.png"
          />
        </div>
        <div
          class="col-sm-12 col-md-6 col-lg-6 "
      
        >
          <h1 class="head221">
            <span class="dot"
              ><h1 class="head211"  data-aos="fade-right"
              data-aos-anchor-placement="center-bottom"
              data-aos-duration="1500">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Su
              </h1></span
            >perAchievers
          </h1>
          <p class="detail4 pr-xl-5">
            Online Student Mentoring Program promoting students' overall well being and helping them fulfil their potential. 
            Students of this era are learning and living amid unprecedented technological progress.
             Super Achievers aims to guide them and make them the best possible versions of themselves.
              Super Achievement is the 360-degree psychological development of a student.
               An expert mentor regularly interacts with students developing habits of excellence and positive psychological qualities such as their happiness,
                hope, and optimism. Super Achievers thus prepares the student for the best possible level.
          </p>
          <button type="button" class="btn btn-lg btn-dark">Know more</button>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-lg-5 p-0" id="sch">
      <div class="  d-flex flex-wrap-reverse" data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
      data-aos-duration="1500">
        <div
          class="col-sm-12 col-md-6 col-lg-6 p-xl-5  "
          
        >
        <h1 class="head22">
          Scho<span class="dot"><h1 class="head211"  data-aos="fade-left"
            data-aos-anchor-placement="center-bottom"
            data-aos-duration="1500">ol</h1></span>
        </h1>
          <p class="detail4 ">
            Edapt school is the first online school that delivers a fully interactive education to the comfort of your home or wherever you may be.
             Our unique online school offers the best in secondary and senior secondary education. 
             Online lessons from teachers with unmatched expertise in online teaching using interactive activities and teacher-led online classroom sessions
              Edapt can offer you everything you expect from a school, plus a whole lot more!
          </p>
          <button type="button" class="btn btn-lg btn-dark">Know more</button>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 p-0">
          <img
            class="himg"
             
            src="assets/light.png"
          />
        </div>
      </div>
    </div>
    <div class="container-fluid  mt-lg-5" id="cla">
      <div class="row " data-aos="fade-up"
      data-aos-anchor-placement="center-bottom"
      data-aos-duration="1500">
        <div class="col-sm-12 col-md-6 col-lg-6 p-0">
          <img
            class="himg p-0"
             
            src="assets/cl.png"
          />
        </div>
        <div
          class="col-sm-12 col-md-6 col-lg-6 p-lg-5  "
          
        >
          <h1 class="head22">
            Classroo<span class="dot"><h1 class="head211"  data-aos="fade-left"
              data-aos-anchor-placement="center-bottom"
              data-aos-duration="1500">m</h1></span>
          </h1>
          <p class="detail4">
            Take your classes online for free. Edapt classroom is a free service for all educational institutions.
             Classroom makes it easy for learners and instructors to connect outside of schools. 
             It saves time and paper and makes it easy to create classes, distribute assignments, communicate, and stay organized.
              Teachers can add students easily to their class. It takes just minutes to set up.
          </p>
          <button type="button" class="btn btn-lg btn-dark">Know more</button>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-3  mt-lg-5 bg-light p-lg-5 p-sm-2">
    <h1 class="head22   text-sm-center ">Insights from the Blogs</h1>
    <p class="detail4  text-sm-center ">Read our latest Blogs</p>
    <div class="row justify-content-center p-lg-5 m-lg-5">
    <?php
      $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 2";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          // echo "id: " . $row["Position"].  "<br>";


      ?>
      <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
        <img   class="himg" style="height: 100%;" src=" <?php echo $row["pic"]; ?>" />
        <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: black;">
          <h3 class="smallh">
          <?php echo $row["head"]; ?>
          </h3>
        </a>
        <h5 class="dt">
        <?php echo $row["date"]; ?>
        </h5>
        <p class="detail4 mr-lg-4">
        <?php echo $row["short"]; ?>
        </p>
      </div>
      <?php }} ?>
     
    </div>
    <div class="row justify-content-center p-lg-5  m-lg-5">
    <?php
      $sql = "  SELECT * FROM (
        SELECT * FROM blog ORDER BY id DESC LIMIT 5
    ) sub
    ORDER BY id ASC LIMIT 3";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          // echo "id: " . $row["Position"].  "<br>";


      ?>
      <div class="col-sm-12 col-md-4 col-lg-4   " data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
        <div class="row  ">
          <img class="himg1 col-6" src="<?php echo $row["pic"]; ?>" />
          <div class="  col-6">
            <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: black;">
              <h3 class="smallh ">
              <?php echo $row["head"]; ?>
              </h3>
            </a>

            <p class="detail4 mr-lg-4">
            <?php echo $row["short"]; ?>
            </p>
            <h5 class="dt">
            <?php echo $row["date"]; ?>
            </h5>
          </div>
        </div>
      </div>
      <?php }} ?>
      
    </div>
    <div class="p-5  mx-auto">
      <a href="blogs.php"><button type="button" class="btn btn-lg btn-dark">Know more</button></a>
    </div>

  </div>
    <div class="container-fluid  mt-lg-5 p-lg-5 p-sm-2 ">
      <div class=" p-lg-5 mx-lg-5  col-sm-12 col-md-6 col-lg-6 ">
        <h1 class="head22   ">Contact us</h1>
        <p class="detail4   ">Leave your details and let us contact you.</p>
  
      </div>
      <!-- <div class="row justify-content-between px-lg-5 mx-lg-5  px-md-4  ">
        <div class="col-sm-12 col-md-5 col-lg-5  p-lg-4 p-md-4 p-sm-4 " style="box-shadow: -4px 6px 26px rgba(0, 0, 0, 0.1);">
          <h3 class="smallh">
            Get quick answers
          </h3>
        <p class="detail4 mr-lg-4 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
          mauris sed amet, justo. A mattis neque urna vel tellus. Cras ac,
          laoreet vel dolor arcu consectetur. Aliquam, ac turpis sit porttitor
          habitasse tempus vitae sodales. Vivamus mi quam metus laoreet
          hendrerit a. Amet, leo non euismod sapien fames. Cursus.
        </p>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 p-lg-4 p-md-4 p-sm-4" style="box-shadow: -4px 6px 26px rgba(0, 0, 0, 0.1);">
          <h3 class="smallh">
            Live chat support
          </h3>
          <p class="detail4 mr-lg-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            mauris sed amet, justo. A mattis neque urna vel tellus. Cras ac,
            laoreet vel dolor arcu consectetur. Aliquam, ac turpis sit porttitor
            habitasse tempus vitae sodales. Vivamus mi quam metus laoreet
            hendrerit a. Amet, leo non euismod sapien fames. Cursus.
          </p>
          </div>
      </div> -->
     
    </div>
<div class="container-fluid">
  <div class=" row">
   
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-2 p-lg-5 ">
      <div class="col-lg-8 mx-auto py-5">
        <h1 class="smallh">Connect with us</h1>
        <form action='https://forms.zohopublic.in/edaptme/form/Edaptmaincontactus/formperma/pJb58dHUDw4PBSLCamQ9uO9HLGw5IeOox6uUnPSzNXA/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
          <input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
          <input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
          <input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
        <input
          class="inp"
          type="text" name="SingleLine" value="" fieldType=1 maxlength="255"
          placeholder="Name"
        /><br />
        <input
          class="inp"
          type="text" maxlength="255" name="Email" value="" fieldType=9
          placeholder="Email"
        /><br />
        <input
          class="inp"
          type="text"
           compname="PhoneNumber"
            name="PhoneNumber_countrycode"
             phoneFormat="1"
              isCountryCodeEnabled=false
               maxlength="20"
                value=""
                 fieldType=11
                  id="international_PhoneNumber_countrycode"
          placeholder="Phone"
        /><br />
        <button type="submit"  class="btn btn-lg btn-dark butts my-4 px-5">
          Send
        </button>
        </form>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-0  " style="min-height: 350px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15662.66237066314!2d76.047894!3d11.0636791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618dc057cb2488a0!2sEdapt!5e0!3m2!1sen!2sin!4v1607063891890!5m2!1sen!2sin" width="100%"  height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>
 
   
    <div id="footer"></div>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
