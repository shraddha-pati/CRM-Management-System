<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ImageModel extends Model
{
    protected $table = 'images';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [ 'file_name', 'file_path', 'created_at','batch','date','Category','studentid','status','flag','photoremark','photostatus'];
   
}
?>