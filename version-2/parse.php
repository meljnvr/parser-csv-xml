<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parser CSV et XML</title>
</head>
<body>
    <h1>Parser CSV et XML</h1>
    <p>Fichier envoyé !</p>
    <?php
        require_once('FileService.php');
        require_once('Uploads.php');
        $fs = new FileService($_FILES['input_parser']['tmp_name'],$_FILES['input_parser']['name']);
        $filejson = $fs->convertToJson();
        $upload = new Uploads();
        $upload->putContentsInFile("./uploads/file.json", $filejson);
    ?>
</body>
</html>