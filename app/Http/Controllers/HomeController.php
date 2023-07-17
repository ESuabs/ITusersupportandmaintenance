<?php

namespace App\Http\Controllers;

use App\Models\assigned_employees;
use App\Models\document_findings;
use App\Models\feedbacks;
use App\Models\out_of_use_devices;
use App\Models\report;
use App\Models\support_requests;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/welcome');
    }
    public function updatepassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("warning", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
    public function updatepasswordteamleader(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
    public function updatepasswordtech(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
    public function updatepassworduser(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
    public function sendfeedback(Request $request)
    {
        $this->validate($request, [
            // 'full_name' => 'required',
            // 'email' => 'required|email|unique:feedbacks',
            'comments' => 'required',
        ]);

        $feedbacks = new feedbacks();
        $feedbacks->FullName = Auth::user()->name;
        $feedbacks->Email = Auth::user()->email;
        $feedbacks->Comments = $request->input('comments');
        // Assuming you have the user_id and feedback_request values available
        $feedbacks->user_id = Auth::user()->id;
        $feedbacks->feedback_request = $request->input('request_id');

        // Save the feedback to the database
        $feedbacks->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
    public function addteamleader(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $users = new users();
        $users->name = $request->input('full_name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));

        // Assuming you have the user_id and feedback_request values available
        $users->email_verified_at = now();
        $users->role = "TeamLeader";

        // Save the feedback to the database
        $users->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Team Leader Added successfully!');
    }
    public function registerteamleader(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'position' => 'required',
            'floor' => 'required',
            'tel' => 'required',
            'teamleader_id' => 'required',
        ]);

        $assigned_employees = new assigned_employees();
        $assigned_employees->user_id = $request->input('teamleader_id');
        $assigned_employees->FullName = $request->input('full_name');
        $assigned_employees->Email = $request->input('email');
        $assigned_employees->Faculty = $request->input('address');
        $assigned_employees->Position = $request->input('position');
        $assigned_employees->OfficeNo = $request->input('floor');
        $assigned_employees->PhoneNo = $request->input('tel');
        $assigned_employees->Date = now();

        // Assuming you have the user_id and feedback_request values available



        // Save the feedback to the database
        $assigned_employees->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Team Leader Assigned successfully!');
    }
    public function addtech(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $users = new users();
        $users->name = $request->input('full_name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));

        // Assuming you have the user_id and feedback_request values available
        $users->email_verified_at = now();
        $users->role = "Technician";

        // Save the feedback to the database
        $users->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Technician Added successfully!');
    }
    public function assigntech(Request $request)
    {
        $this->validate($request, [
            'technician_id' => 'required',
            'full_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'position' => 'required',
            'floor' => 'required',
            'tel' => 'required',
            'technician_id' => 'required',
        ]);

        $assigned_employees = new assigned_employees();
        $assigned_employees->user_id = $request->input('technician_id');
        $assigned_employees->FullName = $request->input('full_name');
        $assigned_employees->Email = $request->input('email');
        $assigned_employees->Faculty = $request->input('address');
        $assigned_employees->Position = $request->input('position');
        $assigned_employees->OfficeNo = $request->input('floor');
        $assigned_employees->PhoneNo = $request->input('tel');
        $assigned_employees->Date = now();

        // Assuming you have the user_id and feedback_request values available



        // Save the feedback to the database
        $assigned_employees->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Technician Assigned Successfully!');
    }
    public function admingeneratereport(Request $request)
    {
        $this->validate($request, [

            // 'fullname' => 'required',
            // 'email' => 'required|email',
            'position' => 'required',
            'campus_name' => 'required',
            'dep' => 'required',
            'tel' => 'required',
            'reports' => 'required',
        ]);
        // user_id, ReportNo, FullName, Email, Title, CampusName, Department, PhoneNo, Date, summary
        $reports = new report();
        $reports->user_id = Auth::user()->id;
        $reports->FullName = Auth::user()->name;
        $reports->Email = Auth::user()->email;
        $reports->Title = $request->input('position');
        $reports->CampusName = $request->input('campus_name');
        $reports->Department = $request->input('dep');
        $reports->PhoneNo = $request->input('tel');
        $reports->summary = $request->input('reports');
        $reports->Date = now();

        // Assuming you have the user_id and feedback_request values available



        // Save the feedback to the database
        $reports->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Report has been generated successfully!');
    }
    public function outofusedevices(Request $request)
    {
        // $this->validate($request, [
        //     'campus_name' => 'required',
        //     'dep' => 'required|email',
        //     'office_no' => 'required',
        //     'item_name' => 'required',
        //     'catagory' => 'required',
        //     'reason' => 'required',
        //     'approved_by' => 'required',
        // ]);
        // user_id, CampusName, Department, OfficeNo, ItemName, ItemID, Catagory, Reason, ApprovedByEmail, Date
        $out_of_use = new out_of_use_devices();
        $out_of_use->user_id = Auth::user()->id;
        $out_of_use->CampusName = $request->input('campus_name');
        $out_of_use->Department = $request->input('dep');
        $out_of_use->OfficeNo = $request->input('office_no');
        $out_of_use->ItemName = $request->input('item_name');
        $out_of_use->Catagory = $request->input('catagory');
        $out_of_use->Reason = $request->input('reason');
        $out_of_use->ApprovedByEmail = Auth::user()->email;
        $out_of_use->Date = now();
        // Assuming you have the user_id and feedback_request values available

        // Save the feedback to the database
        $out_of_use->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Item has been added to out of use devices successfully!');
    }
    public function supportrequest(Request $request)
    {
        $this->validate($request, [

            // 'full_name' => 'required',
            // 'email' => 'required|email',
            'faculty' => 'required',
            'dep' => 'required',
            'floor' => 'required',
            'tel' => 'required',

        ]);
        // FullName, Email, FacultyName, Department, OfficeNo, photo, PhoneNo, Date, SupportStatus, RequestNo, user_id
        $support_request = new support_requests();
        $support_request->FullName = Auth::user()->name;
        $support_request->Email = Auth::user()->email;
        $support_request->FacultyName = $request->input('faculty');
        $support_request->Department = $request->input('dep');
        $support_request->OfficeNo = $request->input('floor');
        $support_request->PhoneNo = $request->input('tel');
        $support_request->user_id = Auth::user()->id;;
        $support_request->Date = now();

        // Assuming you have the user_id and feedback_request values available



        // Save the feedback to the database
        $support_request->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Support request submitted successfully!');
    }
    public function documentfindings(Request $request)
    {
        // $this->validate($request, [

        //     'userid' => 'required',
        //     'status' => 'required',
        //     'result' => 'required',
        //     'request' => 'required',
        //     'at' => 'required',
        //     'completed' => 'required',
        //     'finding' => 'required',

        // ]);
        // user_id, RequestNumber, AssignedAt, FindingDescription, AssignemntCompleted, EndResult, ProblemStatus, FindingId
        $document_findings = new document_findings();
        $document_findings->user_id = Auth::user()->id;
        $document_findings->RequestNumber = $request->input('request');
        $document_findings->AssignedAt = $request->input('at');
        $document_findings->FindingDescription = $request->input('finding');
        $document_findings->AssignemntCompleted = $request->input('completed');
        $document_findings->EndResult = $request->input('result');
        $document_findings->ProblemStatus = $request->input('status');

        // Assuming you have the user_id and feedback_request values available



        // Save the feedback to the database
        $document_findings->save();

        // Redirect the user after successful submission
        return redirect()->back()->with('success', 'Findings has been documented successfully!');
    }

    public function showfeedbacks(Request $request)
    {
        $show_feedbacks = feedbacks::all()->toArray();
        return view('Admin.view-feedback', compact('show_feedbacks'));
    }
    public function cancelrequest(Request $request)
    {
        $email = Auth::user()->email;
        $requestid = $request->input('cancel');

        $columnValues = support_requests::where('Email', $email)->pluck('RequestNo')->toArray();
        foreach ($columnValues as $columnValue) {
            if ($requestid == $columnValue) {
                support_requests::Where('RequestNo', $requestid)->update([
                    'SupportStatus' => 'Canceled'
                ]);
                return back()->with("success", "Request has been canceled successfully!");
                break;
            } else {
                continue;
            }
        }
    }
    public function solvedrequest(Request $request)
    {
        $email = Auth::user()->email;
        $requestid = $request->input('cancel');

        $columnValues = support_requests::where('SupportStatus', '<>', 'Solved')->pluck('RequestNo')->toArray();
        foreach ($columnValues as $columnValue) {
            if ($requestid == $columnValue) {
                support_requests::Where('RequestNo', $requestid)->update([
                    'SupportStatus' => 'Solved'
                ]);
                return back()->with("success", "Request has been Solved successfully!");
                break;
            } else {
                continue;
            }
        }



        // where('SupportStatus', '<>', 'Solved')
        // DB::table('users')
        // ->where('id', 1)
        // ->update(array('votes' => 1));


    }
    public function addmeetinglink(Request $request)
    {
        $email = Auth::user()->email;
        $requestid = $request->input('requestid');
        $meetinglink = $request->input('meetinglink');

        $columnValues = support_requests::where('SupportStatus', '<>', 'Solved')->pluck('RequestNo')->toArray();
        foreach ($columnValues as $columnValue) {
            if ($requestid == $columnValue) {
                support_requests::Where('RequestNo', $requestid)->update([
                    'support_chat_link' => $meetinglink
                ]);
                return back()->with("success", "Meeting link has been added sucessfully!");
                break;
            } else {
                continue;
            }
        }



        // where('SupportStatus', '<>', 'Solved')
        // DB::table('users')
        // ->where('id', 1)
        // ->update(array('votes' => 1));


    }
}
