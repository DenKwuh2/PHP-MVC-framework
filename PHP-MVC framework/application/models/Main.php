<?php

namespace application\models;

use application\core\Model;

class MainConrtoller {

    public function getNews() {
        $result = $this->db->row('SELECT title, description FROM news');
        return $result;
    }

}