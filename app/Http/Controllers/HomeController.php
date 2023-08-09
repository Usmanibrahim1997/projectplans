<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Projects;
use App\Models\ProjectData;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $materials = DB::table('com_list')->get();
        $user = auth()->user();
        $company = Company::where('user_id',$user->id)->first();
        if($user->roles == "User"){
            return view('home',compact('company'));
        }else{
            $projects = Projects::withCount(['projectDetails'])
                ->with(['projectDetails', 'projectDetails.projectItems'])
                ->get();

            $projectItems = ProjectData::withCount('projectItems')->pluck('project_items_count', 'id')->toArray();

            foreach ($projects as $project) {
                $projectDetailCount = $project->project_details_count;
                $project->projectDetails->each(function ($projectDetail) use ($projectItems) {
                    $projectDetail->item_count = $projectItems[$projectDetail->id] ?? 0;
                });
                $project->item_count = $projectDetailCount;
            }
       
            $totalProjects = Projects::count();
            $totalCompany = Company::count();
            $totalUser = User::count();
            $users = User::all();
           
            return view('admin.admin_dashborad',compact('projects','totalProjects','totalUser','totalCompany','users','materials'));
        }

    }

    // public function admin_dashboard()
    // {
    //     return view('admin.admin_dashborad');
    // }
}
