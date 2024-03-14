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

<style type="text/css">
	
	.availability-form
	{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

</style>
</head>
<body>

<?php

session_start();
//require('inc/header.php');

if (!isset($_SESSION['user_id']) || $_SESSION['logged_in'] !== true) {
    // User is not logged in
    require('inc/header.php');
 } 
    else {

     require('inc/header.php');
 }

?>

<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/home1.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Check Booking Availability</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Adult</label>
 						<select class="form-select shadow-none">
  					
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
						<option value="3">4</option>
						<option value="3">5</option>
						<option value="3">6</option>
						</select>
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Children</label>
 						<select class="form-select shadow-none">
  						
						 <option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
						<option value="3">4</option>
						<option value="3">5</option>
						<option value="3">6</option>
						</select>
 					</div>
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button type="submit" class="btn btn-outline-light text-white shadow-none custom-bg me-lg-3 me-2">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>
 
 <!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/room1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			     <h5 class="card-title">Deluxe Room</h5>
			     <h6 class="mb-4">20000 per night </h6>
			     <div class="features mb-4">
			    	 <h6 class="mb-1">Features</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		2 Rooms
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Bathroom
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Balcony
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		3 Sofa
    				 </span>
			     </div>
			     <div class="Facilities mb-4">
			    	 <h6 class="mb-1">Facilities</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Geyser
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Spa
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		AC
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Pool
    				 </span>
    			 </div>

    			 <div class="guests mb-4">
			    	 <h6 class="mb-1">Guests</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		5 Adults
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		4 Children
    				 </span>
    			 </div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-white">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="rooms.php" class="btn btn-sm btn-outline-dark bg-light shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/room2.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			     <h5 class="card-title">Luxery Room</h5>
			     <h6 class="mb-4">30000 per night </h6>
			     <div class="features mb-4">
			    	 <h6 class="mb-1">Features</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		2 Rooms
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Bathroom
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Balcony
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		3 Sofa
    				 </span>
			     </div>
			     <div class="Facilities mb-4">
			    	 <h6 class="mb-1">Facilities</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Wifi
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Television
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		AC
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Room Heater
    				 </span>
                 </div>	
    				<div class="guests mb-4">
			    	 <h6 class="mb-1">Guests</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		5 Adults
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		4 Children
    				 </span>
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-white">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="rooms.php" class="btn btn-sm btn-outline-dark bg-light shadow-none">More details</a>
    				</div>
			  </div>
		</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/room3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			     <h5 class="card-title">Royal Room</h5>
			     <h6 class="mb-4">40000 per night </h6>
			     <div class="features mb-4">
			    	 <h6 class="mb-1">Features</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		2 Rooms
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Bathroom
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		1 Balcony
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		3 Sofa
    				 </span>
			     </div>
			     <div class="Facilities mb-4">
			    	 <h6 class="mb-1">Facilities</h6>
			    	 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Wifi
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Television
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		AC
    				 </span>
    				 <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		Room Heater
    				 </span>
                 </div>
    				 <div class="guests mb-4">
			    	      <h6 class="mb-1">Guests</h6>
			    	      <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		    5 Adults
    				      </span>
    				     <span class="badge rounded-pill bg-white text-dark text-wrap">
			    		    4 Children
    				     </span>
                     </div>	 
    				     <div class="rating mb-4">

    					     <h6 class="mb-1">Rating</h6>
    					     <span class="badge rounded-pill bg-white">
    						 <i class="bi bi-star-fill text-warning"></i>
    						 <i class="bi bi-star-fill text-warning"></i>
    						 <i class="bi bi-star-fill text-warning"></i>
    						 <i class="bi bi-star-fill text-warning"></i>
    					     </span>
    				     </div>
    				     <div class="d-flex justify-content-evenly mb-2">
    					     <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					     <a href="rooms.php" class="btn btn-sm btn-outline-dark bg-light shadow-none">More details</a>
                         </div>
			  </div>
			</div>
 		</div>


 		<div class="col-lg-12 text-center mt-5">
 			<a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
 		</div>
 	</div>	
 </div>

 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/geyser.png" width="80px">
 			<h5 class="mt-3">Geyser</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/spa.png" width="80px">
 			<h5 class="mt-3">Spa</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/air-conditioner.png" width="80px">
 			<h5 class="mt-3">Air Conditioner</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/swimmer.png" width="80px">
 			<h5 class="mt-3">Pool</h5>
 		</div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
 		</div>
 	</div>
 </div>

<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Ferdousi Borsha</h6>
          </div>
          <p>
          	It is a very nice room.Content with my vacation. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Lutfun Nahar Tonny</h6>
          </div>
          <p>
		  Honey, let me spill the tea on my stay at SST. It was a diva's dream come true! 
			The lobby oozed luxury, and the staff treated me like a VIP. 
			The room? Pure glam, with a bed fit for a queen. 
			The bathroom was a spa oasis, and the amenities, like the rooftop pool, were fierce. 
			Trust me, this hotel knows how to treat a sassy girl right! 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Giran Akbar</h6>
          </div>
          <p>
		    Staff was very friendly and helpful.Overall environment was good. 
          	
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CONTACT US</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
 		<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3832923861287!2d90.40224047599459!3d23.769361688046807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e4508a1f7%3A0x4e6fd719b838721!2sSoutheast%20University!5e0!3m2!1sen!2sbd!4v1686515593957!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +8801726543291" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +88 01726543291</a>
 				<br>
 				<a href="tel: +8801876543217" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +88 01876543217</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="https://twitter.com/" class="d-inline-block mb-3">
 					<span class="badge bg-white text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="https://www.facebook.com/" class="d-inline-block mb-3">
 					<span class="badge bg-white text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="https://www.instagram.com/" class="d-inline-block">
 					<span class="badge bg-white text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>

 <?php require('inc/footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 2000,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>