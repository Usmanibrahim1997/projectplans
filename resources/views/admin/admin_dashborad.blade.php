<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Dashboard - This is an example dashboard.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('table/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="{{ asset('table/icons/pe-icon-7-stroke/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('table/css/style.css') }}">

  </head>
  <style>
    .card {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 10px;
      padding: 10px;
    }
    
    .card-header {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .card-body {
      font-size: 14px;
    }
    th , td{
      text-align: center;
      white-space: nowrap;
      max-width: 280px !important;
    }
    
    .box{
        color: white;
        padding: 3px;
        display: none;
    }
    .logo-src-new{
      height: 23px;
      width: 97px;
      background: url({{ asset('assets/image/dashboard.jpg') }});
    }
    </style>
  <body>
    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="projectModalLabel">Add Project</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('addProject') }}" method="POST">
            @csrf
            <div class="modal-body">
              <input type="text" placeholder="Project Title" class="form-control values" name="project_name">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="m-2 p-2">
              <input type="text" placeholder="Search names, roles or tearms" class="w-100">
              <p class="mt-2 text-left">
                Suggested people
              </p>
              <div class="d-flex btn btn-light">
                <div class="float-left">
                  <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="30" height="30"> <b>Usman Ibrahim</b>
                </div>
              </div>
              <div class="d-flex btn btn-light">
                <a href="{{ route('invite.form') }}">
                  <svg viewBox="0 0 20 20" fill="currentColor" width="30" height="30" aria-hidden="true" class="mt-1 icon_component invite-new-person-icon">
                    <path d="M7.27093 2.34404C7.7399 2.14979 8.24254 2.0498 8.75015 2.0498C9.25776 2.0498 9.7604 2.14979 10.2294 2.34404C10.6983 2.53829 11.1245 2.82302 11.4834 3.18195C11.8423 3.54088 12.127 3.967 12.3213 4.43597C12.5156 4.90494 12.6155 5.40758 12.6155 5.91519C12.6155 6.4228 12.5156 6.92544 12.3213 7.39441C12.127 7.86338 11.8423 8.28949 11.4834 8.64843C11.1245 9.00736 10.6983 9.29208 10.2294 9.48634C9.7604 9.68059 9.25776 9.78057 8.75015 9.78057C8.24254 9.78057 7.7399 9.68059 7.27093 9.48634C6.80196 9.29209 6.37584 9.00736 6.01691 8.64843C5.65798 8.28949 5.37325 7.86338 5.179 7.39441C4.98475 6.92544 4.88477 6.4228 4.88477 5.91519C4.88477 5.40758 4.98475 4.90494 5.179 4.43597C5.37325 3.967 5.65798 3.54088 6.01691 3.18195C6.37584 2.82302 6.80196 2.53829 7.27093 2.34404ZM8.75015 3.5498C8.43952 3.5498 8.13194 3.61099 7.84496 3.72986C7.55797 3.84873 7.29722 4.02296 7.07757 4.24261C6.85792 4.46226 6.68369 4.72301 6.56482 5.01C6.44595 5.29698 6.38477 5.60456 6.38477 5.91519C6.38477 6.22582 6.44595 6.5334 6.56482 6.82038C6.68369 7.10736 6.85792 7.36812 7.07757 7.58777C7.29722 7.80742 7.55798 7.98165 7.84496 8.10052C8.13194 8.21939 8.43952 8.28057 8.75015 8.28057C9.06078 8.28057 9.36836 8.21939 9.65534 8.10052C9.94232 7.98165 10.2031 7.80742 10.4227 7.58777C10.6424 7.36812 10.8166 7.10736 10.9355 6.82038C11.0544 6.5334 11.1155 6.22582 11.1155 5.91519C11.1155 5.60456 11.0544 5.29698 10.9355 5.01C10.8166 4.72301 10.6424 4.46226 10.4227 4.24261C10.2031 4.02296 9.94233 3.84873 9.65534 3.72986C9.36836 3.61099 9.06078 3.5498 8.75015 3.5498Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                    <path d="M8.33935 10.7312C8.3512 10.7307 8.36306 10.7305 8.37491 10.7305H9.12469C9.13838 10.7305 9.15198 10.7308 9.1655 10.7314 9.7888 10.7566 10.4024 10.8595 10.9888 11.0353 11.4913 11.1859 11.4963 11.8685 11.0942 12.2054 10.9063 12.3628 10.6558 12.4142 10.4202 12.3465 9.99646 12.2249 9.55476 12.1529 9.10634 12.1337H8.39335C7.53853 12.1703 6.70811 12.3988 5.97999 12.7977 5.24701 13.1992 4.64204 13.7602 4.22255 14.4273 3.80542 15.0907 3.58548 15.8372 3.58328 16.5965H9.12469L9.12963 16.5965H9.21466C9.47166 16.5965 9.69353 16.7699 9.78802 17.0089 9.96102 17.4465 9.67351 17.9997 9.203 17.9997H9.12509L9.12014 17.9997H2.79163C2.35443 17.9997 2 17.6856 2 17.2981V16.6097C1.9997 15.6068 2.2887 14.6203 2.83955 13.7443 3.39044 12.8682 4.18491 12.1314 5.14751 11.6041 6.1101 11.0767 7.20884 10.7762 8.33935 10.7312zM14.7002 11.5C15.1144 11.5 15.4502 11.8358 15.4502 12.25V14H17.2002C17.6144 14 17.9502 14.3358 17.9502 14.75 17.9502 15.1642 17.6144 15.5 17.2002 15.5H15.4502V17.25C15.4502 17.6642 15.1144 18 14.7002 18 14.286 18 13.9502 17.6642 13.9502 17.25V15.5H12.2002C11.786 15.5 11.4502 15.1642 11.4502 14.75 11.4502 14.3358 11.786 14 12.2002 14H13.9502V12.25C13.9502 11.8358 14.286 11.5 14.7002 11.5z" fill="currentColor"></path></svg>
                    <div class="mt-2">
                      <span>Invite a new member by email</span>
                    </div>
                </a>    
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div class="">
            <h4><b>Admin<sup class="text-warning">Dashboard</sup></b></h4>
          </div>
          <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
          </div>
        </div>
    
        <div class="app-header__content">
          <div class="app-header-right">
            <div class="header-btn-lg pr-0">
              <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                    <div class="btn-group">
                      <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                        <img width="42" class="rounded-circle" src="{{ asset('assets/image/defalut_profile_pic.png') }}" alt="">
                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                      </a>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <a type="button" tabindex="0" class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content-left header-user-info">
                    <div class="widget-heading text-capitalize ">{{ auth()->user()->name }}</div>
                    <div class="widget-subheading">{{ auth()->user()->roles }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div class="logo-src-new"></div>
            <div class="header__pane ml-auto">
              <div><button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
            </div>
          </div>
          <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li><a href="{{ route('home') }}" class="mm-active"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
                <li class="app-sidebar__heading">Components</li>
                <li><a href="#"><i class="metismenu-icon pe-7s-diamond"></i> Elements</a>
                  <ul>
                    <li><a href="#projectModal" data-toggle="modal" data-target="#projectModal"><i class="metismenu-icon"></i> Add Project</a></li>
                    <li><a href="{{ route('invite.form') }}"><i class="metismenu-icon"></i> Add Client</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="app-main__outer container_fluid" style="width: -webkit-fill-available;">
          <div class="app-main__inner container_fluid">
            <div class="container_fluid">
              <div class="container_fluid">
                <div class="app-page-title">
                  <div class="page-title-wrapper">
                    <div class="page-title-heading">
                      <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
                      <div>Admin Dashboard <div class="page-title-subheading">This is an example dashboard. </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                      <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                          <div class="widget-heading">Total Projects</div>
                          <div class="widget-subheading">Working On It</div>
                        </div>
                        <div class="widget-content-right">
                          <div class="widget-numbers text-white ml-3">
                            <span style="font-size:35px"> {{ $totalProjects }}</span> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                      <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                          <div class="widget-heading">Clients</div>
                          <div class="widget-subheading">People Registered</div>
                        </div>
                        <div class="widget-content-right">
                          <div class="widget-numbers text-white ml-3"><span style="font-size:35px">{{ $totalUser }}</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                      <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                          <div class="widget-heading">Person</div>
                          <div class="widget-subheading">Invite vs Email</div>
                        </div>
                        <div class="widget-content-right">
                          <div class="widget-numbers text-white ml-3"><span style="font-size:35px">46</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-heading">Total Companies</div>
                            <div class="widget-subheading">Last year Add Companies</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="widget-numbers text-success ml-3"><span style="font-size:35px">{{ $totalCompany ?? "" }}</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-heading">Products Sold</div>
                            <div class="widget-subheading">Revenue streams</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="widget-numbers text-warning ml-3"><span style="font-size:35px">$3M</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-heading">Followers</div>
                            <div class="widget-subheading">Active People</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="widget-numbers text-danger">95%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                      <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                            <div class="widget-heading">Income</div>
                            <div class="widget-subheading">Expected totals</div>
                          </div>
                          <div class="widget-content-right">
                            <div class="widget-numbers text-focus">$147</div>
                          </div>
                        </div>
                        <div class="widget-progress-wrapper">
                          <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                          </div>
                          <div class="progress-sub-label">
                            <div class="sub-label-left">Expenses</div>
                            <div class="sub-label-right">100%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 col-xl-12">
                    <button type="button" class="btn btn-secondary ml-3"  data-toggle="modal" data-target="#projectModal">Add Project</button>
                  </div>
                </div>
               
                @foreach ($projects as $key => $project)  
                  <div class="row">
                    <div class="col-md-10 col-xl-12">
                      <div class="card panel-group" draggable="true" data-index="1" style=" box-shadow: none; width: 98%;" id="accordions-{{$key}}">
                        <div class="card-header" style="border-left: 5px solid rgb(120, 75, 209);margin: 0;padding:35px 10px;" type="button" data-toggle="collapse" data-target="#collapseExample-{{$key}}" aria-expanded="false" aria-controls="collapseExample-{{$key}}">
                          <div class="generic-group-header-name can-drag collapsed bx-new-collapsed">
                            <div class=" d-flex">
                              <span class="collapse-group-button mr-3">
                                <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20" role="button" tabindex="0" aria-hidden="false" class="icon_component icon_component--clickable">
                                  <path d="M12.5303 9.46967L12 10L12.5303 10.5303C12.8232 10.2374 12.8232 9.76256 12.5303 9.46967ZM10.9393 10L7.46967 13.4697C7.17678 13.7626 7.17678 14.2374 7.46967 14.5303C7.76256 14.8232 8.23744 14.8232 8.53033 14.5303L12.5303 10.5303L12 10L12.5303 9.46967L8.53033 5.46967C8.23744 5.17678 7.76256 5.17678 7.46967 5.46967C7.17678 5.76256 7.17678 6.23744 7.46967 6.53033L10.9393 10Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                              </span>
                              <span class="group-name" data-walkthrough-id="group-name" style="color: rgb(120, 75, 209);padding-top: 10px">
                                <div class="editable-heading--wrapper group-name-editable" aria-label="Beach Sand Click to Edit" id="" data-testid="">
                                  <div role="input" data-testid="clickable" tabindex="0" class="monday-style-clickable monday-style-clickable--disable-text-selection">
                                    <h6 class="heading-component element-type-h4 size-medium single-line-ellipsis suggest-edit-on-hover" aria-label="" style="color: rgb(120, 75, 209); --heading-clamp-lines:1;">{{$project->project_name}}</h6>
                                  </div>
                                </div>
                              </span>
                            </div>
                            <div class="row ml-4">
                              <div class="col-md-12">
                                @php
                                  $main_project_ids = $project->pluck('id')->toArray();
                                  $project_detail_ids = App\Models\ProjectData::where('project_id',$main_project_ids)->pluck('id')->toArray();
                                  $itemCount = App\Models\ProjectItem::whereIn('project_data_id',$project_detail_ids)->count();
                                @endphp
                                <span style="font-size: 12px;"> {{$project->project_details_count ?? "0"}} Item / {{ $itemCount }} Subitem</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="container_fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="collapse" id="collapseExample-{{$key}}" aria-labelledby="cardHeading" data-parent="#accordion-{{$key}}">
                                <div class="card-body">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="table-wrap">
                                          <table class="table myaccordion" id="accordion-{{$key}}" style="border-left: 5px solid rgb(120, 75, 209);margin: 0; ">
                                            <thead>
                                              <tr>
                                                <th style="width: 3%;">
                                                  <div>
                                                    <input type="checkbox" class="control-input" id="checkbox-3">
                                                  </div>
                                                </th>
                                                <th>
                                                  <span style="width:222px">Item</span>
                                                </th>
                                                <th>Person</th>
                                                <th style="width: 10%;">Material Request</th>
                                                <th style="width: 7%;">Request for Quote</th>
                                                <th>MTA Approval</th>
                                                <th style="width: 7%;">Vendor/Manufacturing</th>
                                                <th>PO Number</th>
                                                <th>PO Status</th>
                                                <th>Unit</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Total PO Value</th>
                                                <th>Total PO Value with VAT 15%</th>
                                                <th>Vender Shop Drawing Submission</th>
                                                <th>Vendor Shop Drawing Approval</th>
                                                <th>Febrication Status</th>
                                                <th>Delivary Schedule</th>
                                                <th>Balance Delivery</th>
                                                <th>Paid Amount</th>
                                                <th>Balance Amount</th>
                                                <th>Timeline</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              
                                              @foreach ($project->projectDetails as $index => $details)
                                                <form action="{{ route('updateProjectDetails',$details->id) }}" method="POST">
                                                  @csrf
                                                  <tr>
                                                    <td scope="row">
                                                      <div>
                                                        <input type="checkbox" class="control-input" id="checkbox-3">
                                                        <input type="hidden" class="values" name="project_id" value="{{$project->id ?? ""}}">
                                                        <input type="hidden" class="values" name="project_name" value="{{$project->project_name ?? ""}}">
                                                      </div>
                                                    </td>
                                                    <td>
                                                      <div class=" d-flex" style="width:222px">
                                                        <span class="collapse-group-button mr-3 bg-white-o-0" type="button" data-toggle="collapse" data-target="#collapseOne-{{$index}}" aria-expanded="true" aria-controls="collapseOne">
                                                          <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20" role="button" tabindex="0" aria-hidden="false" class="icon_component icon_component--clickable">
                                                            <path d="M12.5303 9.46967L12 10L12.5303 10.5303C12.8232 10.2374 12.8232 9.76256 12.5303 9.46967ZM10.9393 10L7.46967 13.4697C7.17678 13.7626 7.17678 14.2374 7.46967 14.5303C7.76256 14.8232 8.23744 14.8232 8.53033 14.5303L12.5303 10.5303L12 10L12.5303 9.46967L8.53033 5.46967C8.23744 5.17678 7.76256 5.17678 7.46967 5.46967C7.17678 5.76256 7.17678 6.23744 7.46967 6.53033L10.9393 10Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                                          </svg>
                                                        </span>
                                                        <input type="text" value="{{$details->item ?? ""}}" name="item" class="values" style="border: none;">
                                                      </div>  
                                                    </td>
                                                    <td>
                                                      <div class="widget-content-left">
                                                        <div class="btn-group">
                                                          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                            @if (isset($details->person) && $details->person)
                                                              <span class="text-capitalize" 
                                                              style="padding: 15px;
                                                              background-color: grey;
                                                              color: white;
                                                              border-radius: 50%;" title="{{$details->person}}">{{$details->person[0]}}</span>
                                                            @else
                                                              <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="40" height="40">
                                                            @endif
                                                          </a>
                                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button type="button" tabindex="0" class="dropdown-item">
                                                              <select class="form-control" name="person">
                                                                @foreach ($users as $user)
                                                                  @if ($user->roles != "Admin")
                                                                    <option>Select Member</option>
                                                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                                                  @endif
                                                                @endforeach
                                                              </select>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <a type="button" tabindex="0" class="dropdown-item" href="{{ route('invite.form') }}">
                                                              <span>Invite Member</span>
                                                            </a>    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td>  
                                                      <input type="text" name="materialRequest" value="{{ $details->marterial_request ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="requestForQuote" value="{{ $details->requestForQuote ?? "" }}" style="border: none">
                                                    </td>
                                                    <td>
                                                      <input name="MtaApproval" value="{{$details->mta_approval ?? ""}}" type="text" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="vendorManufacturing" value="{{$details->vender_manufacturing ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="POnumber" value="{{$details->po_num ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="POstatus" value="{{$details->po_status ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="unit" value="{{$details->unit ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="quantity" value="{{$details->quantity ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="unitPrice" value="{{$details->unit_price ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="totalPOValue" value="{{$details->total_po_value ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="totalPOValueWithVat15" value="{{$details->total_po_value_with_tax ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="venderShopDrawingSubmission" value="{{$details->drawing_submission ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="vendorShopDrawingApproval" value="{{$details->drawing_approval ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="febricationStatus" value="{{$details->febrication_status ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="delivarySchedule" value="{{$details->delivary_schedule ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="balanceDelivery" value="{{$details->balance_delivary ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="paidAmount" value="{{$details->paid_amount ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="balanceAmount" value="{{$details->balance_amount ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      <input type="text" name="timeLine" value="{{$details->timeline ?? ""}}" style="border: none;" class="values">                                     
                                                    </td>
                                                    <td>
                                                      @if ($details->status == "Working on it")
                                                        <div class="red box1 bg-warning text-white" >Working on it</div>
                                                      @elseif ($details->status == "Done")
                                                        <div class="green box1 bg-success text-white">Done</div>
                                                      @elseif ($details->status == "Stuck")
                                                        <div class="blue box1 bg-danger text-white">stuck</div>
                                                      @else  
                                                        <select name="status" id="select">
                                                          <option value="" selected disabled>Status</option>
                                                          <option value="Working on it" class="bg-warning text-white">Working on it</option>
                                                          <option value="Done" class="bg-success text-white">Done</option>
                                                          <option value="Stuck" class="bg-danger text-white">Stuck</option>
                                                        </select>
                                                      @endif
                                                        
                                                      <select name="status" id="select" class="selectNew d-none">
                                                        <option value="" selected disabled>Status</option>
                                                        <option value="Working on it" class="bg-warning text-white">Working on it</option>
                                                        <option value="Done" class="bg-success text-white">Done</option>
                                                        <option value="Stuck" class="bg-danger text-white">Stuck</option>
                                                      </select>
                                                    </td>
                                                    <td>
                                                      <input style="border: none;" value="{{$details->date ?? ""}}" name="date" class="values" type="date">                                     
                                                    </td>
                                                    <td>
                                                      <button type="submit" class="btn btn-success">Update</button>
                                                    </td>
                                                  </tr>
                                                </form>
                                                  <tr>
                                                    <td>
                                                      <table id="collapseOne-{{$index}}" class="collapse ml-4" data-parent="#accordion" style="width:80%;"> 
                                                        <thead>
                                                          <tr>
                                                            <th style="width: 3%;border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                                              <div>
                                                                <input type="checkbox" class="control-input" id="checkbox-3">
                                                              </div>
                                                            </th>
                                                            <th style="width: 10%;">Subitem</th>
                                                            <th style="width: 5%;">Owner</th>
                                                            <th style="width: 5%;">Status</th>
                                                            <th style="width: 5%;">Date</th>
                                                            <th style="width: 5%">Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach ($details->projectItems as $submits)
      
                                                            <form action="{{ route('updateSubItem',$submits->id) }}" method="POST">
                                                            @csrf
                                                              <tr>
                                                                <td style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                                                  <div>
                                                                      <input type="checkbox" class="control-input" id="checkbox-3">
                                                                      <input type="hidden" name="project_data_id" value="{{ $submits->project_data_id }}">
                                                                  </div>
                                                                </td>
                                                                <td>
                                                                  <input type="text" style="border: none;" name="sub_item_name" value="{{ $submits->sub_item_name }}">
                                                                </td>
                                                                <td>
                                                                  <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="40" height="40" data-toggle="modal" data-target=".bd-example-modal-sm">
                                                                </td>
                                                                <td>
                                                                  @if ($submits->status == "Working on it")
                                                                    <div class="red bg-warning text-white" >Working on it</div>
                                                                  @elseif ($submits->status == "Done")
                                                                    <div class="green bg-success text-white">Done</div>
                                                                  @elseif ($submits->status == "Stuck")
                                                                    <div class="blue bg-danger text-white">stuck</div>
                                                                  @else  
                                                                    <select name="status" id="" class="select">
                                                                      <option value="" selected disabled>Status</option>
                                                                      <option value="Working on it" class="bg-warning text-white">Working on it</option>
                                                                      <option value="Done" class="bg-success text-white">Done</option>
                                                                      <option value="Stuck" class="bg-danger text-white">Stuck</option>
                                                                    </select>
                                                                  @endif
                                                                </td>
                                                                <td>
                                                                  <input type="date" name="date" value="{{ $submits->date }}" style="border: none;">
                                                                </td>
                                                                <td>
                                                                  <button type="submit" class="btn btn-success">Update</button>
                                                                </td>
                                                              </tr>
                                                            </form>
                                                          @endforeach
                
                                                          <form action="{{ route('addSubItem') }}" method="POST">
                                                            @csrf
                                                            <tr>
                                                              <td style="border-left: 5px solid rgba(120, 75, 209, 0.336);margin: 0;">
                                                                <div>
                                                                    <input type="checkbox" class="control-input" disabled id="checkbox-3">
                                                                    <input type="hidden" name="project_data_id" value="{{$details->id}}">
                                                                </div>
                                                              </td>
                                                              <td>
                                                                <input type="text" name="sub_item_name" style="border: none;" placeholder="+ Add Subitem">
                                                              </td>
                                                              <td>
                                                                <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="40" height="40" data-toggle="modal" data-target=".bd-example-modal-sm">
                        
                                                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog modal-sm">
                                                                    <div class="modal-content">
                                                                      <div class="m-2 p-2">
                                                                        <input type="text" placeholder="Search names, roles or tearms" class="w-100">
                                                                        <p class="mt-2 text-left">
                                                                          Suggested people
                                                                        </p>
                                                                        <div class="d-flex btn btn-light">
                                                                          <div class="float-left">
                                                                            <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="30" height="30"> <b>Usman Ibrahim</b>
                                                                          </div>
                                                                        </div>
                                                                        <div class="d-flex btn btn-light">
                                                                          <svg viewBox="0 0 20 20" fill="currentColor" width="30" height="30" aria-hidden="true" class="mt-1 icon_component invite-new-person-icon">
                                                                            <path d="M7.27093 2.34404C7.7399 2.14979 8.24254 2.0498 8.75015 2.0498C9.25776 2.0498 9.7604 2.14979 10.2294 2.34404C10.6983 2.53829 11.1245 2.82302 11.4834 3.18195C11.8423 3.54088 12.127 3.967 12.3213 4.43597C12.5156 4.90494 12.6155 5.40758 12.6155 5.91519C12.6155 6.4228 12.5156 6.92544 12.3213 7.39441C12.127 7.86338 11.8423 8.28949 11.4834 8.64843C11.1245 9.00736 10.6983 9.29208 10.2294 9.48634C9.7604 9.68059 9.25776 9.78057 8.75015 9.78057C8.24254 9.78057 7.7399 9.68059 7.27093 9.48634C6.80196 9.29209 6.37584 9.00736 6.01691 8.64843C5.65798 8.28949 5.37325 7.86338 5.179 7.39441C4.98475 6.92544 4.88477 6.4228 4.88477 5.91519C4.88477 5.40758 4.98475 4.90494 5.179 4.43597C5.37325 3.967 5.65798 3.54088 6.01691 3.18195C6.37584 2.82302 6.80196 2.53829 7.27093 2.34404ZM8.75015 3.5498C8.43952 3.5498 8.13194 3.61099 7.84496 3.72986C7.55797 3.84873 7.29722 4.02296 7.07757 4.24261C6.85792 4.46226 6.68369 4.72301 6.56482 5.01C6.44595 5.29698 6.38477 5.60456 6.38477 5.91519C6.38477 6.22582 6.44595 6.5334 6.56482 6.82038C6.68369 7.10736 6.85792 7.36812 7.07757 7.58777C7.29722 7.80742 7.55798 7.98165 7.84496 8.10052C8.13194 8.21939 8.43952 8.28057 8.75015 8.28057C9.06078 8.28057 9.36836 8.21939 9.65534 8.10052C9.94232 7.98165 10.2031 7.80742 10.4227 7.58777C10.6424 7.36812 10.8166 7.10736 10.9355 6.82038C11.0544 6.5334 11.1155 6.22582 11.1155 5.91519C11.1155 5.60456 11.0544 5.29698 10.9355 5.01C10.8166 4.72301 10.6424 4.46226 10.4227 4.24261C10.2031 4.02296 9.94233 3.84873 9.65534 3.72986C9.36836 3.61099 9.06078 3.5498 8.75015 3.5498Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                                                            <path d="M8.33935 10.7312C8.3512 10.7307 8.36306 10.7305 8.37491 10.7305H9.12469C9.13838 10.7305 9.15198 10.7308 9.1655 10.7314 9.7888 10.7566 10.4024 10.8595 10.9888 11.0353 11.4913 11.1859 11.4963 11.8685 11.0942 12.2054 10.9063 12.3628 10.6558 12.4142 10.4202 12.3465 9.99646 12.2249 9.55476 12.1529 9.10634 12.1337H8.39335C7.53853 12.1703 6.70811 12.3988 5.97999 12.7977 5.24701 13.1992 4.64204 13.7602 4.22255 14.4273 3.80542 15.0907 3.58548 15.8372 3.58328 16.5965H9.12469L9.12963 16.5965H9.21466C9.47166 16.5965 9.69353 16.7699 9.78802 17.0089 9.96102 17.4465 9.67351 17.9997 9.203 17.9997H9.12509L9.12014 17.9997H2.79163C2.35443 17.9997 2 17.6856 2 17.2981V16.6097C1.9997 15.6068 2.2887 14.6203 2.83955 13.7443 3.39044 12.8682 4.18491 12.1314 5.14751 11.6041 6.1101 11.0767 7.20884 10.7762 8.33935 10.7312zM14.7002 11.5C15.1144 11.5 15.4502 11.8358 15.4502 12.25V14H17.2002C17.6144 14 17.9502 14.3358 17.9502 14.75 17.9502 15.1642 17.6144 15.5 17.2002 15.5H15.4502V17.25C15.4502 17.6642 15.1144 18 14.7002 18 14.286 18 13.9502 17.6642 13.9502 17.25V15.5H12.2002C11.786 15.5 11.4502 15.1642 11.4502 14.75 11.4502 14.3358 11.786 14 12.2002 14H13.9502V12.25C13.9502 11.8358 14.286 11.5 14.7002 11.5z" fill="currentColor"></path></svg>
                                                                            <div class="mt-2">
                                                                              <span>Invite a new member by email</span>
                                                                            </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </td>
                                                              <td>
                                                                <select name="status" id="" class="select">
                                                                  <option value="" selected disabled>Status</option>
                                                                  <option value="red" class="bg-warning text-white">Working on it</option>
                                                                  <option value="green" class="bg-success text-white">Done</option>
                                                                  <option value="blue" class="bg-danger text-white">stuck</option>
                                                                </select>
                        
                                                                <div class="red box bg-warning text-white">Working on it</div>
                                                                <div class="green box bg-success text-white">Done</div>
                                                                <div class="blue box bg-danger text-white">stuck</div>
                                                              </td>
                                                              <td>
                                                                <input name="date" type="date" style="border: none;">
                                                              </td>
                                                              <td>
                                                                <button type="submit" class="btn btn-success"><sab>+</sab> Add</button>
                                                              </td>
                                                            </tr>
                                                          </form>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                              @endforeach
                                            </tbody>
                                          </table>

                                          <table class="table myaccordion" id="accordion">
                                            <tbody>
                                            <form action="{{ route('addProjectDetails') }}" method="POST">
                                              @csrf  
                                              <tr>
                                                <td style="width: 3%; border-left: 5px solid rgba(120, 75, 209, 0.336);margin: 0;">
                                                  <div>
                                                      <input type="checkbox" class="control-input" id="checkbox-3">
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class=" d-flex" style="width:222px">
                                                    <input type="text" class="createData" name="item" placeholder="+ Add project" style="border: none; width:222px">
                                                  </div> 
                                                </td>
                                                <td>
                                                  <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="46" height="40" data-toggle="modal" data-target=".bd-example-modal-sm">
                                                </td>
                                                <td>  
                                                  <input type="text" class="createData" name="materialRequest" style="border: none;"> 
                                                  <input type="hidden" class="createData" name="project_id" value="{{$project->id ?? ""}}">
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="requestForQuote" style="border: none;">
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="MtaApproval" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="vendorManufacturing" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="POnumber" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="POstatus" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="unit" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="quantity" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="unitPrice" style="border:none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="totalPOValue" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="totalPOValueWithVat15" style="border: none; width:190px;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="venderShopDrawingSubmission" style="border: none; width:228px;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="vendorShopDrawingApproval" style="border: none; width:210px;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="febricationStatus" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="delivarySchedule" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="balanceDelivery" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="paidAmount" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="balanceAmount" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <input type="text" class="createData" name="timeLine" style="border: none;">                                     
                                                </td>
                                                <td>
                                                  <select name="status" id="" class="select">
                                                    <option value="" selected disabled>Status</option>
                                                    <option value="Working on it" class="bg-warning text-white">Working on it</option>
                                                    <option value="Done" class="bg-success text-white">Done</option>
                                                    <option value="Stuck" class="bg-danger text-white">Stuck</option>
                                                  </select>
          
                                                  <div class="red box bg-warning text-white">Working on it</div>
                                                  <div class="green box bg-success text-white">Done</div>
                                                  <div class="blue box bg-danger text-white">stuck</div>                                    
                                                </td>
                                                <td>
                                                  <input name="date" class="createData" style="border: none;" type="date">                                     
                                                </td>
                                                <td>
                                                  <button type="submit" class="btn btn-success"><sab>+</sab> Add</button>
                                                </td>
                                              </tr>
                                            </form>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                      <div class="widget-content">
                        <div class="widget-content-outer">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left pr-2 fsize-1">
                              <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                            </div>
                            <div class="widget-content-right w-100">
                              <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                              </div>
                            </div>
                          </div>
                          <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">Income Target</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                      <div class="widget-content">
                        <div class="widget-content-outer">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left pr-2 fsize-1">
                              <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                            </div>
                            <div class="widget-content-right w-100">
                              <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                              </div>
                            </div>
                          </div>
                          <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">Complete Target</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                      <div class="widget-content">
                        <div class="widget-content-outer">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left pr-2 fsize-1">
                              <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                            </div>
                            <div class="widget-content-right w-100">
                              <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                              </div>
                            </div>
                          </div>
                          <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">Spendings Target</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                      <div class="widget-content">
                        <div class="widget-content-outer">
                          <div class="widget-content-wrapper">
                            <div class="widget-content-left pr-2 fsize-1">
                              <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                            </div>
                            <div class="widget-content-right w-100">
                              <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                              </div>
                            </div>
                          </div>
                          <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">Totals Target</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      </div>
    </div>
    <script src="{{ asset('table/js/jquery.min.js') }}"></script>
    <script src="{{ asset('table/js/popper.js') }}"></script>
    {{-- <script src="{{ asset('table/js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('table/js/main.js') }}"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    <script>
        $(document).ready(function(){
          // $(".select").change(function(){
          //   $(this).find("option:selected").each(function(){
          //     var optionValue=$(this).attr("value");
          //     if(optionValue){
          //       $(".box").not("."+optionValue).hide();
          //       $("."+optionValue).show();
          //       $(".select").addClass('d-none');
          //     }else{
          //         $(".box").hide();
          //     }
          //   });
          // }).change();
      
          $(".box1").click(function(){
              $(".box1").hide();
              $(".selectNew").removeClass('d-none');
          });
      
        });
    </script>
  </body>
</html>