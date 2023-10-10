<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Admin</title>

<style>
    .admin-sidebar {
        position: fixed;
        max-width: 300px;
        top: 0;
        left: 0;
        border-right: 1px solid black;
        z-index: 10;
    }

    .admin-sidebar-logo img {}
</style>

<div class="admin-header">
    <div class="admin-sidebar">
        <div class="admin-sidebar-logo">
            <img src="<?php echo base_url('/assets/ajar-logo.png'); ?>" alt="brand logo">
        </div>
        <div class="admin-sidebar-menu">
            <a href="#"><i class="fa fa-image"></i> Slider</a>
            <a href="#"><i class="fa fa-box-open"></i> Products</a>
            <a href="#"><i class="fa fa-envelope"></i> Enquiries</a>
        </div>
    </div>
</div>