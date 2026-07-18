<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class InquiryMasterModel extends Model
{
    protected $table = 'inquiry';
	protected $primaryKey='id';
	
 
    protected $allowedFields = [ 'firstname', 'middlename','lastname','CollegeName','WhatsappNumber','Branch','Year','CollageVillage','InquiryDate','Status','Remark','Flag','Date'];
}
?>