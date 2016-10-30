<?php

/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 22.10.16
 * Time: 23:04
 */
class ItogClass
{
    protected $slide1;

    protected $slide2;

    protected $slide3;

    protected $slide4;

    protected $slide5;

    public function __construct()
    {
        $calc = new CalculationClass();
        $this->slide1 = $calc->slide1();
        $this->slide2 = $calc->slide2();
        $this->slide3 = $calc->slide3();
        $this->slide4 = $calc->slide4();
    }

    public function slide1()
    {
        return $this->slide1;
    }

    public function slide2()
    {
        return $this->slide2;
    }

    public function slide3()
    {
        return $this->slide3;
    }

    public function slide4()
    {
        return $this->slide4;
    }

    public function slide5()
    {

        return $this->slide5;
    }
}