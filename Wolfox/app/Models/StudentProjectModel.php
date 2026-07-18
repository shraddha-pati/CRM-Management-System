<?php
namespace App\Models;
use CodeIgniter\DatabaseConnection\ConnectionInterface;
use CodeIgniter\Model;

class StudentProjectModel extends Model
{
    protected $table='studentproject';
    protected $id='primarykey';
    protected $allowedFields=[

        'studentid',
        'projectname',
        'languages',
        'startdate',
        'enddate',
        'type',
        'clientname'
         
    ];

}
