<html>
  <head>
    <title>News Web App</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="container">
  <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>news">News App</a>
  </div>
  <!-- Collection of nav links and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
          <li class="nav-item"><a href="<?=base_url()?>news">Home</a></li>
          <li class="nav-item"><a href="<?=base_url()?>news">News</a></li>
          <li class="nav-item"><a href="<?=base_url()?>news/create">Create</a></li>
      </ul>

  </div>
</div>
</nav>

    <div class="container">
    <h1><?=$title?></h1>
