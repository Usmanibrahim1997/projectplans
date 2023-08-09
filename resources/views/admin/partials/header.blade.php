<div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"></i></div>
        <div>Admin Dashboard <div class="page-title-subheading">This is an example dashboard. </div>
        </div>
      </div>
    </div>
</div>

@php
    $totalProjects = \App\Models\Projects::count();
    $totalCompany = \App\Models\Company::count();
    $totalUser = \App\Models\User::count();
@endphp

<div class="row">
    <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-midnight-bloom">
        <a href="{{ route('show_project_list') }}" class="widget-content-wrapper text-white">
          <div class="widget-content-left">
            <div class="widget-heading">Total Projects</div>
            <div class="widget-subheading">Working On It</div>
          </div>
          <div class="widget-content-right">
            <div class="widget-numbers text-white ml-3">
              <span style="font-size:35px"> {{ $totalProjects }}</span> 
            </div>
          </div>
        </a>
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
              <div class="widget-heading">Total Materials</div>
              <div class="widget-subheading">Revenue streams</div>
            </div>
            <div class="widget-content-right">
              <div class="widget-numbers text-warning ml-3"><span style="font-size:35px"></span></div>
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