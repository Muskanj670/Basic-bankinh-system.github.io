<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>History</title>
  </head>
  <body>
  <?php require_once("Components\Navbar.html"); ?>
  <div class = "mt-5">
    <table class="table table-success table-striped">
        <thead>
            <tr>
              <th scope="col">##</th>
              <th scope="col">Sender</th>
              <th scope="col">Receiver</th>
              <th scope="col">Receiver's Name</th>
              <th scope="col">Date Time</th>
              <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
        
        <?php require_once("Components\Connection.php");
            $sql = "select history.id, history.Account_no,history.receiver,customers.name,history.date,history.Amount
                    from customers
                    inner join history
                    on customers.Account_no = history.receiver
                    order by history.id desc";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo"<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["Account_no"] . "</td>
            <td>" . $row["receiver"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["date"] . "</td>
            <td>" . $row["Amount"] . "</td>
        </tr>";
            }
            ?>
            </tbody>
          </table>
      </div>
      <?php require_once("Components\Footer.html"); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>
</html>










