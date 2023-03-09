<?php

namespace App\Models\UserTypes;

use CodeIgniter\Model;

class DevUserModel extends Model
{
    // Construction
    protected $table            = 'nsca_dev_user';
    protected $primaryKey       = 'id';
    protected $returnType       = \App\Entities\DevUser::class;
    protected $protectFields    = true;
    protected $allowedFields    = ['devID', 'userID', 'isLead'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}