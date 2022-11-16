<?php 
    function brojacZnakova($word)
    {
        $word = strtolower($word);   // prebacuje string u mala slova      
        $word = str_split($word);   // podijeli string na char u array

        // inicijaliziraj varijable brojača
        $brojacSuglasnik = 0;
        $brojacSamoglasnik = 0;

        foreach($word as $character)
        {
            switch($character)
            {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                    $brojacSamoglasnik++; // uvećaj brojač samoglasnika
                    break;
                default:
                    $brojacSuglasnik++;   // uvećaj brojač suglasnika
                    break;
            }
        }
        return array($brojacSamoglasnik, $brojacSuglasnik);
    }












?>