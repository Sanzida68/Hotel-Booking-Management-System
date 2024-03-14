<!DOCTYPE html>
<html>
<head>

<?php require('inc/links.php'); 

$checkInDate = $_POST['check_in_date'];
$checkOutDate = $_POST['check_out_date'];
$facilities = $_POST['facilities'];
$adults = $_POST['adults'];
$children = $_POST['children'];

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hotel_managment';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot Connect to Database" . mysqli_connect_error());
}

// function filteration($data)
// {
//     foreach ($data as $key => $value) {
//         $data[$key] = trim($value);
//         $data[$key] = stripcslashes($value);
//         $data[$key] = htmlspecialchars($value);
//         $data[$key] = strip_tags($value);
//     }
//     return $data;
// }

// function select($sql, $values, $datatypes)
// {
//     $con = $GLOBALS['con'];
//     if ($stmt = mysqli_prepare($con, $sql)) {
//         mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
//         mysqli_stmt_execute($stmt);
//         $result = mysqli_stmt_get_result($stmt);
//         return $result;
//     } else {
//         die("Query cannot be executed - Select");
//     }
// }

$sql = "SELECT * FROM rooms WHERE ";
$sql .= "availability = 'available' "; // Assuming there's an 'availability' column in your rooms table

// Add conditions based on the selected filters
if (!empty($checkInDate)) {
  $sql .= "AND check_in_date = '$checkInDate' ";
}

if (!empty($checkOutDate)) {
  $sql .= "AND check_out_date = '$checkOutDate' ";
}

// Add conditions for facilities
if (!empty($facilities)) {
  $facilitiesString = implode("','", $facilities);
  $sql .= "AND facility IN ('$facilitiesString') ";
}

// Add conditions for adults and children
if (!empty($adults)) {
  $sql .= "AND adults >= $adults ";
}

if (!empty($children)) {
  $sql .= "AND children >= $children ";
}

// Execute the query and retrieve the matching rooms
$result = mysqli_query($con, $sql);
?>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
          <img src="<?php echo $row['image']; ?>" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-3 px-md-3 px-0">
          <h5 class="mb-3"><?php echo $row['room_name']; ?></h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <?php $features = explode(',', $row['features']); ?>
            <?php foreach ($features as $feature) { ?>
              <span class="badge rounded-pill bg-white text-dark text-wrap">
                <?php echo trim($feature); ?>
              </span>
            <?php } ?>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <?php $facilities = explode(',', $row['facilities']); ?>
            <?php foreach ($facilities as $facility) { ?>
              <span class="badge rounded-pill bg-white text-dark text-wrap">
                <?php echo trim($facility); ?>
              </span>
            <?php } ?>
          </div>
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <?php $guests = explode(',', $row['guests']); ?>
            <?php foreach ($guests as $guest) { ?>
              <span class="badge rounded-pill bg-white text-dark text-wrap">
                <?php echo trim($guest); ?>
              </span>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4"><?php echo $row['price']; ?></h6>
          <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
          <a href="#" class="btn btn-sm w-100 btn-outline-dark bg-light shadow-none">More details</a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
 <?php }?>



<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>

<?php require('inc/header.php'); ?>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>