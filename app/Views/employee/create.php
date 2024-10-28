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
            <div class="col-md-12">
                <div class = "card">
                    <div class = "card- header">
                        <h4> Add Employee
                            <a href="<?= base_url('employee') ?>" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class= "card-body">
                    <form action="<?= base_url('employee-store') ?>" method="POST">
                        <div class="row">
                        </div>
                            <div class="form-group mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label><br>
                                <input type="text" name="first_name" placeholder = "Enter your firstname" required><br>
                                <label for="lastname">Last Name</label><br>
                                <input type="text" name="last_name" placeholder = "Enter your lastname" required><br>
                                <label for="email">Email</label><br>
                                <input type="text" name="email" placeholder = "Enter your email" required><br>
                                <label for="phone">Phone</label><br>
                                <input type="text" name="phone" placeholder = "Enter your number" required><br>
                                <label for="designation">Designation</label><br>
                                <input type="text" name="designation" placeholder = "Enter your designation" required><br><br>
                                <input type="submit" class="btn btn-primary px-4"><br>
                                
                                </div>
                                </form>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>