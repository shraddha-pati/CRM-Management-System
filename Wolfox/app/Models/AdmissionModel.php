<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admission';
    protected $primaryKey = 'id';


    protected $allowedFields = [

        'firstname',
        'middlename',
        'lastname',
        'email',
        'phoneno',
        'whatsappno',
        'gender',
        'dob',
        
        'pstreet',
        'pcity',
        'pstate',
        'ppincode',
        'collegeid',
        'collegevillage',

        'year',
        'branchid',
        'courseid',
        'batchid',
        'joiningdate',
        'otp',
        'StudentId',
        'paidfee',
        'mode',
        'transactionid',
        'totalfee',
        'status',
        'flag',
        'studentcount',
        'nextdate',
        'remark',
        'discription',
        'password',
        'profile',
        'resume',
        'adharcard',
        'clgdoc',
        'guidename',
        'inquirytype',
        'newpassword',
        'docstatus',
        'docremark',
        'socialflag',
        'instaid',
        'reportimage'

    ];

    public function checkWhatsappNumber($whatsappNumber)
{
    // Using the query builder to check if the WhatsApp number exists
    $builder = $this->db->table($this->table);
    $builder->where('whatsappno', $whatsappNumber); // Make sure 'whatsappno' matches the column name in the database
    $query = $builder->get(); // Executes the query

    // If the number exists, it returns the first row, otherwise it returns null
    return $query->getRow(); 
}

}

