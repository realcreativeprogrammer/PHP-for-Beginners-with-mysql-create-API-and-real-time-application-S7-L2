<?php
if(isset($_POST['submit'])){
    $name=$_FILES['image']['name'];
    // echo $name;
    move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class='container'>

    <form method='post' enctype='multipart/form-data'>
        <div class='mb-3'>
            <label class='form-label'>Choose new picture profile</label>
            <input type='file' class='form-control' name='image' accept='image/*'>
            <div class='valid-feedback'>
                successfully add it
            </div>
            <div class='invalid-feedback'>
                sorru you have an error
            </div>
        </div>

        <input type='submit' name='submit' class='btn btn-success' value='Add image'>

    </form>

    </div>
</body>
</html>