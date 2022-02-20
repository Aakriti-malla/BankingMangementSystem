<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="secondary.css">
    <title>Transfer amount</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            background-attachment: fixed;
            background-image: linear-gradient(#a770ef, #cf8bf3, #fdb99b);  
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html">TSF Bank</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewcus/">View Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $c_name = $_GET['Name'];
    echo "<div class='container2'>";
    echo "<form action='updatetransaction.php?Name=$c_name' method = 'post'>";
    echo "<h3>Send ₹ On the Go!</h3>";
    echo "<h4 class='label'>Enter the Receiver's name</h4>";
    echo "<input type='text' id='c_name' name='c_name'>";
    include('conn.php');
    $sql = "SELECT c_name FROM cusdetails WHERE c_name <> '" . $c_name . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option>" . $row['Name'] . "</option>";
        }
    }
    echo "<br>";
    echo "<h4>Enter the amount you want to transfer</h4>";
    echo "<input type ='number' id ='amount' name='amount'><br><br>";
    echo "<input type='submit' id='Submit' name='Submit' value='Submit'>";
    echo "</form>";
    echo '</div>';
    ?>
</body>

</html>