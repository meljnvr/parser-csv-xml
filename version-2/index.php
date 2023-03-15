<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parser CSV et XML</title>
</head>
<body>
    <form action="parse.php" method="POST" enctype='multipart/form-data'>
        <input type="file" name="input_parser" id="input_parser" accept=".csv, .xml">
        <input type="submit" name="submit">Submit</input>
    </form>
</body>
</html>