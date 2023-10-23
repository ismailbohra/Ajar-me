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

        @media screen and (max-width:1100px) {
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
        background-color: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;

        @media screen and (max-width:1100px) {
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
        aspect-ratio: 1/1;

        @media screen and (max-width:768px) {
            max-height: 500px;
        }
    }

    .product-images {
        margin-top: 2rem;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        width: 100%;
    }

    .product-images img {
        padding: 10px;
        height: 100px;
        width: 100px;
        object-fit: contain;
        background-color: #D9D9D9;
        border-radius: 5px;
        cursor: pointer;
    }

    .product-right {
        padding-left: 2rem;
        width: 70%;

        @media screen and (max-width:768px) {
            padding: 0;
            width: 100%;
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

    .active-panel,
    .accordion:hover {
        background-color: #ccc;
    }

    .active-panel {
        border-radius: 10px 10px 0px 0px;
    }

    .panel {
        min-width: 100%;
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

    .active-panel:after {
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

    .panel-table {
        min-width: 100%;
        padding: 0;
        display: none;
        background-color: white;
        overflow: hidden;
        border-radius: 0px 0px 10px 10px;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
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
        /* background-color: darkgrey; */
        color: black;
        text-transform: uppercase;
        font-size: 13px;
    }

    .ul-desc {
        padding-left: 40px;

        @media screen and (max-width:768px) {
            padding-left: 15px;

        }
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

    #specification_table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
    }

    #specification_table td,
    #specification_table th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        min-width: 130px;
    }

    #specification_table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #specification_table tr:hover {
        background-color: #ddd;
    }

    #specification_table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: darkgrey;
        color: black;
        text-transform: uppercase;
        font-size: 13px;
    }
    .panel-table-specification {
        display: flex;
        justify-content: center;
    }
</style>

<div class="product-page">
    <div class="product-container">
        <div class="product-left">
            <div class="product-left-img-div">
                <img src="<?php if (!empty($product['product_image_url'][0])) {
                    echo base_url() . $product['product_image_url'][0];
                } else {
                    echo base_url() . "/assets/no-image.png";
                } ?>" alt="product image" class="product-left-img">
            </div>
            <!-- <div class="product-images">
                <?php if (!empty($product['product_image_url'])) {
                    foreach ($product['product_image_url'] as $p) { ?>
                        <img src="<?php if (!empty($p)) {
                            echo base_url() . $p;
                        } else {
                            echo base_url() . "/assets/no-image.png";
                        } ?>" alt="product image" onclick="replaceImage(this);">
                    <?php }
                } else { ?>
                    <img src="<?php echo base_url() . "/assets/no-image.png"; ?>" alt="product image"
                        onclick="replaceImage(this);">
                <?php } ?>
            </div> -->
        </div>
        <div class="product-right">
            <div class="product-right-heading">
                <h1>
                    <?php echo $product['product_name']; ?>
                </h1>
            </div>
            <div class="product-right-heading">
                <h4>
                    <?php echo '(' . $product['product_code'] . ')'; ?>
                </h4>
            </div>
            <div class="product-right-body">
                <button class="accordion">DESCRIPTION</button>
                <div class="panel">
                    <?php foreach ($product['product_description'] as $pd) {
                        $pd = str_replace('1005', '$', $pd); ?>
                        <?php if ($pd[0] == '$') { ?>
                            <ul class="ul-desc">
                                <li>
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
                                </li>
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
                <?php if (count($header) > 1) { ?>
                    <button class="accordion">SPECIFICATIONS</button>
                    <div class="panel-table">
                        <table id="customers">
                            <tr>
                                <?php
                                foreach ($header as $h) { ?>
                                    <th>
                                        <?php echo $h ?>
                                    </th>
                                <?php } ?>
                            </tr>
                            <?php
                            $i = 0;
                            foreach ($row as $r) {
                                if ($i % count($header) == 0) {
                                    echo '<tr>';
                                }
                                echo '<td>' . $r . '</td>';
                                if ($i % count($header) == (count($header) - 1)) {
                                    echo '</tr>';
                                }
                                $i++;
                            }
                            ?>

                        </table>
                    </div>
                <?php } ?>
                <!-- <button class="accordion">FITTING INSTRUCTIONS</button>
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
                </div> -->
            </div>
            <div class="product-right-buttons">
                <div class="send-button" onclick="send_query('<?php echo $product['id']; ?>');">
                    <i class="fa fa-envelope"></i>&nbsp;Send Queries
                </div>
                <div class="download-button" onclick="download_pdf('<?php echo $product['id']; ?>');">
                    <i class="fa fa-download"></i>&nbsp;Download Brochure
                </div>
            </div>
        </div>
    </div>
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
                id="exampleFormControlTextarea1" rows="5"></textarea>
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
<div class="brochres">
    <?php $p = $product ?>
    <div class="brochre" id="<?php echo "bproduct-" . $p['id']; ?>">
        <div class="bheader">
            <h1>AJAR</h1>
            <p>Aswaaq Warehouse #13, Industrial Area 5, Al Qusais. Dubai U.A.E | E-mail:sales@ajar-me.com
            </p>
            <p>Tel.Number - +971 4 229 4540</p>
        </div>
        <div class="bbody">
            <img src="<?php if (!empty($p['product_image_url'][0])) {
                echo base_url() . $p['product_image_url'][0];
            } else {
                echo base_url() . "/assets/no-image.png";
            } ?>" alt="product image" class="bimage">

            <h1 class="bproductname">
                <?php echo $p['product_name']; ?>
            </h1>
            <div class="bproductdesc">
                <?php foreach ($p['product_description'] as $pd) {
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
                <?php if (count($header) > 1) { ?>
                    <h3 style="margin-top:2rem;font: size 25px;">Specification</h3>
                    <div class="panel-table-specification">
                        <table id="specification_table">
                            <tr>
                                <?php
                                foreach ($header as $h) { ?>
                                    <th>
                                        <?php echo $h ?>
                                    </th>
                                <?php } ?>
                            </tr>
                            <?php
                            $i = 0;
                            foreach ($row as $r) {
                                if ($i % count($header) == 0) {
                                    echo '<tr>';
                                }
                                echo '<td>' . $r . '</td>';
                                if ($i % count($header) == (count($header) - 1)) {
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
</div>
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
<script>
    var acc = document.getElementsByClassName("accordion");
    acc[0].classList.toggle("active-panel");
    acc[0].nextElementSibling.style.display = "block";
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active-panel");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    function replaceImage(image) {
        document.querySelector('.product-left-img').src = image.src;
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
</script>