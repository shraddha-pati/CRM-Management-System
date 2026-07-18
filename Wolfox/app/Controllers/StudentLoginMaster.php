<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use App\Models\CourseModel;
use App\Models\CmsModel;




class StudentLoginMaster extends BaseController
{
    public function login()
    {
        echo view('/student/login');
    }

    public function save()
    {

        $session = session();

        $Username = $this->request->getVar('Username');
        //    exit;
        $Password = $this->request->getVar('Password');

        $AdmissionModel = new AdmissionModel();
        $AdmissionModel = new AdmissionModel();

        $data = $AdmissionModel
            ->select('c.*, a.*, b.*, cn.*, f.*, bn.*, a.id as studentid')
            ->join('course c', 'c.courseid = a.courseid', 'left')
            ->from('admission a')
            ->join('batch b', 'a.batchid = b.batchid', 'left')
            ->join('collegename cn', 'a.collegeid = cn.id', 'left')
            ->join('fee f', 'a.id = f.sid', 'left')
            ->join('branch bn', 'a.branchid = bn.id', 'left')
            ->where('a.phoneno', $Username)
            ->orWhere('a.whatsappno', $Username)
            // ->where('a.status',1)

            ->limit(1)
            ->first();


        if ($data) {
            if ($data['status'] == 4) {
                session()->setFlashdata('block', '<b style="color:red;">Access Permission denied by Wolfox</b>');
                return redirect()->to(base_url('/student/login'));
            }
            if ($data['status'] != 1) {
                session()->setFlashdata('error', '<b style="color:red;">Your Account Verofication Pending From Wolfox</b>');
                return redirect()->to(base_url('/student/login'));
            } else {
                if ($data['newpassword'] == 1) {

                    if ($Password == $data['password']) {

                        $session->set('id', $data['studentid']);
                        $session->set('firstname', $data['firstname']);
                        $session->set('middlename', $data['middlename']);
                        $session->set('lastname', $data['lastname']);
                        $session->set('StudentId', $data['StudentId']);
                        $session->set('phoneno', $data['phoneno']);
                        $session->set('whatsappno', $data['whatsappno']);
                        $session->set('email', $data['email']);
                        $session->set('pstreet', $data['pstreet']);
                        $session->set('pcity', $data['pcity']);
                        $session->set('ppincode', $data['ppincode']);
                        $session->set('pstate', $data['pstate']);

                        $session->set('college', $data['collegename']);
                        $session->set('branch', $data['branchname']);
                        $session->set('course', $data['course']);
                        $session->set('duration', $data['duration']);
                        $session->set('fee', $data['fee']);

                        $session->set('joiningdate', $data['joiningdate']);
                        $session->set('batch', $data['batchname']);
                        $session->set('batchid', $data['batchid']);


                        $session->set('totalfee', $data['totalfee']);
                        $session->set('paidfee', $data['paidfee']);
                        $session->set('remainingfee', $data['remainingfee']);


                        $session->set('profile', $data['profile']);
                        $session->set('resume', $data['resume']);
                        $session->set('adharcard', $data['adharcard']);
                        $session->set('clgdoc', $data['clgdoc']);
                        $session->set('docstatus', $data['docstatus']);

                        session()->setFlashdata('success', '<b style="color:green;">Login SuccessFull!!</b>');
                        return redirect()->to(base_url('/student/account'));
                    } else {
                        session()->setFlashdata('error', '<b style="color:red;">Incorrect Username or Password!</b>');
                        return redirect()->to(base_url('/student/login'));
                    }
                } else {
                    if ($Password == $data['newpassword']) {

                        $session->set('id', $data['studentid']);
                        $session->set('firstname', $data['firstname']);
                        $session->set('middlename', $data['middlename']);
                        $session->set('lastname', $data['lastname']);
                        $session->set('StudentId', $data['StudentId']);
                        $session->set('phoneno', $data['phoneno']);
                        $session->set('whatsappno', $data['whatsappno']);
                        $session->set('email', $data['email']);
                        $session->set('pstreet', $data['pstreet']);
                        $session->set('pcity', $data['pcity']);
                        $session->set('ppincode', $data['ppincode']);
                        $session->set('pstate', $data['pstate']);

                        $session->set('college', $data['collegename']);
                        $session->set('branch', $data['branchname']);
                        $session->set('course', $data['course']);
                        $session->set('duration', $data['duration']);
                        $session->set('fee', $data['fee']);

                        $session->set('joiningdate', $data['joiningdate']);
                        $session->set('batch', $data['batchname']);
                        $session->set('batchid', $data['batchid']);


                        $session->set('totalfee', $data['totalfee']);
                        $session->set('paidfee', $data['paidfee']);
                        $session->set('remainingfee', $data['remainingfee']);


                        $session->set('profile', $data['profile']);
                        $session->set('resume', $data['resume']);
                        $session->set('adharcard', $data['adharcard']);
                        $session->set('clgdoc', $data['clgdoc']);
                        $session->set('docstatus', $data['docstatus']);

                        session()->setFlashdata('success', '<b style="color:green;">Login SuccessFull!!</b>');

                        if (empty($data['profile']) || empty($data['adharcard']) || empty($data['clgdoc'])) {
                            session()->setFlashdata('uploadmessage', 'Please upload your documents to continue.');
                        }
                        return redirect()->to(base_url('/student/account'));
                    } else {
                        session()->setFlashdata('error', '<b style="color:red;">Incorrect Username or Password!</b>');
                        return redirect()->to(base_url('/student/login'));
                    }
                }
            }
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Incorrect Username or Password!</b>');
            return redirect()->to(base_url('/student/login'));
        }
    }

    public function changepassword()
    {
        $cmsmodel = new CmsModel();
        $companydata = $cmsmodel->findAll();

        $session = session();

        $id = $this->request->getVar('sid');
        $Password = $this->request->getVar('password');


        $AdmissionModel = new AdmissionModel();
        $AdmissionModel = new AdmissionModel();

        $data = $AdmissionModel
            ->select('c.*, a.*, b.*, cn.*, f.*, bn.*, a.id as studentid')
            ->join('course c', 'c.courseid = a.courseid', 'left')
            ->from('admission a')
            ->join('batch b', 'a.batchid = b.batchid', 'left')
            ->join('collegename cn', 'a.collegeid = cn.id', 'left')
            ->join('fee f', 'a.id = f.sid', 'left')
            ->join('branch bn', 'a.branchid = bn.id', 'left')
            ->where('a.status', 1)

            ->limit(1)
            ->first();


        $session->set('profile', $data['profile']);
        $session->set('resume', $data['resume']);
        $session->set('adharcard', $data['adharcard']);
        $session->set('clgdoc', $data['clgdoc']);
        $session->set('docstatus', $data['docstatus']);

        $update = [
            'newpassword' => $Password
        ];

        $AdmissionModel = new AdmissionModel();
        $student = $AdmissionModel->find($id);

        if (!$student) {
            session()->setFlashdata('error', '<b style="color:red;">Student not found!</b>');
            return redirect()->to(base_url('/student/account'));
        }

        $data = $AdmissionModel->update($id, $update);

        if ($data) {

            $to = $student['email'];
            $subject = 'Password Update Confirmation';

            $message = '
            <div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                
                <!-- HEADER -->
                <div style="background: #0073e6; padding: 20px; text-align: center; display: block !important;">
                    <img src="' . base_url('/uploads/CmsMaster/' . $companydata[0]['id'] . '/' . $companydata[0]['logo']) . '" alt="Company Logo" style="max-width: 150px; display: block !important;">
                </div>
        
                <!-- BODY -->
                <div style="background: #ffffff; padding: 25px; display: block !important;">
                    <h2 style="color: #333; text-align: center; margin-bottom: 20px; display: block !important;">Password Update Confirmation</h2>
                    <p style="font-size: 16px; color: #555; line-height: 1.6;">Hello <b>' . $student['firstname'] . '</b>,</p>
                    <p style="font-size: 16px; color: #555;">Warm regards from <b>' . $companydata[0]['name'] . '</b>. Here is your new password for the Wolfox App.</p>
                    
                    <div style="background: #e8f5e9; padding: 15px; border-radius: 5px; text-align: center; font-size: 20px; font-weight: bold; color: #008000;">
                        Your Updated Password: <span style="font-size: 24px;">' . $Password . '</span>
                    </div>
        
                    <p style="font-size: 16px; color: #555; margin-top: 20px;">If you have any questions, do not hesitate to contact us:</p>
                    <p style="font-size: 16px; color: #333;"><b>Email:</b> ' . $companydata[0]['email1'] . '<br>
                       <b>Phone:</b> ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing <b>WOLFOX SERVICES PVT. LTD.</b></p>
                </div>
        
                <!-- FOOTER (Prevent Quoted-Text Hiding) -->
                <div style="background: black; color: #ffffff; text-align: center; padding: 15px; display: block !important;">
                    <p style="margin: 5px 0; font-size: 14px;"><b>' . $companydata[0]['name'] . '</b></p>
                    <p style="margin: 5px 0; font-size: 14px;">' . $companydata[0]['address'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;">Phone: ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;"><a href="http://www.wolfox.in" target="_blank" style="color:rgb(0, 85, 212); text-decoration: none;">www.wolfox.in</a></p>
                    <br><br> <!-- Prevent Gmail from hiding footer -->
                </div>
            </div>
        ';

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('sawantsuraj8413@gmail.com', 'Wolfox');
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                echo "Email sent successfully";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }



            session()->setFlashdata('password', '<b style="color:green;">Password Updated Successfully!! You can now login with your updated Password</b>');
            return redirect()->to(base_url('/student/login'));


            if (empty($data['profile']) || empty($data['adharcard']) || empty($data['clgdoc'])) {
                session()->setFlashdata('uploadmessage', 'Please upload your documents to continue.');
            }
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Failed to Update The Password!!</b>');
            return redirect()->to(base_url('/student/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session = session_destroy();
        return redirect()->to(base_url('/student/login'));
    }

    public function sentOtp()
    {
        $cmsmodel = new CmsModel();
        $companydata = $cmsmodel->findAll();

        $session = session();
        $id = $session->get('id');

        $AdmissionModel = new AdmissionModel();
        $student = $AdmissionModel->find($id);

        $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $update = [
            'otp' => $otp
        ];

        $data = $AdmissionModel->where('id', $id)->update($id, $update);
        if ($data) {

            $to = $student['email'];
            $subject = 'Password Change Request';

            $message = '
            <div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                
                <!-- HEADER -->
                <div style="background: #0073e6; padding: 20px; text-align: center;">
                    <img src="' . base_url('/uploads/CmsMaster/' . $companydata[0]['id'] . '/' . $companydata[0]['logo']) . '" alt="Company Logo" style="max-width: 150px;">
                </div>
        
                <!-- BODY -->
                <div style="background: #ffffff; padding: 25px;">
                    <h2 style="color: #333; text-align: center; margin-bottom: 20px;">Password Change Request</h2>
                    <p style="font-size: 16px; color: #555; line-height: 1.6;">Hello <b>' . $student['firstname'] . '</b>,</p>
                    <p style="font-size: 16px; color: #555;">Warm regards from <b>' . $companydata[0]['name'] . '</b>. Here is your requested Wolfox App changed password.</p>
                    
                    <div style="background: #e8f5e9; padding: 15px; border-radius: 5px; text-align: center; font-size: 20px; font-weight: bold; color: #008000;">
                        Your OTP: <span style="font-size: 24px;">' . $otp . '</span>
                    </div>
        
                    <p style="font-size: 16px; color: #555; margin-top: 20px;">If you have any questions, do not hesitate to contact us:</p>
                    <p style="font-size: 16px; color: #333;"><b>Email:</b> ' . $companydata[0]['email1'] . '<br>
                       <b>Phone:</b> ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing <b>WOLFOX SERVICES PVT. LTD.</b></p>
                </div>
        
                <!-- FOOTER -->
                <div style="background:black; color: #ffffff; text-align: center; padding: 15px;">
                    <p style="margin: 5px 0; font-size: 14px;"><b>' . $companydata[0]['name'] . '</b></p>
                    <p style="margin: 5px 0; font-size: 14px;">' . $companydata[0]['address'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;">Phone: ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;"><a href="http://www.wolfox.in" target="_blank" style="color:rgb(0, 85, 212); text-decoration: none;">www.wolfox.in</a></p>
                </div>
            </div>
        ';
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('sawantsuraj8413@gmail.com', 'Wolfox');
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                // echo "Email sent successfully";
            } else {
                // $data = $email->printDebugger(['headers']);
                // print_r($data);
            }

            return $this->response->setJSON([
                'status' => 'success',
                'message' => $otp
            ]);
        }
    }

    public function verifyOTP($otp = null)
    {

        $session = session();
        $id = $session->get('id');

        $AdmissionModel = new AdmissionModel();

        $data = $AdmissionModel->where('id', $id)->first();

        // echo $otp;




        if (strlen($otp) >= 6) {
            if ($otp == $data['otp']) {
                return $this->response->setJSON([
                    'message' => 'otp'

                ]);
            } else {
                return $this->response->setJSON([
                    'message' => 'nootp'

                ]);
            }
        }

        if (strlen($otp) < 6) {
            return $this->response->setJSON([
                'message' => 'otplen'

            ]);
        }
    }


    public function checkForEmail($phone = null)
    {
        $cmsmodel = new CmsModel();
        $companydata = $cmsmodel->findAll();

        // $session = session();
        // $id = $session->get('id');

        $AdmissionModel = new AdmissionModel();
        $student = $AdmissionModel
            ->where('whatsappno', $phone)
            ->first();

        // echo $phone;

        // print_r($student);
        // exit;

        if ($student) {

            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

            $updateotp = [
                'otp' => $otp
            ];

            // print_r($update);
            // exit;

            $data = $AdmissionModel
                ->where('whatsappno', $phone)
                ->set($updateotp)
                ->update();
            if ($data) {

                // print_r($data);
                // exit;

                // echo $student['email'];
                // exit;

                $to = $student['email'];
                $subject = 'Password Change Request';

                $message = '
                <div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    
                    <!-- HEADER -->
                    <div style="background: #0073e6; padding: 20px; text-align: center;">
                        <img src="' . base_url('/uploads/CmsMaster/' . $companydata[0]['id'] . '/' . $companydata[0]['logo']) . '" alt="Company Logo" style="max-width: 150px;">
                    </div>
            
                    <!-- BODY -->
                    <div style="background: #ffffff; padding: 25px;">
                        <h2 style="color: #333; text-align: center; margin-bottom: 20px;">Password Change Request</h2>
                        <p style="font-size: 16px; color: #555; line-height: 1.6;">Hello <b>' . $student['firstname'] . '</b>,</p>
                        <p style="font-size: 16px; color: #555;">Warm regards from <b>' . $companydata[0]['name'] . '</b>. Here is your requested Wolfox App changed password.</p>
                        
                        <div style="background: #e8f5e9; padding: 15px; border-radius: 5px; text-align: center; font-size: 20px; font-weight: bold; color: #008000;">
                            Your OTP: <span style="font-size: 24px;">' . $otp . '</span>
                        </div>
            
                        <p style="font-size: 16px; color: #555; margin-top: 20px;">If you have any questions, do not hesitate to contact us:</p>
                        <p style="font-size: 16px; color: #333;"><b>Email:</b> ' . $companydata[0]['email1'] . '<br>
                           <b>Phone:</b> ' . $companydata[0]['phonenum1'] . '</p>
                        <p style="font-size: 16px; color: #555;">Thank you for choosing <b>WOLFOX SERVICES PVT. LTD.</b></p>
                    </div>
            
                    <!-- FOOTER -->
                    <div style="background:black; color: #ffffff; text-align: center; padding: 15px;">
                        <p style="margin: 5px 0; font-size: 14px;"><b>' . $companydata[0]['name'] . '</b></p>
                        <p style="margin: 5px 0; font-size: 14px;">' . $companydata[0]['address'] . '</p>
                        <p style="margin: 5px 0; font-size: 14px;">Phone: ' . $companydata[0]['phonenum1'] . '</p>
                        <p style="margin: 5px 0; font-size: 14px;"><a href="http://www.wolfox.in" target="_blank" style="color:rgb(0, 85, 212); text-decoration: none;">www.wolfox.in</a></p>
                    </div>
                </div>
                ';
                $email = \Config\Services::email();
                $email->setTo($to);
                $email->setFrom('sawantsuraj8413@gmail.com', 'Wolfox');
                $email->setSubject($subject);
                $email->setMessage($message);

                if ($email->send()) {
                    // echo "Email sent successfully";
                } else {
                    // $data = $email->printDebugger(['headers']);
                    // print_r($data);
                }

                return $this->response->setJSON([
                    'status' => 'otp',
                    'message' => $otp
                ]);
            }
        } else {
            return $this->response->setJSON([
                'status' => 'nootp',
                'message' => 'username not found'
            ]);
        }
    }

    public function checkForOtp($Phone = null, $Otp = null)
    {


        $AdmissionModel = new AdmissionModel();
        $student = $AdmissionModel
            // ->where('otp',$Otp)
            // ->where('phoneno',$Phone)
            ->where('whatsappno', $Phone)
            ->first();

        if ($student['otp'] == $Otp) {
            return $this->response->setJSON([
                'status' => 'ok',

            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'no',

            ]);
        }
    }


    public function forgotpassword()
    {
        $cmsmodel = new CmsModel();
        $companydata = $cmsmodel->findAll();

        // $session = session();
        // $id = $this->request->getVar('sid');
        $Phone = $this->request->getVar('Phone');

        $Password = $this->request->getVar('newPassword');

        $update = [
            'newpassword' => $Password
        ];

        $AdmissionModel = new AdmissionModel();
        $student = $AdmissionModel->where('whatsappno', $Phone)->first();

        // print_r($student);
        // exit;


        if (!$student) {
            session()->setFlashdata('error', '<b style="color:red;">Student not found!</b>');
            return redirect()->to(base_url('/student/account'));
        }

        $data = $AdmissionModel
            ->where('whatsappno', $Phone)
            ->set($update)
            ->update();

        if ($data) {

            $to = $student['email'];
            $subject = 'Password Update Confirmation';

            $message = '
            <div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; background-color: #f4f4f4; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                
                <!-- HEADER -->
                <div style="background: #0073e6; padding: 20px; text-align: center; display: block !important;">
                    <img src="' . base_url('/uploads/CmsMaster/' . $companydata[0]['id'] . '/' . $companydata[0]['logo']) . '" alt="Company Logo" style="max-width: 150px; display: block !important;">
                </div>
        
                <!-- BODY -->
                <div style="background: #ffffff; padding: 25px; display: block !important;">
                    <h2 style="color: #333; text-align: center; margin-bottom: 20px; display: block !important;">Password Update Confirmation</h2>
                    <p style="font-size: 16px; color: #555; line-height: 1.6;">Hello <b>' . $student['firstname'] . '</b>,</p>
                    <p style="font-size: 16px; color: #555;">Warm regards from <b>' . $companydata[0]['name'] . '</b>. Here is your new password for the Wolfox App.</p>
                    
                    <div style="background: #e8f5e9; padding: 15px; border-radius: 5px; text-align: center; font-size: 20px; font-weight: bold; color: #008000;">
                        Your Updated Password: <span style="font-size: 24px;">' . $Password . '</span>
                    </div>
        
                    <p style="font-size: 16px; color: #555; margin-top: 20px;">If you have any questions, do not hesitate to contact us:</p>
                    <p style="font-size: 16px; color: #333;"><b>Email:</b> ' . $companydata[0]['email1'] . '<br>
                       <b>Phone:</b> ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing <b>WOLFOX SERVICES PVT. LTD.</b></p>
                </div>
        
                <!-- FOOTER (Prevent Quoted-Text Hiding) -->
                <div style="background: black; color: #ffffff; text-align: center; padding: 15px; display: block !important;">
                    <p style="margin: 5px 0; font-size: 14px;"><b>' . $companydata[0]['name'] . '</b></p>
                    <p style="margin: 5px 0; font-size: 14px;">' . $companydata[0]['address'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;">Phone: ' . $companydata[0]['phonenum1'] . '</p>
                    <p style="margin: 5px 0; font-size: 14px;"><a href="http://www.wolfox.in" target="_blank" style="color:rgb(0, 85, 212); text-decoration: none;">www.wolfox.in</a></p>
                    <br><br> <!-- Prevent Gmail from hiding footer -->
                </div>
            </div>
        ';

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('sawantsuraj8413@gmail.com', 'Wolfox');
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                echo "Email sent successfully";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }

            session()->setFlashdata('password', '<b style="color:green;">Password Updated Successfully!! You can now login with your updated Password</b>');
            return redirect()->to(base_url('/student/login'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Failed to Update The Password!!</b>');
            return redirect()->to(base_url('/student/login'));
        }
    }


    public function addEmail()
    {
        $session = session();
        $id = $session->get('id');

        $Email = $this->request->getVar('Email');

        $AdmissionModel = new AdmissionModel();

        $update = [
            'email' => $Email
        ];

        $data = $AdmissionModel->where('id', $id)->update($id, $update);

        if ($data) {
            session()->setFlashdata('updated', '<b style="color:red;">Email Updated Successfully!</b>');
            return redirect()->to(base_url('/student/account'));
        } else {
        }
    }

    public function ProfileEdit($id = null)
    {

        $AdmissionModel = new AdmissionModel();

        $data['StudentData'] = $AdmissionModel->where('id', $id)->first();

        echo view('/student/Header');

        echo view('/student/profileedit', $data);
    }

    public function ProfileUpdate()
    {

        $session = session();
        $sid = $session->get('id');
        $firstname = $this->request->getVar('FirstName');
        $MiddleName = $this->request->getVar('MiddleName');
        $LastName = $this->request->getVar('LastName');
        $PhoneNo = $this->request->getVar('PhoneNo');
        $WhatsappNo = $this->request->getVar('WhatsappNo');
        $DOB = $this->request->getVar('DOB');
        $Street = $this->request->getVar('Street');
        $City = $this->request->getVar('City');
        $State = $this->request->getVar('State');
        $Pincode = $this->request->getVar('Pincode');
        $instaid = $this->request->getVar('instaid');


        $profileData = [
            'firstname' => $firstname,
            'middlename' => $MiddleName,
            'lastname' => $LastName,
            'phoneno' => $PhoneNo,
            'whatsappno' => $WhatsappNo,
            'dob' => $DOB,
            'pstreet' => $Street,
            'pcity' => $City,
            'pstate' => $State,
            'ppincode' => $Pincode,
            'instaid' => $instaid,

        ];
        $AdmissionModel = new AdmissionModel();
        $data =    $AdmissionModel->where('id', $sid)->update($sid, $profileData);

        if ($data) {
            session()->setFlashdata('profile', '<b style="color:green;"> Profile Updated Successfully!</b>');
            return redirect()->to(base_url('/student/account'));
        } else {
            session()->setFlashdata('error', '<b style="color:red;">Error Occurred!</b>');
            return redirect()->to(base_url('/student/account'));
        }
    }


    public function Birthday()
    {

        $currentDate = date('Y-m-d');
        $AdmissionModel = new AdmissionModel();

        $data['birthday'] = $AdmissionModel->where('dob', $currentDate)->findAll();

        echo view('/student/Header');
        echo view('/student/birthday', $data);
    }

    public function Idcard()
    {
        echo view('/student/Header');
        echo view('/student/idcard');
    }
}
