<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Admin/Inquiry/add', 'InquiryMaster::add');

$routes->get('/Admin/PhotoUpload/add', 'PhotoUpload::add');


$routes->get('/login', 'AdminLogin::add');
$routes->post('/login/save', 'AdminLogin::save');
// company master 

$routes->get('/Admin/companylist/list','CmsMaster::list');
$routes->get('/Admin/companyedit/edit/(:num)','CmsMaster::edit/$1');
$routes->post('/Admin/companylist/update','CmsMaster::update');

//Admisssion
$routes->get('/Admin/Admission/Form', 'AdmissionMaster::add');
$routes->post('/Admin/Admission/Save', 'AdmissionMaster::save');
$routes->get('/Admin/Admission/List', 'AdmissionMaster::list');
$routes->get('/Admin/Admission/Edit/(:num)', 'AdmissionMaster::edit/$1');
$routes->post('/Admin/Admission/Update', 'AdmissionMaster::update');
$routes->get('/Admin/Admission/Admit/(:num)', 'AdmissionMaster::admit/$1');
$routes->get('/Admin/Admission/joiningletter/(:num)','AdmissionMaster::joiningletter/$1');
$routes->post('/Admin/Admission/SaveFee', 'AdmissionMaster::saveFee');
$routes->post('/Admin/Admission/CheckFeeStatus', 'AdmissionMaster::checkFeeStatus');
$routes->get('/Admin/Admission/rejectedList', 'AdmissionMaster::rejectedList');
$routes->get('/Admin/Admission/CompletedList', 'AdmissionMaster::completedlist');
$routes->get('/Admin/Admission/completionletter/(:num)','AdmissionMaster::completionletter/$1');
$routes->get('/Admin/Admission/fee1/(:num)', 'AdmissionMaster::fee1/$1');
$routes->post('/Admin/Admission/feesave', 'AdmissionMaster::feesave');
$routes->get('/Admin/Admission/fee2/(:num)', 'AdmissionMaster::fee2/$1');
$routes->post('/Admin/Admission/fee2save', 'AdmissionMaster::fee2save');
$routes->get('/Admin/Admission/filteryearwise/(:num)','AdmissionMaster::filteryearwise/$1');
$routes->get('/Admin/Admission/filteryearwise','AdmissionMaster::filteryearwise');
$routes->get('/Admin/Admission/fee3/(:num)', 'AdmissionMaster::fee3/$1');
$routes->post('/Admin/Admission/fee3save', 'AdmissionMaster::fee3save');
$routes->post('/Student/ban', 'AdmissionMaster::ban');
$routes->post('/Student/unban', 'AdmissionMaster::unban');

$routes->get('/Student/banlist', 'AdmissionMaster::banlist');

// $routes->get('/Admin/Admission/searchlist', 'AdmissionMaster::completedlist');

$routes->get('/Admin/Admission/documentList', 'AdmissionMaster::documentlist');
$routes->get('/Admin/Admission/documentfilter','AdmissionMaster::documentfilter');
$routes->post('/Admin/Admission/documentverify', 'AdmissionMaster::documentverify');


$routes->get('/Admin/Admission/feereceipt/(:num)', 'AdmissionMaster::feereceipt/$1');
$routes->post('/Admin/Admission/confirmpayment', 'AdmissionMaster::confirmPayment');
$routes->post('/Admin/Admission/confirmdocument', 'AdmissionMaster::confirmDocument');





//Batch Detail
$routes->get('/Admin/Batch/Add', 'BatchMaster::add');
$routes->post('/Admin/Batch/save', 'BatchMaster::save');
$routes->get('/Admin/Batch/list', 'BatchMaster::list');
$routes->get('/Admin/Batch/edit/(:num)', 'BatchMaster::edit/$1');
$routes->post('/Admin/Batch/update', 'BatchMaster::update');
$routes->get('/Admin/Batch/delete/(:num)', 'BatchMaster::delete/$1');

//fee
$routes->get('/Admin/Fee/add', 'FeeMaster::add');
$routes->post('/Admin/Fee/save', 'FeeMaster::save');
$routes->get('/Admin/Fee/list', 'FeeMaster::list');
$routes->get('/Admin/Fee/edit/(:num)', 'FeeMaster::edit/$1');
$routes->post('/Admin/Fee/update', 'FeeMaster::update');
$routes->get('/Admin/Fee/delete/(:num)', 'FeeMaster::delete/$1');

// call inquiry
$routes->get('/Admin/CallInquiry/Form', 'CallInquiryMaster::add');
$routes->post('/Admin/CallInquiry/Save', 'CallInquiryMaster::save');
$routes->get('/Admin/CallInquiry/List', 'CallInquiryMaster::list');
$routes->get('/Admin/CallInquiry/Edit/(:num)', 'CallInquiryMaster::edit/$1');
$routes->post('/Admin/CallInquiry/Update', 'CallInquiryMaster::update');

//branch detail
$routes->get('/branch/add', 'BranchMaster::add');
$routes->post('/branch/save', 'BranchMaster::save');
$routes->get('/branch/list', 'BranchMaster::list');
$routes->get('/branch/edit/(:num)', 'BranchMaster::edit/$1');
$routes->post('/branch/update', 'BranchMaster::update');
$routes->get('/branch/delete/(:num)', 'BranchMaster::delete/$1');


//College Name detail
$routes->get('/collegename/add', 'CollegeNameMaster::add');
$routes->post('/collegename/save', 'CollegeNameMaster::save');
$routes->get('/collegename/list', 'CollegeNameMaster::list');
$routes->get('/collegename/edit/(:num)', 'CollegeNameMaster::edit/$1');
$routes->post('/collegename/update', 'CollegeNameMaster::update');
$routes->get('/collegename/delete/(:num)', 'CollegeNameMaster::delete/$1');


//Batch Detail
$routes->get('/Admin/Batch/Add', 'BatchMaster::add');
$routes->post('/Admin/Batch/save', 'BatchMaster::save');
$routes->get('/Admin/Batch/list', 'BatchMaster::list');
$routes->get('/Admin/Batch/edit/(:num)', 'BatchMaster::edit/$1');
$routes->post('/Admin/Batch/update', 'BatchMaster::update');
$routes->get('/Admin/Batch/delete/(:num)', 'BatchMaster::delete/$1');

//course
$routes->get('/Admin/Course/Form', 'CourseMaster::add');
$routes->post('/Admin/Course/Save', 'CourseMaster::save');
$routes->get('/Admin/Course/List', 'CourseMaster::list');
$routes->get('/Admin/Course/Edit/(:num)', 'CourseMaster::edit/$1');
$routes->post('/Admin/Course/Update', 'CourseMaster::update');
$routes->get('/Admin/DashBoard/list', 'AdminDashboard::list');

//inquiry
$routes->get('/Admin/Inquiry/add', 'InquiryMaster::add');
$routes->get('/Admin/Inquiry/form', 'InquiryMaster::form');
$routes->post('/Admin/Inquiry/save', 'InquiryMaster::save');
$routes->get('/Admin/Inquiry/list', 'InquiryMaster::list');
$routes->get('/Admin/Inquiry/edit/(:num)', 'InquiryMaster::edit/$1');
$routes->post('/Admin/Inquiry/update', 'InquiryMaster::update');
$routes->get('/Admin/Inquiry/delete/(:num)', 'InquiryMaster::delete/$1');
$routes->get('/Admin/Inquiry/modal/(:num)', 'InquiryMaster::modal/$1');
$routes->post('/Admin/Inquiry/checkWhatsappNumberExists', 'Inquiry::checkWhatsappNumberExists');
$routes->post('/Admin/Inquiry/addCollege', 'Inquiry::addCollege');

$routes->get('/Admin/Inquiry/pending', 'InquiryMaster::pendingList');

$routes->get('/Admin/Inquiry/checknumber/(:num)', 'InquiryMaster::checknumber/$1');
$routes->get('/Admin/Inquiry/addcollege', 'InquiryMaster::addcollege');
$routes->get('/Admin/Inquiry/fetchcollegenames', 'InquiryMaster::fetchcollegenames');


//attendance
$routes->get('/Admin/Attendence/list', 'AttendenceMaster::list');
$routes->get('/Admin/Attendence/slist/(:num)', 'AttendenceMaster::slist/$1');
$routes->get('/Admin/Attendence/mlist', 'AttendenceMaster::mlist');

$routes->get('admin/Attendence/batchList/(:num)', 'AttendenceMaster::batchList/$1');
//Readymade Project
$routes->get('/Admin/Project/add', 'ProjectMaster::add');
$routes->post('/Admin/Project/save', 'ProjectMaster::save');
$routes->get('/Admin/Project/list', 'ProjectMaster::list');
$routes->get('/Admin/Project/edit/(:num)', 'ProjectMaster::edit/$1');
$routes->post('/Admin/Project/update', 'ProjectMaster::update');
$routes->get('/Admin/Project/delete/(:num)', 'ProjectMaster::delete/$1');

//Interview Call
$routes->get('/Admin/InterviewCall/Add', 'InterviewCallMaster::add');
$routes->post('/Admin/InterviewCall/save', 'InterviewCallMaster::save');
$routes->get('/Admin/InterviewCall/list', 'InterviewCallMaster::list');
$routes->get('/Admin/InterviewCall/edit/(:num)', 'InterviewCallMaster::edit/$1');
$routes->post('/Admin/InterviewCall/update', 'InterviewCallMaster::update');
$routes->get('/Admin/InterviewCall/delete/(:num)', 'InterviewCallMaster::delete/$1');
$routes->get('/Admin/InterviewCall/fetch/(:num)', 'InterviewCallMaster::fetch/$1');

//CollegeProject 
$routes->get('/Admin/CollegeProject/Add', 'CollegeProjectMaster::add');
$routes->post('/Admin/CollegeProject/save', 'CollegeProjectMaster::save');
$routes->get('/Admin/CollegeProject/list', 'CollegeProjectMaster::list');
$routes->get('/Admin/CollegeProject/edit/(:num)', 'CollegeProjectMaster::edit/$1');
$routes->post('/Admin/CollegeProject/update', 'CollegeProjectMaster::update');
$routes->get('/Admin/CollegeProject/delete/(:num)', 'CollegeProjectMaster::delete/$1');


//Client Detail
$routes->get('/Admin/ClientMaster/Add', 'ClientMaster::add');
$routes->post('/Admin/ClientMaster/save', 'ClientMaster::save');
$routes->get('/Admin/ClientMaster/list', 'ClientMaster::list');
$routes->get('/Admin/ClientMaster/edit/(:num)', 'ClientMaster::edit/$1');
$routes->post('/Admin/ClientMaster/update', 'ClientMaster::update');
$routes->get('/Admin/ClientMaster/delete/(:num)', 'ClientMaster::delete/$1');

//Other Letters
$routes->get('/Admin/OtherLetter/Add', 'OtherLetterMaster::add');
$routes->post('/Admin/OtherLetter/save', 'OtherLetterMaster::save');
$routes->get('/Admin/OtherLetter/list', 'OtherLetterMaster::list');
$routes->get('/Admin/OtherLetter/delete/(:num)', 'OtherLetterMaster::delete/$1');

//photo uploads
$routes->get('/Admin/photoupload/add', 'Photoupload::index');
$routes->post('/Admin/photoupload/save', 'Photoupload::save');
$routes->get('/Admin/photoupload/list', 'Photoupload::list');
$routes->get('/Admin/photoupload/photolist', 'Photoupload::photolist');
$routes->post('/Admin/photoupload/verifyPhotos', 'Photoupload::verifyPhotos');
$routes->get('/Admin/photoupload/delete/(:num)', 'Photoupload::delete/$1');

//File Uploads
$routes->get('/Admin/Document/add', 'DocumentMaster::add');
$routes->post('/Admin/Document/save', 'DocumentMaster::save');
$routes->get('/Admin/Document/list', 'DocumentMaster::list');
$routes->get('/Admin/Document/delete/(:num)', 'DocumentMaster::delete/$1');
$routes->post('Admin/AttendenceMaster/getStudentsByBatch', 'AttendenceMaster::getStudentsByBatch');
$routes->get('/logout', 'AdminLogin::logout');


//Notification

$routes->get('/Admin/Notification/add', 'NotificationMaster::add');
$routes->post('/Admin/Notification/save', 'NotificationMaster::save');
$routes->get('/Admin/Notification/list', 'NotificationMaster::list');
$routes->get('/student/notifications', 'StudentNotification::notifications');
$routes->get('/Admin/Notification/edit/(:num)', 'NotificationMaster::edit/$1');
$routes->post('/Admin/Notification/update', 'NotificationMaster::update');
$routes->get('/Admin/Notification/delete/(:num)', 'NotificationMaster::delete/$1');

//Student Panel
$routes->get('/Student/Profile', 'ProfileMaster::index');
$routes->get('/student/account', 'ProfileMaster::account');
$routes->get('/student/login', 'StudentLoginMaster::login');
$routes->post('/student/save', 'StudentLoginMaster::save');
$routes->post('/student/changepassword', 'StudentLoginMaster::changepassword');
$routes->get('/student/logout', 'StudentLoginMaster::logout');
$routes->get('/student/profileedit/(:num)', 'StudentLoginMaster::ProfileEdit/$1');
$routes->post('/Student/profileupdate', 'StudentLoginMaster::ProfileUpdate');
$routes->get('/Student/birthday', 'StudentLoginMaster::Birthday');
$routes->get('/Students/idcard', 'StudentLoginMaster::Idcard');

//changepassword
$routes->get('/student/sentOtp', 'StudentLoginMaster::sentOtp');
$routes->get('/student/verifyOTP/(:num)', 'StudentLoginMaster::verifyOTP/$1');
$routes->get('feemaster', 'StudentFeeMaster::index');


//Student Document
$routes->get('/student/document', 'StudentDocumentMaster::index');
$routes->post('/student/document/save', 'StudentDocumentMaster::save');
$routes->get('/student/document/list', 'StudentDocumentMaster::list');
$routes->get('/student/document/edit/(:num)', 'StudentDocumentMaster::edit/$1');
$routes->post('/student/document/update', 'StudentDocumentMaster::update');


//Fee Document
$routes->get('/Student/feedocument/(:num)','FeeDocumentMaster::index/$1');
$routes->post('/student/feedocmentsave', 'FeeDocumentMaster::save');
$routes->get('/Student/feedocument/delete/(:num)', 'FeeDocumentMaster::delete/$1');
$routes->get('/Student/feedocument/list', 'FeeDocumentMaster::list');
$routes->get('/Student/feereceipt/(:num)', 'FeeDocumentMaster::feereceipt/$1');
$routes->get('/student/feedocument2/(:num)', 'FeeDocumentMaster::feedocument/$1');
$routes->post('/student/feedocumentsave', 'FeeDocumentMaster::feedocumentsave');

//Student Mentor 
$routes->get('/Student/mentor', 'MentorMaster::add');
$routes->post('/Student/mentorsave', 'MentorMaster::save');
$routes->get('/Student/mentorlist', 'MentorMaster::list');
$routes->get('/student/mentoredit/(:num)', 'MentorMaster::edit/$1');
$routes->post('/student/mentorupdate', 'MentorMaster::update');

$routes->get('/Admin/Mentor/mentorList', 'MentorMaster::alist');
$routes->get('/Admin/Mentor/mentorfilter', 'MentorMaster::filter');

$routes->get('Student/students', 'SeniorMaster::index');


//Student Photo Upload
$routes->get('/Student/photo','StudentPhotoMaster::index');
$routes->post('/Student/savephoto','StudentPhotoMaster::save');
$routes->get('/Student/memories','StudentPhotoMaster::memories');


//Student Attendance
$routes->get('/Student/attendance/(:num)','StudentAttendanceMaster::index/$1');
$routes->post('/Student/attendancesave', 'AttendanceMaster::saveAttendance');
$routes->get('/Student/attendancemonth','StudentAttendanceMaster::months');
$routes->get('/Student/lastmonthattendance/(:num)','StudentAttendanceMaster::lastmonth/$1');
$routes->get('/Student/AttendanceList','AttendanceMaster::attendancelist');
$routes->get('Student/attendance/document/(:num)/(:num)/(:num)', 'AttendanceMaster::attendancedocument/$1/$2/$3');

//Star Of Week
$routes->get('/Admin/StarofWeek/add', 'StarofWeek::add');
$routes->post('/Admin/StarofWeek/save', 'StarofWeek::save');
$routes->get('/Admin/StarofWeek/list', 'StarofWeek::list');

//student report list
$routes->get('/student/report', 'WeeklyReportMaster::add');
$routes->post('/student/reportsave', 'WeeklyReportMaster::save');
$routes->get('/student/reportlist', 'WeeklyReportMaster::list');

$routes->get('/Admin/Admission/reportList', 'AdmissionMaster::reportlist');

//Student Fee Detail
$routes->get('/Student/feemaster', 'StudentFeeMaster::index');

$routes->get('/Student/studentproject', 'StudentProject::index');
$routes->post('/Student/studentprojectsave', 'StudentProject::save');

$routes->get('/student/projectlist', 'StudentProject::list');
$routes->get('/student/projectedit/(:num)', 'StudentProject::edit/$1');
$routes->post('/Student/studentprojectupdate', 'StudentProject::update');

//Other Letters
$routes->get('/student/OtherLetter/Add', 'OtherLetterMaster::add');
$routes->post('/student/OtherLetter/save', 'OtherLetterMaster::save');


// $routes->get('/Student/Letter', 'Letter::index');
$routes->get('/Student/Letter', 'Letter::index');
$routes->get('/student/joiningletter/(:num)','Letter::joiningletter/$1');
$routes->get('/student/completionletter/(:num)','Letter::completionletter/$1');
$routes->post('letter/setSocialFlag', 'Letter::setSocialFlag');

//admin login

// $routes->get('/login', 'AdminLogin::add');
// $routes->post('/login/save', 'AdminLogin::save');


//routes for forgot password
$routes->get('/student/checkForEmail/(:num)', 'StudentLoginMaster::checkForEmail/$1');
$routes->get('/student/checkForOtp/(:num)/(:num)', 'StudentLoginMaster::checkForOtp/$1/$2');
$routes->post('/student/forgotpassword', 'StudentLoginMaster::forgotpassword');
$routes->post('/student/addEmail', 'StudentLoginMaster::addEmail');

















