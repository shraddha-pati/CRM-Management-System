<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class MentorModel extends Model
{
    protected $table = 'mentor';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [ 'sid', 'collegeid', 'year', 'date', 'mentorname', 'mentornumber'];
   
}
?>