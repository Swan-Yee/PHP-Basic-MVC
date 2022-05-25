<?php require "views/partials/header.view.php" ?>
<?php foreach($users as $user): ?>
    <div>
        <p>User Name is :: <?= $user->name; ?></p>
        <a href="/edit-name?id=<?= $user->id ?>">Edit</a>
        <br><hr>
    </div>
<?php endforeach; ?>
<h1>Submit Your Name</h1>
<form action="/name" method="POST">
    <input type="text" name="name">
    <button type="submit">
        Submit
    </button>
</form>
<?php  require "views/partials/footer.view.php" ?>