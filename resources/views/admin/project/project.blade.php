@extends('admin.partials.head')
@section('content')
    <style>
        .icon-rotate {
            transform: rotate(90deg); /* Rotate the icon by 180 degrees */
            transition: transform 0.3s ease; /* Add a smooth transition effect */
        }
    </style>

    <div class="row">
        <div class="col-md-10 col-xl-12">
          <a href="{{ route('project_form') }}" class="btn btn-primary ml-3">Add Project</a>
          <a href="{{ route('show_project_list') }}" class="btn btn-info ml-3">Project List</a>
        </div>
    </div>

    @foreach ($projects as $key => $project)  
        <div class="row">
            <div class="col-md-10 col-xl-12">
                <div class="card panel-group" draggable="true" data-index="1" style=" box-shadow: none; width: 98%;" id="accordions-{{$key}}">
                    <div class="card-header" id="accordion-div-{{$key}}" onclick="rotateIcon({{$key}})" style="border-left: 5px solid rgb(120, 75, 209);margin: 0;padding:35px 10px;" type="button" data-toggle="collapse" data-target="#collapseExample-{{$key}}" aria-expanded="false" aria-controls="collapseExample-{{$key}}">
                        <div class="generic-group-header-name can-drag collapsed bx-new-collapsed">
                            <div class=" d-flex">
                                <span class="collapse-group-button mr-3 svg-new-style">
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
                                    <span style="font-size: 12px;"> {{$project->project_details_count ?? "0"}} Item / {{$project->project_items_count ?? "0"}} Subitem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container_fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="collapse" id="collapseExample-{{$key}}" aria-labelledby="cardHeading" data-parent="#accordion-{{$key}}">
                                    <div class="card-body p-0">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-wrap">
                                                        <table class="table myaccordion" id="accordion-{{$key}}" style="border-left: 5px solid rgb(120, 75, 209, 0.51);margin: 0; ">
                                                            <thead>
                                                                <tr>
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
                                                                        {{-- <input type="checkbox" class="control-input" id="checkbox-3"> --}}
                                                                        <input type="hidden" class="values" name="project_id" value="{{$project->id ?? ""}}">
                                                                        <input type="hidden" class="values" name="project_name" value="{{$project->project_name ?? ""}}">
                                                                        {{-- <td scope="row">
                                                                            <div>
                                                                            </div>
                                                                        </td> --}}
                                                                        <td>
                                                                            <div class=" d-flex" style="width:253px">
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
                                                                            @if ($details->materialRequest)
                                                                                <button type="button" class="btn btn-secondary ml-3" data-toggle="modal" data-target="#requestMaterial-{{$index}}">View Material</button>
                                                                            @else
                                                                                <button type="button" class="btn btn-secondary ml-3" data-toggle="modal" data-target="#requestMaterial-{{$index}}">Add Material</button>
                                                                            @endif
                                                                        </td>
                                                                        <td>  
                                                                            <input type="text" name="request_for_quote" value="{{ $details->request_for_quote ?? ""}}" style="border: none;" class="values">                                     
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
                                                                            <input type="text" name="quantity" onkeyup="getUnitPrice('{{$details->id}}')" value="{{$details->quantity ?? ""}}" style="border: none;" class="values quantity-{{$details->id}}">                                     
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="unitPrice" onkeyup="getUnitPrice('{{$details->id}}')" value="{{$details->unit_price ?? ""}}" style="border: none;" class="values unit-price-{{$details->id}}">                                     
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" readonly name="totalPOValue" value="{{$details->total_po_value ?? ""}}" style="border: none;" class="values total-PO-Value-{{$details->id}}">                                     
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" readonly name="totalPOValueWithVat15" value="{{$details->total_po_value_with_tax ?? ""}}" style="border: none;" class="values total-PO-Value-With-Vat-{{$details->id}}">                                     
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
                                                                            <table id="collapseOne-{{$index}}" class="collapse" data-parent="#accordion" style="width:80%;"> 
                                                                                <thead>
                                                                                    <tr>
                                                                                    <th style="width: 3%;border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                                                                        <div>
                                                                                            No
                                                                                        </div>
                                                                                    </th>
                                                                                    <th style="width: 5%;">Material Description</th>
                                                                                    <th style="width: 5%;">Owner</th>
                                                                                    <th style="width: 5%;">Department</th>
                                                                                    <th style="width: 5%;">MRF #</th>
                                                                                    <th style="width: 5%;">Unit</th>
                                                                                    <th style="width: 5%;">Size</th>
                                                                                    <th style="width: 5%;">Quantity</th>
                                                                                    <th style="width: 5%;">Used For</th>
                                                                                    <th style="width: 5%;">Remark</th>
                                                                                    <th style="width: 5%;">Location</th>
                                                                                    <th style="width: 5%;">Status</th>
                                                                                    <th style="width: 5%;">Requried At</th>
                                                                                    <th style="width: 5%">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($project->projectItems as $index_id => $submits)

                                                                                    <form action="{{ route('updateSubItem',$submits->id) }}" method="POST">
                                                                                        @csrf
                                                                                        <tr>
                                                                                            <td style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                                                                                <div>
                                                                                                    #{{ $index_id+1 }}
                                                                                                    <input type="hidden" name="project_data_id" value="{{ $submits->project_data_id }}">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;width: 193px;" name="material_description">{{ $submits->material_description }}</textarea>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="d-inline-block">
                                                                                                    <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="40" height="40" data-toggle="modal" data-target=".bd-example-modal-sm">
                                                                                                    <p style="text-transform: uppercase">{{ $submits->owner_name }}</p>
                                                                                                </div>    
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="department_name">{{ $submits->department_name }}</textarea>
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;">{{ $submits->service_type.'-'. date('Y', strtotime($submits->created_at)) .'-'.'00'.$index_id+1 }}</textarea>
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="unit" >{{ $submits->unit }}</textarea>
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="size" >{{ $submits->size }}</textarea>
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="quantity" >{{ $submits->quantity }}</textarea> 
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="used_for" >{{ $submits->used_for }}</textarea> 
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="remark" >{{ $submits->remark }}</textarea> 
                                                                                            </td>
                                                                                            <td>
                                                                                                <textarea readonly rows="3" style="border: none;" name="location" >{{ $submits->location }}</textarea> 
                                                                                            </td>
                                                                                            <td>
                                                                                                @if ($submits->status == "Pending")
                                                                                                    <div class="red bg-warning text-white" >Pending</div>
                                                                                                @elseif ($submits->status == "Approved")
                                                                                                    <div class="green bg-success text-white">Approved</div>
                                                                                                @elseif ($submits->status == "Closed")
                                                                                                    <div class="blue bg-danger text-white">Closed</div>
                                                                                                @endif
                                                                                            </td>
                                                                                            <td>
                                                                                                <input type="date" name="requried_at" onblur="validateDate(this)" value="{{ $submits->requried_at }}" style="border: none;">
                                                                                                <p class="error-message" style="color: red;"></p>
                                                                                            </td>
                                                                                            <td>
                                                                                                {{-- <button type="submit" class="btn btn-success">Update</button> --}}
                                                                                                @if ($submits->status == "Pending" || $submits->status == "Closed")
                                                                                                    <a href="{{ route('approved_item',$submits->id) }}" class="btn btn-info">Approved</a>
                                                                                                @endif
                                                                                            </td>
                                                                                        </tr>
                                                                                    </form>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        <div id="accordion"></div>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <a href="{{ route('all_items_approved',$project->id) }}" class="btn btn-success m-2 mr-4">All Approved</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#accordion-div-{{$key}}").click(function() {
                var icon = $(this).find("svg");
                icon.toggleClass("icon-rotate");
            });
        });

        function validateDate(input) {
            const selectedDate = new Date(input.value);
            const today = new Date();
            const errorMessage = input.nextElementSibling; // Get the next element (error message)

            if (selectedDate < today) {
                errorMessage.textContent = "Please select a future date.";
                input.value = ""; // Clear the input field
                input.focus();    // Keep the focus on the input field
            } else {
                errorMessage.textContent = ""; // Clear the error message if valid date
            }
        }
    </script>
@endsection