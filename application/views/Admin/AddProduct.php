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

    .input-table {
        display: flex;
        flex-direction: row;
        gap: 1rem;
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
        width: 200px;
        height: 150px;
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
        flex-wrap: wrap;
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

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

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
        <h1>Add New Product</h1>
    </div>
    <form action="<?php echo base_url('/admin/submit_product'); ?>" method="POST" enctype="multipart/form-data">
        <div class="add-product-form">
            <div class="add-product-description">
                <h2>Description</h2>
                <div class="add-product-desc">
                    <div class="input-field">
                        <label for="product-name">Product Name</label>
                        <input type="text" name="product-name" required>
                    </div>
                    <div class="input-field">
                        <label for="product-code">Product Code</label>
                        <input type="text" name="product-code" required>
                    </div>
                    <div class="input-field product-desc-array" id="input-description">
                        <label for="product-desc">Product Description</label>
                        <input name="product-desc[]" required>
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
                            <option disabled value="" selected>Select category</option>
                            <?php foreach ($product_category as $pc) { ?>
                                <option value="<?php echo $pc['id'] ?>">
                                    <?php echo $pc['name'] ?>
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
                        <input type="button" value="Reset" name="resetTable" onclick="resetTable();">

                    </div>
                    <div>
                        <table class="horizontal-table">
                            <!-- Initial header row with input -->
                            <tr>
                                <td><input type="text" placeholder="Header1" name="header[]" /></td>
                            </tr>
                            <!-- Initial data row with input -->
                            <tr>
                                <td><input type="text" placeholder="Row1" name="row[]" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="add-product-images">
                <h2>Product Images</h2>
                <div class="add-product-image">
                    <div class="images">

                        <div class="product-images-div">
                        </div>
                        <div class="add-images">
                            <div class="add-image">
                                <div class="drop-zone-small">
                                    <span class="drop-zone-text">Drop file here or click to upload</span>
                                    <input type="file" name="product-image[]" class="drop-zone-input"
                                        id="drop-zone-input-1" required onchange="previewImage(this.files)">
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
    var i = 1;

    function previewImage(input) {

        const file = input[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const newImage = document.createElement("div");
                newImage.className = "product-images";
                newImage.id = `product-images-${i - 1}`;
                newImage.innerHTML = `<img src="${e.target.result}" alt="uploaded image" ><p id="${i - 1}" onclick="removeElement(this.id);">Remove</p>`;

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
        document.getElementById(`drop-zone-input-${index}`).remove();
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
    function resetTable() {
        var table = document.querySelector(".horizontal-table");
        var rowCount = table.rows.length;

        // Start from the second row and remove all rows
        for (var i = rowCount - 1; i > 0; i--) {
            table.deleteRow(i);
        }

        // Restore the initial header and data row
        var headerRow = table.rows[0];
        headerRow.innerHTML = '<td><input type="text" placeholder="Header1" name="header[]" /></td>';

        var dataRow = document.createElement("tr");
        dataRow.innerHTML = '<td><input type="text" placeholder="Row1" name="row[]" /></td>';
        table.appendChild(dataRow);
    }
</script>