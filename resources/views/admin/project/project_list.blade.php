@extends('admin.partials.head')
@section('content')
@include('admin.partials.header')

    
    <div class="row">
        <div class="col-md-10 col-xl-12">
          {{-- <a href="{{ route('project_form') }}" class="btn btn-info ml-3">Add Project</a> --}}
          <a href="{{ route('rfq_form') }}" class="btn btn-primary ml-3">RFQ Form</a>
          <a href="{{ route('rfq_approved_list') }}" class="btn btn-success ml-3">RFQ Approved</a>
          <a href="{{ route('rfq_pending_list') }}" class="btn btn-warning ml-3">RFQ Pending for Approval</a>
          <a href="{{ route('rfq_closed_list') }}" class="btn btn-danger ml-3">Delivered and Closed RFQ</a>
        </div>
    </div>

    <div class="row mt-3">
        @foreach ($projects as $key => $project)  
            <div class="col-sm-3">
                <div class="card" style="background-image: linear-gradient(to bottom right, #00bfad, #99a3d4);">
                  <div class="card-body">
                    <h5 class="card-title" style="color: rgb(255, 255, 255); --heading-clamp-lines:1;">{{$project->project_name}}</h5>
                    <p class="card-text text-white">Department</p>
                    <p class="card-text text-white">
                        @php
                            $item_count_all = 0;
                        @endphp
                        <span style="font-size: 12px;"> {{$project->project_details_count ?? "0"}} Item</span>
                    </p>
                    <a href="{{ route('view_project',$project->id) }}" class="btn btn-primary" style="background-color: cadetblue; border:none">View Project</a>
                  </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection