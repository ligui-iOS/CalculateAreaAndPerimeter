<?php
    class Circle extends Shape{
        private $radius=0;
        function __construct()
        {
            $this->shapeName = "圆形";
            if($this->validate($_POST["radius"],"半径")){
                $this->radius = $_POST["radius"];
            }
        }
        function area()
        {
            return pi()*$this->radius*$this->radius;
            // TODO: Implement area() method.
        }
        function perimeter()
        {
            return 2*pi()*$this->radius;
            // TODO: Implement perimeter() method.
        }
    }