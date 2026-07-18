<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class AdminLoginModel extends Model
{
    protected $table = 'adminlogin';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [

                    
           'phonenumber',  
           'password',
		   'email'
          

    ];
}
?>