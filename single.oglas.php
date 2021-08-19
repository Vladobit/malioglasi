<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/navbar.php' ?>
<?php
$oglas = getOne($_GET['id']);
?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-t">
            <h3 class="display-4 text-center"><?php echo $oglas['title']; ?></h3>
        </div>
        <div class="row">
            <div class="col-6 offset-3 mb-2 mt-2">
                <div class="card-header">
                    <a href="show.category.php?cat=<?php echo $oglas['category']; ?>" class="btn btn-secondary btn-sm">
                        <?php echo $oglas['category']; ?>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h5><?php echo $oglas['opis']; ?></h5>
                </div>
                <div class="card-footer">
                    <a href="show.users.php?name=<?php echo $oglas['name']; ?>" class="btn btn-warning btn-sm float-start"><?php echo $oglas['name']; ?></a>
                    <a href="" class="btn btn-danger btn-sm float-end"><?php echo $oglas['cena']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php' ?>