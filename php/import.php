<?php

class Import {
    public function getProjects() {
        $data = $this->readFile("projects.txt");
        if($data === false || empty($data))
            return false;
        return array_map(function($e) {
            return new Project($e);
        }, $data);
    }
    public function getExperiences() {
        $data = $this->readFile("experiences.csv");
        if($data === false || empty($data))
            return false;
        return array_map(function($e) {
            return new Experience($e);
        }, $data);
    }
    private function readFile($file) {
        $file = "csv/{$file}";
        if(file_exists($file)) {
            if(filesize($file) != 0) {
                $file = fopen($file,'r') or die('Unable to open!');
                $data = [];
                while(!feof($file)) {
                    array_push($data,fgets($file));
                }
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
class Project {
    private $name;
    //private $image; // for re-designing, maybe?
    private $text;
    private $environment;
    private $github;
    private $live_version;

    public function getName() {return $this->name;}
    public function getText() {return $this->text;}
    public function getEnvironment() {return $this->environment;}
    public function getGithub() {return $this->github;}
    public function getLiveVersion() {return $this->live_version;}
    
    public function __construct($row) {
        $row = explode(';',$row);
        $this->name = $row[0];
        $this->text = $row[1];
        $this->environment = explode('+',$row[2]);
        $this->github = $row[3];
        $this->live_version = $row[4];
    }
}

class Experience {
    private $company_name;
    private $description;
    private $time_frame;
    private $position;

    public function getCompanyName() {return $this->company_name;}
    public function getDescription() {return $this->description;}
    public function getTimeFrame() {return $this->time_frame;}
    public function getPosition() {return $this->position;}

    public function __construct($row) {
        $row = explode(';',$row);
        $this->company_name = $row[0];
        $this->time_frame = $row[1];
        $this->position = $row[2];
        $this->description = $row[3];
    }
}



?>