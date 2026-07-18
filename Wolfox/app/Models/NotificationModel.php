<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class NotificationModel extends Model
{
    protected $table = 'notification';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [ 'message', 'batch', 'image','time'];
   
}
?>