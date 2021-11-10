<?php
require_once 'db_connect.php';

if (isset($_POST["submit"])) { // if the input that has the type submit has a value (when clicked)
    $image = $_POST["image"]; // takes the value from the input whose name attribute is equals to image using the $POST method
    $name = $_POST["name"]; // takes the value from the input whose name attribute is equals to name using the $POST method
    $price = $_POST["price"]; // takes the value from the input whose name attribute is equals to price using the $POST method
    $description = $_POST["description"]; // takes the value from the input whose name attribute is equals to description using the $POST method

    $sql = "INSERT INTO dishes (image, name, price, description) VALUES ('$image', '$name', '$price', '$description')";
    // query that creates a new record in the table test. The values come from the form


    if (mysqli_query($connect, $sql) == true) { // if the query runs successfully it will show a message and a link to go back to the home page.
        echo "New record created<br>
            <a href='challenge.php'>Home</a>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST">
        <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="input" class="form-control" id="inputName" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="input" class="form-control" id="inputImage" name="image">
            </div>
        </div>


        <div class="row mb-3">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="input" class="form-control" id="inputPrice" name="price">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputDescription" name="description"></textarea>
            </div>
        </div>

        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>