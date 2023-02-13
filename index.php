

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card" >

            <div class="card-header">
                <h2>
                    User Registration List
                </h2>  
            </div>

            <div class="card-body">

               <a href="create.php" class="btn btn-sm btn-success">Add User </a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       

                        <?php
                
                            include 'database.php';
                            $model = new Model();
                            $rows = $model->getAllData();

                            $i = 1;
                            if(!empty($rows)){
                                foreach($rows as $row){

                        ?>
                        
                        <tr>

                          <th scope="row"><?php echo $i++;?> </th>
                          <td><?php echo $row['name']; ?> </td>
                          <td><?php echo $row['email']; ?> </td>
                          <td><?php echo $row['phone']; ?> </td>
                          <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this info?')" class="btn btn-sm btn-danger">Delete</a> 
                          </td>   
                                             
                        </tr>

                        <?php

                            }
                        }

                        ?>

                        
                    </tbody>
                </table>

           </div>

        </div>




    </div>
</body>
</html>