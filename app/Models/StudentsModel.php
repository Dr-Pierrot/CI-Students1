<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tblstudents';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['firstname', 'middlename', 'lastname', 'phoneno', 'course', 'year', 'section'];

}
