<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>customers</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TSF Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <table></table>
  </div>
</body>

</html>
<?php
include('conn.php');
$sql = "SELECT * FROM view_customers ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  //output data of each row
  echo "<table>";

  echo "<tr>";
  echo "<th>Sr No.</th>";
  echo "<th>Name</th>";
  echo "<th>Email</th>";
  echo "<th>Current Balance</th>";
  echo "</tr>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    // echo "<td>" . $row['sr_no'] . "</td>";
    echo "<td><a id='a' href='../cusdetails.php?srno=" . $row['sr_no'] . "&c_name=" . $row['c_name'] . "&email=" . $row['email'] . "&phone=" . $row['phone'] . "&curr_balance=" . $row['curr_balance'] . "'>" . $row['sr_no'] . "</a></td>";
    echo "<td>" . $row['c_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['curr_balance'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>