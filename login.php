<?php
include 'includes/login.config.php';
include 'head.php';
?>

<body id="login">

    <div class="container mr-md-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 ml-auto">
            <div class="card">
                    <div class="card-header">
                        <h1>Welcome</h1>
                        <p>Please login</p>
                    </div>
                    <div class="card-boby">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input class="form-control" type="text" name="username" required="required">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" type="password" name="password" required="required">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'end-head.php'; ?>
