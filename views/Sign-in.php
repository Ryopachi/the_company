<?php include 'layouts/header.html' ?>

<body class="bg-light">
    <div style="height:100vh;">
        <div class="row m-0 h-100">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header border-0 bg-white py-3">
                    <h3 class="text-center">LOGIN</h3>
                </div>
                <div class="card-body">
                    <form action="../actions/sign-in.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">Login</button>
                        <p class="text-center small">
                         Dont have an account? <a href="Sign-up.php">Sign up here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include 'layouts/footer.html' ?> 