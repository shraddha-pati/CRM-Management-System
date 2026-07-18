<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class OtherLetterModel extends Model
{
    protected $table = 'otherletter';
	protected $primaryKey='id';
	
 
    protected $allowedFields = ['name','Image'];
}


?>