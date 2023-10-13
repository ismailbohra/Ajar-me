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
        height: 150px;
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
        position: relative;

        @media screen and (max-width:350px) {
            width: 80px;
        }
    }

    #filter-dropdown {
        display: none;
        z-index: 3;
        background-color: #fff;
        position: absolute;
        list-style-type: none;
        padding: 1rem;
        font-size: 15px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    #filter-dropdown li input {
        margin-right: 1rem;
    }

    .sort {
        margin-left: 5px;
        padding: 0;
    }

    .sort select {
        height: 100%;
        width: 100%;
        padding: 5px 10px;
        border-radius: 10px;
        border: none;
        background-color: #D9D9D9;
    }

    .sort select option {
        background-color: #fff;
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
        cursor: pointer;

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
        height: 34px;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        display: -webkit-box;
    }

    .product-card-buttons {
        display: flex;
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
        display: none;
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
        cursor: pointer;

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
        height: 29px;
        overflow: hidden;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
        display: -webkit-box;
    }

    .product-list-text {
        margin-top: 8px;
        font-size: 16px;
        overflow: hidden;
        height: 50px;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: -webkit-box;

        @media screen and (max-width:1000px) {
            font-size: 15px;
            height: 47px;
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

    .query-form {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        border: 1px solid lightgrey;
        padding: 2rem;
        width: 350px;
        height: 400px;
        overflow-y: scroll;
        display: none;
    }
</style>
<div class="product-home">
    <div class="product-home-heading">
        <h1>PRODUCTS</h1>
    </div>
    <div class="product-navbar">
        <div class="left">
            <div class="filter products-dropdown-btn" onclick="toggle_filter_dropdown();">
                Filter <i class="fa fa-angle-down"></i>
            </div>
            <ul id="filter-dropdown">
                <li><input type="checkbox">New Products</li>
                <li><input type="checkbox">Products</li>
                <li><input type="checkbox">Ebco</li>
                <li><input type="checkbox">Livsmart</li>
            </ul>
        </div>
        <div class="right">
            <div class="sort products-dropdown-btn">
                <select name="product-sorting">
                    <option value="">Sort By</option>
                    <option value="name-asc">Name (A-Z)</option>
                    <option value="name-desc">Name (Z-A)</option>
                    <option value="price-asc">Price (Low > High)</option>
                    <option value="price-desc">Price (High > Low)</option>
                </select>
            </div>
            <i class="glyphicon glyphicon-th" onclick="gridView();"></i>
            <i class="fa fa-list-ul" onclick="listView();"></i>
        </div>
    </div>
    <div class="product-cards" id="product-cards">

        <?php foreach ($products as $p) { ?>
            <div class="product-card">
                <div class="product-card-img-div"
                    onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                    <img src="<?php echo base_url() . $p['product_image_url']; ?>" alt="product image"
                        class="product-card-img">
                </div>
                <div class="product-card-body">
                    <div class="product-card-heading"
                        onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                        <?php echo $p['product_name']; ?>
                    </div>
                    <div class="product-card-buttons">
                        <div class="send-button">
                            <i class="fa fa-envelope"></i>&nbsp;Send Queries
                        </div>
                        <div class="download-button">
                            <i class="fa fa-download"></i>&nbsp;Download Brochure
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <div class="product-lists" id="product-lists">
        <?php foreach ($products as $p) { ?>
            <div class="product-list">
                <div class="product-list-img-div"
                    onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                    <img src="<?php echo base_url() . $p['product_image_url']; ?>" alt="product image"
                        class="product-list-img">
                </div>
                <div class="product-list-body">
                    <div class="product-list-heading"
                        onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                        <?php echo $p['product_name']; ?>
                    </div>
                    <div class="product-list-text">
                        <?php echo $p['product_description']; ?>
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
        <?php } ?>
    </div>
</div>
<div class="query-form">
    <form id="myForm">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">I am an</label>
            <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select</option>
                <option value="1">Architecture & Interior Designer</option>
                <option value="2">Dealer</option>
                <option value="3">Carpenter</option>
                <option value="4">Contractor</option>
                <option value="5">End User</option>
                <option value="6">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="name" class="form-control" id="fullname" name="name" Required=true
                placeholder="Enter your name (Required)">
        </div>
        <div class="form-group">
            <label for="fullname" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" Required=true aria-describedby="emailHelp"
                placeholder="Enter Your Email (Required)">
        </div>
        <div class="form-group">
            <label for="fullname" class="form-label">Contact Number</label>
            <input type="number" class="form-control" name="contact" Required=true
                placeholder="Enter your Phone no (Required)">
        </div>
        <div class="form-group">
            <label for="requirments" class="form-label">Requirments</label>
            <textarea placeholder="Please tell us about your Requirments" class="form-control" name="requirments"
                id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control" name="contact" Required=true placeholder="Name of Your Company">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Postal Address</label>
            <input type="text" class="form-control" name="contact" Required=true placeholder="Postal Address">
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
<script>
    $('product-list-text').each(function () {
        if ($(this)[0].scrollWidth > $(this).width()) {
            $(this).prepend('<div class="hellip"">&hellip;</div>');
        }
    });
    function gridView() {
        document.getElementById("product-cards").style.display = "grid";
        document.getElementById("product-lists").style.display = "none";
    }

    function listView() {
        document.getElementById("product-cards").style.display = "none";
        document.getElementById("product-lists").style.display = "flex";
    }

    function toggle_filter_dropdown() {
        var dropdown = document.getElementById("filter-dropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    }

    function redirectToUrl(url) {
        window.location.href = url;
    }

</script>