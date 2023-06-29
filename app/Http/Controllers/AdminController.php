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
use App\models\user;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function capture(){
        
        return view('forms.member_capture');

    }
    public function captures(){
        
        return view('forms.members_capture');

    }


    public function claimer(){
        
        return view('forms.member_claim');

    }

    public function burials(){
        
        return view('forms.burials');

    }

    public function tombstone_application(){
        
        return view('forms.tombstone');

    }


    public function tombstone(){
        
        return view('forms.tombstones');

    }
    public function data_import()
    {

        return view('admin.data_import');
    }

    public function find_member()
    {

                $admembe=[
                    'admembers'=>DB::table('applications')
                            ->get()

                ];
            

        return view('admin.find_member')->with($admembe);
    }

    public function dompdf()
    {
        $pdf=pdf::loadview('Admin.pdfs');
        return $pdf->stream();
    }


    public function find_members(Request $req)
    {
        //storing find member data 
        $scheme=$req->scheme;
        $branch=$req->branch;
        $status=$req->status;
        $group=$req->group;

        $find_mem=array();
        $find_mem['scheme']=$scheme;
        $find_mem['member_branch']=$branch;
        $find_mem['policy_status']=$status;
        $find_mem['group']=$group;
        $find_mem['updated_at'] = now();
        $find_mem['created_at'] = now();
        
        

        DB::table('find_member')
                ->insert($find_mem);
        return Redirect::to('/find-member')->withSuccess('Application Successfully Submitted');
    }

    public function policy_payments()
    {
        return view('admin.policy_payments');
    }

    public function group_payments()
    {
        return view ('Admin.group_payments');
    }

    public function other_payments()
    {
        return view ('Admin.other_payments');
    }

    public function member_payments()
    {
        return view ('Admin.member_payments');
    }

    public function debit_orders()
    {
        return view ('Admin.debit_order');
    }

    public function claims_logged()
    {

        return view('claims.claims_logged');
    }

    //card 
    public function ntu_card()
    {
        return view('Admin.ntu_card');
    }

    public function lapsed_card()
    {
        return view('Admin.lapsed_card');
    }

    public function on_trial()
    {
        return view('Admin.on_trial');
    }

    public function deleted()
    {
        return view('Admin.deleted');
    }

    public function not_defined()
    {
        return view('Admin.not_defined');
    }

    public function active_card()
    {
        return view('Admin.active_card');
    }

    public function deceased_card()
    {
        return view('Admin.deceased_card');
    }

    public function get_producttype()
    {
        $get=DB::table('products_plan')
        ->first();
        return response()->json($get); 


        
    }


    public function pieChart()
    {
        // $result=DB::select(DB::raw("SELECT count(policy_status) as policy_name,policy_details.first_name 
        //                             from applications  
        //                             LEFT JOIN policy_details 
        //                             ON policy_details.policydtl_id=applications.policydtl_id 
        //                             GROUP BY applications.policydtl_id"));

        //                             $data="";
        //                             foreach($result as $val){
        //                                 $data="['work',"$val->"]"
        //                             }
        
                                        

            $result=DB::table('policy_details')
                ->where('policy_status','=','Archieve')
                ->count();
            $chart="";
            foreach($result as $val) {
                $chart="['".$val->policy_status."'],";
            }                             
            $chartData=$chart;                  
        return view('dashboard',compact('$chartData'));
    }


   


    public function noble($tbl_id)

    {
        $editinfo=[
            'editinf' => DB::table('applications')
                        ->where('tbl_id', '=', $tbl_id)
                        ->first()

        ];  

              

        return view('Admin.edit_member')->with($editinfo); 
    }

    public function claims_details()
    {

        return view('claims.claims_details');
    }
   

    public function claimant_details()
    {

        return view('claims.claimant_details');
    }
    //saving the claimant details
  
   
    public function reports()
    {

        return view('Admin.reports_admin');
    }
    public function report(Request $req)
    {
        //storing reports admin(general report)
        $report_type=$req->report_type;
        $report=$req->report;

        //storing report filter
        $date_from=$req->date_from;
        $date_to=$req->date_to;
        $branch_name=$req->branch_name;
        $group=$req->group;
        $agent=$req->agent;
        $initial=$req->initial;
        $payment_type=$req->payment_type;
        $policy_status=$req->policy_status;
        $report_export_type=$req->report_export_type;
        $send_email=$req->email;

        $general_report=array();
        $general_report['report_type']=$report_type;
        $general_report['report']=$report;
        $general_report['updated_at'] = now();
        $general_report['created_at'] = now();

        $filterreport=array();
        $filterreport['date_from']=$date_from;
        $filterreport['date_to']=$date_to;
        $filterreport['branch_name']=$branch_name;
        $filterreport['group']=$group;
        $filterreport['agent']=$agent;
        $filterreport['initial']=$initial;
        $filterreport['payment_type']=$payment_type;
        $filterreport['policy_status']=$policy_status;
        $filterreport['report_export_type']=$report_export_type;
        $filterreport['send_email']=$send_email;
        $filterreport['updated_at'] = now();
        $filterreport['created_at'] = now();
        
        DB::table('report')
            ->insert($filterreport);

        DB::table('report')
            ->insert($general_report);


            return Redirect::to('/reports-admin')->withSuccess('Application Successfully Submitted');   
        }

    public function tombstones()
    {

        return view('Admin.tombstone');
    }
   

    public function deceased_info()
    {

        return view('burial.deceased_info');
    }
  
    // public function deceased_in(Request $req){
    //     //storing funeral service deceased info data
    //     $first_name=$req->first_name;
    //     $street_address=$req->street_address;
    //     $last_name=$req->last_name;
    //     $town_city=$req->town_city;
    //     $id_number=$req->id_number;
    //     $date_of_birth=$req->date_of_birth;
    //     $province=$req->province;
    //     $code=$req->code;
    //     $body_coolection_car_registration=$req->car_reg;
    //     $status=$req->status;
    //     $contact_person=$req->contact_person;
    //     $contact_number=$req->contact_number;
    //     $cause_of_death=$req->cause_of_death;
    //     $date_of_death=$req->date_of_death;
    //     $collected_from=$req->collected_from;
    //     $body_collection_driver=$req->collect_driver;
    //     $tag_number=$req->tag_number;
    //     $fridge_number=$req->fridge_number;
    //     $shelf=$req->shelf_number;
    //     $gender=$req->man;

    //     $deceasedinf=array();
    //     $deceasedinf['first_name']=$first_name;
    //     $deceasedinf['street_address']=$street_address;
    //     $deceasedinf['surname']=$last_name;
    //     $deceasedinf['town_city']=$town_city;
    //     $deceasedinf['id_number']=$id_number;
    //     $deceasedinf['date_of_birth']=$date_of_birth;
    //     $deceasedinf['province']=$province;
    //     $deceasedinf['code']=$code;
    //     $deceasedinf['body_collection_car_registration']=$body_coolection_car_registration;
    //     $deceasedinf['status']=$status;
    //     $deceasedinf['contact_person']=$contact_person;
    //     $deceasedinf['contact_number']=$contact_number;
    //     $deceasedinf['cause_of_death']=$cause_of_death;
    //     $deceasedinf['collected_from']=$collected_from;
    //     $deceasedinf['body_collection_driver']=$body_collection_driver;
    //     $deceasedinf['tag_number']=$tag_number;
    //     $deceasedinf['fridge_number']=$fridge_number;
    //     $deceasedinf['shelf']=$shelf;
    //     $deceasedinf['gender']=$gender;
    //     $deceasedinf['updated_at'] = now();
    //     $deceasedinf['created_at'] = now();

        
    //     DB::table('deceased_info')
    //     ->insert($deceasedinf);
    //     return Redirect::to('/deceased-info')->withSuccess('Application Successfully Submitted');
    // }

    public function physical(){

        return view('burial.physical');
    }
    // public function physicals(Request $req){
    //     //storing funeral service physical description
    //     $personal_items=$req->personal_items;
    //     $embalming=$req->embalme;
    //     $coffine_size=$req->coffine;
    //     $dental_condition=$req->dental;
    //     $general_condition=$req->general;
    //     $age_group=$req->age_gp;
    //     $head_hair=$req->hair;
    //     $skin_marks=$req->skin;
    //     $notes=$req->note;

    //     $physical_desc=array();
    //     $physical_desc['personal_items']=$personal_items;
    //     $physical_desc['embalming']=$embalming;
    //     $physical_desc['coffine_size']=$coffine_size;
    //     $physical_desc['dental_condition']=$dental_condition;
    //     $physical_desc['general_condition']=$general_condition;
    //     $physical_desc['age_group']=$age_group;
    //     $physical_desc['head_hair']=$head_hair;
    //     $physical_desc['skin_marks']=$skin_marks;
    //     $physical_desc['notes']=$notes;
    //     $physical_desc['updated_at'] = now();
    //     $physical_desc['created_at'] = now();

    //     DB::table('deceased_info')
    //         ->insert($physical_desc);
    //     return Redirect::to('/physical')->withSuccess('Application Successfully Submitted');
    // }
    public function burial(){

        return view('burial.burial');
    }
    // public function buria(Request $req){
    //     //storing funeral service burial
    //     $date_of_funeral=$req->date_funeral;
    //     $time_of_funeral=$req->tym_funeral;
    //     $burial_order_number=$req->order_num;
    //     $policy_number=$req->policy_num;
    //     $funeralcar_driver=$req->funeral_driver;
    //     $cementary=$req->cementry;
    //     $grave_number=$req->graveno;

    //     $burial_service=arrary();
    //     $burial_service['date_of_funeral']=$date_of_funeral;
    //     $burial_service['time_of_funeral']=$time_of_funeral;
    //     $burial_service['burial_order_number']=$burial_order_number;
    //     $burial_service['policy_number']=$policy_number;
    //     $burial_service['funeralcar_driver']=$funeralcar_driver;
    //     $burial_service['cementary']=$cementary;
    //     $burial_service['grave_number']=$grave_number;
    //     $burial_service['updated_at'] = now();
    //     $burial_service['created_at'] = now();


    //     DB::table('deceased_info')
    //         ->insert($burial_service);
    //     return Redirect::to('/burial')->withSuccess('Application Successfully Submitted');
    // }



    public function search(Request $request)
    {

        if($request->ajax())
        // $output="";
        // $admembers=admembers::Where('First_Name','Like','%'.$req->search.'%')
        //                     ->orWhere('ID_Number','Like','%'.$req->search.'%')
        //                     ->get();
// dd($admembers);
        // foreach($admembers as $admembers)
        {

            $output="";

            $admembers=DB::table('applications')
                        ->where('First_Name','LIKE','%'.$request->search."%")
                        ->get();

             if($admembers)
             {

                foreach ($admembers as $key => $admember)
             {
             $output.='<tr>'.
             '<td>'.$admember->First-Name.'</td>'.
             '<td>'.$admember->last-Name.'</td>'.
             '<td>'.$admember->ID-Number.'</td>'.
             '<td>'.$admember->email-address.'</td>'.
             '</tr>';

        //     $output.=
        //     '<tr>
        //         <td>'.$admembers->First-Name.'</td>
        //     </tr>';
         }
         return Response($output);
      }
   }

 }
    public function quotation(){

        return view('Admin.quotation');
    }
    // public function quotations(Request $req){

    //     //storing quotation contact info
    //     $title=$req->title;
    //     $physical_address=$req->pysical;
    //     $first_name=$req->first_name;
    //     $last_name=$req->last_name;
    //     $street_address=$req->str_address;
    //     $cellphone_number=$req->cell_num;
    //     $town_city=$req->town;
    //     $province=$req->province;
    //     $Tellphone_number=$req->tell_number;
    //     $code=$req->code;

    //     $quotationinfo=array();
    //     $quotationinfo['title']=$title;
    //     $quotationinfo['physical_address']=$physical_address;
    //     $quotationinfo['first_name']=$first_name;
    //     $quotationinfo['last_name']=$last_name;
    //     $quotationinfo['street_address']=$street_address;
    //     $quotationinfo['cellphone_number']=$cellphone_number;
    //     $quotationinfo['town_city']=$town_city;
    //     $quotationinfo['province']=$province;
    //     $quotationinfo['tellphone_number']=$Tellphone_number;
    //     $quotationinfo['code']=$code;
    //     $quotationinfo['updated_at'] = now();
    //     $quotationinfo['created_at'] = now();

    //     DB::table('quotation')
    //     ->insert($quotationinfo);

    //     return Redirect::to('/quotation')->withSuccess('Application Successfully Submitted');
    // }

    public function deceased_details(){
        return view('claims.deceased_details');
    }

    public function deceased_detail(Request $req){
            //storing deaceased details data
            $first_name=$req->fstname;
            $street_address=$req->str_address;
            $last_name=$req->lstname;
            $id_number=$req->id_num;
            $town_city=$req->twncity;
            $province=$req->province;
            $date_of_birth=$req->dob;
            $time_of_funeral=$req->tym_funeral;
            $date_of_death=$req->dod;
            $cemetery=$req->cemetery;
            $cause_of_death=$req->cod;
            $code=$req->code;
            $date_of_funeral=$req->dof;
            $collected_from=$req->collected_from;
            $driver_car=$req->driver_car;
            $grave_no=$req->grave_no;
            $gender=$req->gender;

            $deceaseddtls=array();
            $deceaseddtls['first_name']=$first_name;
            $deceaseddtls['street_address']=$street_address;
            $deceaseddtls['last_name']=$last_name;
            $deceaseddtls['id_number']=$id_number;
            $deceaseddtls['town_city']=$town_city;
            $deceaseddtls['province']=$province;
            $deceaseddtls['date_of_birth']=$date_of_birth;
            $deceaseddtls['time_of_funeral']=$time_of_funeral;
            $deceaseddtls['date_of_death']=$date_of_death;
            $deceaseddtls['cemetery']=$cemetery;
            $deceaseddtls['cause_of_death']=$cause_of_death;
            $deceaseddtls['code']=$code;
            $deceaseddtls['date_of_funeral']=$date_of_funeral;
            $deceaseddtls['collected_from']=$collected_from;
            $deceaseddtls['driver_car']=$driver_car;
            $deceaseddtls['grave_no']=$grave_no;
            $deceaseddtls['gender']=$gender;
            $deceaseddtls['updated_at'] = now();
            $deceaseddtls['created_at'] = now();

            DB::table('deceased_details')
                    ->insert($deceaseddtls);
            

        return Redirect::to('/deceased-details')->withSuccess('Application Successfully Submitted');
    }


        public function delete($tbl_id)
        {
            DB::table('applications')
            ->where('tbl_id', $tbl_id)
            ->delete();
            
            return redirect()->back(); 


        }

        public function deletes($policydtl_id)
        {
            DB::table('policy_details')
            ->where('policydtl_id', $policydtl_id)
            ->delete();
            
            return redirect()->back(); 

        }

            public function delete_tomb($tomb_id)
            {
                DB::table('tomb_deceased_info')
                ->where('tomb_id',$tomb_id)
                ->delete();
                return redirect()->back();
            }


        

        public function delete_quotation($quotation_id)
        {
            DB::table('quotation')
            ->where('quotation_id', $quotation_id)
            ->delete();
            
            return redirect()->back(); 


        }

        public function delete_logg($claimant_id)
    {
        DB::table('claimant_details')
        ->where('claimant_id', $claimant_id)
        ->delete();
        
        return redirect()->back(); 
    }


        public function edit($tbl_id)
        {
            $edit=[
            'editinf'=>DB::table('applications')
            ->where('tbl_id', $tbl_id)
            ->first()
            ];
            return view('Admin.edit_member')->with($edit);


        }

       

        public function update_members(Request $req,$tbl_id)
    {
        $Title = $req->title;
        $Initials = $req->Initials;
        $firstname= $req->first_name;
        $lastname = $req->lastname;
        $CellphoneNumber = $req->cellphone_number;
        $Citizenship = $req->citizenship;
        $IDNumber=$req->id_number;
        $PassportNumber=$req->passport_number;
        $Age=$req->age;
        $MaritalStatus=$req->marital_status;
        $Tellphonenumber=$req->Tellphone_number;
        $Gender=$req->gender;
        $EmailAddress=$req->email_address;
        $Branch_Name=$req->branch_name;
        $policy_status=$req->policy_status;
        // $date_of_birth=$req->date_of_birth;

        $data = array();
        $data['title'] = $Title;
        $data['Initials'] = $Initials;
        $data['first_name'] = $firstname;
        $data['last_name'] = $lastname;
        $data['Cellphone_Number'] = $CellphoneNumber;
        $data['Citizenship'] = $Citizenship;
        $data['ID_Number'] = $IDNumber;
        $data['Passport_Number'] = $PassportNumber;        
        $data['age'] = $Age;
        $data['Marital_Status'] = $MaritalStatus;
        $data['Tellphone_number'] = $Tellphonenumber;
        $data['Gender'] = $Gender;
        $data['email_address'] = $EmailAddress;
        $data['Branch_Name'] = $Branch_Name;
        $data['policy_status'] = $policy_status;
        $data['updated_at'] = now();
        $data['created_at'] = now();
        // $data['date-of-birth'] = $date_of_birth;


        DB::table('applications')
            ->where('tbl_id', $tbl_id)
            ->update($data);

        return Redirect::to('/find_member/'.$tbl_id)->withSuccess(" member Successfully updated! ");
}

// add&remove dynamic
public function ajax_form (Request $request)
{
    $inputCount = $request->input('count');
    $inputs = [];

    for ($i = 0; $i < $inputCount; $i++) {
        $inputs[] = [
            'name' => "input{$i}",
            'id' => "input{$i}"
        ];
    }

    return response()->json([
        'success' => true,
        'inputs' => $inputs
    ]);
}


  
}
