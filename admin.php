<?php
session_start();
?>
<?php
if (!isset($_SESSION['adminname'])) {

  // not logged in
  header('Location: login.php');
  exit();
}

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

  <link rel="stylesheet" type="text/css" href="admin.css" media="screen" />
  <title>Edapt </title>
  <meta charset="UTF-8" />

</head>

<body>

  <nav>

    <header>
      <span></span>
      Edapt.me
      <a></a>
    </header>

    <ul class="tab">
      <li>Navigation</li>
      <li><a class="tablinks" id="defaultOpen" onclick="openCity(event, 'home')">Home</a></li>
      <li><a class="tablinks" onclick="openCity(event, 'car')">Career </a></li>
      <li><a class="tablinks" onclick="openCity(event, 'blog')">Blogs</a></li>

      <li><a>Tickets</a></li>
      <li><a>GitHub</a></li>
      <li><a>FAQ</a></li>
      <li><a>Settings</a></li>
    </ul>

  </nav>

  <div id="car" class="tabcontent  ">

    <h1>Career</h1>
    <div class="flex-grid">

      <div>
        <h2>Add Career </h2>
        <form name="form1" action="modified.php" method="post" enctype="multipart/form-data">
          <div class="container-fluid" style="border: none;">

            <label>Position:</label>
            <input class="inp" type="text" name="position" value="" required /> <br>


            <label>Number of vacancies:</label>
            <input class="inp" type="text" name="number" value="" required /> <br>


            <label>Description:</label>
            <input class="inp" type="text" name="description" value="" required /> <br>


            <label>Qualification:</label>
            <input class="inp" type="text" name="qualification" value="" required /> <br>


            <label>Email:</label>
            <input class="inp" type="text" name="email" value="" required /> <br>

            <button class="btn btn-dark text-center" type="submit" value="Submit">Submit</button>
          </div>
        </form>
      </div>

    </div>
    <div class="flex-grid">

      <div>
        <h2>List Career</h2>


        <table class="rwd-table">
          <tr>
            <th>Sl.no</th>
            <th>Position</th>
            <th>No of Vacancies</th>
            <th class="big">Description</th>
            <th>Qualification</th>
            <th>Mail</th>
            <th>delete</th>
          </tr>
          <?php
          $sql = "SELECT * FROM career";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              // echo "id: " . $row["Position"].  "<br>";


          ?>
              <tr>
                <td> <?php echo $row["id"]; ?></td>
                <td> <?php echo $row["Position"]; ?></td>
                <td> <?php echo $row["Number"]; ?></td>
                <td class="big"> <?php echo $row["Description"]; ?></td>
                <td><?php echo $row["Qualification"]; ?></td>
                <td><?php echo $row["Mail"]; ?></td>
                <td><a href="deletecareer.php?id=<?php echo $row['id']; ?>"><i class="mb-3 fa fa-times"></i></a></td>

              </tr>


          <?php }
          } ?>
        </table>


      </div>

    </div>
  </div>

  <div id="blog" class="tabcontent">
    <h1>Blogs</h1>
    <div class="flex-grid">

      <div>
        <h2>Add Blog </h2>
        <form name="form1" action="modifiedblog.php" method="post" enctype="multipart/form-data">
          <div class="container-fluid" style="border: none;">
            <label>Id:</label>
            <input class="inp" type="text" name="id" value="" required /> <br>
            <label>Head:</label>
            <input class="inp" type="text" name="head" value="" required /> <br>
            <label>Short:</label>
            <input class="inp" type="text" name="short" value="" required /> <br>

            <label>Description:</label>
            <input class="inp" type="text" name="descr" value="" required /> <br>


            <label>Pic:</label>
            <input class="inp" type="text" name="pic" value="" required /> <br>
            <label>Publisher:</label>
            <input class="inp" type="text" name="publisher" value="" required /> <br>


            <button class="btn btn-dark text-center" type="submit" value="Submit">Submit</button>
          </div>
        </form>
      </div>

    </div>
    <div class="flex-grid">

      <div>
        <h2>List Blog</h2>


        <table class="rwd-table">
          <tr>
            <th>Id</th>
            <th>Head</th>
            <th>Short</th>
            <th class="big">Description</th>
            <th>Pic</th>
            <th>Publisher</th>
            <th>delete</th>
          </tr>
          <?php
          $sql = "SELECT * FROM blog ORDER by id DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              // echo "id: " . $row["Position"].  "<br>";


          ?>
              <tr>
                <td> <?php echo $row["id"]; ?></td>
                <td> <?php echo $row["head"]; ?></td>
                <td> <?php echo $row["short"]; ?></td>
                <td class="big"> <?php echo $row["descr"]; ?></td>
                <td><?php echo $row["pic"]; ?></td>
                <td> <?php echo $row["publisher"]; ?></td>
                <td><a href="deleteblog.php?id=<?php echo $row['id']; ?>"><i class="mb-3 fa fa-times"></i></a></td>

              </tr>


          <?php }
          } ?>
        </table>


      </div>

    </div>
  </div>
  <div id="home" class="tabcontent">
    <h1>Home</h1>


  </div>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <script src="//code.jquery.com/jquery.min.js"></script>
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