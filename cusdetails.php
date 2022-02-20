<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="secondary.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>customer details</title>
  <style>
    body {
      background-color: linear-gradient(#A770EF, #CF8BF3, #FDB99B);
    }
  </style>
</head>

<body id="cusbody">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TSF</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">View customers</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>
<?php
$c_name = $_GET['c_name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$curr_balance = $_GET['curr_balance'];
echo "<div id='info'>";
echo "<h1>" . $c_name . "'s Details</h1><br>";
echo "<div class='details'><b>NAME:</b> " . $c_name .  "<br><b>EMAIL:</b> " . $email . "<br><b>CONTACT NUMBER: </b>" . $phone . "<br><b>CURRENT BALANCE:</b> " . $curr_balance . "<br><br>";
echo "<a href='transferamt.php?Name=$c_name' id='btn'><button class='btn'>" . "Transfer Amount" . "</button></a>" . '</div>';
echo '</div>';
?>