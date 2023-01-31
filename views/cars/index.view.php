<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div>
            <ul>
                <?php foreach ($cars as $car) : ?>
                    <li>
                        <a href="/car?id=<?= $car['id'] ?>">
                            <?= htmlspecialchars($car['make']) . " " . htmlspecialchars($car['model']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <p>
                <a href="/cars/create" class="btn success">Add Car</a>
            </p>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>