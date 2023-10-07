<style>
  .home {
    width: 100%;
    background-color: #EAEAEA;
    padding-top: 90px;
    padding-bottom: 5rem;
  }

  .mySlides {
    display: none;
    height: calc(100vh - 100px);
    width: calc(100vw - 50px);
    overflow: hidden;
    margin-top: 20px;
    border-radius: 10px;

    @media screen and (max-width:768px) {
      height: 350px;
      width: calc(100vw - 30px);
    }
  }

  img {
    vertical-align: middle;
  }

  /* Slideshow container */
  .slideshow-container {
    width: calc(100vw - 50px);
    position: relative;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;

    @media screen and (max-width:768px) {
      height: 350px;
      width: calc(100vw - 30px);
    }
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-decoration: none;
  }

  /* Fading animation */
  .fade {
    opacity: 1;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {

    .prev,
    .next {
      font-size: 11px
    }
  }


  .featured {
    margin: 15rem 5rem 15rem 5rem;

    @media screen and (max-width:500px) {
      margin: 7rem 3rem 7rem 1rem;
    }
  }

  .featured h1 {
    margin-left: 3rem;
    margin-bottom: 5rem;
    font-size: 40px;

    @media screen and (max-width:1000px) {
      margin-left: 0;
      font-size: 32px;
    }
  }

  .featured-div {
    display: flex;

    @media screen and (max-width:1000px) {
      flex-direction: column;
    }
  }

  .featured-img-div {
    height: 200px;
    width: 100%;
    border: 5px solid #717070;
    border-radius: 10px;
    position: relative;

    @media screen and (min-width:500px) {
      height: 300px;

      @media screen and (min-width:1000px) {
        min-height: 300px;
        max-height: 300px;
        min-width: 600px;
        max-width: 600px;

        @media screen and (min-width:1200px) {
          min-height: 400px;
          max-height: 400px;
          min-width: 800px;
          max-width: 800px;
        }
      }
    }
  }

  .featured-img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
    position: absolute;
    top: -20;
    left: 20;
  }

  .featured-description {
    margin-left: 5rem;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    @media screen and (max-width:1000px) {
      margin-top: 5rem;
      margin-left: 0;

      @media screen and (max-width:500px) {
        margin-top: 2rem;
      }
    }
  }

  .featured-buttons {
    margin-bottom: 20px;
    display: flex;
    align-items: center;

    @media screen and (max-width:1000px) {
      margin-top: 2rem;
      justify-content: center;
    }
  }

  .featured-buttons a {
    color: #000505;
    opacity: 0.5;
    display: flex;
    align-items: center;
  }

  .featured-buttons a:hover {
    text-decoration: none;
    cursor: pointer;
  }

  .featured-buttons a img {
    height: 20px;
    opacity: 1;

    @media screen and (max-width:300px) {
      height: 15px;
    }
  }

  .simplify-text {
    padding: 2rem 2rem 20rem 2rem;
    background-color: white;
    text-align: center;
    border-radius: 15px;

    @media screen and (max-width:756px) {
      padding-bottom: 15rem;
    }
  }

  .simplify-text h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .simplify-text p {
    font-size: 18px;
    margin: auto;

    @media screen and (min-width:756px) {
      width: 600px;
    }
  }

  .simplify-cards {
    margin-top: -15rem;
    display: flex;
    justify-content: space-around;
    padding: 0rem 2rem;

    @media screen and (max-width:756px) {
      justify-content: space-between;
      margin-top: -8rem;

      @media screen and (max-width:500px) {
        padding: 0rem 1rem;
      }
    }
  }

  .simplify-card {
    background-color: #717070;
    border-radius: 15px;
    padding: 1rem;
    width: 400px;

    @media screen and (max-width:900px) {
      width: 40%;

      @media screen and (max-width:756px) {
        width: 49%;
        padding: 8px;
      }
    }
  }

  .simplify-card-img {
    width: 100%;

    @media screen and (max-width:500px) {
      height: 150px;
    }
  }

  .simplify-card p {
    text-align: center;
    color: white;
    font-size: 22px;
    margin: 0;
    margin-top: 1rem;
    padding: 0;

    @media screen and (max-width:500px) {
      font-size: 15px;
    }
  }

  .find {
    margin-top: 20rem;

    @media screen and (max-width:500px) {
      margin-top: 10rem;
    }
  }

  .find-text {
    padding: 2rem 2rem 20rem 2rem;
    background-color: white;
    text-align: center;
    border-radius: 15px;

    @media screen and (max-width:756px) {
      padding-bottom: 15rem;
    }
  }

  .find-text h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .find-text p {
    font-size: 18px;
    margin: auto;

    @media screen and (min-width:756px) {
      width: 600px;
    }
  }

  .find-cards {
    margin: auto;
    margin-top: -15rem;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
    place-items: center;
    padding: 5rem;
    grid-row-gap: 5rem;
    max-width: 1300px;

    @media screen and (max-width:500px) {
      /* grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); */
      padding: 5rem 1rem;
    }
  }

  .find-card {
    background-color: #717070;
    border-radius: 15px;
    padding: 1rem;
    width: 170px;
  }

  .find-card-img {
    width: 100%;
  }

  .find-card p {
    text-align: center;
    color: white;
    font-size: 22px;
    margin: 0;
    margin-top: 1rem;
    padding: 0;
  }

  .products-div {
    margin-top: 20rem;

    @media screen and (max-width:500px) {
      margin-top: 10rem;
    }
  }

  .products-text {
    padding: 2rem 2rem 20rem 2rem;
    padding-bottom: 20rem;
    background-color: white;
    text-align: center;
    border-radius: 15px;
  }

  .products-text h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .products-text p {
    font-size: 18px;
    margin: auto;

    @media screen and (min-width:756px) {
      width: 600px;
    }
  }

  .products-cards {
    margin: auto;
    margin-top: -10rem;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    place-items: center;
    padding: 5rem;
    grid-row-gap: 15rem;
    max-width: 1200px;

    @media screen and (max-width:300px) {
      padding: 1rem;
    }
  }

  .products-card {
    background: transparent;
    border-radius: 15px;
    padding: 1rem;
    width: 250px;
    height: 400px;
    border: 8px solid #6F6868;
  }

  .products-card-upper {
    @media screen and (min-width:620px) {
      margin-top: -6rem;
    }
  }

  .products-card-img {
    width: 100%;
    border: 3px solid #6F6868;
    border-radius: 50%;
    height: 150px;
    width: 150px;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    margin-top: -9rem;
  }

  .products-card p {
    text-align: center;
    font-size: 22px;
    margin: auto;
    margin-top: 2rem;
    padding: 0;
  }

  .more-products {
    margin-top: 5rem;
    display: flex;
    justify-content: center;

    @media screen and (max-width:620px) {
      margin-top: 0;

      @media screen and (max-width:300px) {
        margin-top: 2rem;
      }
    }
  }

  .more-products-button {
    font-size: 20px;
    font-weight: 600;
    background-color: white;
    padding: 1rem 2rem;
    border-radius: 10px;
    cursor: pointer;
  }

  .partners {
    margin: 15rem 0rem 10rem 0rem;
  }

  .partners-heading {
    margin: 8rem;
    margin-bottom: 12rem;

    @media screen and (max-width:756px) {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  }

  .partners-heading h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .partners-div {
    border: 8px dashed #D9D9D9;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    margin: auto;
    position: relative;

    @media screen and (max-width:768px) {
      border: 5px dashed #D9D9D9;
      height: 300px;
      width: 300px;

      @media screen and (max-width:350px) {
        height: 200px;
        width: 200px;
      }
    }
  }

  .partners-logo {
    position: absolute;
    background-color: white;
    border-radius: 10px;
    padding: 10px;

    @media screen and (max-width:350px) {
      padding: 5px;
    }
  }

  .partners-logo img {
    height: 90px;
    width: 90px;
    border-radius: 10px;
    object-fit: contain;

    @media screen and (max-width:768px) {
      height: 50px;
      width: 50px;
    }
  }

  .partners-logo:nth-child(1) {
    top: -70;
    left: 230;

    @media screen and (max-width:768px) {
      top: -40;
      left: 110;

      @media screen and (max-width:350px) {
        top: -30;
        left: 65;
      }
    }
  }

  .partners-logo:nth-child(2) {
    top: 80;
    left: -20;

    @media screen and (max-width:768px) {
      top: 40;

      @media screen and (max-width:350px) {
        top: 20;
      }
    }
  }

  .partners-logo:nth-child(3) {
    top: 80;
    right: -20;

    @media screen and (max-width:768px) {
      top: 40;

      @media screen and (max-width:350px) {
        top: 20;
      }
    }
  }

  .partners-logo:nth-child(4) {
    bottom: 80;
    left: -20;

    @media screen and (max-width:768px) {
      bottom: 40;

      @media screen and (max-width:350px) {
        bottom: 20;
      }
    }
  }

  .partners-logo:nth-child(5) {
    bottom: 80;
    right: -20;

    @media screen and (max-width:768px) {
      bottom: 40;

      @media screen and (max-width:350px) {
        bottom: 20;
      }
    }
  }

  .partners-logo:nth-child(6) {
    bottom: -50;
    left: 230;

    @media screen and (max-width:768px) {
      bottom: -40;
      left: 110;

      @media screen and (max-width:350px) {
        bottom: -30;
        left: 65;
      }
    }
  }

  .self {
    background: transparent;
    top: 182;
    left: 182;

    @media screen and (max-width:768px) {
      top: 85;
      left: 85;

      @media screen and (max-width:350px) {
        top: 60;
        left: 60;
      }
    }
  }

  .self img {
    height: 200px;
    width: 200px;

    @media screen and (max-width:768px) {
      height:100px;
      width:100px;
      @media screen and (max-width:350px) {
        height: 60px;
        width: 60px;
      }
    }
  }
</style>
<div class="home">

  <div class="slideshow-container">

    <div class="mySlides">
      <img src="<?php echo base_url('/assets/Home.png'); ?>"
        style="height:100%; width:100%;object-fit:cover;overflow:hidden;">
    </div>

    <div class="mySlides">
      <img src="<?php echo base_url('/assets/Home-img.png'); ?>"
        style="height:100%;width:100%;object-fit:cover;overflow:hidden;">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

  </div>

  <div class="featured">
    <h1>Featured Projects</h1>
    <div class="featured-div">
      <div class="featured-img-div">
        <img src="<?php echo base_url('/assets/Home-img.png'); ?>" alt="featured product" class="featured-img">
      </div>
      <div class="featured-description">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor quae ipsum mollitia ducimus, iste
          fuga doloribus ullam cum facere.</p>
        <div class="featured-buttons">
          <a style="margin-right:3rem;"><img src="<?php echo base_url('/assets/icons/arrow-left.svg') ?>"
              alt="left arrow icon">&nbsp;&nbsp;Previous</a>
          <!-- <a><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;Previous</a> -->
          <a>Next&nbsp;&nbsp;<img src="<?php echo base_url('/assets/icons/arrow-right.svg') ?>"
              alt="right arrow icon"></a>
          <!-- <a>Next&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
        </div>
      </div>
    </div>
  </div>

  <div class="simplify">
    <div class="simplify-text">
      <h1>Simplify Opening Solutions</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
      </p>
    </div>
    <div class="simplify-cards">
      <div class="simplify-card">
        <img src="<?php echo base_url('/assets/simplify1.png'); ?>" alt="simplify product image"
          class="simplify-card-img">
        <p>Architectural Hardware</p>
      </div>
      <div class="simplify-card">
        <img src="<?php echo base_url('/assets/simplify2.png'); ?>" alt="simplify product image"
          class="simplify-card-img">
        <p>Furniture Fitings</p>
      </div>
    </div>
  </div>
  <div class="find">
    <div class="find-text">
      <h1>Where Can You Find Our Products?</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
      </p>
    </div>
    <div class="find-cards">
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Commercial</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Government</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Government</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Government</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Government</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/find.png'); ?>" alt="find product image" class="find-card-img">
        <p>Government</p>
      </div>
    </div>
  </div>

  <div class="products-div">
    <div class="products-text">
      <h1>Products</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
      </p>
    </div>
    <div class="products-cards">
      <div class="products-card">
        <div class="products-card-img">
          <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="products product image"
            style="height:90px;width:90px;object-fit: cover;margin-left:30px;">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum aliquid saepe rem provident, rerum ullam.</p>
      </div>
      <div class="products-card products-card-upper">
        <div class="products-card-img">
          <img src="<?php echo base_url('/assets/product2.png'); ?>" alt="products product image"
            style="height:100px;width:100px;object-fit: cover;">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, esse quaerat veritatis voluptates quasi
          rerum.</p>
      </div>
      <div class="products-card">
        <div class="products-card-img">
          <img src="<?php echo base_url('/assets/product3.png'); ?>" alt="products product image"
            style="height:100px;width:100px;object-fit: contain;">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, esse quaerat veritatis voluptates quasi
          rerum.</p>
      </div>
      <div class="products-card products-card-upper">
        <div class="products-card-img">
          <img src="<?php echo base_url('/assets/product4.png'); ?>" alt="products product image"
            style="height:100px;width:100px;object-fit: contain;">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, esse quaerat veritatis voluptates quasi
          rerum.</p>
      </div>
    </div>
    <div class="more-products">
      <div class="more-products-button">
        View More
      </div>
    </div>
  </div>

  <div class="partners">
    <div class="partners-heading">
      <h1>Meet Our Partners</h1>
    </div>
    <div class="partners-div">
      <div class="partners-circle">
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner1.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner2.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner3.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner4.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner5.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo">
          <img src="<?php echo base_url('/assets/partner6.png'); ?>" alt="partner brand logo">
        </div>
        <div class="partners-logo self">
          <img src="<?php echo base_url('/assets/ajar-logo.png'); ?>" alt="brand logo">
        </div>
      </div>
    </div>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
  </script>
</div>