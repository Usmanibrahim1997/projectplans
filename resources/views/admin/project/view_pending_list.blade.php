@extends('admin.partials.head')
@section('content')
<style>
 
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>
<div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon"><i class="pe-7s-culture icon-gradient bg-mean-fruit"></i></div>
        <div>Pending Item List<div class="page-title-subheading">Admin dashboard. </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xl-12">
        <form class="bg-light p-3">
            <table style="width: 100%" id="quoteTableHead" class="table-responsive"> 
                <thead>
                    <tr>
                        <th style="width: 1%;border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                            <div>
                              #
                            </div>
                        </th>
                        <th style="width: 1%;">NO</th>
                        <th style="width: 5%;">Material Description</th>
                        <th style="width: 5%;">MRF #</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projectItemPending as $project)
                        @foreach ($project->projectItems as $index =>  $submits)
                            @if ($submits->status == 'Pending')    
                                <tr>
                                    <td style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                        <div id="accordion-div-{{$index}}" type="button" data-toggle="collapse" data-target="#collapseExample-{{$index}}" aria-expanded="false" aria-controls="collapseExample-{{$index}}">
                                          <i class="pe-7s-plus icon-gradient bg-mean-fruit" style="font-size: 24px;
                                            color: black !important;
                                            -webkit-text-fill-color: black;">
                                          </i>
                                        </div>
                                    </td>
                                    <td>#{{ $index+1 }}</td>
                                    <td>
                                        <span>{{ $submits->material_description }}</span>
                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#requestMaterial-{{$index}}">{{ $submits->service_type.'-'. date('Y', strtotime($submits->created_at)) .'-'.'00'.$index+1 }}</a>
                                    </td>
                                </tr>
                                <tr>
                                  <td colspan="10">
                                    <div class="collapse" id="collapseExample-{{$index}}" aria-labelledby="cardHeading" data-parent="#accordion-{{$index}}">
                                      <div class="card-body p-0">
                                          <div>
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="table-wrap">
                                                          <table class="table myaccordion" id="accordion-{{$index}}" style="border-left: 5px solid rgb(120, 75, 209, 0.51);margin: 0; ">
                                                              <thead>
                                                                  <tr>
                                                                    <th>NO.</th>
                                                                    <th style="width: 10%;">Material Description</th>
                                                                    <th>MRF</th>
                                                                    <th>Approved By</th>
                                                                    <th>Checked By</th>
                                                                    <th>Dept. Manager</th>
                                                                    <th>Requested By</th>
                                                                    <th>Attachment</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td>#1</td>
                                                                  <td><textarea readonly rows="3" style="border: none;">{{ $submits->material_description }}</textarea></td>
                                                                  <td>{{ $submits->service_type.'-'. date('Y', strtotime($submits->created_at)) .'-'.'00'.$index+1 }}</td>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td style="text-transform: uppercase">{{ $submits->owner_name }}</td>
                                                                  <td></td>
                                                                </tr>
                                                              </tbody>
                                                          </table>
                                                          <div id="accordion"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                            @endif
                        @endforeach    
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection

@foreach ($projectItemPending as $project)
  @foreach ($project->projectItems as $index =>  $submits)
  <div class="modal fade bd-example-modal-xl" id="requestMaterial-{{$index}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pending Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-xl-12">
              <form class="bg-light p-3" action="{{ route('save_rfq') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table style="width: 100%" id="quoteTableHead">
                    <thead>
                        <tr>
                          <th colspan="2">
                            Project Name : {{ $project->project_name }}      
                          </th>
                          <th>
                            Submitted Date: {{ $submits->requried_at }}
                          </th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                          <th colspan="2">
                            Department Name : {{ $submits->department_name }}   
                          </th>
                          <th>
                            Ref NO : {{ $submits->service_type.'-'. date('Y', strtotime($submits->created_at)) .'-'.'00'.$index+1 }}
                          </th>
                        </tr>
                    </thead>
                </table>
                <table style="width:100%;" class="table table-responsive"> 
                  <thead>
                      <tr>
                        <th>No</th>
                        <th style="width: 5%;">Item</th>
                        <th style="width: 5%;">Description</th>
                        <th style="width: 5%;">Unit</th>
                        <th style="width: 5%;">Size</th>
                        <th style="width: 5%;">Quantity</th>
                        <th style="width: 5%;">Used For</th>
                        <th style="width: 5%;">Requried At</th>
                        <th style="width: 5%;">Location</th>
                        <th style="width: 5%;">Remark</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($project->projectItems as $index_id => $submits)
                        <form action="{{ route('updateSubItem',$submits->id) }}" method="POST">
                          @csrf
                          <tr>
                              <td>#{{ $index_id+1 }}</td>
                              <td>Item</td>
                              <td>
                                  <textarea readonly rows="3" style="border: none;width: 193px;" name="material_description">{{ $submits->material_description }}</textarea>
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
                                  <input type="date" name="requried_at" onblur="validateDate(this)" value="{{ $submits->requried_at }}" style="border: none;">
                                  <p class="error-message" style="color: red;"></p>
                              </td>
                              <td>
                                  <textarea readonly rows="3" style="border: none;" name="location" >{{ $submits->location }}</textarea> 
                              </td>
                              <td>
                                  <textarea readonly rows="3" style="border: none;" name="remark" >{{ $submits->remark }}</textarea> 
                              </td>
                          </tr>
                        </form>
                      @endforeach
                  </tbody>
                </table>
                <table style="width: 100%" class="table">
                  <thead>
                    <tr>
                      <th><b>Approved By</b></th>
                      <th><b>Checked By</b></th>
                      <th><b>Dept. Manager</b></th>
                      <th><b>Requested By</b></th>
                    </tr>
                  </thead>
                  <tbody id="tbl">
                    <tr>
                      <td style="text-transform: uppercase"></td>
                      <td style="text-transform: uppercase"></td>
                      <td style="text-transform: uppercase"></td>
                      <td style="text-transform: uppercase">{{ $submits->owner_name }}</td>
                    </tr>    
                  </tbody>
                </table>
                <table style="width: 100%" class="table">
                  <thead>
                    <tr>
                      <th><b>No</b></th>
                      <th><b>Comments</b></th>
                    </tr>
                  </thead>
                  <tbody id="tbl">
                    <tr>
                      <td style="text-transform: uppercase"></td>
                      <td style="text-transform: uppercase"></td>
                    </tr>    
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endforeach