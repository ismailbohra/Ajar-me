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
</style>

<div class="add-product-page">
    <div class="add-product-page-heading">
        <h1>Add New Product</h1>
    </div>
    <form action="<?php echo base_url('/admin/submit-product'); ?>" method="POST">
        <div class="add-product-form">
            <div class="add-product-description">
                <h2>Description</h2>
                <div class="add-product-desc">
                    <div class="input-field">
                        <label for="product-name">Product Name</label>
                        <input type="text" name="product-name" required>
                    </div>
                    <div class="input-field">
                        <label for="product-desc">Product Description</label>
                        <textarea name="product-desc" required></textarea>
                    </div>
                </div>
            </div>
            <div class="add-product-images">
                <h2>Product Images</h2>
                <div class="add-product-image">
                    <div class="drop-zone">
                        <span class="drop-zone-text" id="drop-zone-text">Drop file here or click to upload</span>
                        <div id="product-preview">
                            <div id="product-preview-add-image">
                                <p>add more images</p>
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <input type="file" name="product-image" id="product-image" class="drop-zone-input"
                            onchange="fetchFileName(event);" required>
                    </div>
                </div>
            </div>
            <div class="add-product-category">
                <h2>Category</h2>
                <div class="add-product-category-div">
                    <div class="input-field">
                        <label for="product-name">Product Category</label>
                        <select name="product-category" required>
                            <option value="1">New Products</option>
                            <option value="2">Products</option>
                            <option value="3">Ebco</option>
                            <option value="4">Livsmart</option>
                        </select>
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
    function fetchFileName(event) {
        var productPreview = document.getElementById('product-preview');

        var img = document.createElement("img");
        img.src = URL.createObjectURL(event.target.files[0]);;
        productPreview.appendChild(img);

        productPreview.style.display = "flex";
        document.getElementById("drop-zone-text").style.display = "none";
    }
</script>