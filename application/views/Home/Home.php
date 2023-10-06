<style>
.home {
    width: 100%;
    background-color: lightgrey;
    padding-top: 60px;
    padding-bottom: 5rem;
}

.mySlides {display: none; height: calc(100vh - 100px); width:calc(100vw - 50px); overflow:hidden; margin-top:20px;border-radius:10px;@media screen and (max-width:768px) {
    height:350px;
    width:calc(100vw - 30px);
  }}

img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width:calc(100vw - 50px);
  position: relative;
  margin: auto;
  overflow:hidden;
  border-radius:10px;
  @media screen and (max-width:768px) {
    height:350px;
    width:calc(100vw - 30px);
  }
}

/* Next & previous buttons */
.prev, .next {
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
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
  text-decoration:none;
}

/* Fading animation */
.fade {
  opacity: 1;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next {font-size: 11px}
}


.featured{
    margin:15rem 5rem 15rem 5rem;
}
.featured h1{
    margin-left:3rem;
    margin-bottom:5rem;
}
.featured-div{
    display:flex;    
}
.featured-img-div{
    min-height:300px;
    min-width:600px;
    border:5px solid #717070;
    border-radius:10px;
    position: relative;
}
.featured-img{
    height:100%;
    width:100%;
    object-fit:cover;
    border-radius:10px;
    position:absolute;
    top:-20;
    left:20;
}
.featured-description{
    margin-left:5rem;
    font-size:20px;
    display:flex;
    flex-direction:column;
    justify-content: space-between;
}
.featured-buttons{
    margin-bottom:20px;
    display:flex;
    align-items: center;
}
.featured-buttons a{
    color:#000505;
    opacity:0.5;        
    margin-right:3rem;    
}
.featured-buttons a:hover{
    text-decoration:none;
    cursor: pointer;
}
.featured-buttons a .fa{
    font-size:30px;
}
</style>
<div class="home" >

<div class="slideshow-container">

<div class="mySlides">
  <img src="<?php echo base_url('/assets/Home.png');?>" style="height:100%; width:100%;object-fit:cover;overflow:hidden;">
</div>

<div class="mySlides">
  <img src="<?php echo base_url('/assets/Home-img.png');?>" style="height:100%;width:100%;object-fit:cover;overflow:hidden;">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor quae ipsum mollitia ducimus, iste fuga doloribus ullam cum facere.</p>
            <div class="featured-buttons">
            <a><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;Previous</a>
            <a>Next&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>
</div>