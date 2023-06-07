<?php

class Navbar
{
    private $options;
    private $urls;

    public function __construct($options, $urls)
    {
        $this->options = $options;
        $this->urls = $urls;
        echo '<link rel="stylesheet" type="text/css" href="./css/navbar.css">';
        echo '<nav class="navbarClever">';
        echo '<a href="http://localhost/landingCleversoft/cleversoft.php#"><img src="./imagenes/LogoCleverSoft.png" width="45" height="40"></a>';
        echo '<ul class="navbarList">';
        foreach ($this->options as $index => $option) {
            echo '<li class="dropdown">';
            if ($index === count($this->options) - 1) {
                echo '<a>' . $option . '<span class="dropdown-icon">&#9662;</span></a>';
                echo '<ul class="dropdown-content">';
                echo '<li><a href="#">Opción 1</a></li>';
                echo '<li><a href="#">Opción 2</a></li>';
                echo '<li><a href="#">Opción 3</a></li>';
                echo '</ul>';
            } else {
                echo '<li><a href="' . $this->urls[$index] . '">' . $option . '</a></li>';
            }
            echo '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".dropdown-content").hide();

        $(".dropdown").click(function() {
            $(".dropdown-content").slideToggle();
        });
    });
</script>
