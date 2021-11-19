<?php

final class ControleurGroupes
{
    public function defautAction()
    {
        $eleves = new Groupes();
        Vue::montrer('accueil/form');
    }

    public function creergroupeAction()
    {
        $data =  new Groupes();
        Vue::montrer('accueil/groups', array('tableau' =>  $data->creeGroupe($data->creeTableau($_FILES['liste']['tmp_name']))));
    }
}
