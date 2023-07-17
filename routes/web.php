<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AssignEmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Chatify\Http\Middleware\Authenticate;
use Chatify\Http\Middleware\Messages;
use Chatify\Http\Middleware\MessagesLoad;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Admin 
// Route::prefix('Admin')->middleware('auth', 'isAdmin')->group(function () {
//     Route::get('/Dashboard', function () {
//         return view('Admin.Dashboard');
//     });
// });
Route::get(
    '/Admin/Dashboard',
    [App\Http\Controllers\Admin\DashboardController::class, 'index']
)->middleware('role:Admin');

Route::get(
    '/TeamLeader/Dashboard',
    [App\Http\Controllers\TeamLeader\DashboardController::class, 'index']
)->middleware('role:TeamLeader');


Route::get(
    '/Technicians/Dashboard',
    [App\Http\Controllers\Technicians\DashboardController::class, 'index']
)->middleware('role:Technician');
// Route::get('/Users/Dashboard', 'User\DashboardController@index')->middleware('role:user');
Route::get(
    '/StaffMembers/dashboard',
    [App\Http\Controllers\StaffMembers\DashboardController::class, 'index']
)->middleware('role:user');

Route::get('/submit-support-request', function () {
    return view('StaffMembers.submit-support-request');
});
Route::get('/view-request-status', function () {
    return view('StaffMembers.view-request-status');
});
Route::get('/feedback', function () {
    return view('StaffMembers.feedback');
});
Route::get('/register-team-leader', function () {
    return view('Admin.register-team-leader');
});
Route::get('/generate-report-admin', function () {
    return view('Admin.generate-report-admin');
});
Route::get('/view-report', function () {
    return view('Admin.view-report');
});
Route::get('/view-feedback', function () {
    return view('Admin.view-feedback');
});
Route::get('/change-password', function () {
    return view('Admin.change-password');
});
Route::get('/add-teamleader', function () {
    return view('Admin.add-teamleader');
});
Route::get('/add-tech', function () {
    return view('TeamLeader.add-tech');
});
Route::get('/assign-tech', function () {
    return view('TeamLeader.assign-tech');
});
Route::get('/new-support-request', function () {
    return view('TeamLeader.new-support-request');
});
Route::get('/list-of-out-of-use-devices', function () {
    return view('TeamLeader.list-of-out-of-use-devices');
});
Route::get('/unsolved-request', function () {
    return view('TeamLeader.unsolved-request');
});
Route::get('/solved-request', function () {
    return view('TeamLeader.solved-request');
});
Route::get('/generate-report-leader', function () {
    return view('TeamLeader.generate-report-leader');
});
Route::get('/view-report-leader', function () {
    return view('TeamLeader.view-report-leader');
});
Route::get('/change-password-teamleader', function () {
    return view('TeamLeader.change-password-teamleader');
});
Route::get('/add-out-of-use-devices', function () {
    return view('Technicians.add-out-of-use-devices');
});

Route::get('/generate-report-tech', function () {
    return view('Technicians.generate-report-tech');
});
Route::get('/view-task', function () {
    return view('Technicians.view-task');
});
Route::get('/document-findings', function () {
    return view('Technicians.document-findings');
});
Route::get('/technician-ai', function () {
    return view('Technicians.technician-ai');
});
Route::get('/change-password-tech', function () {
    return view('Technicians.change-password-tech');
});
// Route::get('/StaffMembers/dashboard', 'StaffMembers\DashboardController@index')->middleware('role:user');

Route::get('/change-password-user', function () {
    return view('StaffMembers.change-password-user');
});


Route::get('/master', function () {
    return view('CustomAuth.master');
});
Route::get('/newlogin', function () {
    return view('CustomAuth.newlogin');
});

Route::get('/newregister', function () {
    return view('CustomAuth.newregister');
});
Route::get('/newforget', function () {
    return view('CustomAuth.newforget');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/guest-ai', function () {
    return view('guest-ai');
});

Auth::routes(['verify' => true]);

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/Admin', [AssignEmployeeController::class, 'AssignEmployee']);
Route::post('/change-password', [HomeController::class, 'updatepassword'])->name('update-password');
Route::post('/change-password-teamleader', [HomeController::class, 'updatepasswordteamleader'])->name('update-password-team');
Route::post('/change-password-tech', [HomeController::class, 'updatepasswordtech'])->name('update-password-technecians');
Route::post('/change-password-user', [HomeController::class, 'updatepassworduser'])->name('update-password-user');
//users table and request table
Route::post('/feedback', [HomeController::class, 'sendfeedback'])->name('send-feedback');
Route::post('/add-teamleader', [HomeController::class, 'addteamleader'])->name('add-teamleader');
Route::post('/register-team-leader', [HomeController::class, 'registerteamleader'])->name('register-teamleader');
Route::post('/add-tech', [HomeController::class, 'addtech'])->name('add-tech');
Route::post('/assign-tech', [HomeController::class, 'assigntech'])->name('assign-tech');
Route::post('/generate-report-admin', [HomeController::class, 'admingeneratereport'])->name('admin-generate-report');
Route::post('/generate-report-leader', [HomeController::class, 'admingeneratereport'])->name('teamleader-generate-report');
Route::post('/generate-report-tech', [HomeController::class, 'admingeneratereport'])->name('tech-generate-report');
Route::post('/add-out-of-use-devices', [HomeController::class, 'outofusedevices'])->name('out-of-use');
Route::post('/submit-support-request', [HomeController::class, 'supportrequest'])->name('support-request');
Route::post('/document-findings', [HomeController::class, 'documentfindings'])->name('tech-document-findings');

Route::get('/view-feedback', function () {
    // Fetch data from the MySQL table
    $data = DB::table('feedbacks')->get();

    // Return the data to the view
    return view('Admin.view-feedback', ['data' => $data]);
});
Route::get('/view-request-status', function () {
    // Fetch data from the MySQL table
    $data = DB::table('support_requests')->where('Email', Auth::user()->email)->get();


    // Return the data to the view
    return view('StaffMembers.view-request-status', ['data' => $data]);
});

Route::post('/view-request-status', [HomeController::class, 'cancelrequest'])->name('cancel_request');
Route::get('/view-task', function () {
    // Fetch data from the MySQL table
    // $users = DB::table('users')->where('votes', '<>', 100)->get();
    $data_support = DB::table('support_requests')->get();


    // Return the data to the view
    return view('Technicians.view-task', ['data_support' => $data_support]);
});
Route::post('/view-task', [HomeController::class, 'solvedrequest'])->name('solved_request');

// Route::post('/view-task', [HomeController::class, 'addmeetinglink'])->name('add_meeting');
// Route::post('/view-request-status', [HomeController::class, 'cancelrequest'])->name('cancel_request');
Route::get('/new-support-request', function () {
    // Fetch data from the MySQL table
    $supportdata = DB::table('support_requests')->get();

    // Return the data to the view
    return view('TeamLeader.new-support-request', ['supportdata' => $supportdata]);
});
Route::get('/list-of-out-of-use-devices', function () {
    // Fetch data from the MySQL table
    $outofuse = DB::table('out_of_use_devices')->get();

    // Return the data to the view
    return view('TeamLeader.list-of-out-of-use-devices', ['outofuse' => $outofuse]);
});
Route::get('/solved-request', function () {
    // Fetch data from the MySQL table
    $solvedrequests = DB::table('support_requests')->get();

    // Return the data to the view
    return view('TeamLeader.solved-request', ['solvedrequests' => $solvedrequests]);
});
Route::get('/unsolved-request', function () {
    // Fetch data from the MySQL table
    $unsolvedrequests = DB::table('support_requests')->get();

    // Return the data to the view
    return view('TeamLeader.unsolved-request', ['unsolvedrequests' => $unsolvedrequests]);
});
Route::get('/view-report', function () {
    // Fetch data from the MySQL table
    $datas = DB::table('report')->where('Title', 'TeamLeader')->get();

    // Return the data to the view
    return view('Admin.view-report', ['datas' => $datas]);
});
Route::get('/view-report-leader', function () {
    // Fetch data from the MySQL table
    $datas = DB::table('report')->where('Title', 'Technician')->get();

    // Return the data to the view
    return view('TeamLeader.view-report-leader', ['datas' => $datas]);
});
Route::get('/go-to-chat', function () {
    return redirect()->away('https://chat.1410inc.xyz/');
})->name('go-to-chat');


Route::get('/add-meeting-link', function () {
    return view('Technicians.add-meeting-link');
});
// Route::post('/document-findings', [HomeController::class, 'documentfindings'])->name('tech-document-findings');
Route::post('/add-meeting-link', [HomeController::class, 'addmeetinglink'])->name('meetinglink');
