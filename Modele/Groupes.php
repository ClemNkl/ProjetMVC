<?php

final class Groupes
{
    public function creeTableau($lien)
    {
        $liste = [];
        $handle = fopen($lien,'r');
        while ( ($data = fgetcsv($handle) ) !== FALSE ) {
            $liste[] = $data;
        }
        return $liste;
    }

    public function creeGroupe($eleves)
    {
        $groupes = [];
        $list = [];
        foreach ($eleves as $value) {
          $list[] = $value[0];
        }
        shuffle($list);
        $groupes[] = array_chunk($list,$_POST['nbElevesMax']);
        $fp = fopen('Groupes.txt', 'w');
        $i = 1;
        foreach ($groupes[0] as $value) {
            $value = str_replace(";", " ", $value);
            $tmp = 'Groupe '.$i.' :' . "\n";
            fputs($fp, $tmp);
            foreach ($value as $line){
                $line = $line . "\n";
                fputs($fp, $line);
            }
            $i++;
        }
        fclose($fp);
        return $groupes;
    }
}
