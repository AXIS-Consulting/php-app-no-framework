<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div>
            <p>
                <a href="/notes">go back...</a>
            </p>

            <p><?= htmlspecialchars($note['body']) ?></p>

            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="delete">Delete</button>
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>