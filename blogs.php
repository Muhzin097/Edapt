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

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <meta name="description" content="Edapt blogs will provide you the finest piece of information on all the fourth industrial revolution topics. Everything you want to know about the new technological era. " />
  <meta name="keywords" content="Artificial intelligence, machine learning, best psychological blogs, career guidance informations, educational blogs, careers blogs, counselling blogs, nios informations, technical blogs,technological blogs, teaching, learn machine learning,learn robotics,learn blockchain ,learn cyber security" />

  <title>Edapt: Explore the new technological world with us</title>
  <meta charset="UTF-8" />
  <style>
    .noka {}

    .simple-text {
      position: absolute;
      bottom: 0px;
      left: 0px;
      width: 100%;

      padding: 5%;
      min-height: 25%;
      color: #fff;
    }

    .cari {
      overflow-x: scroll;
      overflow-y: hidden;
    }

    .cari::-webkit-scrollbar,
    .container-fluid::-webkit-scrollbar {
      display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .cari,
    .container-fluid {
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .navbar-brand,
    .navbar-right,
    .nav-link {
      color: black !important;
    }

    .navbar-toggler-icon {
      color: black;
    }

    .head22 {
      font-family: Source Sans Pro;
      font-style: normal;
      font-weight: normal;
      font-size: 3.5vw;
      line-height: 41px;
    }

    .himg {
      width: 100%;
      height: 100% !important;
      min-height: 350px;
        /* mask-image: linear-gradient( rgba(0,0,0,0) 0%,rgba(0,0,0,0.31)  );
   -webkit-mask-image: linear-gradient( rgba(0,0,0,0) 0%,rgba(0,0,0,0.31)  ); */
    }

    .himg2 {
      width: 100%;
      height: 45%;
      display: block;
    }
    .barry{
  color: black !important;
}
    .imck {
      width: 100%;
      display: block;
      height: 90%;
    }

    #carousel {
      width: 100%;
      overflow-x: scroll;
      overflow-y: hidden;
      white-space: nowrap;
      margin-top: 5%;
    }

    #carousel .slide,
    #carousel .space {
      display: inline;
      vertical-align: top;
    }

    #carousel::-webkit-scrollbar,
    .container-fluid::-webkit-scrollbar {
      display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    #carousel,
    .container-fluid {
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .imc {
      width: 100%;
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

      .detail4 {
        font-size: 16px;
        line-height: 20px;
      }
    }
  </style>
</head>

<body>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script>
    $.get("nav.html", function(data) {
      $("#nav-placeholder").replaceWith(data);
    });
    $.get("footer.html", function(data1) {
      $("#footer").replaceWith(data1);
    });
  </script>
  <div class="container-fluid p-4" id="main">
    <div id="nav-placeholder"></div>
    <div class="row justify-content-between p-lg-5 m-lg-5">
      <h1 class="head22">
        Blog<span class="dot">
          <h1 class="head211" data-aos="fade-left" data-aos-duration="3000" data-aos-anchor-placement="bottom-bottom">
            s
          </h1>
        </span>
      </h1>
      <h3 class="dim my-auto">View latest</h3>
    </div>
    <div class="row justify-content-between px-lg-5 mx-lg-5 my-2">
      <?php
      $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          // echo "id: " . $row["Position"].  "<br>";


      ?>
          <div class="col-sm-12 col-md-6 col-lg-6 p-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
            <img style="" class="himg" src="<?php echo $row["pic"]; ?>" />
            <div class="carousel-caption">
            <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: white;">
              <h3 class="dim text-left">
                <?php echo $row["head"]; ?>
              </h3>
        </a>
              <p class="detail4 text-left">
                <?php echo $row["short"]; ?>
              </p>
            </div>
          </div>
      <?php }
      } ?>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 p-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
        <?php
        $sql = " SELECT * FROM (
          SELECT * FROM blog ORDER BY id DESC LIMIT 3
      ) sub
      ORDER BY id ASC LIMIT 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <img class="himg2" src="<?php echo $row["pic"]; ?>" />
            <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: black;">
            <p class="detail4">
              <?php echo $row["head"]; ?>
            </p>
          </a>

        <?php }
        } ?>
      </div>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 p-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
      <?php
        $sql = " SELECT * FROM (
          SELECT * FROM blog ORDER BY id DESC LIMIT 5
      ) sub
      ORDER BY id ASC LIMIT 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <img class="himg2" src="<?php echo $row["pic"]; ?>" />
            <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: black;">
            <p class="detail4">
              <?php echo $row["head"]; ?>
            </p>
          </a>

        <?php }
        } ?>
      </div>
    </div>
  </div>
  <div class="container-fluid my-5 p-3" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="3000">
    <div class="justify-content-between p-lg-5 m-lg-5">
      <h1 class="head22">Popular</h1>
    </div>
    <div class="row flex-nowrap overflow-auto cari ml-lg-5 pl-lg-5">
      <?php
      $sql = " SELECT * FROM (
        SELECT * FROM blog ORDER BY id DESC LIMIT 10
    ) sub
    ORDER BY id ASC LIMIT 5";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          // echo "id: " . $row["Position"].  "<br>";


      ?>
          <div class="col-11 col-sm-8 col-md-6 col-lg-5" style="
            background-image: url(' <?php echo $row["pic"]; ?>');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 10px;
            min-height: 300px;
            height: 50vh;
          ">
            <div class="simple-text">
            <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: white;">
              <h3 class="dim text-left">
                <?php echo $row["head"]; ?>
              </h3>
        </a>
              <p class="detail4 text-left">
                <?php echo $row["short"]; ?>
              </p>
            </div>
          </div>
      <?php }
      } ?>



    </div>
  </div>

  <div class="container-fluid mt-5 p-4">
    <div class="row justify-content-between px-lg-5 mx-lg-5">
    <?php
        $sql = "SELECT
        *
    FROM
        blog
    ORDER  BY
        id DESC
    LIMIT 100 OFFSET 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
      <div class="col-6 col-sm-6 col-md-3 col-lg-3 p-2">
        <img class="imck" src="<?php echo $row["pic"]; ?>" />
        <a href="blogdetails.php?nid=<?php echo $row["id"]; ?>" target="_blank" style="color: black;">
        <p class="detail4">
        <?php echo $row["head"]; ?>
        </p>
        </a>
      </div>
      <?php }
      } ?>
     
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>