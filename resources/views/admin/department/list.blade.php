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
        <div>Department List<div class="page-title-subheading">Admin dashboard. </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xl-12">
        <form class="bg-light p-3">
            <table style="width: 100%" id="quoteTableHead">
                <thead>
                    <tr>
                        <th><b>Id</b></th>
                        <th><b>Department Name</b></th>
                        <th><b>Created BY</b></th>
                        <th><b>Created At</b></th>
                        <th><b>Status</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deps as $dep)
                    <tr>
                        <td>
                            {{ $dep->id }}
                        </td>
                        <td>
                            {{ $dep->department_name }}
                        </td>
                        <td style="text-transform: uppercase">
                            {{ $dep->created_by }}
                        </td>
                        <td>
                            {{ $dep->created_at }}
                        </td>
                        <td>
                            {{ $dep->status }}
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    @endforeach
                        
                </tbody>
            </table>
        </form>
    </div>
</div>

@endsection