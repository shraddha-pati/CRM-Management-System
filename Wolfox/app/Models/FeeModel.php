<?php
namespace App\Models;
use CodeIgniter\Model;

class FeeModel extends Model
{
    protected $table = 'fee';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'sid', 'totalfee', 'paidfee', 'installment', 'mode', 'transactionid', 'remainingfee', 'installment_number','filename',
        'paymentdate', 'confirmstatus', 'remark'];
}