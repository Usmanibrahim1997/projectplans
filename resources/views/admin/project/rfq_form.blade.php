@extends('admin.partials.head')
@section('content')
<style>
    /* Apply no border by default */
.custom-select {
    border: none;
}

/* Apply border on focus */
.custom-select:focus {
    border: 1px solid #ced4da !important; /* You can customize the border color */
}

.formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 10px 12px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
}
table thead th {
    padding: 14px;
}
</style>

    <div class="app-page-title">
        <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-note icon-gradient bg-mean-fruit"></i></div>
            <div>Add RFQ <div class="page-title-subheading">Admin dashboard. </div>
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
                            <th colspan="2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Project Name :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control custom-select" name="project_name">
                                            <option disabled selected>Select Project</option>
                                            @foreach ($projects as $project)
                                            <option value="{{ $project->project_name }}">{{ $project->project_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                    
                            </th>
                            <th>
                                Submitted Date: {{ \Carbon\Carbon::now()->format('Y-m-d') }}
                                <input type="hidden" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="created_date">
                            </th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                        <th colspan="2">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Department Name :</label>
                                </div>
                                <div class="col-md-10">
                                    <select class="form-control custom-select">
                                        <option disabled selected>Select Department</option>
                                        @foreach ($deps as $department)
                                        <option value="{{ $department->department_name }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>     
                        </th>
                        <th>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Ref NO :</label>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control custom-select">
                                        <option disabled selected>CHEC4.2-DSTSSC</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control custom-select">
                                        <option disabled selected>Service Type</option>
                                        <option>B1</option>
                                        <option>B2</option>
                                        <option>B3</option>
                                        <option>C1</option>
                                        <option>D1</option>
                                    </select>
                                </div>
                            </div> 
                        </th>
                        </tr>
                    </thead>
                </table>
                <table style="width: 100%">
                    <thead>
                        <tr>
                            <th><b>NO</b></th>
                            <th><b>UNIT</b></th>
                            <th><b>QUANTITY</b></th>
                            <th><b>USED FOR</b></th>
                            <th><b>DATE REQURIED</b></th>
                            <th><b>LOCATION</b></th>
                            <th><b>REMARK</b></th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>
                                <select class="form-control custom-select">
                                    <option disabled selected>Select Unit</option>
                                    @foreach ($materials as $material)
                                    <option value="{{ $material->com_code }}">{{ $material->com_description }} {{ $material->com_code }}</option>
                                    @endforeach
                                </select>                                    
                            </td>
                            <td>
                                <input type="text" name="materialRequest" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="materialRequest" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="date" name="materialRequest" value="" style="border: none;" class="values">                                     
                            </td>
                            <td>
                                <input type="text" name="materialRequest" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="materialRequest" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <button type="submit" class="formbold-btn">Save</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

@endsection