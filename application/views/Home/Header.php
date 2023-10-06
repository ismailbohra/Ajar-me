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
    margin-top: 0;
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

  .glyphicon-chevron-right {
    font-size: 12px;
  }

  #navbar li {
    margin: 0;
    padding: 0;
    border: none;
    cursor: pointer;
  }

  #navbar li a {
    color: black;
    text-decoration: none;
  }

  #navbar li a:hover {
    text-decoration: none;
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
    font-size: 16px;
    white-space: nowrap;
    display: flex;
    align-items: center;
  }

  .dropdown-item:hover {
    background-color: #ddd;
    border-radius: 7px;
  }

  #about:hover .about {
    display: block;
  }

  #about:hover .dropdown-item {
    padding: 0.5rem 0rem;
  }

  #products:hover .products {
    display: block;
  }

  #products:hover .dropdown-item {
    padding: 0.5rem 0rem;
  }

  #products:hover .dropdown-item:first-child {
    padding-right: 0.5rem;
  }

  #products-submenu:hover .products-submenu {
    display: block;
  }

  .products-submenu {
    top: 10;
    left: 215;
  }

  #download:hover .download {
    display: block;
  }

  #download:hover .dropdown-item {
    padding: 0.5rem 0rem;
  }

  #showroom:hover .showroom {
    display: block;
  }

  #showroom:hover .dropdown-item {
    padding: 0.5rem 0rem;
  }

  #contact:hover .contact {
    display: block;
  }

  #contact:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  .contact {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    top: 15;
    left: -95;
  }



  /* Fixed sidenav, full height */
  .sidenav {

    height: 100%;
    /* width: 0px; */
    width: 0px;
    position: fixed;
    z-index: 11;
    top: 0;
    right: 0;
    background-color: white;
    overflow-x: hidden;
    /* padding-top: 20px; */
    transition: 0.5s;
  }

  /* Style the sidenav links and the dropdown button */
  .sidenav a,
  .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    color: black;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    transition: 0.3s;
  }

  .dropdown-btn {
    display: flex;
  }

  .sidenav .closebtn {
    /* position: absolute;
    top: 0;
    right: 10; */
    font-size: 36px;
    width: 36px;
    height: 36px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    /* margin-left: 200px; */
  }

  .sidenav-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 8px 0px 16px;
    background-color: rgba(240, 242, 245);
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 2rem;
  }

  /* On mouse-over */
  /* .sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
} */

  /* Main content */
  .main {
    margin-left: 200px;
    /* Same as the width of the sidenav */
    font-size: 20px;
    /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
  .dropdown-container {
    display: none;
    background-color: white;
    padding-left: 8px;
    /* transition: max-height 0.2s ease-out; */
  }

  .dropdown-container a,
  .dropdown-container .dropdown-btn {
    color: rgba(0, 0, 0, 0.6);
  }

  .fa-plus,
  .fa-minus {
    font-weight: normal;
    -webkit-text-stroke: 0.5px white;
    font-size: 12px;
  }

  .dropdown-btn-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20px;
    width: 20px;
    margin-left: auto;
    margin-right: 8px;
    border: 2px solid rgba(0, 0, 0, 0.6);
    border-radius: 50px;
  }

  .active .dropdown-btn-icon {
    border: 2px solid rgba(80, 173, 85);
  }

  .active .fa-plus {
    display: none;
  }

  .active .fa-minus {
    display: block;
    color: rgba(80, 173, 85);
  }

  .fa-plus {
    display: block;
    color: rgba(0, 0, 0, 0.6);
  }

  .fa-minus {
    display: none;
  }
</style>
<main id="main">
  <nav>
    <ul id="navbar">
      <li>
        <div class="logo"><img src="<?php echo base_url('/assets/logo.svg') ?>" alt="brand logo" style="height:50px;">
        </div>
      </li>
      <li><a href="#">HOME</a></li>
      <li id="about">ABOUT US <span class="glyphicon glyphicon-chevron-down"></span>
        <ul class="about dropdown">
          <li class="dropdown-item">&emsp;<a href="#">Company</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">Certifications</a>&emsp;</li>
        </ul>
      </li>
      <li style="position:relative;" id="products">PRODUCTS <span class="glyphicon glyphicon-chevron-down"></span>
        <ul class="products dropdown">
          <li class="dropdown-item" id="products-submenu" style="justify-content:space-between;">&emsp;AJAR <span
              class="glyphicon glyphicon-chevron-right"></span>
            <ul class="products-submenu dropdown">
              <li class="dropdown-item">&emsp;<a href="#">Lever Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Knob Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Pull Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Hinges</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Locking Devices</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Europrofile Cylinder</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Master Key</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Panic Exit</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Door Closer</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Door Accessories</a>&emsp;</li>
            </ul>
          </li>
          <li class="dropdown-item">&emsp;<a href="#">EBCO</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">CES</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">BWS (Breuer + Schmitz)</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">FSB</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">HELM</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">NORSEAL</a>&emsp;</li>
        </ul>
      </li>
      <li id="download">DOWNLOADS <span class="glyphicon glyphicon-chevron-down"></span>
        <ul class="download dropdown">
          <li class="dropdown-item">&emsp;<a href="#">Catalogues</a>&emsp;</li>
        </ul>
      </li>
      <li id="showroom">SHOWROOM <span class="glyphicon glyphicon-chevron-down"></span>
        <ul class="showroom dropdown">
          <li class="dropdown-item">&emsp;<a href="#">Showroom Tour Video</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">Showroom Pictures</a>&emsp;</li>
        </ul>
      </li>
      <li id="contact">CONTACT US <span class="glyphicon glyphicon-chevron-down">
          <ul class="contact dropdown">
            <li class="dropdown-item">&emsp;<a href="#">Office Location Map</a>&emsp;</li>
            <li class="dropdown-item">&emsp;<a href="#">Office Address</a>&emsp;</li>
          </ul>
      </li>
      <li><span class="glyphicon glyphicon-search"></span></li>
    </ul>
    <ul id="navbar-small">
      <li>
        <div class="logo"><img src="<?php echo base_url('/assets/logo.svg') ?>" alt="brand logo" style="height:50px;">
        </div>
      </li>
      <li>
        <div class="icons" style="margin-top:0px;"><span class="glyphicon glyphicon-search"></span><span
            class="glyphicon glyphicon-menu-hamburger" onclick="openNav()"></span></div>
      </li>
    </ul>

    <div id="mySidenav" class="sidenav">
      <div class="sidenav-head">
        MENU <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-weight:100;">&times;</a>
      </div>
      <a href="#">HOME</a>
      <button class="dropdown-btn"></i>ABOUT US
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Company</a>
        <a href="#">Certifications</a>
      </div>
      <button class="dropdown-btn"></i>PRODUCTS
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <button class="dropdown-btn">AJAR
          <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i
              class="fa fa-minus dropdown-icon"></i>
          </div>
        </button>
        <div class="dropdown-container">
          <a href="#">Lever Handles</a>
          <a href="#">Knob Handles</a>
          <a href="#">Pull Handles</a>
          <a href="#">Hinges</a>
          <a href="#">Locking Devices</a>
          <a href="#">Europrofile Cylinder</a>
          <a href="#">Master Key</a>
          <a href="#">Panic Exit</a>
          <a href="#">Door Closer</a>
          <a href="#">Door Accessories</a>
        </div>
        <a href="#">EBCO</a>
        <a href="#">CES</a>
        <a href="#">BWS (Breuer + Schmitz)</a>
        <a href="#">FSB</a>
        <a href="#">HELM</a>
        <a href="#">NORSEAL</a>
      </div>
      <button class="dropdown-btn"></i>DOWNLOADS
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Catalogues</a>
      </div>
      <button class="dropdown-btn"></i>SHOWROOM
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Showroom Tour Video</a>
        <a href="#">Showroom Pictures</a>
      </div>
      <button class="dropdown-btn"></i>CONTACT US
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Office Location Map</a>
        <a href="#">Office Address</a>
      </div>
    </div>

  </nav>
</main>
<script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var dropdownIcon = document.getElementsByClassName("dropdown-icon");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }



</script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>