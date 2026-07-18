<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientModel extends Model
{
    protected $table = 'client';
	protected $primaryKey='id';
	
 
    protected $allowedFields = ['fullname','businessname','domainname','street','city','phoneNo','projectname','description','date'];
}


?>