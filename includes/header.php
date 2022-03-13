<!-- the head section -->
<head>
<title>Collectibles</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<!-- the body section -->
<body>
<header><h1>Collectibles and Their Prices</h1></header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="category_list.php">Categories</a></li>
        <?php foreach ($categories as $category) : ?>
        <li class="nav-item"><a class="nav-link" href=".?category_id=<?php echo $category['categoryID']; ?>">
        <?php echo $category['categoryName']; ?>
        </a>
        </li>
        <?php endforeach; ?>
        </ul>
    </div>
  </div>
</nav>