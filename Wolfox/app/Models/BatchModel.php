<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class BatchModel extends Model
{
    protected $table = 'batch';
	protected $primaryKey='batchid';
	
 
    protected $allowedFields = [
     'batchname', 'starttime', 'endtime','month'

    ];
}
?>