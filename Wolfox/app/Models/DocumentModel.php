<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class DocumentModel extends Model
{
    protected $table = 'document';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [

                    
           'filename',  
           'file',

    ];
}
?>