<?php require "views/partials/header.view.php" ?>
<h1>Submit Your Name</h1>
<form action="/update" method="PUT">
    <input type="text" name="name" value="<?= $data['name'] ?>">
    <button type="submit">
        Edit
    </button>
</form>
<?php  require "views/partials/footer.view.php" ?>