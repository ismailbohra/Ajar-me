<style>
    .add-product-page {
        margin-left: 250px;
        padding: 3rem 5rem;
    }

    .add-product-page-heading h1 {
        font-size: 30px;
    }

    form {
        padding-top: 1rem;
    }

    h2 {
        font-size: 20px;
    }

    .add-product-desc {
        border: 2px solid #D9D9D9;
        padding: 1rem 2rem;
        border-radius: 10px;
    }

    label {
        font-size: 15px;
        font-weight: 500;
    }

    .input-field {
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
    }

    .add-product-desc input {
        border: 2px solid #D9D9D9;
        border-radius: 5px;
        padding: 5px 10px;
    }

    .add-product-desc textarea {
        border: 2px solid #D9D9D9;
        border-radius: 5px;
        min-height: 100px;
        max-width: 100%;
        padding: 5px 10px;
    }

    .add-product-image {
        border: 2px solid #D9D9D9;
        padding: 2rem;
        border-radius: 10px;
    }

    .drop-zone {
        border: 2px dashed #D9D9D9;
        padding: 2rem;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        min-height: 100px;
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

    .add-product-category-div {
        border: 2px solid #D9D9D9;
        padding: 1rem 2rem;
        border-radius: 10px;
    }

    .add-product-category-div select {
        border: 2px solid #D9D9D9;
        border-radius: 5px;
        padding: 10px;
    }

    .submit-button {
        margin-top: 5rem;
    }

    .submit-button input {
        padding: 5px 10px;
        width: 150px;
        border: none;
        border-radius: 5px;
        background-color: #50AD55;
        color: white;
        font-size: 18px;
    }

    #product-preview {
        display: none;
        height: 100%;
        width: 100%;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    #product-preview img {
        height: 100px;
        width: 100px;
        border: 2px solid #D9D9D9;
        border-radius: 5px;
        object-fit: contain;
    }

    #product-preview-add-image {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100px;
        width: 100px;
        border: 2px solid #D9D9D9;
        border-radius: 5px;
    }

    #product-preview-add-image p {
        text-align: center;
        font-size: 15px;
    }

    #product-preview-add-image i {
        text-align: center;
        font-size: 18px;
    }









    .images {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .drop-zone-small {
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

    .product-images {
        max-width: 200px;
        max-height: 150px;
        border: 2px solid #D9D9D9;
        padding: 1rem;
        border-radius: 10px;
    }

    .add-image {
        border: 2px solid #D9D9D9;
        padding: 1rem;
        border-radius: 10px;
        display: flex;
        height: 100%;
        min-height: 150px;
    }

    .product-images-div {
        display: flex;
        /* flex-wrap: wrap; */
        justify-content: center;
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

    .input-table {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    td {
        padding: 5px;
    }

    /* .addbutton {
        background-color: greenyellow;
    }

    .removebutton {
        background-color: red;
    } */

    .buttons {
        display: flex;
        justify-content: space-between;
    }

    .product-desc-array {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
</style>

<div class="add-product-page">
    <div class="add-product-page-heading">
        <h1>Edit Product</h1>
    </div>
    <form action="<?php echo base_url('/admin/update_product'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="product-id" value="<?php echo $product['id']; ?>">
        <div class="add-product-form">
            <div class="add-product-description">
                <h2>Description</h2>
                <div class="add-product-desc">
                    <div class="input-field">
                        <label for="product-name">Product Name</label>
                        <input type="text" name="product-name" value="<?php echo $product['product_name']; ?>" required>
                    </div>
                    <div class="input-field">
                        <label for="product-code">Product Code</label>
                        <input type="text" name="product-code" value="<?php echo $product['product_code']; ?>" required>
                    </div>
                    <div class="input-field product-desc-array" id="input-description">
                        <label for="product-desc">Product Description</label>
                        <?php foreach ($product['product_description'] as $pd) { ?>
                            <input name="product-desc[]" required value="<?php echo $pd ?>">
                        <?php } ?>
                    </div>
                    <div class="buttons">
                        <input type="button" class="addbutton" value="Add Points" onclick="addDescritpion();">
                        <input type="button" value="Remove" id="remvoebtn" class="removebutton"
                            onclick="removeDescription();">
                    </div>
                </div>
            </div>
            <div class="add-product-category">
                <h2>Category</h2>
                <div class="add-product-category-div">
                    <div class="input-field">
                        <label for="product-name">Product Category</label>
                        <select name="product-category" required>

                            <?php foreach ($product_category as $pc) { ?>
                                <option value="<?php echo $pc['id'] ?>" <?php if ($product['product_category'] == $pc['id'])
                                       echo "selected"; ?>><?php echo $pc['name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="add-product-horizontal-table">
                <h2>Specification Table</h2>
                <div class="add-product-desc">
                    <div class="input-table">
                        <input type="button" value="Add Column" name="addcolumn" onclick="addColumnH();">
                        <input type="button" value="Add Row" name="addrow" onclick="addRowH();">
                        <input type="button" value="Reset" name="resettable" onclick="resetTable();">
                    </div>
                    <div>
                        <table class="horizontal-table">
                            <!-- Initial header row with input -->
                            <tr>
                                <?php
                                foreach ($header as $h) {
                                    ?>
                                    <td>
                                        <input type="text" placeholder="Header1" name="header[]" <?php if (!empty($h)) {
                                            echo 'value="' . $h . '"';
                                        } ?> />
                                    </td>
                                    <?php
                                }
                                ?>
                            </tr>

                            <!-- Initial data row with input -->
                            <?php
                            $i = 0;
                            foreach ($row as $r) {
                                if ($i % count($header) == 0) {
                                    echo '<tr>';
                                }
                                echo '<td><input type="text" placeholder="Row1" name="row[]" value="' . $r . '"/></td>';
                                if ($i % count($header) == (count($header) - 1)) {
                                    echo '</tr>';
                                }
                                $i++;
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="add-product-images">
                <h2>Product Images</h2>
                <div class="add-product-image">
                    <div class="images">

                        <div class="product-images-div">
                            <?php $i = 0;
                            foreach ($product['product_image_url'] as $p) { ?>
                                <div class="product_images" id="product-images-<?php echo $i; ?>"
                                    style="max-width: 200px; max-height: 150px; border: 2px solid #D9D9D9; padding: 1rem; border-radius: 10px;">
                                    <img src="<?php echo base_url() . $p; ?>" alt="uploaded image"
                                        style="width: 100%;height: 80%;">
                                    <p id="<?php echo $i; ?>"
                                        style="height: 20%; width: 100%; text-align: center;  padding-top: 1rem;cursor:pointer;"
                                        onclick="removeElement(this.id);">Remove</p>
                                    <input type="hidden" name="previous[]" id="prev-image-<?php echo $i; ?>"
                                        value="<?php echo $p; ?>">
                                </div>
                                <?php $i++;
                            } ?>
                        </div>
                        <div class="add-images">
                            <div class="add-image">
                                <div class="drop-zone-small">
                                    <span class="drop-zone-text">Drop file here or click to upload</span>
                                    <input type="file" name="product-image[]" class="drop-zone-input"
                                        id="drop-zone-input-<?php echo count($product['product_image_url']); ?>"
                                        onchange="previewImage(this.files)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit-button">
                <input type="submit" value="SUBMIT" name="submit">
            </div>
        </div>
    </form>
</div>
<script>
    var i = Number('<?php echo count($product['product_image_url']); ?>');

    function previewImage(input) {
        const file = input[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const newImage = document.createElement("div");
                newImage.className = "product-images";
                newImage.id = `product-images-${i - 1}`;
                newImage.innerHTML = `<img src="${e.target.result}" alt="uploaded image" ><p id="${i - 1}" onclick="removeElement(this.id);" >Remove</p>`;

                document.querySelector(".product-images-div").appendChild(newImage);
            };
            reader.readAsDataURL(file);
        }

        document.querySelector(`#drop-zone-input-${i}`).style.visibility = "hidden";

        i++;

        addInput();

    }

    function removeElement(index) {
        document.getElementById(`product-images-${index}`).remove();
        if (index >= Number('<?php echo count($product['product_image_url']); ?>')) {
            document.getElementById(`drop-zone-input-${index}`).remove();
        }
    }

    function addInput() {
        var newInput = document.createElement('input');
        newInput.type = "file";
        newInput.name = "product-image[]";
        newInput.className = "drop-zone-input";
        newInput.id = `drop-zone-input-${i}`;
        newInput.addEventListener("change", function () {
            previewImage(this.files);
        });
        document.querySelector(".drop-zone-small").appendChild(newInput);
    }

    function addColumnH() {
        var table = document.querySelector(".horizontal-table");
        var rowCount = table.rows.length;

        var headerCell = table.rows[0].insertCell(-1);
        headerCell.innerHTML = '<input type="text" name="header[]" placeholder="Header' + (rowCount + 1) + '" />';

        for (var i = 1; i < rowCount; i++) {
            var row = table.rows[i];
            var cell = row.insertCell(-1);
            cell.innerHTML = '<input type="text" name="row[]" placeholder="Row' + i + '" />';
        }
    }




    function addRowH() {
        var table = document.querySelector(".horizontal-table");
        var headerRow = table.rows[0];
        var rowCount = headerRow.cells.length;

        var newRow = table.insertRow(-1);
        for (var i = 0; i < rowCount; i++) {
            var cell = newRow.insertCell(-1);
            cell.innerHTML = '<input type="text" name="row[]" placeholder="Row' + (newRow.rowIndex) + '" />';
        }
    }

    function addDescritpion() {
        var newInput = document.createElement('input')
        newInput.type = "text"
        newInput.name = "product-desc[]"
        newInput.required = true
        document.querySelector(".product-desc-array").appendChild(newInput);
        var btn = document.getElementById("remvoebtn");
        btn.style.display = "block";
    }

    function removeDescription() {
        let inputdescription = document.getElementById('input-description');
        inputdescription.removeChild(inputdescription.lastElementChild);
        var descripiton_length = document.getElementsByName('product-desc[]').length;

        if (descripiton_length < 2) {
            var btn = document.getElementById("remvoebtn");
            btn.style.display = "none";
        }
    }
    var descripiton_length = document.getElementsByName('product-desc[]').length;

    if (descripiton_length < 2) {
        var btn = document.getElementById("remvoebtn");
        btn.style.display = "none";
    }
</script>