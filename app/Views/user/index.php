<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a href="/users/create">Add User</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="/users/edit/<?= $user['id'] ?>">Edit</a>
                <a href="/users/delete/<?= $user['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
