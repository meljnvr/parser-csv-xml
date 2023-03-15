<?php

class FileService {

    public $file;
    public $name;

    public function __construct($file, $name) {
        $this->file = $file;
        $this->name = $name;
    }

    public function convertToJson(){
        // ouvre le fichier
        $fp = fopen($this->file, 'r');
        // récupère l'extension du fichier
        $extension = pathinfo($this->name, PATHINFO_EXTENSION);
        if ($extension === "csv") {
            $key = fgetcsv($fp,"1024",",");
            // ajout chaque rangée du csv dans un tableau
            $json = array();
                while ($row = fgetcsv($fp,"1024",",")) {
                $json[] = array_combine($key, $row);
            }
            // release file handle
            fclose($fp);
            // change le tableau en json
            var_dump($json);
            return json_encode($json);
        }
        if ($extension === "xml") {
            // récupère le contenu
            $xml = stream_get_contents($fp);
            // convertit en objet
            $json = simplexml_load_string($xml);
            return json_encode($json);
        }
    }

}

?>