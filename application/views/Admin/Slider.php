<style>
    .center {
        margin-left: 250px;
        padding: 5rem;
    }

    .add-product-image {
        border: 2px solid #D9D9D9;
        padding: 1rem;
        border-radius: 10px;
        display: flex;
    }

    .drop-zone {
        border: 2px dashed #D9D9D9;
        padding: 1rem;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        min-height: 100px;
        width: 200px;
    }

    .drop-zone-text {
        font-size: 18px;
        text-align: center;
    }

    .drop-zone-input {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .images {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .product-images {
        width: 200px;
        height: 150px;
        border: 2px solid #D9D9D9;
        padding: 1rem;
        border-radius: 10px;
    }

    .add-product-image {
        height: 100%;
    }

    .add-product-images {
        display: flex;
        gap: 1rem;
    }

    .product-images img {
        width: 100%;
        height: 80%;
    }

    .product-images p {
        height: 20%;
        width: 100%;
        text-align: center;
        padding-top: 1rem;
    }

    .product-images p:hover {
        cursor: pointer;
    }

    .slideshow-container {
        width: 100%;
        position: relative;
        margin: auto;
        overflow: hidden;
        border-radius: 10px;
        padding-bottom: 5rem;

        @media screen and (max-width:768px) {
            height: 350px;
            width: calc(100vw - 30px);
        }
    }

    .mySlides {
        display: none;
        height: 500px;
        overflow: hidden;
        margin-top: 20px;
        border-radius: 10px;

        @media screen and (max-width:768px) {
            height: 350px;
            width: calc(100vw - 30px);
        }
    }

    .mySlides img {
        height: 100%;
        width: 100%;
        object-fit: fill;
        overflow: hidden;
    }

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

    .fade {
        opacity: 1;
    }
</style>
<div class="center">
    <h2>Slider Images</h2>
    <div class="slideshow-container">

        <div class="mySlides">
            <img id="0" src="<?php echo base_url('/assets/Home.png'); ?>">
        </div>

        <div class="mySlides">
            <img id="1" src="<?php echo base_url('/assets/Home-img.png'); ?>">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <div class="images">

        <div class="add-product-images">
            <div class="product-images">
                <img id="0" src="<?php echo base_url('/assets/Home.png'); ?>">
                <p>Remove</p>
            </div>
            <div class="product-images">
                <img id="1" src="<?php echo base_url('/assets/Home-img.png'); ?>">
                <p>Remove</p>
            </div>

        </div>
        <div class="add-images">
            <div class="add-product-image">
                <div class="drop-zone">
                    <span class="drop-zone-text">Drop file here or click to upload</span>
                    <input type="file" name="product-image" class="drop-zone-input" required onchange="previewImage(this)">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage(input) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const newImage = document.createElement("div");
                newImage.className = "product-images";
                newImage.innerHTML = `<img src="${e.target.result}" alt="uploaded image"><p>Remove</p>`;
                const newImage2 = document.createElement("div");
                newImage2.className = "mySlides";
                newImage2.innerHTML = `<img src="${e.target.result}" alt="uploaded image">`;

                document.querySelector(".add-product-images").appendChild(newImage);
                document.querySelector(".slideshow-container").appendChild(newImage2);
            };
            reader.readAsDataURL(file);
        }
    }
</script>
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
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>