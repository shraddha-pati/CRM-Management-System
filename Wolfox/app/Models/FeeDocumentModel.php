<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class FeeDocumentModel extends Model
{
    protected $table = 'feedocument';
    protected $primaryKey = 'id';


    protected $allowedFields = [

        'sid',
        'filename',

    ];
}
