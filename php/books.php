<?php
session_start();

// $key = $_GET['key'];
$key = isset($_GET['key']) ? $_GET['key'] : '';


include "../connection/db_connection.php";

include "../connection/author.php";
$authors = get_all_author($conn);

include "../connection/book.php";
$books = search_books($conn,$key);

include "../connection/category.php";
$categories = get_all_categories($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/books.css">
    <link rel="stylesheet" href="../css/index.css">

    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- bootstrap 5 js bundle cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

</head>

<body>


    <!-- Header section -->

    <header>
        <div class="header1">
            <a href="" class="logo"><img src="../images/logo.png" alt="" width="100px" height="70px"></a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="books.php">Books</a>
                <a href="about.php">About</a>
                <a href="suggestion.php">Suggestion</a>


            </nav>

            <div class="icons">
                <!-- <div id="login-btn" class="fas fa-user"></div> -->
                <!-- <a href="#login">Login</a> -->
                <h3>Book Hunt</h3>
            </div>
        </div>
    </header>

    <!-- Header section -->
    <form action="books.php" method="get" style="width: 100%; max-width: 30rem">

        <div class="input-group my-5">
            <input type="text" class="form-control" name="key" placeholder="Search Book..." aria-label="Search Book..." aria-describedby="basic-addon2">

            <button class="input-group-text
		                 btn btn-primary" id="basic-addon2">
                <img src="../images/search.png" width="20">

            </button>
        </div>
    </form>

    <div class="my-5">
        Search result for <b><?= $key ?></b>
    </div>

    <div class="d-flex pt-3">
			<?php if ($books == 0){ ?>
				<div class="alert alert-warning 
        	            text-center p-5 pdf-list" 
        	     role="alert">
        	     <img src="../images/empty-search.png" 
        	          width="100">
        	     <br>
				  The key <b>"<?=$key?>"</b> didn't match to any record
		           in the database
			  </div>
			<?php }else{ ?>
			<div class="pdf-list d-flex flex-wrap">
				<?php foreach ($books as $book) { ?>
				<div class="card m-1">
					<img src="../uploads/cover/<?=$book['cover'] ?>"
					     class="card-img-top">
					<div class="card-body">
						<h5 class="card-title">
							<?=$book['title']?>
						</h5>
						<p class="card-text"><?=$book['description'] ?></p>
                        <a href="../uploads/files/The Hunger Games.pdf#toolbar=0" class="btn btn-success">Open</a>
					</div>
				</div>
				<?php } ?>
			</div>
		<?php } ?>
		</div>
	</div>
</body>

</html>