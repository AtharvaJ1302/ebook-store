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
        <form action="" 
           method="" 
           enctype="multipart/form-data"  
           class="shadow p-4 rounded mt-5" 
           style="width: 90%; max-width: 50rem;"> 
 
      <h1 class="text-center pb-5 display-4 fs-3"> 
       Add New Book 
      </h1> 
       
          <div class="alert alert-danger" role="alert"> 
     
    </div> 
   
          <div class="alert alert-success" role="alert"> 
    
    </div> 
      <div class="mb-3"> 
      <label class="form-label"> 
             Book Title 
             </label> 
      <input type="text"  
             class="form-control" 
             value=""  
             name="book_title"> 
  </div> 
 
  <div class="mb-3"> 
      <label class="form-label"> 
             Book Description 
             </label> 
      <input type="text"  
             class="form-control"  
             value="" 
             name="book_description"> 
  </div> 
 
  <div class="mb-3"> 
      <label class="form-label"> 
             Book Author 
             </label> 
      <select name="book_author" 
              class="form-control"> 
           <option value="0"> 
            Select author 
           </option> 
        
            <option  
              selected 
              value=""> 
             
               </option> 
               
      <option  
       value=""> 
      </option> 
        
      </select> 
  </div> 
 
  <div class="mb-3"> 
      <label class="form-label"> 
             Book Category 
             </label> 
      <select name="book_category" 
              class="form-control"> 
           <option value="0"> 
            Select category 
           </option> 
           
            <option  
              selected 
              value=""> 
               </option> 
      <option  
       value=""> 
        
      </option> 
  
      </select> 
  </div> 
 
  <div class="mb-3"> 
      <label class="form-label"> 
             Book Cover 
             </label> 
      <input type="file"  
             class="form-control"  
             name="book_cover"> 
  </div> 
 
  <div class="mb-3"> 
      <label class="form-label"> 
             File 
             </label> 
      <input type="file"  
             class="form-control"  
             name="file"> 
  </div> 
 
     <button type="submit"  
             class="btn btn-primary"> 
             Add Book</button> 
     </form>
    
</body>
</html>