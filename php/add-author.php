<?php

session_start();

//start session if admin is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_id'])) {


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/admin.css">

        <!-- bootstrap 5 cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- bootstrap 5 js bundle cdn -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header section -->

    <header>
            <div class="header1">
                <a href="admin.php" class="logo"><img src="../images/logo.png" alt="" width="100px" height="70px"></a>
                <nav class="navbar">
                    <a href="">Add book</a>
                    <a href="">Add category</a>
                    <a href="">Add author</a>
                    <a href="logout.php">Logout</a>

                </nav>

                <div class="icons">
                    <h3>Book Hunt</h3>
                </div>
            </div>
        </header>
        <form action="" method="" class="shadow p-4 rounded mt-5" style="width: 90%; max-width: 50rem; margin-left:30%" > 
 
      <h1 class="text-center pb-5 display-4 fs-3"> 
       Add New Author 
      </h1> 
       
    </div> 
   
      <div class="mb-3"> 
      <label class="form-label"> 
              Author Name 
             </label> 
      <input type="text"  
             class="form-control"  
             name="author_name"> 
  </div> 
 
     <button type="submit"  
             class="btn btn-primary"> 
             Add Author</button> 
     </form>


</body>
</html>
<?php
} else {
    header("Location: login.php");
    exit;
}
?>