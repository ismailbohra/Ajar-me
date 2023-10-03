<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>RMS</title>

</head>
<style>
	body{
		width: 100%;
	    height: 100%;
	    background: #007bff;
	}
    main{
        width:100%;
        height:100vh;
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
    }

</style>

<body>


  <main id="main">  		    
    <?php foreach($data as $d){ ?>
        <h6><?php echo $d['username']." -> ".$d['password']; ?></h6>
    <?php } ?>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
