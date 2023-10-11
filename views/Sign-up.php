<?php include "layouts/header.html" ?>

<body class="bg-light">
    <div style="height:100vh">
        <div class="row m-0 h-100">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header border-0 bg-white py-3">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form action="../actions/sign-up.php" method="POST">
                        <div class="mb-3">
                            <label for="first_name" class="form-label fw-bold">Firstname</label>
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label fw-bold">Lastname</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="form-text">Password should be a minumum of 8 characters</div>
                        </div>

                        <button type="submit" class="btn btn-success w-100 fw-bold">Register</button>
                        <p class="text-center small">
                            Already have an account? <a href="./Sign-in.php">Login here</a>
                        </p>


                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php include "layouts/footer.html" ?>