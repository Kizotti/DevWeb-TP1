<?php


class Etudiants
{

    public $file = '/Users/ramaherbin/Desktop/Dev-app-dyna/MVC-Hello-World/etudiants.json';


    public function createGroups($groups, $nbMaxInGroup) {

        shuffle($groups);

        return array_chunk($groups, $nbMaxInGroup);

    }

//TODO : Refactor code to match a MVC pattern


    public function extractData() {
        $data = file_get_contents($this->file);
        $sortedGroups = Etudiants::createGroups(json_decode($data), 4);
//        print_r($sortedGroups);
//        return $this->$sortedGroups;

        echo '<main>';
        foreach ($sortedGroups as $key => $group) {
//            echo "<p>" . $key . "</p>";
            echo '<section id="groupe' . ($key + 1) . '">';
            foreach ($group as $unit => $unEtudiant) {
                echo "<p>" . $unEtudiant->Nom . " - " . $unEtudiant->Prenom . "</p>";
            }
            echo '</section>';
        }
        echo '</ain>';

    }

}