<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- memanggil data dari Dashbord-->
    <title><?php echo $title?></title>

    <!-- Custom fonts for this template untuk memanggil assets-->
    <link href="<?php echo base_url()  ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()  ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

    <div class="container d-flex justify-content-center mt-5">
        <div class="card" style="width: 400px">
            <div class="card-header">LOGIN FORM</div>
            <div class="card-body">
                <form action="<?php echo base_url('login/submitLogin') ?>" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>