<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;
    }

    .heading {
        margin: 5rem;

        @media screen and (max-width:400px) {
            margin: 5rem 2rem;
        }
    }

    .heading h1 {
        font-size: 45px;
    }

    .heading p {
        font-size: 20px;
        text-align: justify;
        @media screen and (max-width:400px) {
            font-size: 15px;
        }
    }

    .certificates {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        place-items: center;
        padding: 5rem;
        grid-row-gap: 5rem;

        @media screen and (max-width:400px) {
            padding: 1rem;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
        }
    }

    .certificate {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 230px;
        background-color: white;
        border-radius: 7px;
    }

    .certificate img {
        height: 300px;
    }

    .certificate button {
        background-color: #717070;
        margin-bottom: 15px;
        font-size: 15px;
        padding: 3px;
        color: white;
        padding-inline: 17px;
        border-radius: 6px;
    }
    
</style>
<div class="center">
    <div class="heading">
        <h1>Downloads</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nobis distinctio earum a facere quam
            excepturi maxime odio molestiae sint maiores, magnam quaerat voluptas accusamus recusandae laudantium
            expedita, numquam ex rem. Pariatur animi itaque vitae quos aspernatur exercitationem cupiditate, atque
            quidem ad perspiciatis dolorem consequuntur ipsum modi culpa ducimus veritatis dignissimos quas? Dolore,
            labore tempore.</p>
    </div>
    <div class="certificates">
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <button id="download">Download</button>
        </div>
    </div>
</div>