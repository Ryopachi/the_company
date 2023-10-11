<?php 
     include '../classes/User.php';
    $user = new User;
   
    $id = $_GET['id'];

    $show_users = $user->show_user($id);
    
    include 'layouts/header.html';
     include './Main-nav.php'; 
    ?>


<div class="row justify-content-center">
          
            <div class="col-3">
                <div class="text-center">
                    <h2 class="fw-light mb-3">Edit User</h2>
                    <i class="fa-regular fa-user d-block text-center profile-icon fa-6x my-3"></i>
                </div>

                
                <!-- form -->
                <form action="../actions/edit-user.php  " method="post"  >
                <div class="input-group mb-2">
                        <input type="file" name="photo" class="form-control">
                        <button type="submit" class="btn btn-outline-secondary" name="btn_upload_photo">Upload</button>
                    </div>
                
                <div class="mb-3">
                        <label for="first-name" class="form-label small fw-bold">Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control" 
                        value="<?= $show_users['first_name'] ?>"max ="50" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="form-label small fw-bold">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control" 
                        value="<?= $show_users['last_name'] ?>"max ="50" required autofocus>
                    </div>  

                    <div class="mb-3">
                        <label for="username" class="form-label small fw-bold">User Name</label>
                        <input type="text" name="username" id="username" class="form-control" 
                        value="<?= $show_users['username'] ?>"max ="50" required autofocus>
                    </div>
                    <a href="dashboard.php" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" name="btn_edit" class="btn btn-secondary fw-bold">
                            <i class="fa-solid fa-check"></i>Save change
                        </button>
                    </div>
            </div>
        </div>