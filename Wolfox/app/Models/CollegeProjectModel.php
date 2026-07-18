<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CollegeProjectModel extends Model
{
    protected $table = 'collegeproject';
	protected $primaryKey='id';
	
 
    protected $allowedFields = ['studentname','collegename','coursename','projectname','projecttype','startdate','enddate','technology', 'description'];
}


?>