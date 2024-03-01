<?php
 error_reporting(0);
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Host Programming</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="style/blog.css" rel="stylesheet">

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </head>

  <body>


    <div class="container">


      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"> <div id="google_translate_element"></div></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Host Programming</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">

           <form action="search.php" method="post">
         <div class="input-group sm-3">
          <input type="text" name="search" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-success" name="submit" type="submit">Go</button> 
          </div>
        </div>

      </form>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="news/index.html">Home</a>
          <a class="p-2 text-muted" href="#">World</a>
         
          <a class="p-2 text-muted" href="#">Technology</a>
          
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
         
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="contect.php">Contect Us</a>
          
        </nav>
      </div>

     <div class="card" style="width:100%; height:350px;" >
      <img class="card-img-top" src="https://emucohrid.edu.mk/wp-content/uploads/2024/02/Retki1-840x430.jpg" alt="Card image" height="350" >
      <div class="card-img-overlay">
      <h4 class="card-title" style=" color:rgb(246,174,45);">ОЕМУЦ</h4>
        <p class="card-text" style=" color:rgb(98,186,187);">„Св. Наум Охридски"</p>
       
      </div>
    </div>

     

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          </h3>


          <?php

       include('db/connection.php');

           $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*5)-5;

           }
           
        $query=mysqli_query($conn,"select * from news limit $page1,5 ");
         while($row=mysqli_fetch_array($query)){
          ?>
          <div class="blog-post">
            <h4 class="blog"> <a href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $row['title']; ?> </a></h4>
            <p class="blog-post-meta"><?php echo $row['date']; ?></p>

            <p><img class="img img-thumbnail"  src="images/<?php echo $row['thumbnail'];?>"  width="400" height="200" > </p>
            <hr>
            
            <blockquote>
              <?php echo substr($row['description'],0,300 ) ;?>
               <a href="single_page.php?single=<?php echo $row['id'];?> " class="btn btn-primary btn-sm">Read More</a>
            </blockquote>
            
              
            </ol>
           
          </div><!-- /.blog-post -->
  
          <?php } ?>

           
             <ul class="pagination">
               <li class="page-item disabled">
                 <a href="#" class="page-link" >Pervious</a>
               </li>
              <?php

       $sql=mysqli_query($conn,"select * from news");
       $count=mysqli_num_rows($sql);
       $a=$count/5;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
                <li class="page-item disabled">
                 <a href="#" class="page-link" >Next</a>
               </li>
       </ul>


          

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">

           <div class="p-3">
            <h4 class="font-italic">Categories</h4>
            <hr>
            <ol class="list-unstyled mb-0">
               <?php
               include('db/connection.php');
                $query1=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query1)){

                

               ?>
              <li><a href="category_page.php?single=<?php echo$row['category_name'];  ?>"><?php echo $row['category_name']; ?></a></li>
              <?php } ?>
            </ol>
          </div>


          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
