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

    .featured {
        margin: 0 5rem 15rem 5rem;

        @media screen and (max-width:500px) {
            margin: 7rem 3rem 7rem 1rem;
        }
    }

    .featured h1 {
        margin-left: 3rem;
        margin-bottom: 5rem;
        font-size: 40px;

        @media screen and (max-width:1000px) {
            margin-left: 0;
            font-size: 32px;
        }
    }

    .featured-div {
        display: flex;

        @media screen and (max-width:1000px) {
            flex-direction: column;
        }
    }

    .featured-img-div {
        height: 200px;
        width: 100%;
        border: 5px solid #717070;
        border-radius: 10px;
        position: relative;

        @media screen and (min-width:500px) {
            height: 300px;

            @media screen and (min-width:1000px) {
                min-height: 300px;
                max-height: 300px;
                min-width: 400px;
                max-width: 400px;

                @media screen and (min-width:1200px) {
                    min-height: 400px;
                    max-height: 400px;
                    min-width: 600px;
                    max-width: 600px;
                }
            }
        }
    }

    .featured-img {
        height: 100%;
        width: 100%;
        object-fit: fill;
        border-radius: 10px;
        position: absolute;
        top: -20;
        left: 20;
    }

    .featured-description {
        margin-left: 5rem;
        font-size: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

        @media screen and (max-width:1000px) {
            margin-top: 5rem;
            margin-left: 0;

            @media screen and (max-width:500px) {
                margin-top: 2rem;
            }
        }
    }

    @media screen and (min-width: 1000px) {
        .featured-description p {
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 8;
        }
    }

    .featured-buttons {
        margin-bottom: 20px;
        display: flex;
        align-items: center;

        @media screen and (max-width:1000px) {
            margin-top: 2rem;
            justify-content: center;
        }
    }

    .featured-buttons a {
        color: #000505;
        opacity: 0.5;
        display: flex;
        align-items: center;
    }

    .featured-buttons a:hover {
        text-decoration: none;
        cursor: pointer;
    }

    .featured-buttons a img {
        height: 20px;
        opacity: 1;

        @media screen and (max-width:300px) {
            height: 15px;
        }
    }

    .mb-3 {
        margin-bottom: 2rem;
    }
</style>
<div class="center">

    <?php if (!empty($featured_projects)) { ?>
        <div class="featured">
            <h1>Featured Projects</h1>
            <div class="featured-div">
                <div class="featured-img-div">
                    <img src="<?php echo base_url($featured_projects[0]['project_image_url']); ?>" alt="featured product"
                        class="featured-img">
                </div>
                <div class="featured-description">
                    <p>
                        <?php echo $featured_projects[0]['description'] ?>
                    </p>
                    <div class="featured-buttons">
                        <a style="margin-right:3rem;"><img onclick="featuredprevious();"
                                src="<?php echo base_url('/assets/icons/arrow-left.svg') ?>"
                                alt="left arrow icon">&nbsp;&nbsp;Previous</a>
                        <!-- <a><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;Previous</a> -->
                        <a>Next&nbsp;&nbsp;<img onclick="featurednext();"
                                src="<?php echo base_url('/assets/icons/arrow-right.svg') ?>" alt="right arrow icon"></a>
                        <!-- <a>Next&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <form action="<?php echo base_url('/admin/submit_featured_project'); ?>" method="POST"
        enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" name="product-image" id="image-input" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="description" rows="5" cols="50" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" value="Add" class="btn btn-primary" name="submit">Add</button>
        </div>
    </form>
    <table id="images">
        <tr>
            <th class="sno">S.No.</th>
            <th>preview</th>
            <th>Description</th>
            <th class="action">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($featured_projects as $fp): ?>
            <tr id="<?php echo $fp['project_image_url']; ?>">
                <td>
                    <?php echo $i ?>
                </td>
                <td><img class="table-image" src="<?php echo base_url($fp['project_image_url']); ?>"></td>
                <td>
                    <?php echo $fp['description'] ?>
                </td>
                <td>
                    <div class="submit-button-delete">
                        <form action="<?php echo base_url('admin/delete_featured_project/'); ?>" method="POST">
                            <input type="hidden" name="imageurl" value="<?php echo $fp['project_image_url'] ?>">
                            <input type="submit" value="Delete" name="submit">
                        </form>
                    </div>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    let featuredIndex = 0;

    let featured_projects = [];
    <?php
    foreach ($featured_projects as $p) {
        ?>
        featured_projects.push({ product_description: "<?php echo $p['description']; ?>", product_image_url: '<?php echo $p['project_image_url']; ?>' });
        console.log(featured_projects)

    <?php } ?>

    function featurednext() {
        featuredIndex++;
        if (featuredIndex >= featured_projects.length) {
            featuredIndex = 0;
        }
        updateFeatured();
    }

    function featuredprevious() {
        featuredIndex--;
        if (featuredIndex < 0) {
            featuredIndex = featured_projects.length - 1;
        }
        updateFeatured();
    }

    function updateFeatured() {
        const featuredImage = document.querySelector(".featured-img");
        const featuredDescription = document.querySelector(".featured-description p");

        featuredImage.src = "<?php echo base_url(); ?>" + featured_projects[featuredIndex]['product_image_url'];
        featuredDescription.textContent = featured_projects[featuredIndex]['product_description'];
    }
</script>