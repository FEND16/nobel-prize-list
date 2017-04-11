<nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Nobel Prize</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $about_active;?>">
        <a class="nav-link" href="about.php">About <!-- <span class="sr-only">(current)</span> --></a>
      </li>
      <li class="nav-item <?php echo $contact_active;?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item <?php echo $fun_active;?>">
        <a class="nav-link" href="fun-facts.php">Fun Facts</a>
      </li>      
    </ul>
  </div>
</nav>

<body>