<?php

class PHPChartJS {

    /**
     * PATH of relative place of vendor location
     * @var string 
     */
    protected $path;

    /**
     * value to be changed at each new release
     * @var string 
     */
    protected $sessionload;

    public function __construct() {
        $this->sessionload = "2022041901";
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function writeHeaders() {
        echo "<script type = \"text/javascript\" src = \"{$this->path}vendor/fgendorf/phpchartjs/Chart.bundle.min.js?s={$this->sessionload}\"></script>";
    }

    public function writeInsideHeaders() {
        $file = file_get_contents("{$this->path}/vendor/fgendorf/phpchartjs/Chart.bundle.min.js");
        echo "<script>{$file}</script>";
    }

}
