
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
    <fieldset>
        <legend>ADD PRODUCT</legend>
       <form  method="post"action="../controllers/addProductCheck.php" enctype="">
        Name
        <input type="text" name="username" value="" /><br>
        Buying Price
        <input type="text" name="buyingprice" value="" /><br>
        Selling Price
        <input type="text" name="sellingprice" value="" /><br>
        <input type="checkbox" name="display" id="">Display <br>
        <input type="submit" name="save" value="save">

       </form>
    </fieldset>
</body>
</html>