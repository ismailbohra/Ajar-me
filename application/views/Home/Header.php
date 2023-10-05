<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 0;
  }

  main {
    top: 0;
    width: 100%;
  }

  nav {
    height: 60px;
    width: 100%;
    background-color: white;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
  }

  #navbar {
    width: 70%;
    height: 100%;
    padding: 0rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style-type: none;
    margin-bottom: 0;

    @media only screen and (max-width:1200px) {
      width: 95%;

      @media screen and (max-width:768px) {
        display: none;
      }
    }

  }

  #navbar-small {
    display: none;

    @media screen and (max-width:768px) {
      width: 100%;
      height: 100%;
      padding: 0rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      list-style-type: none;
      margin-bottom: 0;
    }
  }

  .icons {
    display: flex;
    gap: 1rem;
  }

  .search {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .glyphicon {
    font-size: 20px;
  }

  .glyphicon-menu-down {
    font-size: 15px;
  }

  #navbar li {
    margin: 0;
    border: none;
    cursor: pointer;
  }

  .logo {
    height: 100%;
    display: flex;
    align-items: center;
  }

  .hero {
    width: 100%;
    padding-top: 60px;
  }

  .hero-image {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 5rem;
  }
</style>
<main id="main">
  <nav>
    <ul id="navbar">
      <li>
        <div class="logo"><img src="<?php echo base_url('/assets/logo.svg') ?>" alt="brand logo" style="height:50px;">
        </div>
      </li>
      <li>HOME</li>
      <li>ABOUT US</li>
      <li>PRODUCTS <span class="glyphicon glyphicon-menu-down"></span></li>
      <li>DOWNLOADS <span class="glyphicon glyphicon-menu-down"></span></li>
      <li>SHOWROOM <span class="glyphicon glyphicon-menu-down"></span></li>
      <li>CONTACT US</li>
      <li><span class="glyphicon glyphicon-search"></span></li>
    </ul>
    <ul id="navbar-small">
      <li>
        <div class="logo"><img src="<?php echo base_url('/assets/logo.svg') ?>" alt="brand logo" style="height:50px;">
        </div>
      </li>
      <li>
        <div class="icons"><span class="glyphicon glyphicon-search"></span><span
            class="glyphicon glyphicon-menu-hamburger"></span></div>
      </li>
    </ul>
  </nav>
</main>

  <!-- 

  <div id="navbarBasicExample" class="navbar-menu">
    <a class="navbar-item">
      Home
    </a>
    <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link">
        More
      </a>
      <div class="navbar-dropdown">
        <div class="nested dropdown">
          <a class="navbar-item">
            <span class="icon-text ">
              <span>Dropdown</span>
              <span class="icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </span>
          </a>

          <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
              <a href="/" class="dropdown-item">
                Dropdown item
              </a>
              <a class="dropdown-item">
                Other dropdown item
              </a>
            </div>
          </div>
        </div>
        <div class="nested dropdown">
          <a class="navbar-item">
            <span class="icon-text ">
              <span>Dropdown</span>
              <span class="icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </span>
          </a>

          <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
              <a href="/" class="dropdown-item">
                Dropdown item
              </a>
              <a class="dropdown-item">
                Other dropdown item
              </a>
              <a class="dropdown-item">
                Other dropdown item
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    .nested.dropdown:hover>.dropdown-menu {
      display: block;
    }

    .nested.dropdown .dropdown-menu {
      top: -12px;
      margin-left: 100%;
    }

    .nested.dropdown .dropdown-trigger button::after {}

    .nested.dropdown .dropdown-trigger button {
      padding: 0px 0px;
      border: 0px;
      font-size: 14px;
      font-weight: 400;
    }
  </style> -->