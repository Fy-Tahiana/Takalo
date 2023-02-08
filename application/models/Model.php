<?php

class OModel extends CI_Model{


    public function get_user()
    {
        $query = "select idUser, nom, prenom, mail, mdp from user");

        $result = array();

        foreach($query-> result_array() as row)
        {
            $result[] = $row;
        }
        return $result;
    }

    public function checkLogin()
