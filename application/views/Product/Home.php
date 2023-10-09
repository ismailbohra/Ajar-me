<style>
    .product-home {
        width: 100%;
        background-color: #EAEAEA;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:768px) {
            padding-top: 60px;
        }
    }

    .product-home-heading {
        background-color: #D9D9D9;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;

        @media screen and (max-width:768px) {
            height: 100px;
        }
    }

    .product-home-heading h1 {
        text-align: center;
        margin: 0;
    }

    .product-navbar {
        height: 60px;
        background-color: #fff;
        padding: 0rem 5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;

        @media screen and (max-width:500px) {
            padding: 0rem 1rem;
        }
    }

    .products-dropdown-btn {
        padding: 5px 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #D9D9D9;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    .products-dropdown-btn i {
        font-size: 20px;
    }

    .filter {
        width: 100px;

        @media screen and (max-width:350px) {
            width: 80px;
        }
    }

    .sort {
        width: 150px;

        @media screen and (max-width:350px) {
            width: 90px;
        }
    }

    .right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .right i {
        font-size: 20px;
        cursor: pointer;
    }

    .right .glyphicon-th {
        margin-top: -4px;
    }

    .product-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        place-items: center;
        padding: 5rem;
        gap: 5rem;

        @media screen and (max-width:800px) {
            padding: 5rem 3rem 3rem 3rem;
            gap: 3rem;
        }
    }

    .product-card {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 10px;
        width: 200px;

        @media screen and (max-width:489px) {
            width: 100%;
        }
    }

    .product-card-img-div {
        width: 170px;
        height: 170px;
        margin: 15px;
        border-radius: 10px;
        background-color: #D9D9D9;
        display: flex;
        justify-content: center;
        align-items: center;

        @media screen and (max-width:489px) {
            width: calc(100% - 30px);
            height: calc(100vw - 70px);
        }
    }

    .product-card-img {
        width: 70%;
        object-fit: contain;
    }

    .product-card-heading {
        padding: 0rem 1rem 1rem 1rem;
        font-size: 20px;
    }

    .product-card-buttons {
        display: flex;
        /* flex-direction: column; */
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #D9D9D9;
        border-radius: 10px;
        gap: 5px;
        padding: 0.5rem 1rem;
    }

    .send-button,
    .download-button {
        cursor: pointer;
    }

    .send-button i {
        color: rgba(80, 173, 85, 1);
    }

    .download-button i {
        color: red;
    }

    .product-lists {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 5rem;
        gap: 5rem;
        max-width: 1000px;
        margin: auto;

        @media screen and (max-width:800px) {
            padding: 5rem 2rem 2rem 2rem;
            gap: 3rem;

            @media screen and (max-width:600px) {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    }

    .product-list {
        display: flex;
        background-color: #fff;
        border-radius: 10px;
        height: 170px;

        @media screen and (max-width:400px) {
            position: relative;
            height: 150px;

            @media screen and (max-width:300px) {
                height: 180px;
            }
        }
    }

    .product-list-img-div {
        min-width: 150px;
        height: 150px;
        margin: 10px;
        border-radius: 10px;
        background-color: #D9D9D9;
        display: flex;
        justify-content: center;
        align-items: center;

        @media screen and (max-width:400px) {
            height: 100px;
            min-width: 100px;
        }
    }

    .product-list-img {
        width: 100px;
        height: 100px;
        object-fit: contain;

        @media screen and (max-width:400px) {
            height: 80px;
            width: 80px;
        }
    }

    .product-list-body {
        padding: 1rem 2rem;
        height: 100%;
    }

    .product-list-heading {
        font-size: 20px;
    }

    .product-list-text {
        font-size: 18px;

        @media screen and (max-width:1000px) {
            font-size: 15px;
        }
    }

    .product-list-buttons {
        display: flex;
        flex-wrap: wrap;
        padding: 0.5rem 0rem;
        margin-top: 1rem;
        gap: 2rem;

        @media screen and (max-width:500px) {
            gap: 5px;

            @media screen and (max-width:400px) {
                position: absolute;
                bottom: 5;
                left: 10px;
                width: calc(100% - 20px);
            }
        }
    }
</style>

<div class="product-home">
    <div class="product-home-heading">
        <h1>PRODUCTS</h1>
    </div>
    <div class="product-navbar">
        <div class="left">
            <div class="filter products-dropdown-btn">
                Filter <i class="fa fa-angle-down"></i>
            </div>
        </div>
        <div class="right">
            <div class="sort products-dropdown-btn">
                Sort By <i class="fa fa-angle-down"></i>
            </div>
            <i class="glyphicon glyphicon-th"></i>
            <i class="fa fa-list-ul"></i>
        </div>
    </div>
    <!-- <div class="product-cards">
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product2.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product3.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product4.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product2.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product3.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product4.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product2.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product3.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-card-img-div">
                <img src="<?php echo base_url('/assets/product4.png'); ?>" alt="product image" class="product-card-img">
            </div>
            <div class="product-card-body">
                <div class="product-card-heading">Product Name</div>
                <div class="product-card-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="product-lists">
        <div class="product-list">
            <div class="product-list-img-div">
                <img src="<?php echo base_url('/assets/product1.png'); ?>" alt="product image" class="product-list-img">
            </div>
            <div class="product-list-body">
                <div class="product-list-heading">Product Name</div>
                <div class="product-list-text">
                    Lorem ipsum dolor sit amet....

                </div>
                <div class="product-list-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="product-list-img-div">
                <img src="<?php echo base_url('/assets/product2.png'); ?>" alt="product image" class="product-list-img">
            </div>
            <div class="product-list-body">
                <div class="product-list-heading">Product Name</div>
                <div class="product-list-text">
                    Lorem ipsum dolor sit amet....

                </div>
                <div class="product-list-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="product-list-img-div">
                <img src="<?php echo base_url('/assets/product3.png'); ?>" alt="product image" class="product-list-img">
            </div>
            <div class="product-list-body">
                <div class="product-list-heading">Product Name</div>
                <div class="product-list-text">
                    Lorem ipsum dolor sit amet....

                </div>
                <div class="product-list-buttons">
                    <div class="send-button">
                        <i class="fa fa-envelope"></i>&nbsp;Send Queries
                    </div>
                    <div class="download-button">
                        <i class="fa fa-download"></i>&nbsp;Download Brochure
                    </div>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="product-list-img-div">
                <img src="<?php echo base_url('/assets/product4.png'); ?>" alt="product image" class="product-list-img">
            </div>
            <div class="product-list-body">
                <div class="product-list-heading">Product Name</div>
                <div class="product-list-text">
                    Lorem ipsum dolor sit amet....

                </div>
                <div class="product-list-buttons">
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
</div>