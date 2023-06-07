<?php

class Inicio
{
    private $logo;

    public function __construct($logo)
    {
        $this->logo = $logo;

        echo '
            <link rel="stylesheet" type="text/css" href="./css/inicio.css">
    
            <div class="inicio">
                <img src="' . $this->logo . '"></img>
            </div>
        ';
    }
}
