<!DOCTYPE html>
<html>
<head>
  <title>Hotel Booking Website</title>
  <!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Ehfoeuhfoehfhefehfehfiehfiehfiehfewihf
    efihwuefugefleugflagefugefluefguegfieyfg
    eufgeufgewugfuwegfwe
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3832923861287!2d90.40224047599459!3d23.769361688046807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e4508a1f7%3A0x4e6fd719b838721!2sSoutheast%20University!5e0!3m2!1sen!2sbd!4v1686515593957!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://goo.gl/maps/KacFXJeRYYp5mbt67" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> 251/A, Tejgaon I/A, Dhaka
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +8801726543291" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +88 01726543291</a>
        <br>
        <a href="tel: +8801876543217" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +88 01876543217</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: sstteam@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> sstteam@gmail.com</a>

        <h5 class="mt-4">Follow us</h5>
        <a href="https://twitter.com/" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="https://www.facebook.com/" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="https://www.instagram.com/" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form method="Post" >
          <h5>Send a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input  name="name" required type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Email</label>
          <input name="email" required type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input name="subject" required type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotel_managment';

    $con = mysqli_connect($hname, $uname, $pass , $db);

    if (mysqli_connect_error()) {
        exit('Error connecting to database' . mysqli_connect_error());
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $stmt = $con->prepare('INSERT INTO feedback_info (name, email, subject, message) VALUES (?, ?, ?, ?)');
        $stmt->bind_param('ssss', $name, $email, $subject, $message);

        if ($stmt->execute()) {
            // Success: Display success message or redirect
            echo "Mail sent successfully!";
        } else {
            // Error: Display error message or redirect
            echo "Server error occurred!";
            echo "Error: " . mysqli_error($con);
        }

        $stmt->close();
    }
}

$con->close();
    ?>

    <?php require('inc/footer.php'); ?>
</body>
</html>