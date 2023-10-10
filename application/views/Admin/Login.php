<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Kumbh Sans', sans-serif;
        }

        .login-page {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-logo img {
            width: 250px;
        }

        .login-div {
            margin: 2rem 0rem;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .input-field input {
            padding: 5px 10px;
            margin: 5px 0px;
            border: 1px solid rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        .submit-button input {
            margin-top: 1rem;
            width: 100%;
            color: white;
            background-color: #0d6efd;
            padding: 8px 0px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="login-page">
        <form action="<?php echo base_url('/admin/login'); ?>" method="POST">
            <div class="login-container">
                <div class="login-logo">
                    <img src="<?php echo base_url("/assets/ajar-logo.png") ?>" alt="brand logo">
                </div>
                <div class="login-div">
                    <div class="input-field">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="enter username ..." required>
                    </div>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="enter password ..." required>
                    </div>
                    <div class="submit-button">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>