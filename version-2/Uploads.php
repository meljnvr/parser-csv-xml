<?php

    class Uploads {

        public function putContentsInFile($path, $data){
            // crée un fichier avec le contenu json
            file_put_contents($path, $data);
        }
    }

?>
