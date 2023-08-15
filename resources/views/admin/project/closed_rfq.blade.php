@extends('admin.partials.head')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-culture icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Closed Requests<div class="page-title-subheading">Admin dashboard. </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($projectItemClosed as $key => $project)
            @foreach ($project->projectItems as $item)
                @if($item->status == 'Closed')    
                    <div class="col-sm-3">
                        <div class="card" style="background-image: linear-gradient(to bottom right, #00bfad, #99a3d4);">
                        <div class="card-body">
                            <h5 class="card-title" style="color: rgb(255, 255, 255); --heading-clamp-lines:1;">{{$project->project_name}}</h5>
                            <p class="card-text text-white">Department</p>
                            <p class="card-text text-white">
                                @php
                                    $project_items_count = 0;
                                    if ($item->status) {
                                        $project_items_count++;
                                    }
                                @endphp
                                <span style="font-size: 12px;"> {{$project_items_count ?? "0"}} Item Closed</span>
                            </p>
                            <a href="{{ route('view_closed_item',$project->id) }}" class="btn btn-primary" style="background-color: cadetblue; border:none">View Project</a>
                        </div>
                        </div>
                    </div>
                @endif
            @endforeach 
        @endforeach
    </div>

@endsection