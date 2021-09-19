<!-- If user is registered and there is no error, user can access myFitness.php -->
<?php require_once('includes/functions.php'); ?>
<?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);

        if(count($errors) === 0) {
            header('Location: myFitness.php');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
<title>Log In</title>
<head>
<?php require_once('includes/header.php'); ?> 
<?php require_once('includes/body.php'); ?>
</head>

 <style>


        /* Creating Banner*/
        .banner {
            width: 1885px;
            height: 150px;
            color: white;
            line-height: 150px;
            font-size: 70px;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: black;
            border-width: 1px;
        }

        p {
            text-align: top;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 70px;
            color: white;
        }

        .login {
            width: 1885px;
            height: 100%;
            background-color: rgba(44, 44, 44, 0.8);
            
        }
  
        .row{
            color: white;
            line-height: 70px;
            width: 900px;
            height: 100%;
            font-size: 25px;
            text-align: left;
            
            
        }

        .col-md-6{
            margin-top:200px;
            margin-left:700px;
            height: 700px;
        }

        .form-control{
            width: 500px;
            height: 50px;
        }

        button{
            height:70px;
            width: 200px;
            font-size: 100px;
        }

    </style>
</head>

<body>
    
<?php require_once('includes/navbar.php'); ?>
<div class= "banner">
        <p>Log In</p>
    </div><br>

    <!-- Creating Log In form -->
<div class="login">
    <div class="row">
        <div class="col-md-6">
            <form method="post">
                <div class="form-group">
                    <!-- Validating Email -->
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        <?php displayValue($_POST, 'email'); ?> />
                         <?php displayError($errors, 'email'); ?>
                </div>

                <div class="form-group">
                    <!-- Validating Password -->
                    <label for="phone">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                    <?php displayError($errors, 'password'); ?>
                </div>

                <button type="submit" class="btn btn-primary" name="login" value="login" style = "font-size: 25px; ">Login</button>

            </form>
        </div>
    </div>

    <?php require_once('includes/footer.php'); ?>
</div>

</body>

</html>