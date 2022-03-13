<?php
require('database.php');

$record_id = filter_input(INPUT_POST, 'record_id', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM cards
          WHERE recordID = :record_id';
$statement = $db->prepare($query);
$statement->bindValue(':record_id', $record_id);
$statement->execute();
$records = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Edit Product</h1>
        <form action="edit_record.php" method="post" enctype="multipart/form-data"
              id="add_record_form">
            <input type="hidden" name="original_image" value="<?php echo $records['image']; ?>" />
            <input type="hidden" name="record_id"
                   value="<?php echo $records['recordID']; ?>">

            <label title="1 = Pokemon, 2 = YuGiOh, 3 = MTG, 5 = Pokemon(Japanese)">Category ID:</label>
            <input type="category_id" name="category_id"
                   value="<?php echo $records['categoryID']; ?>">
            <br>

            <label>Name:</label>
            <input type="input" id="name" onBlur="name_validation();" name="name"
                   value="<?php echo $records['name']; ?>"><span id="name_err">
            <br>

            <label>List Price:</label>
            <input type="input" id="price" onBlur="price_validation();" name="price"
                   value="<?php echo $records['price']; ?>"><span id="price_err">
            <br>
            <label>Year:</label>
            <input type="input" id="year" onBlur="year_validation();" name="year_released"
                   value="<?php echo $records['year_released']; ?>"><span id="year_err">
            <br>

            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>            
            <?php if ($records['image'] != "") { ?><br>
            <p><img src="image_uploads/<?php echo $records['image']; ?>" height="300" /></p>
            <?php } ?>
            
            <label>&nbsp;</label>
            <input type="submit" class="btn btn-success" value="Save Changes" >
             <br> 
            <br>
        </form>
        <p><a href="index.php"><button href="index.php" type="button" class="btn btn-dark">View Homepage</button></a></p>
    <?php
//include('includes/footer.php');
?>
</body>
<script src="validation.js"></script>
</html>