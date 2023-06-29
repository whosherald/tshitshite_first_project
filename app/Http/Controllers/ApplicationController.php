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

class ApplicationController extends Controller
{
    //
    public function save_applications(Request $req){
        //storing claims logged data
        $date_from=$req->datefrom;
        $date_to=$req->dateto;
        $status=$req->status;
        $show_entries=$req->showentries;


        $claimscap=array();
        $claimscap['date_from']=$date_from;
        $claimscap['date_to']=$date_to;
        $claimscap['status']=$status;
        $claimscap['show_entries']=$show_entries;
        $claimscap['updated_at'] = now();
        $claimscap['created_at'] = now();

         // saving the claim details
         $claiming_for_member=$req->claiming;
         $waiting_period=$req->apply;
         $claim_date=$req->claim_date;
         $claim_number=$req->claim_number;
         $cause_of_death=$req->cause_death;
         $cover_amount=$req->cover_amount;
         $documents=$req->documents;
         $Certificate=$req->Certificate;
         $choose_file=$req->choose_file;
         $claim_notes=$req->notes;
         $claim_member=$req->claim_member;
         $apply_waiting_period=$req->apply_period;


         $claimdtl=array();
         $claimdtl['claiming_for_member']=$claiming_for_member;
         $claimdtl['apply_waiting_period']=$waiting_period;
         $claimdtl['claim_date']=$claim_date;
         $claimdtl['claim_number']=$claim_number;
         $claimdtl['cause_of_death']=$cause_of_death;
         $claimdtl['cover_amount']=$cover_amount;
         $claimdtl['Certificate']=$Certificate;
         $claimdtl['choose_file']=$choose_file;
         $claimdtl['documents']=$documents;
         $claimdtl['claim_notes']=$claim_notes;
         $claimdtl['claim_member']=$claim_member;
         $claimdtl['waiting_period']=$apply_waiting_period;
         $claimdtl['updated_at'] = now();
         $claimdtl['created_at'] = now();


         // saving the claimant details
         $title=$req->title;
         $street=$req->street_address;
         $last_name=$req->last_name;
         $first_name=$req->first_name;
         $town_city=$req->town_city;
         $province=$req->province;
         $id_number=$req->id_number;
         $acc_holder=$req->acc_holder;
         $code=$req->code;
         $date_of_birth=$req->date_of_birth;
         $time_of_funeral=$req->time_of_funeral;
         $date_of_death=$req->date_of_death;
         $cemetery=$req->cemetery;
         $cause_of_death=$req->cause_of_death;
         $date_of_funeral=$req->date_of_funeral;
         $collected_from=$req->collected_from;
         $contact_number=$req->contact_number;
         $bank_name=$req->bank_name;
         $branch_code=$req->branch_code;
         $account_type=$req->account_type;
 
 
         $claimcapture=array();
         $claimcapture['title']=$title;
         $claimcapture['street']=$street;
         $claimcapture['last_name']=$last_name;
         $claimcapture['first_name']=$first_name;
         $claimcapture['town_city']=$town_city;
         $claimcapture['province']=$province;
         $claimcapture['id_number']=$id_number;
         $claimcapture['time_of_funeral']=$time_of_funeral;
         $claimcapture['code']=$code;
         $claimcapture['contact_number']=$contact_number;
         $claimcapture['date_of_birth']=$date_of_birth;
         $claimcapture['date_of_death']=$date_of_death;
         $claimcapture['cause_of_death']=$cause_of_death;
         $claimcapture['date_of_funeral']=$date_of_funeral;
         $claimcapture['collected_from']=$collected_from;
         $claimcapture['acc_holder']=$acc_holder;
         $claimcapture['bank_name']=$bank_name;
         $claimcapture['branch_code']=$branch_code;
         $claimcapture['account_type']=$account_type;
         $claimcapture['cemetery']=$cemetery;
         $claimcapture['updated_at'] = now();
         $claimcapture['created_at'] = now();
         
         
         
        
 
         //saving benefity banking details
        //  $bank_name=$req->acc;
        //  $account_holder=$req->acc_holder;
        //  $bank_branch=$req->bank_branch;
        //  $account_number=$req->acc_number;
        //  $branch_code=$req->branch_code;
        //  $account_type=$req->account;

        //  $benebank=array();
        //  $benebank['bank_name']=$bank_name;
        //  $benebank['account_holder']=$account_holder;
        //  $benebank['bank_branch']=$bank_branch;
        //  $benebank['account_number']=$account_number;
        //  $benebank['branch_code']=$branch_code;
        //  $benebank['account_type']=$account_type;
        //  $benebank['updated_at'] = now();
        //  $benebank['created_at'] = now();


         //saving deceased details related
         $first_name=$req->first_name;
         $street_address=$req->street_address;
         $last_name=$req->last_name;
         $town_city=$req->town_city;
         $id_number=$req->id_number;
         $province=$req->province;
         $date_of_birth=$req->date_of_birth;
         $time_of_funeral=$req->time_of_funeral;
         $date_of_death=$req->date_of_death;
         $cemetery=$req->cemetery;
         $cause_of_death=$req->cause_of_death;
         $code=$req->code;
         $date_of_funeral=$req->date_of_funeral;
         $collected_from=$req->collected_from;
         $driver_car=$req->driver_car;
         $grave_no=$req->grave_no;

         $deceased=array();
         $deceased['first_name']=$first_name;
         $deceased['street_address']=$street_address;
         $deceased['last_name']=$last_name;
         $deceased['town_city']=$town_city;
         $deceased['id_number']=$id_number;
         $deceased['province']=$province;
         $deceased['date_of_birth']=$date_of_birth;
         $deceased['time_of_funeral']=$time_of_funeral;
         $deceased['date_of_death']=$date_of_death;
         $deceased['cemetery']=$cemetery;
         $deceased['cause_of_death']=$cause_of_death;
         $deceased['code']=$code;
         $deceased['date_of_funeral']=$date_of_funeral;
         $deceased['collected_from']=$collected_from;
         $deceased['driver_car']=$driver_car;
         $deceased['grave_no']=$grave_no;
         $deceaesd['updated_at'] = now();
         $deceaesd['created_at'] = now();
        

    

        DB::table('deceased_details')
        ->insert($deceased);
         
        
         

         DB::table('claimant_details')
         ->insert($claimcapture);

        // DB::table('claimant_details')
        //  ->insert($benebank);
 

         DB::table('claims_details')
             ->insert($claimdtl);

        DB::table('claims_logged')
                ->insert($claimscap);
                // dd($claimscap);


    return Redirect::to('/member-claim')->withSuccess('Application Successfully Submitted');
}




public function tombstone_application(Request $req){
    //storing funeral tombstones
    $first_name=$req->firs_tname;
    $street_address=$req->street_address;
    $last_name=$req->last_name;
    $town_city=$req->town_city;
    $id_number=$req->id_number;
    $province=$req->province;
    // $date_of_application=$req->date_apply;
    $code=$req->code;
    $tellphone_number=$req->tellnum;
    $cellphone_number=$req->cellnum;

    $tomb=array();
    $tomb['first_name']=$first_name;
    $tomb['street_address']=$street_address;
    $tomb['last_name']=$last_name;
    $tomb['town_city']=$town_city;
    $tomb['id_number']=$id_number;
    $tomb['province']=$province;
    // $tomb['date_of_application']=$date_of_application;
    $tomb['code']=$code;
    $tomb['tellphone_number']=$tellphone_number;
    $tomb['cellphone_number']=$cellphone_number;
    $tomb['updated_at'] = now();
    $tomb['created_at'] = now();


    //storing deceased info
    $first_name=$req->first_name;
    $last_name=$req->last_name;
    $cementry=$req->cementary;
    $grave_no=$req->gravenumber;
    // $date_of_application=$req->date_apply;
    $id_number=$req->id_number;
    $date_of_memories=$req->memorial;
    $deceased=$req->decease;
    $erect=$req->erect;
    $contact_person=$req->contact_person;
    $contact_no=$req->contact_number;

    //storing tombstones notes
    $notes=$req->notes;
    $select_tombstone=$req->selects;
    $tombston=$req->tombston;
    $message=$req->message;


    
    

    //array deceased info
    $deceasedinfo=array();
    $deceasedinfo['first_name']=$first_name;
    $deceasedinfo['last_name']=$last_name;
    $deceasedinfo['cementry']=$cementry;
    $deceasedinfo['deceased']=$deceased;
    $deceasedinfo['grave_no']=$grave_no;
    $deceasedinfo['id_number']=$id_number;
    $deceasedinfo['erect']=$erect;
    // $deceasedinfo['date_of_application']=$date_of_application;
    $deceasedinfo['contact_person']=$contact_person;
    $deceasedinfo['contact_no']=$contact_no;
    $deceasedinfo['notes']=$notes;
    $deceasedinfo['tombston']=$tombston;
    $deceasedinfo['message']=$message;
    $deceasedinfo['select_tombstone']=$select_tombstone;
    $deceasedinfo['updated_at'] = now();
    $deceasedinfo['created_at'] = now();


    DB::table('tomb_deceased_info')
            ->insert($deceasedinfo);

    DB::table('tombstone_claims')
            ->insert($tomb);

            return Redirect::to('/tombstone')->withSuccess('Application Successfully Submitted');
}


//storing quotation contact info

public function quotations_app(Request $req){

    
    $title=$req->title;
    $physical_address=$req->physical_addresscal;
    $first_name=$req->first_name;
    $last_name=$req->last_name;
    $street_address=$req->str_address;
    $cellphone_number=$req->cell_number;
    $town_city=$req->town_city;
    $province=$req->province;
    $quotation_date=$req->quotation_date;
    $quotation_status=$req->quotation_status;
    $Tellphone_number=$req->tellphone_number;
    $code=$req->code;

    $quotationinfo=array();
    $quotationinfo['title']=$title;
    $quotationinfo['physical_address']=$physical_address;
    $quotationinfo['first_name']=$first_name;
    $quotationinfo['last_name']=$last_name;
    $quotationinfo['street_address']=$street_address;
    $quotationinfo['cell_number']=$cellphone_number;
    $quotationinfo['town_city']=$town_city;
    $quotationinfo['quotation_date']=$quotation_date;
    $quotationinfo['province']=$province;
    $quotationinfo['quotation_status']=$quotation_status;
    $quotationinfo['tellphone_number']=$Tellphone_number;
    $quotationinfo['code']=$code;
    $quotationinfo['updated_at'] = now();
    $quotationinfo['created_at'] = now();

    DB::table('quotation')
    ->insert($quotationinfo);

    return Redirect::to('/quotation')->withSuccess('Application Successfully Submitted');
}

//store funeral application
public function funeral_application(Request $req)
{
    $first_name=$req->first_name;
    $street_address=$req->street_address;
    $last_name=$req->last_name;
    $town_city=$req->town_city;
    $id_number=$req->id_number;
    $date_of_birth=$req->date_of_birth;
    $province=$req->province;
    $code=$req->code;
    $body_coolection_car_registration=$req->car_reg;
    $status=$req->status;
    $contact_person=$req->contact_person;
    $contact_number=$req->contact_number;
    $cause_of_death=$req->cause_of_death;
    $date_of_death=$req->date_of_death;
    $collected_from=$req->collected_from;
    $body_collection_driver=$req->collect_driver;
    $tag_number=$req->tag_number;
    $fridge_number=$req->fridge_number;
    $shelf=$req->shelf_number;
    $gender=$req->man;

    $deceasedinf=array();
    $deceasedinf['first_name']=$first_name;
    $deceasedinf['street_address']=$street_address;
    $deceasedinf['last_name']=$last_name;
    $deceasedinf['town_city']=$town_city;
    $deceasedinf['id_number']=$id_number;
    $deceasedinf['date_of_birth']=$date_of_birth;
    $deceasedinf['province']=$province;
    $deceasedinf['code']=$code;
    $deceasedinf['body_collection_car_registration']=$body_coolection_car_registration;
    $deceasedinf['status']=$status;
    $deceasedinf['contact_person']=$contact_person;
    $deceasedinf['contact_number']=$contact_number;
    $deceasedinf['cause_of_death']=$cause_of_death;
    $deceasedinf['collected_from']=$collected_from;
    $deceasedinf['body_collection_driver']=$body_collection_driver;
    $deceasedinf['tag_number']=$tag_number;
    $deceasedinf['fridge_number']=$fridge_number;
    $deceasedinf['shelf']=$shelf;
    $deceasedinf['gender']=$gender;
    $deceasedinf['updated_at'] = now();
    $deceasedinf['created_at'] = now();

     // store data physical description
     $personal_items=$req->personal_items;
     $embalming=$req->embalme;
     $coffine_size=$req->coffine;
     $dental_condition=$req->dental;
     $general_condition=$req->general;
     $age_group=$req->age_group;
     $head_hair=$req->head_hair;
     $skin_marks=$req->skin_marks;
     $notes=$req->notes;

     $physical_desc=array();
     $physical_desc['personal_items']=$personal_items;
     $physical_desc['embalming']=$embalming;
     $physical_desc['coffine_size']=$coffine_size;
     $physical_desc['dental_condition']=$dental_condition;
     $physical_desc['general_condition']=$general_condition;
     $physical_desc['age_group']=$age_group;
     $physical_desc['head_hair']=$head_hair;
     $physical_desc['skin_marks']=$skin_marks;
     $physical_desc['notes']=$notes;
     $physical_desc['updated_at'] = now();
     $physical_desc['created_at'] = now();

     //storing funeral  burial
    $date_of_funeral=$req->date_of_funeral;
    $time_of_funeral=$req->time_of_funeral;
    $burial_order_number=$req->order_number;
    $policy_number=$req->policy_number;
    $funeralcar_driver=$req->funeral_driver;
    $cementary=$req->cementry;
    $grave_number=$req->grave_number;

    $burial_service=array();
    $burial_service['date_of_funeral']=$date_of_funeral;
    $burial_service['time_of_funeral']=$time_of_funeral;
    $burial_service['burial_order_number']=$burial_order_number;
    $burial_service['policy_number']=$policy_number;
    $burial_service['funeralcar_driver']=$funeralcar_driver;
    $burial_service['cementary']=$cementary;
    $burial_service['grave_number']=$grave_number;
    $burial_service['updated_at'] = now();
    $burial_service['created_at'] = now();


        DB::table('burial')
            ->insert($burial_service);

     DB::table('burialphysical_description')
         ->insert($physical_desc);

    
    DB::table('deceased_info')
    ->insert($deceasedinf);
    return Redirect::to('/burials')->withSuccess('Application Successfully Submitted');

    
}

    public function save_application(Request $req){

        //step 1 saving  the application
        $broker_code = $req->brokercode;
        $branch_name = $req->branchname;
        $agent_name = $req->agentname;
        $agent_code=$req->agent_code;
        $broker_name = $req->brokername;
        $email_address=$req->agentcode;
        $extended_name=$req->extended_name;
        $extended_surname=$req->extended_surname;
        $relationship=$req->relationship;
        $policy_number = $req->policy_number;
        $title = $req->title;
        $id_number = $req->id_number;
        $first_name = $req->first_name;
        $last_name = $req->last_name;
        $initials = $req->initials;
        $gender = $req->gender;
        $age = $req->age;
        $email_address = $req->email_address;
        $date_of_birth = $req->date_of_birth;
        $citizenship=$req->citizen;
        $cellphone_number=$req->cellphone_number;
        $tellphone_number=$req->tellphone_number;
        $marital_status=$req->marital_status;
        $passport_number=$req->passport_number;

        $data = array();
        $data['brokercode'] = $broker_code;
        $data['brokername'] = $broker_name;
        $data['branch_name'] = $branch_name;
        $data['agentname'] = $agent_name;
        $data['agentcode'] =$agent_code;
        $data['policynumber'] = $policy_number;
        $data['title'] = $title;
        $data['id_number'] = $id_number;
        $data['first_name'] = $first_name;
        $data['last_name'] = $last_name;
        $data['initials'] = $initials;
        $data['extended_name']=$extended_name;
        $data['extended_surname']=$extended_surname;
        $data['relationship']=$relationship;
        $data['gender'] = $gender;
        $data['age'] = $age;
        $data['email_address'] = $email_address;
        $data['policy_status']='Active';
        $data['date_of_birth'] = $date_of_birth;
        $data['citizenship'] = $citizenship;
        $data['cellphone_number'] = $cellphone_number;
        $data['tellphone_number'] = $tellphone_number;
        $data['marital_status'] = $marital_status;
        $data['passport_number'] = $passport_number;
        $data['updated_at'] = now();
        $data['created_at'] = now();
        

        // dd($data);
        //step 2 saving data

        $product_type = $req->product_type;
        $id_number=$req->id_number;
        $policy_status= $req->policy_status;
        $policy_start_date = $req->policy_start_date;
        $policy_inception_date = $req->policy_inception_date;
        $cover_date = $req->cover_date;
        $first_name=$req->first_name;
        $last_name=$req->last_name;
        $ext_last_name=$req->ext_last_name;
        $ext_first_name=$req->ext_first_name;
        $ext_relation=$req->ext_relation;
        $premium = $req->premium;
        $total_premium=$req->total_premium;
        $policy_underwritten_by=$req->policy_underwritten_by;
        $cover_amount=$req->cover_amount;
        $policy_agent=$req->policy_agent;
        $membership_number=$req->membership_number;
        $type_of_income=$req->type_of_income;
        $easypay_number=$req->easypay_number;
        $branchname=$req->branchname;
        $employmenttype=$req->employmenttype;
        $policy_number=$req->Policy_number;

        $policy =  array();
        $policy['product_type'] = $product_type;
        $policy['id_number'] = $id_number;
        $policy['cover_date'] = $cover_date;
        $policy['policy_start_date'] = $policy_start_date;
        $policy['policy_inception_date'] = $policy_inception_date;
        $policy['policy_status'] = $policy_status;
        $policy['first_name']=$first_name;
        $policy['last_name']=$last_name;
        $policy['ext_last_name']=$ext_last_name;
        $policy['ext_first_name']=$ext_first_name;
        $policy['ext_relation']=$ext_relation;
        $policy['premium'] = $premium;
        $policy['total_premium'] = $total_premium;
        $policy['policy_underwritten_by'] = $policy_underwritten_by;
        $policy['cover_amount'] = $cover_amount;
        $policy['policy_agent'] = $policy_agent;
        $policy['membership_number'] = $membership_number;
        $policy['type_of_income'] = $type_of_income;
        $policy['easypay_number'] = $easypay_number;
        $policy['branchname'] = $branchname;
        $policy['employmenttype'] = $employmenttype;
        $policy['policy_number'] = $policy_number;
        $policy['updated_at'] = now();
        $policy['created_at'] = now();
        
        
        //step 3 saving data
        $ext_title = $req->ext_title;
        $ext_id=$req->ext_id;
        $ext_dob=$req->ext_dob;
        $ext_relation = $req->ext_relation;
        $ext_first_name = $req->ext_first_name;
        $ext_last_name = $req->ext_last_name;
        $ext_coveramount=$req->ext_coveramount;
        $ext_gender = $req->ext_gender;
        $ext_addprem=$req->ext_addprem;
        $ext_totalprem=$req->ext_totalprem;
        $ext_age = $req->ext_age;
        $product_type=$req->product_type;
        $debit_date = $req->debit_date;
        $ext_initials = $req->ext_initials;

        $ext = array();
        $ext['ext_title'] = $ext_title;
        $ext['ext_id']=$ext_id;
        $ext['ext_dob']=$ext_dob;
        $ext['ext_relation'] = $ext_relation;
        $ext['ext_first_name'] = $ext_first_name;
        $ext['ext_last_name'] = $ext_last_name;
        $ext['ext_coveramount']=$ext_coveramount;
        $ext['ext_gender'] = $ext_gender;
        $ext['ext_addprem']=$ext_addprem;
        $ext['ext_totalprem']=$ext_totalprem;
        $ext['ext_age'] = $ext_age;
        $ext['product_type']=$product_type;
        $ext['debit_date'] = $debit_date;
        $ext['ext_initials'] = $ext_initials;
        $ext['updated_at'] = now();
        $ext['created_at'] = now();

        // $ex_relationship=$req->$ex_relationship;
        // $ex_fullnames=$req->$ex_fullnames;
        // $ex_surnames=$req->$ex_surnames;
        // $ex_id_no=$req->$ex_id_no;
        // $ex_date_birth=$req->$ex_date_birth;
        // $ex_cellphone=$req->$ex_cellphone;
        // $ex_emails=$req->$ex_emails;
        // $ex_genders=$req->$ex_genders;
        // $ex_prod_type=$req->$ex_prod_type;
        // $ex_cover_amount=$req->$ex_cover_amount;
        // $ex_premium=$req->$ex_premium;
        // $ex_total_premium=$req->$ex_total_premium;

        // $ex=array();
        // $ex['ex_relationship']=$ex_relationship;
        // $ex['ex_fullnames']=$ex_fullnames;
        // $ex['ex_surnames']=$ex_surnames;
        // $ex['ex_id_no']=$ex_id_no;
        // $ex['ex_date_birth']=$ex_date_birth;
        // $ex['ex_cellphone']=$ex_cellphone;
        // $ex['ex_emails']=$ex_emails;
        // $ex['ex_genders']=$ex_genders;
        // $ex['ex_prod_type']=$ex_prod_type;
        // $ex['ex_cover_amount']=$ex_cover_amount;
        // $ex['ex_premium']=$ex_premium;
        // $ex['ex_total_premium']=$ex_total_premium;
        

        
        //step 5 saving data

        $ben_policy_number = $req->ben_policy_number;
        $ben_title = $req->ben_title;
        $ben_first_name = $req->ben_first_name;
        $ben_last_name = $req->ben_last_name;
        $ben_gender = $req->ben_gender;
        $ben_age = $req->ben_age;
        $ben_birth = $req->ben_birth;
        $ben_initials = $req->ben_initials;
        $ben_id_number = $req->ben_id_number;
        $ben_cell = $req->ben_cell;
        $ben_work_tell = $req->ben_work_tell;
        $ben_home_tell = $req->ben_home_tell;
        $ben_email = $req->ben_email;
        


        $ben = array();
        $ben['ben_policy_number'] = $ben_policy_number;
        $ben['ben_title'] = $ben_title;
        $ben['ben_first_name'] = $ben_first_name;
        $ben['ben_last_name'] = $ben_last_name;
        $ben['ben_gender'] = $ben_gender;
        $ben['ben_age'] = $ben_age;
        $ben['ben_birth'] = $ben_birth;
        $ben['ben_initials'] = $ben_initials;
        $ben['ben_id_number'] = $ben_id_number;
        $ben['ben_cell'] = $ben_cell;
        $ben['ben_work_tell'] = $ben_work_tell;
        $ben['ben_home_tell'] = $ben_home_tell;
        $ben['ben_email'] = $ben_email;
        $ben['updated_at'] = now();
        $ben['created_at'] = now();
        

        //step 6

        $Acc_holder = $req->Acc_holder;
        $bank_name = $req->bank_name;
        $account_type = $req->account_type;
        $payment_method=$req->payment_method;
        $branch_code = $req->branch_code;
        $debit_date = $req->debit_date;
        $pay_first_name = $req->pay_first_name; 
        $pay_last_name = $req->pay_last_name;
        $pay_id_number = $req->pay_id_number;
        $pay_cell_number = $req->pay_cell_number;
        $account_number=$req->account_number;$res_residential_num = $req->mem_residential_num;
        $mem_town_city = $req->mem_town_city;
        $res_suburb= $req->mem_suburb;
        $res_residential_code = $req->mem_residential_code;
        $mem_postal_pobox = $req->mem_postal_pobox;
        $postal_residential_code = $req->postal_residential_code;
        $postal_suburb = $req->mem_postal_suburb;
        $postal_town = $req->mem_postal_town;


        $pay = array();
        $pay['Acc_holder'] = $Acc_holder;
        $pay['bank_name'] = $bank_name;
        $pay['account_type'] = $account_type;
        $pay['payment_method']=$payment_method;
        $pay['branch_code'] = $branch_code;
        $pay['debit_date'] = $debit_date;
        $pay['pay_first_name'] = $pay_first_name;
        $pay['pay_last_name'] = $pay_last_name;
        $pay['pay_id_number'] = $pay_id_number;
        $pay['pay_cell_number'] = $pay_cell_number;
        $pay['account_number'] = $account_number;
        $pay['res_residential_num'] = $res_residential_num;
        $pay['mem_town_city'] = $mem_town_city;
        $pay['res_suburb'] = $res_suburb;
        $pay['res_residential_code'] = $res_residential_code;
        $pay['postal_pobox'] = $mem_postal_pobox;
        $pay['postal_residential_code'] = $postal_residential_code;
        $pay['postal_suburb'] = $postal_suburb;
        $pay['postal_town'] = $postal_town;
        $pay['updated_at'] = now();
        $pay['created_at'] = now();
        // $mem['updated_at'] = now();
        // $mem['created_at'] = now();



        // step 7 saving database
        
        
       
        // step 8 saving database
        $terms = $req->terms;

        $term = array();
        $term['term'] = $terms;


        DB::table('applications')
            ->insert($data); 
          
        // DB::table('members')
        //     ->insert($member);  
        DB::table('policy_details')
            ->insert($policy);  

        DB::table('extended_members')
            ->insert($ext); 

        DB::table('beneficiary_details')
            ->insert($ben); 

         DB::table('payment_method')
            ->insert($pay); 


            // DB::table('add_ext_member')
            // ->insert($ex);

        // DB::table('address')
        //     ->insert($mem); 
             
        DB::table('terms')
            ->insert($term);    
  
            return Redirect::to('/dashboard')->withSuccess('Application Successfully Submitted');
            

    }


    public function delete($policydtl_id)
    {
        $pol=DB::table('policy_details')
        ->where('policydtl_id', $policydtl_id)
        ->delete();
        
        return redirect()->back(); 


    }

    public function delete_update($tbl_id)
    {
        $pol=DB::table('applications')
        ->where('tbl_id', $tbl_id)
        ->delete();
        
        return redirect()->back(); 


    }

    public function delete_deceased($deceased_id)
    {
        $info=DB::table('deceased_info')
        ->where('deceased_id', $deceased_id)
        ->delete();
        
        return redirect()->back(); 


    }


    
    public function delete_physical($deceased_id)
    {
        $phy=DB::table('deceased_info')
        ->where('deceased_id', $deceased_id)
        ->delete();
        
        return redirect()->back(); 


    }


    public function delete_burial($deceased_id)
    {
        $bur=DB::table('deceased_info')
        ->where('deceased_id', $deceased_id)
        ->delete();
        
        return redirect()->back(); 


    }

    public function delete_tomb($tomb_id)
    {
        $bur=DB::table('tomb_deceased_info')
        ->where('tomb_id', $tomb_id)
        ->delete();
        
        return redirect()->back(); 


    }

    public function delete_tombinfo($tomb_id)
    {
        $bur=DB::table('tomb_deceased_info')
        ->where('tomb_id', $tomb_id)
        ->delete();
        
        return redirect()->back(); 


    }


    public function delette($policydtl_id)
    {
        $del=DB::table('policy_details')
        ->where('policydtl_id', $policydtl_id)
        ->delete();
        
        return redirect()->back(); 

    }

    public function ben_delete($ben_id)
    {
        $ben=DB::table('beneficiary_details')
        ->where('ben_id', $ben_id)
        ->delete();
        
        return redirect()->back(); 
    }

    public function delete_logg($claimant_id)
    {
        $logg=DB::table('claimant_details')
        ->where('claimant_id', $claimant_id)
        ->delete();
        
        return redirect()->back(); 
    }


    public function data_imports(Request $req)
    {
        $Import_Excel_File=$req->$excel_file;
        
    }

    public function caldate(Request $request)
    {
        $birthdate = $request->input('birthdate');
        $today = date('Y-m-d');
        $date1=date_create($birthdate);
        $date2=date_create($today);
        $diff=date_diff($date1,$date2);
        $value['years'] = $diff->format("%Y Years %M Months %D Days");
        return response()->json($value);             
    }
}
