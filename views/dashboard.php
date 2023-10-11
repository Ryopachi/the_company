<?php include '../classes/User.php';
    $user = new User;
    $all_users = $user->all_users(); // contains all the users from the database
    include 'layouts/header.html';
    include './Main-nav.php'; 
?>


    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <th></th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>USERNAME</th>
                <th colspan="2"></th>
            </thead>
            <tbody>
                <?php foreach($all_users as $user): ?>
                    <tr>
                        <td>
                            <i class="fa-solid fa-circle-user d-block mx-auto h3"></i>
                        </td>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td>
                            <a href="Edit-user.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="Delete-user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


<?php include 'layouts/footer.html' ?>






