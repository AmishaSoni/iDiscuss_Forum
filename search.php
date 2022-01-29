<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
        .container
        {
            min-height:82vh;
        }
        </style>
      
  </head>
  <body>

  <?php include 'partials/dbconnect.php'; ?>
    <?php include 'partials/header.php'; ?>
    <div class="container">
        <h1 class="text-center my-5">Search result for <em>"<?php echo $_GET['search']?>"</em></h1>
        <hr>

        <?php
        $noresult=true;
        $query=$_GET['search'];
        $sql="SELECT * FROM `threads` where MATCH(thread_title,thread_desc) against ('$query')";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
            $title=$row['thread_title'];
            $desc=$row['thread_desc'];
            $thread_id=$row['thread_id'];
            $url="thread.php?threadid=".$thread_id;
            $noresult=false;

            echo '<div class="searchresult">
                <h3><ul style="list-style-type:square;"><li><a href="'.$url.'" class="text-dark">'.$title.'</a></li></ul></h3>
                <p>'.$desc.'</p>

            </div>';
        }
        if($noresult)
        {
            echo '<div class="jumbotron ">
            <div class="container">
            <h1 class="display-4">No Results Found !!</h1>
            <p class="lead">
            <h3>Suggestions:</h3>
            <ul>
            <li>Make sure that all words are spelled correctly.</li>
            <li>Try different keywords.</li>
            <li>Try more general keywords.</li>
            </ul>
            </p>
            </div>
            </div>';
        }
        ?>
      

 </div>















    <?php include 'partials/footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>