<?php
include 'includes/checkUser.php';
include 'head.php';
?>
<body>
    <div class="top-bar">
        <div class="container">
            <div class="d-flex aling-items-center justify-content-between">
                <div class="username text-center">
                    <h3>Viewing stock</h3>
                    <p><?php echo $_SESSION['name']; ?></p>
                </div>

                <a class="logout" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/" class="back-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><h3>Product ID<h3></th>
                            <th><h3>Product SKU<h3></th>
                            <th><h3>Product Name<h3></th>
                            <th><h3>Product Price<h3></th>
                        </tr>
                    </thead>
                    <tbody id="stockData">
					
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'end-head.php'; ?>