<?php
include 'includes/checkUser.php';
include 'head.php';
?>

<body id="home">
    <div class="top-bar">
        <div class="container">
            <div class="d-flex aling-items-center justify-content-between">
                <div class="username text-center">
                    <h3>Welcome</h3>
                    <p><?php echo $_SESSION['name']; ?></p>
                </div>

                <a class="logout" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-4">
                <h2>Choose the task you would like to do below</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 text-center items">
                <a class="item sales" href="sales.php">
                    <span><i class="fa fa-money" aria-hidden="true"></i></span>
                    <em>Sales</em>
                </a>
            </div>
            <div class="col-12 col-md-6 text-center items">
                <a class="item review" href="view.php">
                    <span><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                    <em>View Stock</em>
                </a>
            </div>
            <div class="col-12 col-md-6 text-center items">
                <a class="item recieve" href="recieve.php">
                    <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                    <em>Recieve Stock</em>
                </a>
            </div>
            <div class="col-12 col-md-6 text-center items">
                <a class="item log" href="saleHistory.php">
                    <span><i class="fa fa-book" aria-hidden="true"></i></span>
                    <em>View Sales Log</em>
                </a>
            </div>
        </div>
    </div>
    <?php include 'end-head.php'; ?>