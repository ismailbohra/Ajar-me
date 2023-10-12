<style>
    .center {
        margin-left: 250px;
        padding: 5rem;
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


    .submit-button input {
        padding: 2px 0px;
        width: 90px;
        border: 0.5px solid;
        border-radius: 5px;
        background-color: white;
        color: #50AD55;
        font-size: 15px;
    }

    .submit-button-delete input {
        background-color: inherit;
        color: red;
        border: 0
    }

    .form_input {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #images {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        margin-top: 5rem;
        width: 100%;
    }

    #images td,
    #images th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #images tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #images tr:hover {
        background-color: #ddd;
    }

    #images th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: darkgrey;
        color: black;
    }

    .table-image {
        height: 50px;
    }

    .sno {
        width: 80px;
    }

    .action {
        width: 100px
    }
</style>
<div class="center">

    <h2>Slider Images Preview</h2>
    <div class="slideshow-container">
        <?php foreach ($slider_image as $image): ?>
            <div class="mySlides" id="<?php echo $image['slider_image_url']; ?>">
                <img id="0" src="<?php echo base_url($image['slider_image_url']); ?>">
            </div>
        <?php endforeach; ?>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <form action="<?php echo base_url('/admin/submit_slider_images'); ?>" method="POST" enctype="multipart/form-data">
        <div class="form_input">

            <input type="file" name="product-image" id="image-input" required>

            <div class="submit-button">
                <input type="submit" value="Add Image" name="submit">
            </div>
        </div>
    </form>
    <table id="images">
        <tr>
            <th class="sno">S.No.</th>
            <th>preview</th>
            <th class="action">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($slider_image as $image): ?>
            <tr id="<?php echo $image['slider_image_url']; ?>">
                <td>
                    <?php echo $i ?>
                </td>
                <td><img class="table-image" src="<?php echo base_url($image['slider_image_url']); ?>"></td>
                <td>
                    <div class="submit-button-delete">
                        <input type="submit" value="Delete" name="submit"
                            onclick="deleteImage('<?php echo $image['slider_image_url']; ?>')">
                    </div>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
    </table>
</div>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function deleteImage(imageUrl) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('admin/delete_slider_image'); ?>",
            data: { imageUrl: imageUrl },
            dataType: "json",
            success: function (data) {
                if (data.success) {

                    document.getElementById(imageUrl).remove();
                } else {
                    console.log('Failed to delete image:', data.error);
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    }
</script>