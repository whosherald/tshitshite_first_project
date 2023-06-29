<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>wellworx | PDF</title>
    </head>
    <body>
        <style>
                .body{
                    font-family: Arial, Helvetica, sans-serif;
                }
                .error{
                    color: #ba0c35;
                    text-transform: Uppercase;
                }
                .error-message{
                    color: #ba0c35;
                    text-transform: Capitalize;
                }
                .success{
                    color: green;
                    text-transform: Uppercase;
                }
                .header{
                    background-color: #343436;
                    color: white;
                text-align: left;
                width: 10%;
                }
                .blank-heading{
                    background-color: #343436;
                    column-span: 3;
                }

                .container{
                    margin-top: 10px;
                }

                .heading{
                    text-align: left;
                    margin-top: 3px;
                    background-color: #ba0c35
                    color: #ffffff;
                    font-size: 35px;
                    font-weight: 800;
                    font-family: Arial, Helvetica, sans-serif;
                }

                .table{
                    width: 100%;
                    border: 5;
                    outline: 0;
                border-collapse:collapse;
                }

                .table td{
                    background-color: white;
                    color: #343434;
                    height: 25px;
                word-wrap: inherit;
                border: 1px solid black;
                }
                .responses{
                    column-span: 3;
                }
                .definitions{
                    column-span: 1;
                }
                .table tr{
                    border: none;
                }

        </style>
        <div class="container">
            @foreach($full_data as $info)
            <table class="table">
                <tr>
                    <th class="header definitions">Submission Details</th>
                    <th class="blank-heading"></th>
                </tr>
                @if($info->status ==-1)
                <tr class="body">
                    <td class="definitions">Submit Status</td>
                    <td class="responses error">ERROR</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Error Code</td>
                    <td class="responses error">{{ $info->errorcode }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Error Message</td>
                    <td class="responses error-message">{{ $info->errormessage }}</td>
                </tr>
                @elseif($info->status == 1)
                <tr class="body">
                    <td class="definitions">Submit Status</td>
                    <td class="responses success">OK</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Membership Message and Number</td>
                    <td class="responses success">Online Application Loaded Successfully for Membershup Number: {{ $info->membership_num }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Query ID</td>
                    <td class="responses success">{{ $info->reference_id }}</td>
                </tr>
                @endif
                <tr>
                    <th class="header definitions">Broker Details</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Do you<br> acknowledge<br> that if the<br> member is<br> over the age<br> of 45 or<br> under the age<br> of 45 with<br> the five<br> conditions that<br> underwriting will<br> be applicable:</td>
                    <td class="responses">Yes</td>
                </tr>
                <tr class="body">
                    <td class="definitions">
                        You agree<br> that you have all previous<br> schemes<br> certificate of<br> membership<br> for each<br> member that<br> will be<br> added. You<br> acknowledge<br> and agree<br> that if these<br> certificates of<br> memberships<br> are not <br>attached on<br> submission<br> that the<br> application<br> will be rejected
                    </td>
                    <td class="responses">Yes</td>
                </tr>
                <tr class="body">
                    <td class="definitions">
                        You agree<br> that you have<br> that if there is a<br> third party bank account <br>being used <br>for contributions<br> that you have<br> a letter of<br> consent from<br> the account<br> holder in<br> question. You<br> acknowledge<br> and agree<br> that if this<br> letter of<br> consent is not<br> attached on<br> submission<br> that the<br> application<br> will be<br> rejected
                    </td>
                    <td class="responses">
                        Yes
                    </td>
                </tr>
                <tr class="body">
                    <td class="definitions">Brokerage Name</td>
                    <td class="responses">{{ $info->brokeragename }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Broker Name</td>
                    <td class="responses">{{ $info->brokername }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Broker Code</td>
                    <td>{{ $info->brokercode }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Broker Telephone</td>
                    <td>{{ $info->brokertel }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Medical aid join date</td>
                    <td>{{ $info->medstart_date }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Main Member Details</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Title</td>
                    <td class="responses">{{ $info->main_title }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Surname</td>
                    <td class="responses">{{ $info->main_surname}}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First Name</td>
                    <td class="responses">{{ $info->main_firstname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Initials</td>
                    <td class="responses">{{ $info->main_initial }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">ID / Passport</td>
                    <td class="responses">{{ $info->idPassType }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">ID / Passport Number</td>
                    <td class="responses">{{ $info->mainid_number }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Marital Status</td>
                    <td class="responses">{{ $info->main_marital }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Gender</td>
                    <td class="responses">{{ $info->mgender_radio }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Date of Birth</td>
                    <td class="responses">{{ $info->m_dob }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Age</td>
                    <td class="responses">{{ date('Y') - strtotime($info->m_dob) }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Language</td>
                    <td class="responses">{{ $info->main_lang }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Ethnicity</td>
                    <td class="responses">{{ $info->m_race }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Dependants?</td>
                    <td class="responses">{{ $info->m_deps_radio }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Main Member Contact Details</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Cellphone</td>
                    <td class="responses">{{ $info->m_cell }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Telephone(h)</td>
                    <td class="responses">{{ $info->m_telh }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Telephone(w)</td>
                    <td class="responses">{{ $info->m_telw }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Email</td>
                    <td class="responses">{{ $info->m_email }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Tax Number</td>
                    <td class="responses">{{ $info->mtax }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Is it a PO Box?</td>
                    <td class="responses">{{ $info->mainid_pobox }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Postal Number</td>
                    <td class="responses">{{ $info->m_psnum }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Postal Street Name</td>
                    <td class="responses">{{ $info->m_psname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Postal Street Type</td>
                    <td class="responses">{{ $info->m_pstype }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Postal Suburb</td>
                    <td class="responses">{{ $info->m_psuburb }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Postal Code</td>
                    <td class="responses">{{ $info->m_postalcode }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Street Number</td>
                    <td class="responses">{{ $info->m_ssnum }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Street Name</td>
                    <td class="responses">{{ $info->m_ssname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Street Type</td>
                    <td class="responses">{{ $info->m_sstype }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Street Suburb</td>
                    <td class="responses">{{ $info->m_ssuburb }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Street Postal Code</td>
                    <td class="responses">{{ $info->m_spostalcode }}</td>
                </tr>
                
                <tr>
                    <th class="header definitions">Dependant Details</th>
                    <th class="blank-heading"></th>
                </tr>
                @foreach($deps_data as $dependent)
                    <tr class="body">
                        <td class="definitions">Title</td>
                        <td class="responses">{{ $dependent->dep_title }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Name</td>
                        <td class="responses">{{ $dependent->d_firstname }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Surname</td>
                        <td class="responses">{{ $dependent->d_surname }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">ID / Passport Number</td>
                        <td class="responses">{{ $dependent->d_idpass }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Date of Birth</td>
                        <td class="responses">{{ $dependent->d_dob }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Age</td>
                        <td class="responses">{{ date('Y') - date('Y', strtotime($dependent->d_dob)) }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Marital Status</td>
                        <td class="responses">{{ $dependent->d_marital }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Ethnicity</td>
                        <td class="responses">{{ $dependent->d_race }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Gender</td>
                        <td class="responses">{{ $dependent->d_gender_radio }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Relationship to main member</td>
                        <td class="responses">{{ $dependent->d_rel }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Telephone Number</td>
                        <td class="responses">{{ $dependent->d_contact }}</td>
                    </tr>
                    <tr class="body">
                        <td class="definitions">Tax Number</td>
                        <td class="responses">{{ $dependent->d_tax }}</td>
                    </tr>
                @endforeach
               
                <tr>
                    <th class="header definitions">Banking Details</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Is this a third party account?</td>
                    <td class="responses">{{ $info->thirdpartycheck }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Contributions</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Bank Name</td>
                    <td class="responses">{{ $info->bankname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Branch Name</td>
                    <td class="responses">{{ $info->branchname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Branch Code</td>
                    <td class="responses">{{ $info->branchcode }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Holder Name</td>
                    <td class="responses">{{ $info->accholder }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Number</td>
                    <td class="responses">{{ $info->accnum }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Type</td>
                    <td class="responses">{{ $info->acctype }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Validation Message</td>
                    <td class="responses"> {{ $info->verification }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Debit Order Date</td>
                    <td class="responses">{{ $info->debitdate }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Refunds</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Bank Name</td>
                    <td class="responses">{{ $info->bankname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Branch Name</td>
                    <td class="responses">{{ $info->branchname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Branch Code</td>
                    <td class="responses">{{ $info->branchcode }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Holder Name</td>
                    <td class="responses">{{ $info->accholder }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Account Number</td>
                    <td class="responses">{{ $info->accnum }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Previous Medical Aid Details</th>
                    <th class="blank-heading"></th>
                    <tr>
                        <th class="header definitions">Member 1</th>
                        <th class="blank-heading"></th>
                    </tr>
                </tr>
                <tr class="body">
                    <td class="definitions">Member Name and Surname</td>
                    <td class="responses">{{ $info->fullname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Previous Medical Scheme Name</td>
                    <td class="responses">{{ $info->medscheme }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Previous Membership Number</td>
                    <td class="responses">{{ $info->membership_num }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Join Date</td>
                    <td class="responses">{{ $info->medjoindate }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">End Date</td>
                    <td class="responses">{{ $info->medenddate }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Previous Medical Scheme Certificate of Membership</td>
                    <td class="responses">{{ $info->comupload }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Medical Questions</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr>
                    <th class="header definitions">Medical Question</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Medical Code</td>
                    <td class="responses">{{ $qinfo->medical_questions }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Name and Surname</td>
                    <td class="responses">{{ $info->fullname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Illness</td>
                    <td class="responses">{{ $info->illness }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Currently being treated?</td>
                    <td class="responses">{{ $info->treated }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First Treatment Date</td>
                    <td class="responses">{{ $info->firsttreatmentdate }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Last Treatment Date</td>
                    <td class="responses">{{ $info->lasttreatmentdate }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Name of Doctor / Specialist</td>
                    <td class="responses">{{ $info->gpfullname }}</td>
                </tr>
                <tr>
                    <th class="header definitions">GP Nominations</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr>
                    <th class="header definitions">Main Member</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Name and Surname</td>
                    <td class="responses">{{ $info->fullname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First GP Name</td>
                    <td class="responses">{{ $info->firstdocname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First GP Practice Number</td>
                    <td class="responses">{{ $info->firstdocpnum }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Second GP Name</td>
                    <td class="responses">{{ $info->seconddocname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Second GP Practice Number</td>
                    <td class="responses">{{ $info->seconddocpnum }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Dependant Member</th>
                    <th class="blank-heading"></th>
                </tr>
                <tr class="body">
                    <td class="definitions">Name and Surname</td>
                    <td class="responses">{{ $info->fullname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First GP Name</td>
                    <td class="responses">{{ $info->firstdocname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">First GP Practice Number</td>
                    <td class="responses">{{ $info->firstdocpnum }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Second GP Name</td>
                    <td class="responses">{{ $info->seconddocname }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Second GP Practice Number</td>
                    <td class="responses">{{ $info->seconddocpnum }}</td>
                </tr>
                <tr>
                    <th class="header definitions">Declaration</th>
                    <th class="blank-heading">{{ $info->mem_declaration }}</th>
                </tr>
                <tr class="body">
                    <td class="definitions">Agreed to Terms and Conditions?</td>
                    <td class="responses">{{ $info->terms_agreement }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Date of Agreement</td>
                    <td class="responses">{{ $info->advisor_dates }}</td>
                </tr>
                <tr class="body">
                    <td class="definitions">Main Member Full Name</td>
                    <td class="responses">{{ $info->advisor_memfullname }}</td>
                </tr>
            </table>
            @endforeach
        </div>   
    </body>
</html>