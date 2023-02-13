

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
                    User Update
                </h2>  
            </div>

            <div class="card-body">
             <a href="index.php" class="btn btn-sm btn-success">User List</a>
         
               <?php
               
               include 'database.php';
               $model = new Model();
               $id = $_REQUEST['id'];
               $row = $model->edit($id);

              
               if(isset($_POST['submit'])){
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
                    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){

                        $data['id'] = $id;
                        $data['name'] = $_POST['name'];
                        $data['email'] = $_POST['email'];
                        $data['phone'] = $_POST['phone'];

                        $update = $model->update($data);


                        if($update){
                            echo "<script>alert('User has been updated')</script>";
                            echo "<script>window.location.href = 'index.php';</script>"; 

                        }
                        else{
                            echo "<script>alert('Sorry Try again later')</script>";
                            echo "<script>window.location.href = 'create.php';</script>"; 
                        }
                    }
                    else{
                        echo "<script>alert('Empty Data')</script>";
                    }
                }
            } 
               
               ?>
              

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text"  class="form-control"  name ="name" value="<?php echo $row['name']?>"  id="exampleInputName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name ="email" value="<?php echo $row['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" value="<?php echo $row['phone']?>" id="exampleInputPhone">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

           </div>

        </div>




    </div>
</body>
</html>