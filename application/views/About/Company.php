
<style>
    .company-container {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:600px) {
            padding-top: 20px;
        }
    }

    .company-heading {
        margin: 8rem;

        @media screen and (max-width:400px) {
            margin: 5rem 2rem;
        }
    }

    .company-heading h1 {
        text-decoration:underline;
        font-size: 45px;
        margin-bottom: 5rem;
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

    .company-mission{
        margin-top: 25rem;
        margin-bottom: 20rem;
    }
    .mission-background{
        width: 100%;
        height:350px;
        display:flex;
        justify-content: center;
        background-color:white;
        border-radius:15px;
        position:relative;
        padding:0rem 10rem 0rem 10rem;
    }
    .mission-img-div{
        width:50%;
        height:110%;
        margin-top:-7rem;
        margin-right:-10rem;
        z-index:5;
    }
    .mission-img{
        height:100%;
        width:100%;        
    }
    .mission-div{
        width:50%;
        margin-top:7rem;
        margin-bottom: -7rem;
        padding-left:10rem;
        padding-right:5rem;
        background-color:#717070;
        color:white;
        border-radius:15px;
    }
</style>
<div class="company-container">
    <div class="company-heading">
        <h1>Discover Our Journey</h1>
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
        </p>
        <img src="<?php echo base_url('/assets/story_first.png') ?>" alt="certificate">
    </div>
    <div class="company-mission">
        <div class="mission-background">
            <div class="mission-img-div">
                <img src="<?php echo base_url('/assets/company-mission.png') ?>" alt="company mission" class="mission-img">
            </div>
            <div class="mission-div">
                <h1>Our Mission</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos fugit voluptate! Est quas dolor voluptate atque neque corporis nihil doloribus alias laborum error aspernatur odio consequuntur suscipit impedit fugit quibusdam sequi, quidem ex accusamus ut! Eius, sint! Saepe, ipsam porro? Labore magni maiores voluptatibus libero vitae magnam adipisci. Aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quos fugit voluptate! Est quas dolor voluptate atque neque corporis nihil doloribus alias laborum error aspernatur odio consequuntur suscipit impedit fugit quibusdam sequi, quidem ex accusamus ut! Eius, sint! Saepe, ipsam porro? Labore magni maiores voluptatibus libero vitae magnam adipisci. Aliquid.</p>
            </div>
        </div>
    </div>
</div>