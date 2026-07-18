<?php

namespace App\Controllers;

use App\Models\FeeDocumentModel;
use App\Models\FeeModel;
use App\Models\CourseModel;
use App\Models\BatchModel;
use App\Models\AdmissionModel;
use App\Models\CmsModel;

// require_once APPPATH . 'Libraries/dompdf/autoload.inc.php';

// use Dompdf\Dompdf;
// use Dompdf\Options;

class FeeDocumentMaster extends BaseController
{
    public function index($id = null)
    {
        $session = session();
        $sid = $session->get('id');

        $FeeModel = new FeeModel();
        $fee = $FeeModel->where('sid', $sid)->findAll();

        $feeDocumentModel = new FeeDocumentModel();
        $feeDocument = $feeDocumentModel->where('sid', $sid)->findAll();

        echo view('/Student/Header',);
        echo view('/Student/FeeDocument', ['fees' => $fee, 'feeDocument' => $feeDocument]);
    }

    public function save()
    {
        $session = session();
        $sid = $session->get('id');

        $filename = $this->request->getFile('filename');
        $paymentdate = $this->request->getVar('paymentdate');
        $transactionid = $this->request->getVar('transactionid');

        $FeeModel = new FeeModel();
        $CourseModel = new CourseModel();
        $AdmissionModel = new AdmissionModel();

        $admission = $AdmissionModel->where('id', $sid)->first();

        $course = $CourseModel->find($admission['courseid']);

        $totalFee = isset($course['fee']) ? $course['fee'] : 0;

        $fee = $FeeModel->where('sid', $sid)->where('installment', '0')->orderBy('installment_number', 'DESC')->first();

        $fee1 = $FeeModel->where('sid', $sid)->orderBy('installment_number', 'DESC')->first();

        // print_r($fee);exit;

        if ($fee) {




            $feeArray = [
                'paymentdate' => $paymentdate,
                'transactionid' => $transactionid,
                'totalfee' => $totalFee,
                'mode' => 'online'

            ];
        } else {
            $in = $fee1['installment_number'] + 1;

            $feeArray = [
                'paymentdate' => $paymentdate,
                'transactionid' => $transactionid,
                'totalfee' => $totalFee,
                'mode' => 'online',
                'installment_number' => $in,
                'remainingfee' => $fee1['remainingfee'],
                'paidfee' => $fee1['paidfee'],
                'sid' => $fee1['sid']



            ];
        }



        $uploadPath = 'Uploads/feedocument/' . $sid . '/';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($filename->isValid() && !$filename->hasMoved()) {

            if ($fee && !empty($fee['filename'])) {
                $oldFilePath = $uploadPath . $fee['filename'];
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $newFileName = $transactionid . '.' . $filename->getClientExtension();
            $filename->move($uploadPath, $newFileName);

            $feeArray['filename'] = $newFileName;
        }

        if ($fee) {
            $result = $FeeModel->update($fee['id'], $feeArray);
            if ($result) {
                session()->setFlashdata('success', '<b style="color:green;">Fee Document Updated Successfully!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Failed to update the Fee Document!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            }
        } else {
            // $feeArray['sid'] = $sid;
            // $feeArray['mode'] = 'online';
            // $feeArray['paidfee'] = '';

            if ($FeeModel->insert($feeArray)) {
                session()->setFlashdata('success', '<b style="color:green;">Fee Document Added Successfully!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Failed to insert the Fee Document!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            }
        }
    }

    public function feedocument()
    {
        $session = session();
        $sid = $session->get('id');

        $FeeModel = new FeeModel();
        $fee = $FeeModel->where('sid', $sid)->findAll();

        echo view('Student/Header');
        echo view('/Student/FeeDocument2', ['fees' => $fee]);
    }

    public function feedocumentsave()
    {
        $session = session();
        $sid = $session->get('id');

        $filename = $this->request->getFile('filename');
        $paymentdate = $this->request->getVar('paymentdate');
        $transactionid = $this->request->getVar('transactionid');

        $FeeModel = new FeeModel();
        $CourseModel = new CourseModel();
        $AdmissionModel = new AdmissionModel();

        $admission = $AdmissionModel->where('id', $sid)->first();

        $course = $CourseModel->find($admission['courseid']);

        $totalFee = isset($course['fee']) ? $course['fee'] : 0;

        $fee = $FeeModel->where('sid', $sid)->where('installment', '')->orderBy('installment_number', 'DESC')->first();

        $feeArray = [
            'paymentdate' => $paymentdate,
            'transactionid' => $transactionid,
            'totalfee' => $totalFee,
            'mode' => 'online'

        ];

        $uploadPath = 'Uploads/feedocument/' . $sid . '/';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($filename->isValid() && !$filename->hasMoved()) {

            if ($fee && !empty($fee['filename'])) {
                $oldFilePath = $uploadPath . $fee['filename'];
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $newFileName = $transactionid . '.' . $filename->getClientExtension();
            $filename->move($uploadPath, $newFileName);

            $feeArray['filename'] = $newFileName;
        }
        if ($fee) {
            $result = $FeeModel->update($fee['id'], $feeArray);
            // print_r($result);exit;
            if ($result) {
                session()->setFlashdata('success', '<b style="color:green;">Fee Document Updated Successfully!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            } else {
                session()->setFlashdata('error', '<b style="color:red;">Failed to update the Fee Document!</b>');
                return redirect()->to(base_url('/Student/feedocument/list'));
            }
        }
    }
    public function list()
    {
        $session = session();
        $sid = $session->get('id');

        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $fee = $FeeModel->where('sid', $sid)->findAll();

        $AdmissionModel = new AdmissionModel();
        $data['StudentData'] = $AdmissionModel->findAll();

        // $feeDocumentModel = new FeeDocumentModel();
        // $feeDocument = $feeDocumentModel->where('sid', $sid)->findAll();

        // print_r($data['StudentData']);
        // exit;

        echo view('/Student/Header');
        echo view('/Student/FeeDocumentList', ['fees' => $fee]);
    }

    public function feereceipt($id = null)
    {
        $session = session();

        $cmsMaster = new CmsModel();
        $data['companydata'] = $cmsMaster->findAll();

        $BatchModel = new BatchModel();
        $data['BatchData'] = $BatchModel->findAll();

        $CourseModel = new CourseModel();
        $data['CourseData'] = $CourseModel->findAll();

        $FeeModel = new FeeModel();
        $data['feeData'] = $FeeModel->where('sid', $id)->findAll();

        if (!empty($data['feeData'])) {
            $feeAmount = $data['feeData'][0]['paidfee'];
        } else {
            $feeAmount = 0;
        }

        $amountInWords = $this->convert_number_to_words($feeAmount);
        $data['AmountInWords'] = $amountInWords;

        $db = \Config\Database::connect();
        $admissionModel = new AdmissionModel();

        // Fetch student data
        $data['StudentData'] = $admissionModel
            ->select('admission.*, admission.id AS studid, fee.*, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime, branch.branchname AS branchname, collegename.collegename AS collegename')
            ->join('course', 'course.courseid = admission.courseid', 'left')
            ->join('batch', 'batch.batchid = admission.batchid', 'left')
            ->join('branch', 'branch.id = admission.branchid', 'left')
            ->join('collegename', 'collegename.id = admission.collegeid', 'left')
            ->join('fee', 'fee.sid = admission.id')
            ->where('admission.status', 1)
            ->where('admission.flag', 1)
            ->where('fee.id', $id)
            ->orderBy('admission.id', 'DESC')
            ->findAll();

        if (empty($data['StudentData'])) {
            return redirect()->to('/error')->with('error', 'Student data not found.');
        }

        // Get current year
        $currentYear = date('Y');

        // Count all fee receipts issued in the current year
        $receiptCount = $db->table('fee')
            ->where('YEAR(cashdate)', $currentYear)
            ->countAllResults();

        // Increment count for new receipt
        $receiptCount += 1;

        // Format the receipt number (Example: 20250001)
        $formattedReceiptCount = str_pad($receiptCount, 4, '0', STR_PAD_LEFT);
        $data['receiptNumber'] = $currentYear . $formattedReceiptCount;

        return view('/Student/feereceipt', $data);
    }


    // public function downloadPdf($id)
    // {
    //     $session = session();

    //     // Reuse data fetching logic
    //     $BatchModel = new BatchModel();
    //     $data['BatchData'] = $BatchModel->findAll();

    //     $CourseModel = new CourseModel();
    //     $data['CourseData'] = $CourseModel->findAll();

    //     $FeeModel = new FeeModel();
    //     $data['feeData'] = $FeeModel->where('sid', $id)->findAll();

    //     if (!empty($data['feeData'])) {
    //         $feeAmount = $data['feeData'][0]['paidfee'];
    //     } else {
    //         $feeAmount = 0;
    //     }

    //     $amountInWords = $this->convert_number_to_words($feeAmount);
    //     $data['AmountInWords'] = $amountInWords;

    //     $db = \Config\Database::connect();
    //     $admissionModel = new AdmissionModel();

    //     // Fetch student data
    //     $data['StudentData'] = $admissionModel
    //         ->select('admission.*, admission.id AS studid, fee.*, course.course, course.fee, batch.batchname, batch.starttime, batch.endtime, branch.branchname AS branchname, collegename.collegename AS collegename')
    //         ->join('course', 'course.courseid = admission.courseid', 'left')
    //         ->join('batch', 'batch.batchid = admission.batchid', 'left')
    //         ->join('branch', 'branch.id = admission.branchid', 'left')
    //         ->join('collegename', 'collegename.id = admission.collegeid', 'left')
    //         ->join('fee', 'fee.sid = admission.id')
    //         ->where('admission.status', 1)
    //         ->where('admission.flag', 1)
    //         ->where('fee.id', $id)
    //         ->orderBy('admission.id', 'DESC')
    //         ->findAll();

    //     // Include the Dompdf library
    //     require_once APPPATH . 'Libraries/dompdf/autoload.inc.php';

    //     // Instantiate Dompdf
    //     $dompdf = new Dompdf();

    //     // Load HTML content (view file content here)
    //     $html = view('/Student/feereceipt', $data);

    //     // Load the HTML into Dompdf
    //     $dompdf->loadHtml($html);

    //     // (Optional) Set paper size
    //     $dompdf->setPaper('A4', 'portrait');

    //     // Render the PDF (first pass)
    //     $dompdf->render();

    //     // Output the generated PDF (stream it to the browser)
    //     $dompdf->stream("receipt_$id.pdf", array("Attachment" => 1)); // Attachment=1 to download the file
    // }


    private function convert_number_to_words($feeAmount)
    {
        $words = array(
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety'
        );

        if (!is_numeric($feeAmount) || $feeAmount < 0) {
            return 'Invalid amount';
        }

        if ($feeAmount <= 20) {
            return $words[$feeAmount];
        }

        $result = "";

        if ($feeAmount >= 1000) {
            $thousands = intval($feeAmount / 1000);
            $feeAmount = $feeAmount % 1000;
            $result .= $words[$thousands] . " Thousand ";
        }

        if ($feeAmount >= 100) {
            $hundreds = intval($feeAmount / 100);
            $feeAmount = $feeAmount % 100;
            $result .= $words[$hundreds] . " Hundred ";
        }

        if ($feeAmount >= 20) {
            $tens = intval($feeAmount / 10) * 10;
            $feeAmount = $feeAmount % 10;
            $result .= $words[$tens] . " ";
        }

        if ($feeAmount > 0) {
            $result .= $words[$feeAmount];
        }

        return trim($result);
    }


    public function delete($id = null)
    {
        $feeDocumentModel = new FeeDocumentModel();
        //$feeDocument = $feeDocumentModel->findAll();

        if ($id) {
            $status = $feeDocumentModel->where('id', $id)->delete();
            if ($status) {
                session()->setFlashdata('success', '<b style="color:green;">Call Inquiry Added Successfully!</b>');
                return redirect()->to(base_url('/Student/feedocument'));
                // echo '<script type="text/javascript">';
                // echo 'alert("Document Deleted Successfully!");';
                // echo 'window.location.href = "' . base_url('/Student/feedocument') . '"';
                // echo '</script>';
            } else {
                session()->setFlashdata('success', '<b style="color:green;">Call Inquiry Added Successfully!</b>');
                return redirect()->to(base_url('/Student/feedocument'));
                // echo '<script type="text/javascript">';
                // echo 'alert("Error Occured!");';
                // echo 'window.location.href = "' . base_url('/Student/feedocument') . '"';
                // echo '</script>';
            }
        }
    }
}
