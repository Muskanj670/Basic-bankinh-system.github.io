<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BANKING SYSTEM</title>
  </head>
  <body>
    <!-- Navbar  -->
    <?php require_once("Components\Navbar.html"); ?>
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Photos\c-7" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 Class="display-3">WELCOME TO SPARKS BANK</h1>
            <p>Come for the Money. Stay for the Security.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Photos\c-2" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 Class="display-3 ">OUR STORY</h1>
            <p>How we became the best bank in the town we started as 10 years ago.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Photos\c-3" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 Class="display-3">Feel safe with Us!</h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container">
    <section class="my-5" id="about">
      <div class= "py-5">
        <h2 class="text-center"> About us</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class= "col-lg-6 col-md-6 col-12">
            <img src="Photos\c-1" class="img-fluid aboutimg">
          </div> 
                    <div class= "col-lg-6 col-md-6 col-12">
                        <h3 class="display-4 ">Is open now </h3>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consequatur atque, sit suscipit et aliquid error repudiandae iusto eaque nostrum placeat dolore, tempore quod repellat ad, ipsum voluptas rerum quasi.</p>
                        <a href ="#" class="btn btn-success"> Check more </a>
                    </div> 
                </div>
            </div>
        </section>
    <section class="my-5" id="services">
      <div class= "py-5">
        <h2 class="text-center"> Services</h2>
      </div>
      <div class="container-fluid">
        <div class="row" style="height: 18rem";>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
            <img src="Photos\c-6" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title ">View all Customers</h5>
                <a href="Customers.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
            <img src="Photos\c-4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Check History</h5>
                <a href="History.php" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>    
        </div>
      </div>
    </section>
  </div>
  <!-- FOOTER -->
  <?php require_once("Components\Footer.html"); ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </body>
</html>