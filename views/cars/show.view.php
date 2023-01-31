<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div>
            <p>
                <a href="/cars">go back...</a>
            </p>

            <p>
                Year: <?= htmlspecialchars($car['year']) ?>
                <br>
                Make: <?= htmlspecialchars($car['make']) ?>
                <br>
                Model: <?= htmlspecialchars($car['model']) ?>
            </p>

            <div class="side-by-side">

                <div class="left-side">
                    <a href="/cars/edit?id=<?= $car['id'] ?>" class="btn success">Edit Car</a>
                </div>

                <div class="right-side">
                    <form method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $car['id'] ?>">
                        <button class="delete">Delete</button>
                    </form>
                </div>

            </div>

        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>