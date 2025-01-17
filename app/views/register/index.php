
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL ?>/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container mt-2">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                            <div class="col-6">
                                <div class="p-3 mb-0">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Register</h1>
                                    </div>
                                    <form action="<?= BASEURL; ?>/register/tambah" method="post" class="user">
                                        <div class="row">
                                            <div class="col">
                                        <div class="form-group">
                                            <label> Fullname </label>
                                                <input type="text" class="form-control form-control-user"
                                                    id="fullname" name="fullname"
                                                    placeholder=" Full Name" requierd>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                        <label> Username </label>
                                            <input type="text" class="form-control form-control-user" id="unamae" name ="uname"
                                                placeholder="Username" rquierd>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                        <div class="form-group">
                                        <label> Email </label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder=" Email Address" requierd>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                        <label> Born Date </label>
                                            <input type="date" class="form-control form-control-user"
                                                id="born" name="born"
                                                placeholder="Tanggal Lahir" requierd>
                                        </div>
                                        </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                        <div class="form-group">
                                        <label> Phone </label>
                                            <input type="number" class="form-control form-control-user"
                                                id="phone" name="phone"
                                                placeholder=" Phone" requierd>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                        <label> Password </label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" requierd>
                                        </div>
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block ">Register</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                       <p>Already have an account?</p>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= BASEURL; ?>/login/index">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>