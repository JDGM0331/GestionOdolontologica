<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <option value="" selected="selected">---Seleccione la hora ---</option>
    <?php while($row = $result->fetch_object()){ ?>
        <option value="<?php echo $row->hora; ?>"><?php echo $row->hora; ?></option>
    <?php } ?>

</body>
</html>