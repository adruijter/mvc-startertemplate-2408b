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
                       ,SMPH.Prijs
                       ,SMPH.Geheugen
                       ,SMPH.Besturingssysteem
                FROM smartphones as SMPH
                ORDER BY SMPH.Prijs DESC, SMPH.Geheugen ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}