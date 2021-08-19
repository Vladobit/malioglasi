<?php require_once 'partials/head.php' ?>
<?php
if (isset($_SESSION['id'])) {
    $oglasi = get_user_all($_SESSION['id']);
} else {
    header('Location:index.php');
}
?>
<?php require_once 'partials/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="col-6 offset-3 mt-3 mb-3">
                    <a href="add.oglas.php" class="btn btn-info form-control">Nov oglas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="dispay-4 text-center">Moi Oglasi</h1>
            <div class="row">
                <?php foreach ($oglasi as $oglas) : ?>
                    <div class="col-4 mb-2 mt-2">
                        <div class="card-header">
                            <a href="" class="btn btn-secondary btn-sm">
                                <?php echo $oglas['category']; ?>
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h5><?php echo $oglas['title']; ?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-warning btn-sm float-start"><?php echo $oglas['name']; ?></a>
                            <a href="" class="btn btn-danger btn-sm float-end"><?php echo $oglas['cena']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php' ?>