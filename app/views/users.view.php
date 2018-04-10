<?php require 'partials/header.php' ?>

    <ul>
		<?php foreach ($users as $user) : ?>
            <li><?= $user->name ?></li>
		<?php endforeach; ?>
    </ul>

    <h1>Submit Your Name</h1>

    <form method="post" action="/names">
        <input name="name">
        <button type="submit">submit</button>
    </form>

<?php require 'partials/footer.php' ?>

