<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllSmartphones()
    {
        $sql = 'SELECT  SMPH.Merk
                       ,SMPH.Model
                       ,FORMAT(SMPH.Prijs, 2, "nl_NL") as Prijs
                       ,SMPH.Geheugen
                       ,SMPH.Besturingssysteem
                       ,REPLACE(SMPH.Schermgrootte, ".", ",") as Schermgrootte
                       ,IF (SMPH.Simlockvrij = 1, "Ja", "Nee") as Simlockvrij
                       ,SMPH.Gewicht
                       ,DATE_FORMAT(SMPH.Releasedatum, "%d-%m-%Y") as Releasedatum
                FROM smartphones as SMPH
                ORDER BY SMPH.Prijs DESC, SMPH.Geheugen ASC, SMPH.Releasedatum DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}