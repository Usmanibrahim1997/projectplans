<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyMember;
use App\Models\Projects;
use App\Models\ProjectData;
use App\Models\ProjectItem;


class CompanyController extends Controller
{
    public function save_company(Request $request)
    {
        if($request->hasfile('logo')) 
        { 
            $file = $request->logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $logo = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('company_profile_logo')) 
        { 
            $file = $request->company_profile_logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $company_profile_logo = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('image_gallery')) 
        { 
            $file = $request->image_gallery;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $image_gallery = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('brands_logo')) 
        { 
            $file = $request->brands_logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $brands_logo = $file->move('uploads/company/', $filename);
        }

        $company = new Company();
        $company->user_id = auth()->user()->id;
        $company->field_main_business = $request->field_main_business;
        $company->company_name = $request->company_name;
        $company->field_brief = $request->field_brief;
        $company->country_code = $request->country_code;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->province = $request->province;
        $company->postal_code = $request->postal_code;
        $company->telephone_num = $request->telephone_num;
        $company->fax_num = $request->fax_num;
        $company->website_url = $request->website_url;
        $company->company_registration_num = $request->company_registration_num;
        $company->map_geocode = $request->map_geocode;
        $company->map_latitude = $request->map_latitude;
        $company->map_logitude = $request->map_logitude;
        $company->logo = $logo ?? "";
        $company->company_profile_logo = $company_profile_logo ?? "";
        $company->image_gallery = $image_gallery ?? "";
        $company->brands_logo = $brands_logo ?? "";
        $company->save();

        return redirect()->back();
    }

    public function my_company()
    {
        $user_id = auth()->user()->id;
        $company = Company::where('user_id',$user_id)->get();
        return view('my_company',compact('company'));
    }

    public function edit_company()
    {
        $user_id = auth()->user()->id;
        $company = Company::where('user_id',$user_id)->first();
        return view('edit_company',compact('company'));
    }

    public function update_company(Request $request)
    {
        if($request->hasfile('logo')) 
        { 
            $file = $request->logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $logo = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('company_profile_logo')) 
        { 
            $file = $request->company_profile_logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $company_profile_logo = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('image_gallery')) 
        { 
            $file = $request->image_gallery;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $image_gallery = $file->move('uploads/company/', $filename);
        }
        if($request->hasfile('brands_logo')) 
        { 
            $file = $request->brands_logo;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $brands_logo = $file->move('uploads/company/', $filename);
        }

        $user_id = auth()->user()->id;
        $company = Company::where('user_id',$user_id)->first();
        $company->user_id = auth()->user()->id;
        $company->field_main_business = $request->field_main_business;
        $company->company_name = $request->company_name;
        $company->field_brief = $request->field_brief;
        $company->country_code = $request->country_code;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->province = $request->province;
        $company->postal_code = $request->postal_code;
        $company->telephone_num = $request->telephone_num;
        $company->fax_num = $request->fax_num;
        $company->website_url = $request->website_url;
        $company->company_registration_num = $request->company_registration_num;
        $company->map_geocode = $request->map_geocode;
        $company->map_latitude = $request->map_latitude;
        $company->map_logitude = $request->map_logitude;
        $company->logo = $logo ?? "";
        $company->company_profile_logo = $company_profile_logo ?? "";
        $company->image_gallery = $image_gallery ?? "";
        $company->brands_logo = $brands_logo ?? "";
        $company->update();

        return redirect()->back();
    }

    public function add_team_members()
    {
        return view('add_company_member');
    }

    public function save_company_member(Request $request)
    {
        $member = new CompanyMember();
        $member->user_id = auth()->user()->id;
        $member->status = '1';
        $member->name = $request->name ?? "";
        $member->email = $request->member_email;
        $member->save();

        return redirect()->back();
    }

    public function admin_dashboard()
    {
        $projects = Projects::withCount(['projectDetails'])
                     ->with(['projectDetails', 'projectDetails.projectItems'])
                     ->get();
        return view('admin.admin_dashborad',compact('projects'));
    }

    public function addProject(Request $request)
    {
        $projects = new Projects();
        $projects->project_name = $request->project_name;
        $projects->status = "Active";
        $projects->save();

        return redirect()->back();
    }
    
    public function addProjectDetails(Request $request){
        $projectData = new ProjectData();
        $projectData->project_id = $request['project_id'] ?? "";
        $projectData->item = $request['item'] ?? "";
        $projectData->person = "";
        $projectData->marterial_request = $request['materialRequest'] ?? "";
        $projectData->request_for_quote = $request['requestForQuote'] ?? "";
        $projectData->mta_approval = $request['MtaApproval'] ?? "";
        $projectData->vender_manufacturing = $request['vendorManufacturing'] ?? "";
        $projectData->po_num = $request['POnumber'] ?? "";
        $projectData->po_status = $request['POstatus'] ?? "";
        $projectData->unit = $request['unit'] ?? "";
        $projectData->quantity = $request['quantity'] ?? "";
        $projectData->unit_price = $request['unitPrice'] ?? "";
        $projectData->total_po_value = $request['totalPOValue'] ?? "";
        $projectData->total_po_value_with_tax = $request['totalPOValueWithVat15'] ?? "";
        $projectData->drawing_submission = $request['venderShopDrawingSubmission'] ?? "";
        $projectData->drawing_approval = $request['vendorShopDrawingApproval'] ?? "";
        $projectData->febrication_status = $request['febricationStatus'] ?? "";
        $projectData->delivary_schedule = $request['delivarySchedule'] ?? "";
        $projectData->balance_delivary = $request['balanceDelivery'] ?? "";
        $projectData->paid_amount = $request['paidAmount'] ?? "";
        $projectData->balance_amount = $request['balanceAmount'] ?? "";
        $projectData->timeline = $request['timeLine'] ?? "";
        $projectData->status = $request['status'] ?? "";
        $projectData->date = $request['date'] ?? "";
        $projectData->save();

        return redirect()->back();
    }

    public function updateProjectDetails(Request $request , $project_detail_id)
    {
        $projectData = ProjectData::find($project_detail_id);
        $projectData->project_id = $projectData->project_id;
        $projectData->item = $request['item'];
        $projectData->person = "";
        $projectData->marterial_request = $request['materialRequest'];
        $projectData->request_for_quote = $request['requestForQuote'];
        $projectData->mta_approval = $request['MtaApproval'];
        $projectData->vender_manufacturing = $request['vendorManufacturing'];
        $projectData->po_num = $request['POnumber'];
        $projectData->po_status = $request['POstatus'];
        $projectData->unit = $request['unit'];
        $projectData->quantity = $request['quantity'];
        $projectData->unit_price = $request['unitPrice'];
        $projectData->total_po_value = $request['totalPOValue'];
        $projectData->total_po_value_with_tax = $request['totalPOValueWithVat15'];
        $projectData->drawing_submission = $request['venderShopDrawingSubmission'];
        $projectData->drawing_approval = $request['vendorShopDrawingApproval'];
        $projectData->febrication_status = $request['febricationStatus'];
        $projectData->delivary_schedule = $request['delivarySchedule'];
        $projectData->balance_delivary = $request['balanceDelivery'];
        $projectData->paid_amount = $request['paidAmount'];
        $projectData->balance_amount = $request['balanceAmount'];
        $projectData->timeline = $request['timeLine'];
        $projectData->status = $request['status'];
        $projectData->Date = $request['date'];
        $projectData->Update();
    
        return redirect()->back();
    }

    public function addSubItem(Request $request)
    {
        $subItem = new ProjectItem();
        $subItem->sub_item_name = $request->sub_item_name;
        $subItem->project_data_id = $request->project_data_id;
        $subItem->owner_name = "";
        $subItem->status = $request->status;
        $subItem->date = $request->date;
        $subItem->save();

        return redirect()->back();
    }

    public function updateSubItem(Request $request ,$id)
    {
        $subItem = ProjectItem::find($id);
        $subItem->sub_item_name = $request->sub_item_name;
        $subItem->project_data_id = $request->project_data_id;
        $subItem->owner_name = "";
        $subItem->status = $request->status;
        $subItem->date = $request->date;
        $subItem->update();

        return redirect()->back();
    }
}
