<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class BranchModel extends Model
{
    protected $table = 'branch';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [

                    
           'branchname' 
          
    ];
}
?>