<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <br/><br/>
    <select name="height">
        <option value="">Height</option>
        <option value="300">300</option>
        <option value="200">200</option>
        <option value="100">100</option>
    </select>
    <select name="width">
        <option value="">Width</option>
        <option value="300">300</option>
        <option value="200">200</option>
        <option value="100">100</option>
    </select>

    <br/><br/>
    <select name="option">
        <option value="">Option</option>
        <option value="exact">Exact</option>
        <option value="auto">Auto</option>
        <option value="crop">Crop</option>
    </select>
    <br/><br/>

    <input type="submit" name="upload"/>




</form>
</body>
</html>







    <?php

        // *** Include the class
        include("resize-class.php");

    if(isset($_POST['upload'])){

        $height = $_POST['height'];
        $width  = $_POST['width'];
        $option = $_POST['option'];
        $img  = $_FILES['photo']['name'];
        $image = $_FILES['photo']['tmp_name'];
//        var_dump($img);
        echo '<br>';
//        var_dump($image);die();

        // *** 1) Initialise / load image
        $resizeObj = new resize($img,$image);

        // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
        $resizeObj -> resizeImage($height, $width, $option);

        // *** 3) Save image
        $resizeObj -> saveImage('new.jpg', 100);

    }



    ?>
