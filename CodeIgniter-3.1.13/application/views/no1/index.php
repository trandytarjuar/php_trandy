<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Reverse Text Form</h1>
    <form method="post" action="<?= site_url('welcome/submit')?>" enctype="multipart/form-data">
        <input type="text" name="text" placeholder="Enter text">
        <input type="submit" value="GO">
    </form>
    
</body>

</html>