<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'lbarcega_notes';

    protected $allowedFields = ['name', 'email', 'website', 'note', 'organ', 'datetime'];

    public function getNews()
    {

        return $this->findAll();
        
    }
}

