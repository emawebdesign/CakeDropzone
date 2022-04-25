<?php

class DropzonesController extends AppController {

    public function upload() {

        $this->autoRender = false;
        
        $uploaddir = WWW_ROOT . 'files/uploads' . DS;
        $file = pathinfo($uploaddir . $_FILES['myfile']['name']);
        $uploadfile = $uploaddir .md5($file['filename'] .time()) ."." .$file['extension'];

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
            return(true);
        } else {
            return(false);
        }

		exit;
    
    }

}