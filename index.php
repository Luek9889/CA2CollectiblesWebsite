<?php
require_once('database.php');

// Get category ID
if (!isset($category_id)) {
$category_id = filter_input(INPUT_GET, 'category_id', 
FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
$category_id = 1;
}
}

// Get name for current category
$queryCategory = "SELECT * FROM categories
WHERE categoryID = :category_id";
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
$category_name = $category['categoryName'];

// Get all categories
$queryAllCategories = 'SELECT * FROM categories
ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get records for selected category
$queryRecords = "SELECT * FROM cards
WHERE categoryID = :category_id
ORDER BY recordID";
$statement3 = $db->prepare($queryRecords);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$records = $statement3->fetchAll();
$statement3->closeCursor();
?>
<div class="container">
<?php
include('includes/header.php');
?>
<?php 
$category_mtg = "MTG";
$category_pokemon = "Pokemon";
$category_pokemonJ = "Pokemon(Japanese)";
$category_yugi = "YuGiOh";
?>




<section class="sect1">
<!-- display a table of records -->
<h1><?php echo $category_name; ?></h1>
<table>
<tr>
<th>Image</th>
<th>Name</th>
<th>Year Released</th>
<th>Price</th>

</tr>
<?php foreach ($records as $record) : ?>
<tr>
    <?php if( $category_name == $category_mtg) : ?>
        <td><img src="image_uploads/<?php echo $record['image']; ?>" width="300px" height="300px" /></td>
    <?php elseif($category_name == $category_pokemon || $category_name == $category_pokemonJ ):?> 
        <td><img src="image_uploads/<?php echo $record['image']; ?>" width="200px" height="300px" /></td>
    <?php else:?> 
        <td><img src="image_uploads/<?php echo $record['image']; ?>" width="300px" height="200px" /></td>
    <?php endif ?>
         

<td><h2><?php echo $record['name']; ?></h2></td>
<td class="right"><h2><?php echo $record['year_released']; ?></h2></td>
<td class="right"><h2><?php echo $record['price']; ?></h2></td>
<td><form action="delete_record.php" method="post"
id="delete_record_form">
<input type="hidden" name="record_id"
value="<?php echo $record['recordID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $record['categoryID']; ?>">
<input type="submit" class="btn btn-danger" value="Delete">
</form></td>
<td><form action="edit_record_form.php" method="post"
id="delete_record_form">
<input type="hidden" name="record_id"
value="<?php echo $record['recordID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $record['categoryID']; ?>">
<input type="submit" class="btn btn-success" value="Edit">
</form></td>
</tr>
<?php endforeach; ?>
</table>
<p><a href="add_record_form.php"><button href="index.php" type="button" class="btn btn-dark">Add Record</button></a></p>
<p><a href="category_list.php"><button href="index.php" type="button" class="btn btn-dark">Manage Categories</button></a></p>
</section>
<?php
include('includes/footer.php');
?>