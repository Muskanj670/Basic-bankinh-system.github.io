<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Transfer Money</title>
    </head>
    <body>
        <?php 
        if(isset($_POST['submit'])){
            require_once("Components\Navbar.html"); 
            require_once("Components\Connection.php");
            $id = $_POST['s_id'];
            $sql_d = "Select * from customers where Account_no = $id";
            $sql_t = "Select * from customers where Account_no != $id";
            $s_d = mysqli_query($conn,$sql_d);
            $s_t = mysqli_query($conn,$sql_t);
            while($row_d = mysqli_fetch_array($s_d)){
        ?>
        <div class="container">
            <div class="upper-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class= "col-lg-4 col-md-4 col-12">
                            <h2 class="text-center mt-5 pt-3">Customer Details</h2>
                            <div class= "py-2">
                                <p class="text-center"><b>ID:</b> <?php echo $row_d['id']; ?></p>
                                <p class="text-center"><b>Account No.:</b> <?php echo $row_d['Account_no']; ?></p>
                                <p class="text-center"><b>Account holder Name:</b> <?php echo $row_d['Name']; ?></p>
                                <p class="text-center"><b>Email:</b> <?php echo $row_d['Email']; ?></p>
                                <p class="text-center"><b>Balance:</b> <?php echo $row_d['Balance']; } ?></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class= "py-3">
                                <h2 class="text-center mt-5">Money Transfer</h2>
                            </div>
                            <form action="Transaction.php" method="post">
                                    <div class="form-group">
                                        <label>Sender: </label>
                                        <input type="text" name="Sender" class="form-control" placeholder="Enter your Account No." autocomplete="off" required>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="Receiver">Receiver: </label>
                                                <select class="form-select"  name="Receiver" required>
                                                    <option value="" selected hidden>Open this select menu</option>
                                                    <?php
                                                        while($row_t = mysqli_fetch_array($s_t)){
                                                    ?>   
                                                    <option value="<?php echo $row_t['Account_no'];?>"><?php echo $row_t['Account_no'], " (",$row_t['Name'],")";?></option>
                                                    <?php
                                                        }}
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Amount </label>
                                                <input type="text" name="amount" class="form-control" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>   
                                    <button type="submit" class="btn btn-success" name="send">SEND</button>
                            </form>
                         </div>
                    </div>        
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </body>
</html>