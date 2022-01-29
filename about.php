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
  <div class="container text-center my-3">
            <h1 class="my-5">Welcome to iDiscuss Coding Forum</h1>
            <hr>
            <div class="jumbotron">
            <h1 class="display-4">ABOUT US</h1>
            <p class="lead">Discussion forums are perhaps the earliest form of social media platform. 
                Early adopters of Internet technology may recall news groups or special interest groups (SIGs) 
                that were hosted on the early websites and systems connected to the Internet. 
                These communities were rooted in technical topics but eventually expanded to cover
                 just about any category that could attract an audience. 
                These platforms matured and are now hosted on consumer-oriented social networking sites.</p>
            <hr class="my-4">
            <p>No Spam / Advertising / Self-promote in the forums. 
            Do not post copyright-infringing material. 
            Do not post “offensive” posts, links or images.
            Do not cross post questions. 
            Do not PM users asking for help.
            Remain respectful of other members at all times.
</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Let's Begin..</a>
            </div>
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