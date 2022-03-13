<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">

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
    <a class="navbar-brand" href="index.php">Categories</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
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
        <h1>Add Record</h1>
        <form action="add_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select>
            <br>
            <label>Name:</label>
            <input type="input" id="name" name="name" size=12  onBlur="name_validation();"/><span id="name_err"></span></li>
            <br>

            <label>Year Released:</label>
            <input type="input" name="year" required>
            <br>

            <label>List Price:</label>
            <input type="input" name="price" required>
            <br>        
            
            <label>Image:</label>
            <input type="file" name="image"  accept="image/*" required />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Record" class="btn btn-success">
            <br>
        </form>
        <a href="index.php"><button href="index.php" type="button" class="btn btn-danger">Cancel</button></a>
        
    <?php
//include('includes/footer.php');
?>
</body>
<script src="validation.js"></script>
</html>