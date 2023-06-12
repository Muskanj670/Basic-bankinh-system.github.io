<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>View all Customers</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <?php require_once("Components\Navbar.html"); ?>
    <div class = "mt-5 mb-5">
      <form action="Transfer.php" method="post">
      <table class="table table-success table-striped mb-5">
        <thead>
            <tr>
              <th scope="col">Transfer</th>
              <th scope="col">#</th>
              <th scope="col">Account no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Balance(Rs)</th>
            </tr>
        </thead>
        <tbody>
        <?php require_once("Components\Connection.php");
            $sql = "Select * from customers order by id";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td><input type="."radio"." name="."s_id"." value = ". $row["Account_no"] ."></td>
            <td>" . $row["id"] . "</td>
            <td>" . $row["Account_no"] . "</td>
            <td>" . $row["Name"] . "</td>
            <td>" . $row["Email"] . "</td>
            <td>" . $row["Balance"] . "</td>
        </tr>";
            }
            ?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success" name="submit">Transfer</button>
        </form>
      </div>
      <?php require_once("Components\Footer.html"); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>
</html>