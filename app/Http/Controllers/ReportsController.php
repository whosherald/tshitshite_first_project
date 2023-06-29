<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;


class ReportsController extends Controller
{
    

    public function reports_admin(){
        return view('Admin.reports_admin');
    }

    public function reports_agents_commission(){
        return view('Admin.reports_agents_commission');
    }

    public function reports_audit_report(){
        return view('Admin.reports_audit_report');
    }

    public function reports_business_intelligence(){
        return view('Admin.reports_business_intelligence');
    }

    public function reports_claims(){
        return view('Admin.reports_claims');
    }

    public function reports_duplicate_report(){
        return view('Admin.reports_duplicate_report');
    }

    public function reports_finance(){
        return view('Admin.reports_finance');
    }

    public function reports_funeral(){
        return view('Admin.reports_funeral');
    }

    public function reports_SMS(){
        return view('Admin.reports_sms');
    }

    public function reports_underwriter(){
        return view('Admin.reports_underwriter');
    }

    public function tab(){

            $dog=   DB::table('created_tasks')
                    ->JOIN('dispatchs', 'created_tasks.task_id', '=' , 'dispaths.task_id')
                    ->get();

    }

                    
}
