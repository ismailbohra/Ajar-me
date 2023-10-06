<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 60px;
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
        font-size: 15px;
    }

    .certificates {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        place-items: center;
        padding: 5rem;
        grid-row-gap: 5rem;

        @media screen and (max-width:400px) {
            padding: 2rem;
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

    .certificate p {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        color:black;
        text-decoration:none;
    }
    .certificate:hover{
        text-decoration:none;
        color:black;
    }
</style>
<div class="center" id="center">
    <div class="heading">
        <h1>We are Certified</h1>
        <p>Our manufacturing plant at Vasai houses our Design and Development department, Tool Room, Press Shop, Hardening, Phosphating and Assembly departments and has been certified in ISO 9001: 2015 – Quality Management System, ISO 14001: 2015 – Environmental Management System, ISO 45001: 2018 – Occupational Health & Safety Management System. Our Window Fittings Plant in Palghar has been expanded to increase production capacity.</p>
    </div>
    <div class="certificates">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" target="_blank" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 01</p>
        </a>
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 02</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 03</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 04</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 05</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 06</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 07</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 08</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
        <a href="<?php echo base_url('/assets/certificate.png') ?>" class="certificate">
            <img src="<?php echo base_url('/assets/certificate.png') ?>" alt="certificate">
            <p>Certificate - 09</p>
        </a href="<?php echo base_url('/assets/certificate.png') ?>">
    </div>
</div>