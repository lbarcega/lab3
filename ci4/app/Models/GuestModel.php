<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'lbarcega_notes';

    protected $allowedFields = ['name', 'email', 'website', 'note', 'organ', 'datetime'];


    public function getGuest($note_id = false)
    {
      if ($note_id === false) {
        return $this->findAll();
      }
  
      return $this->where(['note_id' => $note_id])->first();
    }
}

