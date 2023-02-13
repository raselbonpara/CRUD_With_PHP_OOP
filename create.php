
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card" >

            <div class="card-header">
                <h2>
                    User Registration
                </h2>  
            </div>

            <div class="card-body">
             <a href="index.php" class="btn btn-sm btn-success">User List</a>
         
               <?php
               
               include 'database.php';
               $model = new Model();
               $insert = $model->insert();
               
               ?>
              

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text"  class="form-control" name ="name" id="exampleInputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" id="exampleInputPhone">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

           </div>

        </div>




    </div>
</body>
</html>