<?php require_once("Components\Connection.php");
        $sender = $_POST['Sender'];
        $receiver = $_POST['Receiver'];
        $amount = $_POST['amount'];
        date_default_timezone_set("Asia/Kolkata");
        $date = date('y-m-d H:i:s');
        
        $sql = "Select * from customers where Account_no = $sender";
        $s = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($s);

        if ($row != NULL){
                $query_1 = "insert into history(Account_no , Receiver ,date, Amount) values
                ('$sender','$receiver','$date','$amount')";
                $query_run_1 = mysqli_query($conn, $query_1);

                $query_2 = "update customers set balance = balance - $amount where Account_no = $sender";
                $query_run_2 = mysqli_query($conn, $query_2);
    
                $query_3 = "update customers set balance = balance + $amount where Account_no = $receiver";
                $query_run_3 = mysqli_query($conn, $query_3);   
        }    
        
            header("location:Customers.php");
?>