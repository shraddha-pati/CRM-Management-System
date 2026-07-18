<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class StudentDocumentModel extends Model
{
    protected $table = 'studentdocument';
	protected $primaryKey='id';
	
 
    protected $allowedFields = ['Image','CV','AdharCard','ClgDoc'];
}


?>