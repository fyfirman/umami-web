<!-- Navbar -->
<nav class="container">
  <ul class="navtampil">

    <!-- Dropdown menu -->
    <li class="nav-item navbar-left">
        <div class="dropdown">
        <span style="color: #1060f2">Course</span>
        <div class="dropdown-content">
          <p>Course 1</p>
          <p>Course 2</p>
          <p>Course 3</p>
        </div>
      </div>
    </li>

    <!-- Logo -->
    <li class="nav-item" ><img src="<?php echo base_url()?>/assets/img/umami-logo.png" style="width: 80px"></li>
    
    <!-- Searchbar -->
    <form class="navbar-form navbar-right" action="/action_page.php">
      <input type="text" name="search" placeholder="Cari" style="border-radius: 2px;">
      <button>
        <i class="fa fa-search"></i>
      </button>
    </form>

  </ul>
</nav>