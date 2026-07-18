<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CollegeModel extends Model
{
    protected $table = 'collegename';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [

                    
           'collegename' 
          
    ];
}
?>