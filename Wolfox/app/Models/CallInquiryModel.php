<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CallInquiryModel extends Model
{
    protected $table = 'callinquiry';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [

                    
           'phoneno',  
           'discription',
           'Date',  
           'Flag',  
           'Status'  

  

          

    ];
}
?>