<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <form method="POST" action="/notes">

            <div>
                <div>
                    <label for="body">Body</label>
                    <div>
                        <textarea id="body" name="body" rows="3" placeholder="Here's an idea for a note..."><?= $_REQUEST['body'] ?? '' ?></textarea>
                        <?php if (isset($errors['body'])) : ?><p><?= $errors['body'] ?></p><?php endif; ?>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="success">Save</button>
            </div>
            
        </form>
    </main>

<?php require base_path('views/partials/footer.php') ?>