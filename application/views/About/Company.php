
<style>
    .container {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:600px) {
            padding-top: 20px;
        }
    }

    .heading {
        margin: 8rem;

        @media screen and (max-width:400px) {
            margin: 5rem 2rem;
        }
    }

    .heading h1 {
        font-size: 45px;

        @media screen and (max-width:800px) {
            font-size: 35px;
        }
    }


    .story_block {
        display: flex;
        margin-inline: 8rem;
        gap: 6rem;
        flex-direction: row;

        @media screen and (max-width:800px) {
            flex-direction: column-reverse;
            gap: 5rem;
        }
    }

    .story_block p {
        width: 40%;

        @media screen and (max-width:800px) {
            width: 100%;
        }
    }

    .story_text {
        font-size: 20px;
        text-align: justify;

        @media screen and (max-width:500px) {
            font-size: 15px;
        }
    }

    .story_block img {
        width: 60%;
        box-shadow: 14px 14px 0 -4px lightgrey, 14px 14px 0 0 #717070;
        border-radius: 15px;
        aspect-ratio: 16/9;

        @media screen and (max-width:800px) {
            width: 100%;
        }
    }

    .banner {
        display: flex;
        justify-content: center;
    }

    .boxcontainer {
        width: 100%;
    }

    .box1,
    .box2 {
        width: 50%;
    }

    .box1 {
        background-color: red;
        z-index: 10;
    }

    .box2 {
        z-index: 1;
        background-color: blue;
        top: 25%;
        left: 25%;
    }

    .founder {
        display: flex;
        width: 100%;
        margin-top: 5rem;
        justify-content: space-around;
        background: linear-gradient(to right, lightgrey 50%, white 50%);
        padding-bottom: 15px;
    }

    .founder img {
        margin-top: -5rem;
        box-shadow: 14px 14px 0 -4px white, 14px 14px 0 0 #717070;
        border-radius: 15px;
    }
    .image{
        
    }
    .image img{
        z-index: 10;
    }
    .border{
        z-index: 1;
        margin: 10;
        height: 300;
        aspect-ratio: 16/9;
    }
</style>
<div class="container">
    <div class="heading">
        <h1>Our Story</h1>
        <p class="story_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nobis distinctio
            earum a facere quam
            excepturi maxime odio molestiae sint maiores, magnam quaerat voluptas accusamus recusandae laudantium
            expedita, numquam ex rem. Pariatur animi itaque vitae quos aspernatur exercitationem cupiditate, atque
            quidem ad perspiciatis dolorem consequuntur ipsum modi culpa ducimus veritatis dignissimos quas? Dolore,
            labore tempore.</p>
    </div>
    <div class="story_block">
        <p class="story_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus
            molestie mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus molestie mattis.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus
            molestie mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus molestie mattis.
            molestie mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus molestie mattis.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus
            molestie mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet aliquam lorem.
            Suspendisse finibus molestie mattis.
        </p>
        <img src="<?php echo base_url('/assets/story_first.png') ?>" alt="certificate">
    </div>
    <div class="heading">
        <h1>Meet Our Founder</h1>
    </div>
    <div class="founder">
        <div></div>
        <div class="image">
            <div class="border"></div>
            <img height="300px" src="<?php echo base_url('/assets/story_first.png') ?>" alt="certificate">
        </div>
        <div></div>
    </div>
</div>