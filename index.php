<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog! woot! woot!</title>
  <link rel="stylesheet" href="blog-styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<!-- <img class="img-responsive" width="100%" src="http://via.placeholder.com/1300x200" alt=""> -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">Blog</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#zika" aria-controls="zika" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="zika">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="applesauce" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Code</a>
          <div class="dropdown-menu" aria-labelledby="applesauce">
            <a href="#" class="dropdown-item">Web dev</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="choco" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Art</a>
          <div class="dropdown-menu" aria-labelledby="choco">
            <a href="#" class="dropdown-item">Draw</a>
          </div>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0" action="">
        <input type="text" placeholder="Search" class="form-control mr-sm-2">
        <button type="button" class="btn btn-outline-success my-2 my-sm" value="">Submit</button>
      </form>
    </div>
  </nav>

  <main role="main" class="container">
    <br /> <br />

    <div class="row">
      <div class="col-md-8">
        <img class="img-responsive" width="100%" src="http://via.placeholder.com/750x500" alt="">
      </div>
      <div class="col-md-4">
        <br />
        <span class="main-article-category">Article category</span>
        <br />
        <span class="main-article-tittle">This is the article tittle.. Crazy thing are happening</span>
        <br />
        <span>By <span class="autor-name">Kiki</span></span>
      </div>
    </div>

    <!-- Next 11:30 -->
    <br /> <br />
    <span class="recent-articles">Recent articles</span>
    <hr />

    <div class="row">

      <div class="col-md-8">

        <div class="row">
          <div class="col-md-4">
            <img class="img-responsive" width="100%" src="http://via.placeholder.com/750x500" alt="">
          </div>
          <div class="col-md-8">
            <br />
            <span class="sub-article-date">April, 14, 2020</span>
            <br />
            <span class="sub-article-tittle">This is the tittle of the first sub-article</span>
            <br />
            <span class="sub-article-author">By <span class="author-name">Kiki</span></span>
            <br />
            <span class="sub-article-category">Article category</span>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-md-4">
            <img class="img-responsive" width="100%" src="http://via.placeholder.com/750x500" alt="">
          </div>
          <div class="col-md-8">
            <br />
            <span class="sub-article-date">April, 15, 2020</span>
            <br />
            <span class="sub-article-tittle">DAAAAM! 500 more deaths</span>
            <br />
            <span class="sub-article-author">By <span class="author-name">Sam</span></span>
            <br />
            <span class="sub-article-category">Article category</span>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-md-4">
            <img class="img-responsive" width="100%" src="http://via.placeholder.com/750x500" alt="">
          </div>
          <div class="col-md-8">
            <br />
            <span class="sub-article-date">April, 16, 2020</span>
            <br />
            <span class="sub-article-tittle">There we go boyz, we diying</span>
            <br />
            <span class="sub-article-author">By <span class="author-name">Kiki</span></span>
            <br />
            <span class="sub-article-category">Article category</span>
          </div>
        </div>
        <hr />

        <div class="text-right"><span class="demo-link">More...</span></div>

      </div>

      <div class="col-md-4">
        <span class="sponsor">SPONSOR</span>
        <br /><br />
        <img class="img-responsive" width="100%" src="http://via.placeholder.com/600x800" alt="">
      </div>

    </div>
  </main>

  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="footer-copyright py-3 text-center">
      copyright 2020
    </div>
  </footer>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>