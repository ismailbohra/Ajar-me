<style>
    .footer{
        height:300px;
        width:100%;
        background-color:white;    
    }
    .upper{
        height:260px;
        display:flex;        
        justify-content: center;
        align-items: center;
        padding:2.5rem;
    }
    .first {
        height:100%;
        width:250px;
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        border-right:2px solid lightgrey;
    }
    #first-logo{
        height:40%;
        margin-bottom:3rem;
    }

    .first-input i{
        position:absolute;                
        padding:5px;   
        margin-left:-40px;     
        font-size:22px;
        cursor:pointer;
    }
    .newsletter-input{
        border: 2px solid #717070;
        border-radius:7px; 
        padding:0.5rem 1rem;
        margin-right:5px;
    }
    
    .second{    
        height:100%;
        width:250px;        
        border-right:2px solid lightgrey;
    }
    .third{
        height:100%;
        width:250px;        
        border-right:2px solid lightgrey;
    }
    .fourth{
        height:100%;                   
    }
    ul{
        list-style-type: none;
        padding-left:1.5rem;
    }
    li{
        font-size:15px;
        margin:0.5rem;
        font-weight:bold;
        cursor:pointer;
    }
    li:first-child{
        border-bottom: 2px solid red;
        width:65px;
        padding-bottom:5px;
        margin-bottom:1.5rem;
        white-space: nowrap;
    }
    .icons{
        margin-top:1rem;
    }
    .icons img{
        height:25px;
    }
    .lower{        
        margin:0;
        display:flex;
        align-items: center;    
        height:40px;
        background-color:#717070;
        font-size:16px;
        padding-left:2rem;
        color:white;
    }
</style>
<div class="footer">
    <div class="upper">
        <div class="first">
                <img src="<?php echo base_url('assets/logo.svg') ?>" alt="brand logo" id='first-logo'>
            <div class="first-newsletter">
                <p class="newsletter-heading">NEWSLETTER</p>
                <div class="first-input">
                    <input type="text" name="newsletter" class="newsletter-input" placeholder="EMAIL">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="second">
            <ul>
                <li>INFORMATION</li>
                <li>HOME</li>
                <li>ABOUT US</li>
                <li>SHOWROOM</li>
                <li>DOWNLOADS</li>
            </ul>
        </div>
        <div class="third">
        <ul>
                <li>PRODUCTS</li>
                <li>HANDLES</li>
                <li>HINGES</li>
                <li>LOCKING DEVICES</li>
                <li>DOOR CLOSER</li>
                <li>ACCESSORIES</li>
            </ul>
        </div>
        <div class="fourth">
        <ul>
                <li>REACH OUT</li>
                <li>LOCATION</li>
                <li>CONTACT US</li>
                <li><div class="icons">
                <img src="<?php echo base_url('/assets/icons/facebook.svg') ?>" alt="facebook">
                <img src="<?php echo base_url('/assets/icons/instagram.svg') ?>" alt="instagram">
                <img src="<?php echo base_url('/assets/icons/youtube.svg') ?>" alt="youtube">
                <img src="<?php echo base_url('/assets/icons/tiktok.svg') ?>" alt="tiktok">
                </div></li>                
            </ul>
        </div>
    </div>
    <div class="lower">&copy; All Rights Reserved</div>
</div>