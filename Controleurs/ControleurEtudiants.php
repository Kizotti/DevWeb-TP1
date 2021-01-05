<?php


class ControleurEtudiants
{

    public function defautAction()
    {
        $S_etudiants =  new Etudiants();




        Vue::montrer('étudiants/voir', array('etudiants' =>  $S_etudiants->extractData()));

    }

}