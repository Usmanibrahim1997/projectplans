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
        <div>Approved Item List<div class="page-title-subheading">Admin dashboard. </div>
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
                                        <div>
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
                                        <a href="#">{{ $submits->service_type }}</a>
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