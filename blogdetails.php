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

    <meta name="description" content="Edapt Provides excellent job opportunities for those who are seeking  roles which utilizes your abilities for the growth of the company and your personal growth simultaneously">
    <meta name="keywords" content="Digital marketing jobs,developer jobs,content writer jobs, job vacancies,kerala job vacancies, kerala job offers, btech job vacancies, Btech job offers, career guidance, job opening,edapt jobs,edapt wellness jobs,psychologist job vacancy, seo jobs, internships, Interns">

    <title>Edapt: Blogs</title>
    <meta charset="UTF-8" />
    <style>
        .navbar-brand,
        .navbar-right,
        .nav-link {
            color: black !important;
        }

        .bck {
            
            min-height: 300px;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .barry{
  color: black !important;
}
        .imck {
      width: 100%;
      display: block;
      height: 90%;
    }

        
@media (min-width: 576px) and (max-width: 767px) {
  .mainh {
    font-size: 2.5rem;
    line-height: 94px;
    text-align: center;
  }
  .smallh {
    font-size: 1.75rem;
    line-height: 35px;
    text-align: center;
  }
  .medh {
    font-size: 2.25rem;
    line-height: 43px;
  }
  .norp {
    font-size: 0.9rem;
    line-height: 19px;
  }
  .top {
    background-image: none;
  }
  .colc {
    font-size: 2rem;
    line-height: 45px;
  }
  .edah {
    font-size: 1.6rem;
    line-height: 28px;
  }
  .bck { 
            min-height: 450px;
        }
}

@media (min-width: 768px) {
  .mainh {
    font-size: 3rem;
    line-height: 94px;
  }
  .smallh {
    font-size: 2.25rem;
    line-height: 43px;
  }
  .medh {
    font-size: 2.75rem;
    line-height: 53px;
  }
  .norp {
    font-size: 1rem;
    line-height: 20px;
  }
  .colc {
    font-size: 3rem;
    line-height: 64px;
  }
  .edah {
    font-size: 2rem;
    line-height: 32px;
  }
  .bck { 
            min-height: 600px;
        }
}

@media (min-width: 992px) {
  .mainh {
    font-size: 4rem;
    line-height: 94px;
  }
  .smallh {
    font-size: 2.75rem;
    line-height: 51px;
  }
  .medh {
    font-size: 3.25rem;
    line-height: 66px;
  }
  .norp {
    font-size: 1.1rem;
    line-height: 22px;
  }
  .colc {
    font-size: 4rem;
    line-height: 81px;
  }
 
  .edah {
    font-size: 2.25rem;
    line-height: 40px;
  }
  .bck {
            
            min-height: 750px;
            

        }
}

@media (min-width: 1200px) {
  .mainh {
    font-size: 5rem;
    line-height: 94px;
  }
  .smallh {
    font-size: 3.25rem;
    line-height: 61px;
  }
  .medh {
    font-size: 3.75rem;
    line-height: 81px;
  }
  .norp {
    font-size: 1.37rem;
    line-height: 26px;
  }
  .colc {
    font-size: 5rem;
    line-height: 94px;
  }
  .edah {
    font-size: 2.5rem;
    line-height: 47px;
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
 <?php
    $id = $_GET['nid'];
    $sql = "SELECT * FROM blog where id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc()  ;
        // echo "name: " .  . " -SecondName: " . $row["Description"] .   "<br>";
     
    ?>
    


    <div class="container-fluid   pt-md-4" id="main">
        <div id="nav-placeholder"></div>
        <div class="col-12 mx-auto  col-md-9 pt-md-5 mt-md-5">
            <div class=" row  mt-md-5 pt-md-5">
            <div class="col-12 col-md-2 pt-5 ">
                <p class="norp"> <?php echo $row["date"]; ?></p>

            </div>
            <div class="col-12 col-md-10">
                <h1 class="medh"> <?php echo $row["head"]; ?></h1>
                <p class="norp">Published by  <?php echo $row["publisher"]; ?></p>
            </div>
            </div>
            
        </div>
        <div class="bck mt-5" style="background-image: url('<?php echo $row["pic"];?>') ">

        </div>
        <div class="col-12 col-md-6 mx-auto pt-4">
            
            <p class="pt-4 norp">
            <?php echo $row["descr"]; ?><br>
              
            </p>
        </div>
    </div>
    <?php } ?>
    
    <div class="container-fluid my-5 p-4">
    <h1 class="medh px-lg-5 mx-lg-5">More like this</h1>
    <div class="row justify-content-between px-lg-5 mx-lg-5">
    
    <?php
        $sql = "SELECT
        *
    FROM
        blog
    ORDER  BY
        id DESC
    LIMIT 4 ";
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