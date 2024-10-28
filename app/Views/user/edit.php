<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<form action="/users/update" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <input type="text" name="name" value="<?= $user['name'] ?>" required>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <button type="submit">Update User</button>
</form>
<?= $this->endSection() ?>
