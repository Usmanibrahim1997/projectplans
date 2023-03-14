<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Projects;
use App\Models\ProjectData;
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
        $user = auth()->user();
        $company = Company::where('user_id',$user->id)->first();
        if($user->roles == "User"){
            return view('home',compact('company'));
        }else{
            $projects = Projects::withCount(['projectDetails'])
                     ->with(['projectDetails', 'projectDetails.projectItems'])
                     ->get();
            $projectItems = ProjectData::withCount('projectItems')->pluck('project_items_count')->toArray();
            $totalProjects = Projects::count();
            $totalCompany = Company::count();
            $totalUser = User::count();
            
            // $projects['projectItems'] = $projectItems;
// dd($projects);
            return view('admin.admin_dashborad',compact('projects','totalProjects','totalUser','totalCompany'));
        }
    }

    // public function admin_dashboard()
    // {
    //     return view('admin.admin_dashborad');
    // }
}
