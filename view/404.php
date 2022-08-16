<?php include 'header.php';?>

<div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <header><h1 style="font-size:250px" >404</h1></header>
                <p class="fs-3 text-center text-white"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                  </p>
                <?php if(empty($_SESSION['username_login'])): ?>
                  <a href="index" class="btn btn-outline-warning">Go Home</a>
                <?php else :?>
                    <a href="home" class="btn btn-outline-warning">Go Home</a>
                <?php endif; ?>
            </div>
        </div>
<?php include 'footer.php';?>