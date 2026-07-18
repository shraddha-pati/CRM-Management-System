<?php
namespace App\Models;
use CodeIgniter\DatabaseConnection\ConnectionInterface;
use CodeIgniter\Model;

class CmsModel extends Model
{
    protected $table='cmsmaster';
    protected $id='primarykey';
    protected $allowedFields=[

        'name',
        'cinno',
        'email1',
        'email2',
        'phonenum1',
        'phonenum2',
        'ceoname',
        'ctoname',
        'address',
        'logo',
        'headerimage',
        'footerimage',
        'backgroundimage',
        'companystamp1',
        'companystamp2'
    ];

}
