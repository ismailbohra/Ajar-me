<style>
    .product-home {
        min-height: calc(100vh - 300px);
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
        height: 180px;
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
        background-color: white;
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
        height: 100%;
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
        padding: 1rem;
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
        background-color: white;
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
            gap: 10px;

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
        width: 400px;
        max-width: 400px;
        min-height: 400px;
        max-height: 95vh;
        overflow-y: scroll;
        display: none;
        z-index: 12;
        border-radius: 5px;

        @media screen and (max-width:500px) {

            max-width: 350px;

            @media screen and (max-width: 374px) {

                max-width: 250px;
            }
        }
    }

    .submit {
        margin-top: 2rem;
        display: flex;
        justify-content: space-between;
    }

    #product-overlay {
        display: none;
        top: 0;
        position: fixed;
        height: 100vh;
        width: 100vw;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 10;
    }

    /* Add this to your existing CSS or create a new section for toast messages */
    .toast-message {
        position: fixed;
        top: 10;
        right: 0;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        z-index: 9999;
        display: none;
        font-size: 15px;
        animation: slideIn 0.5s, slideOut 0.5s 2s;

        @media screen and (max-width:400px) {
            width: 100%;
            text-align: center;
        }
    }

    @keyframes slideIn {
        from {
            right: -100%;
        }

        to {
            right: 0;
        }
    }

    @keyframes slideOut {
        from {
            right: 0;
        }

        to {
            right: -100%;
        }
    }

    .brochre {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* justify-content: space-between; */
    }

    .brochres {
        display: none;
    }

    .bheader {
        background: darkred;
        color: white;
        width: 100%;
        text-align: center;
    }


    .bimage {
        margin-top: 1rem;
        width: 80%;
        aspect-ratio: 16/9;
        object-fit: contain;
    }

    .bbody {
        margin: 5rem;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .bproductname {
        margin-top;
        : 5rem
    }

    .bproductdesc {}

    .ul-desc {
        padding-left: 5rem;
    }

    .ul-desc li::marker {
        font-size: 20px;
    }

    .colour {
        display: inline-flex;
        flex-direction: row;
        align-items: center;
        gap: 1rem;
    }

    .ul-desc:first-child {
        padding-top: 2rem;
    }

    .panel-table {
        display: flex;
        justify-content: center;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        min-width: 130px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: darkgrey;
        color: black;
        text-transform: uppercase;
        font-size: 13px;
    }
</style>
<div class="product-home">
    <div class="product-home-heading">
        <h1>
            <?php if ($product_category_name) {
                echo $product_category_name;
            } else {
                echo 'PRODUCTS';
            } ?>
        </h1>
    </div>
    <div class="product-navbar">
        <div class="left">
            <div class="filter products-dropdown-btn" onclick="toggle_filter_dropdown();">
                Filter <i class="fa fa-angle-down"></i>
            </div>
            <ul id="filter-dropdown">
                <?php foreach ($product_category as $pc) { ?>
                    <li><input type="checkbox" class="filter-checkbox" value="<?php echo $pc['id'] ?>"
                            onchange="filter_products(this.value);" <?php if (isset($filter) && array_search($pc['id'], $filter) !== false) {
                                echo "checked";
                            } ?>> <?php echo $pc['name'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="right">
            <div class="sort products-dropdown-btn">
                <select name="product-sorting" onchange="sort_products(this.value);">
                    <option value="">Sort By</option>
                    <option value="name-asc" <?php if (isset($sort) && $sort == "name-asc")
                        echo "selected"; ?>>Name (A-Z)
                    </option>
                    <option value="name-desc" <?php if (isset($sort) && $sort == "name-desc")
                        echo "selected"; ?>>Name
                        (Z-A)</option>
                    <option value="date-desc" <?php if (isset($sort) && $sort == "date-desc")
                        echo "selected"; ?>>Date (New
                        > Old)</option>
                    <option value="date-asc" <?php if (isset($sort) && $sort == "date-asc")
                        echo "selected"; ?>>Date (Old
                        >
                        New)</option>
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
                    <img src="<?php if (!empty($p['product_image_url'])) {
                        echo base_url() . $p['product_image_url'];
                    } else {
                        echo base_url() . "/assets/no-image.png";
                    } ?>" alt="product image" class="product-card-img">
                </div>
                <div class="product-card-body">
                    <div class="product-card-heading"
                        onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                        <?php echo $p['product_name']; ?>
                    </div>
                    <div class="product-card-buttons">
                        <div class="send-button" onclick="send_query('<?php echo $p['id']; ?>');">
                            <i class="fa fa-envelope"></i>&nbsp;Send Queries
                        </div>
                        <div class="download-button" onclick="download_pdf('<?php echo $p['id']; ?>');">
                            <i class="fa fa-download"></i>&nbsp;Download Brochure
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <div class="product-lists" id="product-lists">
        <?php foreach ($products as $p) { ?>
            <div class="product-list" id="<?php echo "product-" . $p['id']; ?>">
                <div class="product-list-img-div"
                    onclick="redirectToUrl('<?php echo base_url('/product/product/') . $p['id']; ?>');">
                    <img src="<?php if (!empty($p['product_image_url'])) {
                        echo base_url() . $p['product_image_url'];
                    } else {
                        echo base_url() . "/assets/no-image.png";
                    } ?>" alt="product image" class="product-list-img">
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
                        <div class="send-button" onclick="send_query('<?php echo $p['id']; ?>');">
                            <i class="fa fa-envelope"></i>&nbsp;Send Queries
                        </div>
                        <div class="download-button" onclick="download_pdf('<?php echo $p['id']; ?>');">
                            <i class="fa fa-download"></i>&nbsp;Download Brochure
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<div class="brochres">
    <?php foreach ($products as $p) { ?>
        <div class="brochre" id="<?php echo "bproduct-" . $p['id']; ?>">
            <div class="bheader">
                <h1>AJAR</h1>
                <p>Aswaaq Warehouse #13, Industrial Area 5, Al Qusais. Dubai U.A.E | E-mail:sales@ajar-me.com
                </p>
                <p>Tel.Number - +971 4 229 4540</p>
            </div>
            <div class="bbody">
                <img src="<?php if (!empty($p['product_image_url'])) {
                    echo base_url() . $p['product_image_url'];
                } else {
                    echo base_url() . "/assets/no-image.png";
                } ?>" alt="product image" class="bimage">

                <h1 class="bproductname">
                    <?php echo $p['product_name']; ?>
                </h1>
                <div class="bproductdesc">
                    <?php foreach ($p['product_description_brochre'] as $pd) {
                        $pd = str_replace('1005', '$', $pd); ?>
                        <?php if ($pd[0] == '$') { ?>
                            <ul class="ul-desc">
                                <ol>
                                    <div class="colour">
                                        <?php echo '<div  style="width: 7px; height: 7px; border-radius:50px; background-color: black"></div>'; ?>
                                        <?php
                                        $pd = str_replace(';', ',', $pd);
                                        $pd = str_replace('|', '"', $pd);
                                        $pd = str_replace('^', "'", $pd);
                                        $pd = str_replace('1001', '+', $pd);
                                        $pd = str_replace('1002', '-', $pd);
                                        $pd = str_replace('1003', '*', $pd);
                                        $pd = str_replace('1004', '/', $pd);
                                        $pd = str_replace('1005', '$', $pd);

                                        if (str_contains($pd, ':')) {
                                            $parts = explode(':', $pd);
                                            $part1 = $parts[0];
                                            echo '<strong>' . substr($part1, 1) . '</strong>' . ':' . $parts[1];
                                        } else {
                                            echo substr($pd, 1);
                                        }
                                        ?>
                                    </div>
                                </ol>
                            </ul>

                        <?php } elseif ($pd[0] == '#') { ?>
                            <ul class="ul-desc">
                                <ol>
                                    <div class="colour">
                                        <?php echo '<div  style="width: 15px; height: 15px; border-radius:50px; background-color: #' . $pd[1] . $pd[2] . $pd[3] . $pd[4] . $pd[5] . $pd[6] . '"></div>'; ?>
                                        <?php $pd = str_replace(';', ',', $pd);
                                        $pd = str_replace('|', '"', $pd);
                                        $pd = str_replace('^', "'", $pd);
                                        $pd = str_replace('1001', '+', $pd);
                                        $pd = str_replace('1002', '-', $pd);
                                        $pd = str_replace('1003', '*', $pd);
                                        $pd = str_replace('1004', '/', $pd);
                                        $pd = str_replace('1005', '$', $pd);
                                        echo substr($pd, 7); ?>
                                    </div>
                                </ol>
                            </ul>
                        <?php } else { ?>
                            <p>
                                <?php $pd = str_replace(';', ',', $pd);
                                $pd = str_replace('|', '"', $pd);
                                $pd = str_replace('^', "'", $pd);
                                $pd = str_replace('1001', '+', $pd);
                                $pd = str_replace('1002', '-', $pd);
                                $pd = str_replace('1003', '*', $pd);
                                $pd = str_replace('1004', '/', $pd);
                                $pd = str_replace('1005', '$', $pd);
                                echo $pd; ?>
                            </p>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="bspecification">
                    <?php if (count($p['header']) > 1) { ?>
                        <h3 style="margin-top:2rem;font: size 25px;">Specification</h3>
                        <div class="panel-table">
                            <table id="customers">
                                <tr>
                                    <?php
                                    foreach ($p['header'] as $h) { ?>
                                        <th>
                                            <?php echo $h ?>
                                        </th>
                                    <?php } ?>
                                </tr>
                                <?php
                                $i = 0;
                                foreach ($p['row'] as $r) {
                                    if ($i % count($p['header']) == 0) {
                                        echo '<tr>';
                                    }
                                    echo '<td>' . $r . '</td>';
                                    if ($i % count($p['header']) == (count($p['header']) - 1)) {
                                        echo '</tr>';
                                    }
                                    $i++;
                                }
                                ?>

                            </table>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="bfooter">

            </div>
        </div>
    <?php } ?>
</div>
<div id="query" class="query-form">
    <form class="myForm" id="myForm">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">I am an</label>
            <select class="form-select form-control" name="user" aria-label="Default select example">
                <option selected>Select</option>
                <option value="Architecture & Interior Designer">Architecture & Interior Designer</option>
                <option value="Dealer">Dealer</option>
                <option value="Carpenter">Carpenter</option>
                <option value="Contractor">Contractor</option>
                <option value="End User">End User</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="name" class="form-control" id="fullname" name="name" Required=true
                placeholder="Enter your name (Required)">
        </div>
        <div class="form-group">
            <label for="Email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="Email" Required=true aria-describedby="emailHelp"
                placeholder="Enter Your Email (Required)">
        </div>
        <div class="form-group">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="number" class="form-control" name="contact" Required=true
                placeholder="Enter your Phone no (Required)">
        </div>
        <div class="form-group">
            <label for="requirments" class="form-label">Requirments</label>
            <textarea placeholder="Please tell us about your Requirments" class="form-control" name="requirments"
                id="exampleFormControlTextarea1" rows="2" style="max-width:100%; min-width:100%"></textarea>
        </div>
        <div class="form-group">
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control" name="company" Required=true placeholder="Name of Your Company">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Postal Address</label>
            <input type="text" class="form-control" name="address" Required=true placeholder="Postal Address">
        </div>
        <div class="submit">
            <button class="btn btn-danger" onclick="clearForm();">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
<div id="product-overlay"></div>
<div id="toast-message" class="toast-message">
    Thank you for Enquiy!<br />
    We will contact you Shortly
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
    function send_query(id) {
        document.getElementById("query").style.display = "block";
        document.getElementById("product-overlay").style.display = "block";
        const newInput = document.createElement("div");
        newInput.innerHTML = `<input type="text" hidden name="product_id" value=${id} Required=true>`;
        document.querySelector(".myForm").appendChild(newInput);
    }
    function clearForm() {
        $('#myForm')[0].reset();
        document.getElementById("query").style.display = "none";
        document.getElementById("product-overlay").style.display = "none";
    }
    $(document).ready(function () {
        $('#myForm').submit(function (event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('product/send_enquiry'); ?>",
                data: formData,
                success: function (response) {
                    console.log('query submitted successfully');
                    console.log(response);
                    showSuccessMessage();
                    clearForm();
                },
                error: function (error) {
                    console.error('query submission failed');
                }
            });
        });

        function showSuccessMessage() {
            var toastMessage = $('#toast-message');
            toastMessage.show();
            setTimeout(function () {
                toastMessage.hide();
            }, 2000);
        }
    });

    function sort_products(value) {
        let url = window.location.href.split('?');
        if (url[1] !== undefined) {
            if (url[1].includes("filter")) {
                url[1] = url[1].split('&');
                for (let j = 0; j < url[1].length; j++) {
                    let temp = url[1][j];
                    if (temp.includes("filter")) {
                        window.location.href = url[0] + "?sort=" + value + "&" + temp;
                    }
                }
            } else {
                window.location.href = url[0] + "?sort=" + value;
            }
        } else {
            window.location.href = url[0] + "?sort=" + value;
        }

    }

    function filter_products(value) {

        let i;
        let filter = "";
        let checked = document.getElementsByClassName("filter-checkbox");
        for (i = 0; i < checked.length; i++) {
            if (checked[i].checked) {
                filter += `${i + 1},`;
            }
        }

        filter = filter.slice(0, filter.length - 1);

        let url = window.location.href.split('?');
        if (url[1] !== undefined) {
            if (url[1].includes("sort")) {
                url[1] = url[1].split('&');
                for (let j = 0; j < url[1].length; j++) {
                    let temp = url[1][j];
                    if (temp.includes("sort")) {
                        window.location.href = url[0] + "?filter=" + filter + "&" + temp;
                    }
                }
            } else {
                window.location.href = url[0] + "?filter=" + filter;
            }

        } else {
            window.location.href = url[0] + "?filter=" + filter;
        }
    }
</script>
<script>
    function download_pdf(index) {
        const invoice = this.document.getElementById(`bproduct-${index}`);
        console.log(invoice);
        console.log(window);
        var opt = {
            filename: 'Ajar_Brochre.pdf',
            margin: [0, 0, 1, 0],
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' },
        };
        html2pdf().from(invoice).set(opt).save();
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>