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
                        <label for="product-desc">Product Description</label>
                        <textarea name="product-desc" required></textarea>
                    </div>
                </div>
            </div>
            <div class="add-product-images">
                <h2>Product Images</h2>
                <div class="add-product-image">
                    <!-- <div class="drop-zone">
                        <span class="drop-zone-text" id="drop-zone-text">Drop file here or click to upload</span>
                        <input type="file" name="product-image[]" id="product-image" class="drop-zone-input"
                            onchange="fetchFileName(event);" required>
                    </div> -->
                    <div class="images">

                        <div class="product-images-div">
                            <!-- <div class="product-images" id="product-images-0">
                                <img id="first-product-image" src="">
                                <p id="0" onclick="removeElement(this.id)">Remove</p>
                            </div> -->
                        </div>
                        <div class="add-images">
                            <div class="add-image">
                                <div class="drop-zone-small">
                                    <span class="drop-zone-text">Drop file here or click to upload</span>
                                    <input type="file" name="product-image[]" class="drop-zone-input" required
                                        onchange="previewImage(this)">
                                </div>
                            </div>
                        </div>
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
    var i = 0;
    function previewImage(input) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const newImage = document.createElement("div");
                newImage.className = "product-images";
                newImage.id = `product-images-${i}`;
                newImage.innerHTML = `<img src="${e.target.result}" alt="uploaded image" ><p id="${i}" onclick="removeElement(this.id);">Remove</p>`;
                const newImage2 = document.createElement("div");
                newImage2.className = "mySlides";
                newImage2.innerHTML = `<img src="${e.target.result}" alt="uploaded image">`;

                document.querySelector(".product-images-div").appendChild(newImage);
            };
            reader.readAsDataURL(file);
        }

        i++;
    }

    function removeElement(index) {
        document.getElementById(`product-images-${index}`).remove();
    }
</script>