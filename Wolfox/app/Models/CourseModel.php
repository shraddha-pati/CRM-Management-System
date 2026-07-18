<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CourseModel extends Model
{
    protected $table = 'course';
	protected $primaryKey='courseid';
	
 
    protected $allowedFields = [

                    
           'course',  
           'duration',
           'fee',


          

    ];
}
?>