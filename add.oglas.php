<?php require_once 'partials/head.php' ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location:index.php');
}
?>
<?php require_once 'partials/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h4 class="text-center">Nov Oglas</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="add.new.php" method="post">
                <input type="text" name="title" placeholder="Title" class="form-control"><br />
                <input type="text" name="opis" placeholder="Opis" class="form-control"><br />
                <input type="number" name="cena" placeholder="Cena" class="form-control"><br />
                <select name="category" class="form-control">
                    <option value="Monitori">Monitori</option>
                    <option value="Bela tehnika">Bela Tehnika</option>
                    <option value="Sport">Sport</option>
                    <option value="Ribolov">Ribolov</option>
                </select><br />
                <button type="submit" class="btn btn-primary form-control">Vnesi nov</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/footer.php' ?>