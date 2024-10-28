
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class= "container">
        <div class= "row">
            <div class="col-md-12 mt-5">
            <?php 
                if(session()->getFlashdata('status')){
                    echo "<h4>".session()->getFlashdata('status')."</h4>";
                }
                ?>
                <div class = "card">
                    <div class = "card- header">
                        <h4>Employee Data
                            <a href="<?= base_url('codeigniter_pjnew/public/employee-add') ?>" class="btn btn-primary float-end">Add Employee</a>
                        </h4>
                    </div>
                    <div class= "card-body">
                        <table class = "table table-borderd">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($employee as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['designation'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <a href="" class="btn-success btn-sm">Edit</a>
                                            <a href="" class="btn-danger btn-sm">Delete</a>
                                           
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>