<?php

class Color
{
    public int $red;
    public int $green;
    public int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->red = $this->validation($red);
        $this->green = $this->validation($green);
        $this->blue = $this->validation($blue);
    }

    protected function validation(int $number)
    {
        if ($number >= 0 && $number <= 255) {
            return $number;

        } else {
            die('number not validate');
        }
    }

    public function mixColor(Color $color)
    {
        $color3 = new Color(0, 0, 0);
        $color3->red = round(($color->red + $this->red)/2);
        $color3->green = round(($color->green + $this->green)/2);
        $color3->blue = round(($color->blue + $this->blue)/2);

        return $color3;

    }
}

$color1 = new Color(165, 235, 243);
$color2 = new Color(250, 250, 250);


//var_dump($color1->mixColor($color2));
$colorBack = $color1->mixColor($color2);
//print_r($colorBack);
?>


<body style="background-color: rgb(<?php echo $colorBack->red?>,<?php echo $colorBack->green?>,<?php echo $colorBack->blue?>)">

</body>
