<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<form action="/users/store" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Add User</button>
</form>
<?= $this->endSection() ?>
