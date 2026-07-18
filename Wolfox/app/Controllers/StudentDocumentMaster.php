<?php 
namespace App\Controllers;
//use App\Models\StudentDocumentModel;
use App\Models\AdmissionModel;

class StudentDocumentMaster extends BaseController
{
    public function index()
    {
        echo view('/Student/Header');
        echo view('/Student/documents');
    }

    public function save()
    {
        $session = session();
        $id = $session->get('id');

        $CV = $this->request->getFile('CV');  // Only handling CV file
        

        if ($CV->isValid()) {
            $cv_ext = $CV->getClientExtension();

            // Allow only PDF files
            if ($cv_ext !== 'pdf') {
                echo '<script type="text/javascript">alert("Only PDF files are allowed for CV!");</script>';
                return;
            }

            $uploadPath = "./uploads/studentdocument/" . $id;
            $cvFileName = 'studentCV.' . $cv_ext;
            $cvFilePath = $uploadPath . '/' . $cvFileName;

            // Create directory if not exists
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            // Delete existing CV before uploading a new one
            if (file_exists($cvFilePath)) {
                unlink($cvFilePath);
            }

            // Move uploaded file
            $CV->move($uploadPath, $cvFileName);

            // Update filename in the database
            $document = ['resume' => $cvFileName];
            $AdmissionModel = new AdmissionModel();
            $AdmissionModel->where('id', $id)->update($id, $document);

            session()->setFlashdata('success', '<b style="color:green;">Document Uploaded Successfully!</b>');
            return redirect()->to(base_url('/student/document/list'));
            // echo '<script type="text/javascript">';
            // echo 'alert("Document Uploaded Successfully!");';
            // echo 'window.location.href = "' . base_url('/student/document/list') . '";';
            // echo '</script>';
        }
    }

    public function list()
    {
       
        $session=session();
         $studentid=$session->get('id');//exit;

        $AdmissionModel = new AdmissionModel();
        $data['studentdata'] = $AdmissionModel->find($studentid);

        if (!is_array($data)) {
            $data = ['studentdata']; 
        }
        //print_r($data['studentdata']);exit;
        echo view('/Student/Header');


        echo view('/Student/documentslist',['studentdata' => $data]);

    }
    public function edit($id=null)
    {
        $docremark = isset($_GET['docremark']) ? $_GET['docremark'] : null;
        $studentdata['docremark'] = $docremark;
        $AdmissionModel = new AdmissionModel();
        $data['studentdata'] = $AdmissionModel->find($id);
       //print_r($data['studentdata']);exit;
        echo view('/Student/documentedit',$data);
    }

    public function update()
    {
        $session = session();
        $id = $session->get('id');
        
        $studentCV = $this->request->getFile('CV');//exit;
         $studentImage = $this->request->getFile('Image');
        $studentadhar = $this->request->getFile('AdharCard');
        $studentclgdoc = $this->request->getFile('ClgDoc');
        
        $uploadPath = "./uploads/studentdocument/" . $id;
        
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }
        
        $AdmissionModel = new AdmissionModel();
        
     
        $existingFiles = $AdmissionModel->where('id', $id)->first();
        //print_r($existingFiles);exit;
     
        function uploadFile($file, $uploadPath, $fileName, $allowedTypes, $existingFile) {
            if ($file->isValid()) {
                $fileExt = $file->getClientExtension();
                $filePath = $uploadPath . '/' . $fileName;
        
                
                if ($existingFile && file_exists($uploadPath . '/' . $existingFile)) {
                    unlink($uploadPath . '/' . $existingFile);
                }
        
               
                return $file->move($uploadPath, $fileName) ? $fileName : false;
            }
            return false;
        }
        
        $document = [];
        
  
        if ($studentImage) {
            $profileFileName = uploadFile($studentImage, $uploadPath, 'studentImage.' . $studentImage->getClientExtension(), ['jpg', 'jpeg', 'png'], $existingFiles['profile'] ?? null);
            // print_r($profileFileName);exit;
            if ($profileFileName) {
                $document['profile'] = $profileFileName;
                //print_r($document['profile']);exit;
            }
        }
        

        if ($studentCV) {
            $resumeFileName = uploadFile($studentCV, $uploadPath, 'studentCV.' . $studentCV->getClientExtension(), ['jpg', 'jpeg', 'png'], $existingFiles['resume'] ?? null);
            if ($resumeFileName) {
                $document['resume'] = $resumeFileName;
            }
        }
           
        if ($studentadhar) {
            $adharFileName = uploadFile($studentadhar, $uploadPath, 'studentadhar.' . $studentadhar->getClientExtension(), ['jpg', 'jpeg', 'png'], $existingFiles['adharcard'] ?? null);
            if ($adharFileName) {
                $document['adharcard'] = $adharFileName;
            }
        }
    
       
         if ($studentclgdoc) {
            $clgDocFileName = uploadFile($studentclgdoc, $uploadPath, 'studentclgdoc.' . $studentclgdoc->getClientExtension(), ['pdf', 'jpg', 'jpeg', 'png'], $existingFiles['clgdoc'] ?? null);
            if ($clgDocFileName) {
                $document['clgdoc'] = $clgDocFileName;
            }
        }
    
        
      
        // if (!empty($document)) {
        //     $document['docstatus'] = 4; 
            
        //     $AdmissionModel->where('id', $id)->update($id, $document);
        // }
        
        if (!empty($document)) {
        
            if (!(count($document) === 1 && isset($document['profile']))) {
                $document['docstatus'] = 4; 
            }
        
            $AdmissionModel->where('id', $id)->update($id, $document);
        }
       
        session()->setFlashdata('success', '<b style="color:green;">Document Update Successfully!</b>');
        return redirect()->to(base_url('/student/document/list'));
    }

}