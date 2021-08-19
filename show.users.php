<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/navbar.php' ?>
<?php
$oglasi = getAllUsers($_GET['name']);
?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-t">
            <h3 class="display-4 text-center"><?php echo $_GET['name']; ?></h3>
        </div>
        <?php foreach ($oglasi as $oglas) : ?>
            <div class="col-4 mb-2 mt-2">
                <div class="card-header">
                    <a href="show.category.php?cat=<?php echo $oglas['category']; ?>" class="btn btn-secondary btn-sm">
                        <?php echo $oglas['category']; ?>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h5><?php echo $oglas['title']; ?></h5>
                    <a href="single.oglas.php?id=<?php echo $oglas['oglas_id']; ?>" class="btn btn-light">Pogledni oglas</a>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-warning btn-sm float-start"><?php echo $oglas['name']; ?></a>
                    <a href="" class="btn btn-danger btn-sm float-end"><?php echo $oglas['cena']; ?></a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?php require_once 'partials/footer.php' ?>