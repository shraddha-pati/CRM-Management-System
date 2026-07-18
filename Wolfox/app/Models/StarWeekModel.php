<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class StarWeekModel extends Model
{
    protected $table = 'starweek';
	protected $primaryKey='starid';
	
 
    protected $allowedFields = [

                    
           'name',  
           'batch',
           'startdate',
           'enddate',
           'reason',


          

    ];
}
?>