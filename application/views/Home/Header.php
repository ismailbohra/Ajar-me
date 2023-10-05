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

  #navbar-small li {
    margin: 0;
    padding: 0;
    border: none;
    cursor: pointer;
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

  .glyphicon-chevron-down {
    font-size: 12px;
  }

  #navbar li {
    margin: 0;
    padding: 0;
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

  .dropdown {
    position: absolute;
    list-style-type: none;
    background-color: white;
    padding: 1rem;
    display: none;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .dropdown-item {
    font-size: 18px;
    margin: 2rem;
    white-space: nowrap;
    display: block;
  }

  .dropdown-item:hover {
    background-color: #ddd;
  }

  #products:hover .products {
    display: block;
  }

  .products:hover .products {
    display: block;
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
      <li style="position:relative;" id="products">PRODUCTS <span class="glyphicon glyphicon-chevron-down"></span>
        <ul class="products dropdown">
          <li class="dropdown-item">AJAR <span class="glyphicon glyphicon-chevron-right"></span></li>
          <li class="dropdown-item">EBCO</li>
          <li class="dropdown-item">CES</li>
          <li class="dropdown-item">BWS (Breuer + Schmitz)</li>
          <li class="dropdown-item">FSB</li>
          <li class="dropdown-item">HELM</li>
          <li class="dropdown-item">NORSEAL</li>
        </ul>
      </li>
      <li>DOWNLOADS <span class="glyphicon glyphicon-chevron-down"></span></li>
      <li>SHOWROOM <span class="glyphicon glyphicon-chevron-down"></span></li>
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