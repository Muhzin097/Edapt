<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edapt";
// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
  <head>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     
    <meta name="description" content="Edapt Provides excellent job opportunities for those who are seeking  roles which utilizes your abilities for the growth of the company and your personal growth simultaneously">
     <meta name="keywords" content="Digital marketing jobs,developer jobs,content writer jobs, job vacancies,kerala job vacancies, kerala job offers, btech job vacancies, Btech job offers, career guidance, job opening,edapt jobs,edapt wellness jobs,psychologist job vacancy, seo jobs, internships, Interns">
      
    <title>Edapt: Career oppourtuinites With Us</title>
    <meta charset="UTF-8" />
    <style>
      .navbar-brand,
      .navbar-right,
      .ex {
        color: black !important;
      }
      .navbar-toggler-icon,
      .active {
        color: black;
      }
      .head22 {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: normal;
        font-size: 3.5vw;
        line-height: 41px;
      }
      .barry{
  color: black !important;
}
      /* Hide scrollbar for IE, Edge and Firefox */
      #carousel,
      .container-fluid {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
      }

      .detail4 {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: normal;
        font-size: 1.1vw;
        line-height: 154.7%;
        margin-left: auto;
        margin-right: auto;
      }
      .detail41 {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: 600;
        font-size: 1.1vw;
        line-height: 154.7%;
        margin-left: auto;
        margin-right: auto;
      }
      .head211 {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: normal;
        font-size: 3.5vw;
        line-height: 41px;
        position: relative;
      }
      .head211 {
        display: inline-block;
        vertical-align: middle;
      }
      .dot {
        height: 10vw;
        width: 10vw;
        background: #007aff;
        border-radius: 50%;
        display: inline-block;
        color: #ffffff;
        position: relative;
        margin: 0;
        vertical-align: middle;

        line-height: 1;
        box-sizing: content-box;
        white-space: nowrap;
      }
      .dot:before {
        content: "";
        display: inline-block;
        vertical-align: middle;
        padding-top: 100%;
        height: 0;
      }
      .dim {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: normal;
        font-size: 2vw;
        line-height: 50px;
      }
      .nw {
        width: 28px;
        height: 28px;
        background: #007aff;
        border-radius: 50%;
        display: inline-block;
        margin-right: 2%;
        vertical-align: middle;
      }
      .bar {
        width: 5px;
        border-left: 1px solid #e7e7e7;
      }
      @media only screen and (max-width: 766px) {
        .bar {
          width: 5px;
          border-top: 1px solid #e7e7e7;
          border-left: none;
        }
      }
      @media only screen and (max-width: 1000px) {
        .head211,
        .head22 {
          font-size: 30px;
          line-height: 38px;
        }
        .dot {
          height: 90px;
          width: 90px;
        }
        .imc {
          width: 90%;
        }

        .dim {
          font-size: 18px;
          line-height: 23px;
        }
        .detail4,
        .detail41 {
          font-size: 16px;
          line-height: 20px;
        }
      }
    </style>
  </head>
  <body>
  
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
      $.get("nav.html", function (data) {
        $("#nav-placeholder").replaceWith(data);
      });
      $.get("footer.html", function (data1) {
        $("#footer").replaceWith(data1);
      });
    </script>
   
   
 
    <div class="container-fluid p-4 pt-o" id="main">
      <div id="nav-placeholder"></div>
      <div class="col-sm-12 col-md-8 col-lg-6 p-lg-5 m-lg-5 p-0">
        <h1 class="head22">
          Becomin<span class="dot"
            ><h1
              class="head211"
              data-aos="fade-left"
              data-aos-duration="3000"
              data-aos-anchor-placement="bottom-bottom"
            >
              g
            </h1></span
          >

          an Edapt member
        </h1>
        <p
          class="detail4 my-4"
          data-aos="fade"
          data-aos-duration="3000"
          data-aos-anchor-placement="bottom-bottom"
        >
          Imagine a future during which robotics and AI will allow any folks ,
          of all ages to simply and quickly find answers, create products or
          accomplish tasks, all just by expressing our desires. Imagine a future
          during which robotics and AI will allow any folks , of all ages to
          simply and quickly find answers, create products or accomplish tasks,
          all just by expressing our desires.
        </p>
      </div>
    </div>
    <div class="container-fluid p-4 mb-5">
      <div class="row justify-content-between px-lg-5 mx-lg-5">
        <div
          class="nav flex-md-column text-right col-md-4 col-lg-4"
          id="v-pills-tab"
          role="tablist"
          aria-orientation="vertical"
        >
        <?php
    $sql = "SELECT * FROM career";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["Position"].  "<br>";
   
     
    ?>
          <a
            class="nav-link "
            id="v-pills-home-tab"
            data-toggle="pill"
            href="#v-pills-<?php echo $row["id"]; ?>"
            role="tab"
            aria-controls="v-pills-home"
            aria-selected="true"
          >
            <!-- <span class="nw"></span> -->
            <?php echo $row["Position"]; ?></a
          >
          <?php }} ?>
          <!-- <a
            class="nav-link"
            id="v-pills-profile-tab"
            data-toggle="pill"
            href="#v-pills-profile"
            role="tab"
            aria-controls="v-pills-profile"
            aria-selected="false"
            > Android Dev</a
          >
          <a
            class="nav-link"
            id="v-pills-messages-tab"
            data-toggle="pill"
            href="#v-pills-messages"
            role="tab"
            aria-controls="v-pills-messages"
            aria-selected="false"
            >Angular Dev</a
          > -->
        </div>
        
        <div class="tab-content col-md-8 col-lg-8 pr-lg-5 bar" id="v-pills-tabContent">
        <?php
    $sql = "SELECT * FROM career " ;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["Position"].  "<br>";
   
     
    ?>
          <div
            class="tab-pane fade show "
            id="v-pills-<?php echo $row["id"]; ?>"
            role="tabpanel"
            aria-labelledby="v-pills-home-tab"
          >
            <h3 class="dim "> <?php echo $row["Position"]; ?></h3>
            <h5 class="detail41 mt-4">No of positions - <?php echo $row["Number"]; ?></h5>
            <h5 class="detail41 mt-4">Description</h5>
            <p class="detail4">
            <?php echo $row["Description"]; ?>
            </p>
            <h5 class="detail41 mt-4">Qualifications</h5>
            <p class="detail4"><?php echo $row["Qualification"]; ?></p>
            <h5 class="detail41 mt-4">Mail your CV to</h5>
            <p class="detail4"><?php echo $row["Mail"]; ?></p>
            <button type="button" class="btn btn-lg btn-dark">Apply now</button>
          </div>
          <?php }} ?>
          <!-- <div
            class="tab-pane fade"
            id="v-pills-profile"
            role="tabpanel"
            aria-labelledby="v-pills-profile-tab"
          >
          <h3 class="dim">Android Developer</h3>
          <h5 class="detail41 mt-4">No of positions - 3</h5>
          <h5 class="detail41 mt-4">Description</h5>
          <p class="detail4">
            Imagine a future during which robotics and AI will allow any folks
            , of all ages to simply and quickly find answers, create products
            or accomplish tasks, all just by expressing our desires.
          </p>
          <h5 class="detail41 mt-4">Qualifications</h5>
          <p class="detail4">tasks, all just by expressing our desires.</p>
          <h5 class="detail41 mt-4">Mail your CV to</h5>
          <p class="detail4">abcd@gmail.com</p>
          <button type="button" class="btn btn-lg btn-dark">Apply now</button>
          </div> -->
          <!-- <div
            class="tab-pane fade"
            id="v-pills-messages"
            role="tabpanel"
            aria-labelledby="v-pills-messages-tab"
          >
          <h3 class="dim">Angular Developer</h3>
          <h5 class="detail41 mt-4">No of positions - 2</h5>
          <h5 class="detail41 mt-4">Description</h5>
          <p class="detail4">
            Imagine a future during which robotics and AI will allow any folks
            , of all ages to simply and quickly find answers, create products
            or accomplish tasks, all just by expressing our desires.
          </p>
          <h5 class="detail41 mt-4">Qualifications</h5>
          <p class="detail4">tasks, all just by expressing our desires.</p>
          <h5 class="detail41 mt-4">Mail your CV to</h5>
          <p class="detail4">abcd@gmail.com</p>
          <button type="button" class="btn btn-lg btn-dark">Apply now</button>
          </div> -->
        </div>
      </div>
    </div>
    <div id="footer"></div>

    <script>
      AOS.init();
    </script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
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
