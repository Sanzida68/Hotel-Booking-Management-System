<?php
  require('admin/inc/db_config.php');
  require('admin/inc/esssentials.php');

?>


<nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 sticky-top rounded shadow p-4">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">SST Hotel</a>
    <!-- <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-2" href="rooms.php">Rooms</a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-2" href="facilities.php">Facilities</a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-2" href="contact.php">Contact Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link me-2" href="about.php">About</a>
    </li>
    
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
        <li class="nav-item">
            <span class="badge rounded-pill bg-white text-dark mb-15 text-wrap lh-height nav-link active">Logged in as <?php echo $_SESSION['email']; ?></span>
        </li>
    <?php endif; ?>
</ul>

      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-light shadow-none custom-bg me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">login</button>
        <button action = "logout.php" type="button" class="btn btn-outline-light shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#registerModel">logout	</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form action = 'login.php' method='post' >
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2"> Login</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">Email address</label>
    			<input name="email" type="email" class="form-control shadow-none">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Password</label>
    			<input name="password" type="password" class="form-control shadow-none">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  				<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Forgot Password</a>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Understood</button>
      		</div>
    	</form>
      
    </div>
  </div>
</div>


	
</div>