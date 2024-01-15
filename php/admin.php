<?php

session_start();

//start session if admin is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_id'])) {

    include "../connection/db_connection.php";

    include "../connection/author.php";
    $authors = get_all_author($conn);

    include "../connection/book.php";
    $books = get_all_books($conn);

    include "../connection/category.php";
    $categories = get_all_categories($conn);


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
                    <a href="index.php">Add book</a>
                    <a href="#books">Add category</a>
                    <a href="add-author.php">Add author</a>
                    <a href="logout.php">Logout</a>

                </nav>

                <div class="icons">
                    <h3>Book Hunt</h3>
                </div>
            </div>
        </header>

        <!-- Header section -->
        <?php
        if ($books == 0) {
        ?>
            empty
        <?php
        } else {
        ?>
            <h4 class="mt-4">All Books</h4>
            <table class="table table-bordered shadow">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i=0;
                    foreach ($books as $book) {
                        $i++;
                    ?>
                        <tr>
                            <td><?=$i?></td>
                            <td>
                                <img width="100" src="../uploads/cover/<?= $book['cover'] ?>"> <br>
                                <a href="../uploads/files/<?= $book['file'] ?>" class="link-dark d-block text-center" style="text-decoration: underline !important;">
                                    <?= $book['title'] ?> 
                                </a>
                            </td>
                            <td>

                                <?php if ($authors == 0) {
                                    echo "undefined";
                                    # code...
                                } else {
                                    foreach ($authors as $author) {
                                        if ($author['id'] == $book['author_id']) {
                                            echo $author['name'];
                                        }
                                    }
                                }
                                ?>

                            </td>
                            <td><?= $book['description'] ?></td>
                            <td>

                                <?php if ($categories == 0) {
                                    echo "undefined";
                                    # code...
                                } else {
                                    foreach ($categories as $category) {
                                        if ($category['id'] == $book['category_id']) {
                                            echo $category['name'];
                                        }
                                    }
                                }
                                ?>

                            </td>
                            <td>
                                <a href="" class="btn btn-warning">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>

            </table>
        <?php } ?>


        <?php
        if ($categories == 0) {
        ?>
            empty
        <?php
        } else {
        ?>
            <h4 class="mt-4">All Categories</h4>
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $j=0;
                    foreach ($categories as $category) {
                        $j++
                    ?>
                        <tr>
                            <td><?=$j?></td>
                            <td><?= $category['name'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>


        <?php
        if ($authors == 0) {
        ?>
            empty
        <?php
        } else {
        ?>
            <h4 class="mt-4">All Authors</h4>
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $k=0;
                    foreach ($authors as $author) {
                        $k++
                    ?>
                        <tr>
                            <td><?=$k?></td>
                            <td><?= $author['name'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </body>

    </html>

<?php
} else {
    header("Location: login.php");
    exit;
}
?>