<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <form method="POST" action="/cars/update">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $car['id'] ?>">

            <div>
                <div>
                    <label for="year">Year</label>
                    <div>
                        <input type="text" id="year" name="year" placeholder="Year" value="<?= $car['year'] ?? '' ?>">
                        <?php if (isset($errors['year'])) : ?><p><?= $errors['year'] ?></p><?php endif; ?>
                    </div>
                </div>

                <div>
                    <label for="make">Make</label>
                    <div>
                        <input type="text" id="make" name="make" placeholder="Model" value="<?= $car['make'] ?? '' ?>">
                        <?php if (isset($errors['make'])) : ?><p><?= $errors['make'] ?></p><?php endif; ?>
                    </div>
                </div>

                <div>
                    <label for="model">Model</label>

                    <div>
                        <input type="text" id="model" name="model" placeholder="Model" value="<?= $car['model'] ?? '' ?>">
                        <?php if (isset($errors['model'])) : ?><p><?= $errors['model'] ?></p><?php endif; ?>
                    </div>
                </div>

            </div>

            <div>
                <button type="submit" class="success">Update</button>
            </div>

        </form>
    </main>

<?php require base_path('views/partials/footer.php') ?>