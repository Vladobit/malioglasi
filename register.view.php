<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/navbar.php' ?>
<div class="container">
    <div class="row ">
        <h1 class="text-center">Register</h1>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="post">
                <input type="name" name="name" class="form-control" pleaceholder="name"><br />
                <input type="email" name="email" class="form-control" pleaceholder="email"><br />
                <input type="password" name="password" class="form-control" pleaceholder="password"><br />
                <button type="submit" class="form-control btn btn-info">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php' ?>