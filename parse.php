<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csv Parser</title>
</head>
<body>
    <h1>Parser CSV</h1>
    <p>Fichier envoyé !</p>
    <?php
        $filecsc = $_FILES['input_parser']['tmp_name'];

        // convertit un fichier csv en json
        function csvToJson($filename) {
            // ouvre le fichier
            if (!($fp = fopen($filename, 'r'))) {
                die("Can't open file...");
            }
            // récup le headers
            $key = fgetcsv($fp,"1024",",");
            // ajoute chaque rangée du csv dans un tableau
            $json = array();
                while ($row = fgetcsv($fp,"1024",",")) {
                $json[] = array_combine($key, $row);
            }
            // release file handle
            fclose($fp);
            // change le tableau en json
            return json_encode($json);
        }

        //appelle la fonction
        $filejson = csvToJson($filecsc);

        // crée un fichier avec le contenu json
        file_put_contents('uploads/file.json', $filejson);
    ?>
</body>
</html>