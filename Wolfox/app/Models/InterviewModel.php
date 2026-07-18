<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class InterviewModel extends Model
{
    protected $table = 'interview';
	protected $primaryKey='id';
	
 
    protected $allowedFields = ['studentid','firstname','middlename','lastname','phoneno','companyname','mode','date','role','status'];
}


?>