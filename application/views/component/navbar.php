<!-- Navbar -->
<nav class="container">
  <ul class="navtampil">

    <!-- Dropdown menu -->
    <div class="col-md-4">
      <li class="nav-item navbar-left">
          <div class="dropdown">
          <span style="color: #1a67f2">Course</span>
          <div class="dropdown-content">
            <p>Course 1</p>
            <p>Course 2</p>
            <p>Course 3</p>
          </div>
        </div>
      </li>
    </div>

    <!-- Logo -->
    <div class="col-md-4">
      <li class="nav-item"><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/assets/img/umami-logo.png" style="width: 80px"></a></li>
    </div>
    

    <!-- Expanding Search Bar -->
    <div class="searchbar-container col-md-4">
        <form action="" class="search-form">
            <div class="form-group has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" name="search" id="search" placeholder="search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </form>
    </div>
    
    <!-- Searchbar -->
    <!-- <form class="navbar-form navbar-right" action="/action_page.php">
      <input type="text" name="search" placeholder="Cari" style="border-radius: 2px;">
      <button>
        <i class="fa fa-search"></i>
      </button>
    </form> -->

  </ul>
</nav>