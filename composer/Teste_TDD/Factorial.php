<?php
class Factorial
{
    public function calculate($number)
    {
        if ($number === 0) {
            return 1;
        }

        return $number * $this->calculate($number - 1);
    }
}
