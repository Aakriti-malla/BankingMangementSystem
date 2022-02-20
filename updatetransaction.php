<?php
    include('conn.php');
    if (isset($_POST['amount'])) {
        $Amount =$_POST['amount'];
        $sendername=$_GET['Name'];
        $recvrname = $_POST['c_name'];

        $senderquery = "SELECT curr_balance from view_customers where c_name='$sendername'";
        $result = $conn->query($senderquery);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                 $SenderCurAmount=$row['curr_balance'];
                 $SenderUpdatedAmount=$SenderCurAmount - $Amount;
                 $sql="UPDATE view_customers SET curr_balance='$SenderUpdatedAmount' where c_name='$sendername'";
                 $rs = mysqli_query($conn, $sql);
                }
        }
        else{
            echo "0 results";
        }
        $recvrquery = "SELECT curr_balance from view_customers where c_name='".$recvrname."'";
        $result = $conn->query($recvrquery);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                   $ReceiverCurAmount=$row['curr_balance'];
                   $ReceiverUpdatedAmount=$ReceiverCurAmount + $Amount;
                   $sql="UPDATE view_customers SET curr_balance='$ReceiverUpdatedAmount' where c_name='".$recvrname."'";
                   $rs = mysqli_query($conn, $sql);
                   header('location: viewcus/index.php');
                }
         }
         else{
             echo "0 results";
         }
    }
?>