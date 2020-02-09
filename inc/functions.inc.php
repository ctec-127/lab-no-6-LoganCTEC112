<?php

    // function to calculate converted temperature
    function convertTemp($temp, $unit1, $unit2)
    {
        if ($unit1 == 'celsius') {
            if ($unit2 == 'fahrenheit') {
                $newTemp = $temp * 9/5 + 32;
            } elseif ($unit2 == 'kelvin') {
                $newTemp = $temp + 273.15;
            } elseif ($unit2 == 'celsius') {
                $newTemp = $temp;
            }
        } 
        if ($unit1 == 'fahrenheit') {
            if ($unit2 == 'celsius') {
                $newTemp = ($temp -32) * 5/9;
            } elseif ($unit2 == 'kelvin') {
                $newTemp = ($temp + 459.67) * 5/9;
            } elseif ($unit2 == 'fahrenheit') {
                $newTemp = $temp;
            } 
        } 
        if ($unit1 == 'kelvin') {
            if ($unit2 == 'fahrenheit') {
                $newTemp = $temp * 9/5 + 459.67;
            } elseif ($unit2 == 'celsius') {
                $newTemp = $temp - 273.15;
            } elseif ($unit2 == 'kelvin') {
                $newTemp = $temp;
            }  
        } 
        return $newTemp;
    } // end function