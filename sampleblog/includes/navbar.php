


<div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="assets/images/logo.png" class="w-100" alt="SampleBlog Website" width="60px" height="80px">
      </div>
      <div class="col-md-9">

      </div>
    </div>
  </div>
</div>


<nav class="navbar navbar-expand-lg navabar-dark bg-primary shadow sticky-top">
  <div class="container">
    <a class="navbar-brand d-block d-sa-none d-md-none" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
        </li>

        <?php
          $navbarCategory = "SELECT * FROM categories WhERE navbar_status='0' AND status='0'";
          $navabarCategory_run = mysqli_query($con, $navbarCategory);   
          
          if(mysqli_num_rows($navabarCategory_run)>0)
          {
            foreach($navabarCategory_run as $navbarItem)
            {
              ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="category.php?title=<?=$navbarItem['slug']?>"><?=$navbarItem['name']?></a>
              </li>
              <?php
            }
          }
        ?>

        <?php 
        if (isset($_SESSION['auth_user'])): ?>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name'];?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">My Profile</a></li>
            <li>
              <form method="POST" action="allcode.php">
                <button type="submit" class="dropdown-item" name="logout_btn">Logout</button>
              </form>

            </li>
          </ul>

        <?php else : ?>  
        <li class="nav-item">
         <a class="nav-link text-white" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="register.php">Register</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>