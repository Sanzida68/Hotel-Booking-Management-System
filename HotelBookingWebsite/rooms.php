<!DOCTYPE html>
<html>
<head>
  <title>Hotel Booking Website</title>
  <!-- CSS only -->
  <?php require('inc/links.php'); ?>

  <?php
  $hname = 'localhost';
  $uname = 'root';
  $pass = '';
  $db = 'hotel_managment';

  $con = mysqli_connect($hname, $uname, $pass, $db);

  if (!$con) {
    die("Cannot Connect to Database" . mysqli_connect_error());
  }

    $result = null;
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_in = $_POST['check_in_date'];
    $date_out = $_POST['check_out_date'];
    $wifi = isset($_POST['wifi']) ? $_POST['wifi'] : '';
    $ac = isset($_POST['ac']) ? $_POST['ac'] : '';
    $tv = isset($_POST['tv']) ? $_POST['tv'] : '';
    $adult = isset($_POST['adult']) ? $_POST['adult'] : '';
    $children = isset($_POST['children']) ? $_POST['children'] : '';

    $sql = "SELECT * FROM rooms WHERE (data_in = ? AND data_out = ?) OR (facilities_wifi = ? OR facilities_ac = ? OR facilities_tv = ?) OR (guest = ? AND children = ?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssss', $date_in, $date_out, $wifi, $ac, $tv, $adult, $children);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
  }
    else{
    $sql = "SELECT * FROM rooms";
    $result = mysqli_query($con, $sql);
  }
  
  ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
        <nav class="navbar navbar-expand-lg navbar-white bg-lighte rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <form method="POST">
              <h4 class="mt-2">FILTERS</h4>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                  <label class="form-label">Check-in</label>
                  <input name="check_in_date" type="date" class="form-control shadow-none mb-3">
                  <label class="form-label">Check-out</label>
                  <input name="check_out_date" type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                  <div class="mb-2">
                    <input name="wifi" type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f1">WIFI</label>
                  </div>
                  <div class="mb-2">
                    <input name="ac" type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f2">AC</label>
                  </div>
                  <div class="mb-2">
                    <input name="tv" type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f3">TV</label>
                  </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                  <div class="d-flex">
                    <div class="me-2">
                      <label class="form-label">Adults</label>
                      <input name="adult" type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Children</label>
                      <input name="children" type="number" class="form-control shadow-none">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-outline-light shadow-none custom-bg me-lg-0 me-0" data-bs-toggle="modal" data-bs-target="#searchModal">Search</button>
              </div>
            </form>
          </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="<?php echo $row['image']; ?>" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3"><?php echo $row['name']; ?></h5>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <div class="row">
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        Room: <?php echo $row['features_room']; ?>
                      </span>
                    </div>
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        Bathroom: <?php echo $row['features_bathroom']; ?>
                      </span>
                    </div>
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        Balcony: <?php echo $row['features_balcony']; ?>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="features mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <div class="row">
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        TV: <?php echo $row['facilities_tv']; ?>
                      </span>
                    </div>
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        AC: <?php echo $row['facilities_ac']; ?>
                      </span>
                    </div>
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        WIFI: <?php echo $row['facilities_wifi']; ?>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="features mb-4">
                  <h6 class="mb-1">Guests</h6>
                  <div class="row">
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        Adults: <?php echo $row['guest']; ?>
                      </span>
                    </div>
                    <div class="col">
                      <span class="badge rounded-pill bg-white text-dark text-wrap">
                        Children: <?php echo $row['children']; ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4"> <?php echo $row['price']; ?> </h6>
                <a href="book.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
