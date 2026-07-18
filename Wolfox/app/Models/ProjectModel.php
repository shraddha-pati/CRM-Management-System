<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ProjectModel extends Model
{
    protected $table = 'project';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [ 'fullname', 'collegeid', 'phonenumber', 'projectname', 'description', 'technology', 'cost','date','link' ];
}
?>