<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $user = $_POST['user'];
   $book_name = $_POST['book'];
   $number_of_chapters = $_POST['page'];
   $book_category = $_POST['category'];

   $sql = "INSERT INTO crud (user, book, page, category) VALUES ('$user', '$book_name', '$number_of_chapters', '$book_category')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Admin</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Admin
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Book</h3>
         <p class="text-muted">Complete the form below to add a new Book</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Number Of Page:</label>
                  <input type="text" class="form-control" name="page" placeholder="Page">
               </div>

               <div class="col">
                  <label class="form-label">Book name:</label>
                  <input type="text" class="form-control" name="book" placeholder="Book">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Author:</label>
               <input type="text" class="form-control" name="user" placeholder="name">
            </div>

            <div class="mb-3">
               <label class="form-label">Choose Cover Pic :</label>
               <input type="file" class="form-control" name="image" id="cover">
            </div>

            <div class="form-group mb-3">
               <label>Book Category:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="category" id="biography" value="biography">
               <label for="biography" class="form-input-label">Biography</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="category" id="lesson" value="lesson">
               <label for="lesson" class="form-input-label">Lesson</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="category" id="fiction" value="fiction">
               <label for="female" class="form-input-label">Fiction</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>