<?php
	namespace App\Models;
	use CodeIgniter\Database\ConnectionInterface;
	use CodeIgniter\Model;
	
	class AttendenceMasterModel extends Model
	{
		protected $table='attendence';
		protected $primaryKey='id';
		
		protected $allowedFields=['StudentName','Attendence','Date'];
	}
?>