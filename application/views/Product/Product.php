<style>
    .product-page {
        width: 100%;
        min-height: calc(100vh - 300px);
        background-color: #EAEAEA;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:768px) {
            padding-top: 60px;
        }
    }

    .product-container {
        width: 100%;
        max-width: 1200px;
        display: flex;
        justify-content: center;
        margin: auto;
        margin-top: 5rem;
        padding: 0rem 5rem;

        @media screen and (max-width:768px) {
            flex-direction: column;

            @media screen and (max-width:500px) {
                padding: 0rem 2rem;
            }
        }
    }

    .product-left {
        width: 30%;
        min-width: 400px;

        @media screen and (max-width:900px) {
            min-width: 300px;

            @media screen and (max-width:768px) {
                width: 100%;
                margin-bottom: 3rem;

                @media screen and (max-width:350px) {
                    min-width: 100%;
                }
            }
        }
    }

    .product-left-img-div {
        width: 100%;
        min-width: 350px;
        min-height: 350px;
        border-radius: 10px;
        margin: auto;
        padding: 3rem;
        background-color: #D9D9D9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;

        @media screen and (max-width:900px) {
            min-width: 300px;
            min-height: 300px;

            @media screen and (max-width:350px) {
                min-height: 100%;
                min-width: 100%;
            }
        }
    }

    .product-left-img {
        width: 100%;
        object-fit: contain;

        @media screen and (max-width:768px) {
            max-height: 500px;
        }
    }

    .product-right {
        padding-left: 2rem;

        @media screen and (max-width:768px) {
            padding: 0;
        }
    }

    .product-right-heading {
        margin-bottom: 1rem;
    }

    .product-right-heading h1 {
        margin: 0;
    }

    .accordion {
        background-color: #D9D9D9;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        border-radius: 10px;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        margin-top: 10px;
    }

    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    .active {
        border-radius: 10px 10px 0px 0px;
    }

    .panel {
        padding: 10px 18px;
        display: none;
        background-color: white;
        overflow: hidden;
        border-radius: 0px 0px 10px 10px;
    }

    .accordion:after {
        content: '\02795';
        /* Unicode character for "plus" sign (+) */
        font-size: 13px;
        color: #777;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2796";
        /* Unicode character for "minus" sign (-) */
    }

    .product-right-buttons {
        display: flex;
        flex-wrap: wrap;
        margin-top: 2rem;
        gap: 1rem;
    }

    .send-button,
    .download-button {
        padding: 1rem 2rem;
        background-color: #fff;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }

    .send-button {
        background-color: #50AD55;
    }

    .download-button {
        background-color: #DD0E1C;
    }
</style>

<div class="product-page">
    <div class="product-container">
        <div class="product-left">
            <div class="product-left-img-div">
                <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="product image" class="product-left-img">
            </div>
        </div>
        <div class="product-right">
            <div class="product-right-heading">
                <h1>Product Name</h1>
            </div>
            <div class="product-right-body">
                <button class="accordion">DESCRIPTION</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">SPECIFICATIONS</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">FITTING INSTRUCTIONS</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">PACKING CHART</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="product-right-buttons">
                <div class="send-button">
                    <i class="fa fa-envelope"></i>&nbsp;Send Queries
                </div>
                <div class="download-button">
                    <i class="fa fa-download"></i>&nbsp;Download Brochure
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var acc = document.getElementsByClassName("accordion");
    acc[0].classList.toggle("active");
    acc[0].nextElementSibling.style.display = "block";
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>