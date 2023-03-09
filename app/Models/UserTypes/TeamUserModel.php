<?php

namespace App\Models\UserTypes;

use CodeIgniter\Model;

class TeamUserModel extends Model
{
    // Construction
    protected $table            = 'nsca_team_user';
    protected $primaryKey       = 'id';
    protected $returnType       = \App\Entities\UserTypes\TeamUser::class;
    protected $protectFields    = true;
    protected $allowedFields    = ['userID', 'teamID', 'isClubManager', 'isTeamCaptain', 'isViceCaptain', 'isWaitingToJoin'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}