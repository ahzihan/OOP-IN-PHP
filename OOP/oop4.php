<?php
class RGB
{
    private $color;
    private $read;
    private $green;
    private $blue;

    function __construct($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    function getColor($colorCode)
    {
        return $this->color;
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    function getRGBColor()
    {
        return [$this->red, $this->green, $this->blue];
    }

    function readRGBColor()
    {
        echo "Read = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    private function parseColor()
    {
        if ($this->color) {
            [$this->red, $this->green, $this->blue] = sscanf($this->color, '%02x%02x%02x');
        } else {
            [$this->red, $this->green, $this->blue] = [0, 0, 0];
        }
    }

    function getRed()
    {
        return $this->red;
    }
    function getGreen()
    {
        return $this->green;
    }
    function getBlue()
    {
        return $this->blue;
    }
}

$myColor = new RGB('#ff35ff');
$myColor->readRGBColor();
