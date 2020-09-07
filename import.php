<?php

class Import {

    private $data = [];

    public function getData() {
        return $this->data;
    }
    public function rimport() {
        $file = 'projects.txt';
        if(file_exists($file)) {
            if(filesize($file) != 0) {
                $file = fopen($file,'r') or die('Unable to open!');

                while(!feof($file)) {
                    array_push($this->data,new Details(fgets($file)));
                }
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }
}
class Details {

    private $name;
    //private $image;
    private $text;

    public function __construct($row) {
        $array = explode(';',$row);
        $this->name = $array[0];
        $this->text = $array[1];
    }

    public function getName() {
        return $this->name;
    }
    public function getText() {
        return $this->text;
    }
}



?>