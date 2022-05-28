<?php require "views/partials/header.view.php" ?>
<?php foreach($users as $user): ?>
    <div>
        <p>User Name is :: <?= $user->name; ?></p>
        <a href="/edit-name?id=<?= $user->id ?>">Edit</a>
        <form action="delete?id=<?= $user->id ?>" method="post" style="display: inline;">
            <button type="submit" onClick='return confirm("Are you sure to delete!")';>Delete</button>
        </form>
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