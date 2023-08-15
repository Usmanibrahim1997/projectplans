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
            <form class="bg-light p-3" action="{{ route('save_rfq') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table style="width: 100%" id="quoteTableHead">
                    <thead>
                        <tr>
                            <th colspan="2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Project Name :</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control custom-select" name="project_id">
                                            <option disabled selected>Select Project</option>
                                            @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
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
                                    <select class="form-control custom-select" name="department_name">
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
                                    <select class="form-control custom-select" name="service_type">
                                        <option disabled selected>Service Type</option>
                                        <option value="CHEC4.2-DSTSSC-B1">B1</option>
                                        <option value="CHEC4.2-DSTSSC-B2">B2</option>
                                        <option value="CHEC4.2-DSTSSC-B3">B3</option>
                                        <option value="CHEC4.2-DSTSSC-C1">C1</option>
                                        <option value="CHEC4.2-DSTSSC-D1">D1</option>
                                    </select>
                                </div>
                            </div> 
                        </th>
                        </tr>
                    </thead>
                </table>
                <table style="width: 100%" class="table-responsive">
                    <thead>
                        <tr>
                            <th><b>NO</b></th>
                            <th><b>Material Description</b></th>
                            <th><b>UNIT</b></th>
                            <th><b>SIZE</b></th>
                            <th><b>QUANTITY</b></th>
                            <th><b>USED FOR</b></th>
                            <th><b>REQURIED AT SITE</b></th>
                            <th><b>LOCATION</b></th>
                            <th><b>REMARK</b></th>
                            <th><b>ATTACHMENT</b></th>
                        </tr>
                    </thead>
                    <tbody id="tbl">
                        <tr>
                            <td>#1</td>
                            <td>
                                <select class="form-control custom-select js-example-matcher-start" name="material_description[]">
                                    <option disabled selected>Select Material</option>
                                    @foreach ($materials as $material)
                                    <option value="{{ $material->com_description }} {{ $material->com_code }}">{{ $material->com_description }} {{ $material->com_code }}</option>
                                    @endforeach
                                </select>                                    
                            </td>
                            <td>
                                <input type="text" name="unit[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="size[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="quantity[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="used_for[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="date" name="requried_at[]" value="" style="border: none;" class="values">                                     
                            </td>
                            <td>
                                <input type="text" name="location[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="text" name="remark[]" value="" style="border: none;" class="values">                                   
                            </td>
                            <td>
                                <input type="file" name="attachment" value="" style="border: none;" class="values">                                   
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <input type="button" class="btn btn-primary add_another m-2" value="Add New Row"/>
                    <input type="button" class="btn btn-danger btn-sm delete_row m-2 d-none" value="Delete Row"/>
                    <input type="submit" class="btn btn-success m-2" value="Save"/>
                </div>
            </form>
        </div>
    </div>
    <script   src="https://code.jquery.com/jquery-1.12.1.js"   integrity="sha256-VuhDpmsr9xiKwvTIHfYWCIQ84US9WqZsLfR4P7qF6O8="   crossorigin="anonymous"></script>
    <script>
        $('document').ready(function() {
            let rowCount = 2;
            $('.add_another').click(function() {
                if (rowCount > 1) {
                    $('.delete_row').removeClass('d-none');
                }else{
                    $('.delete_row').addClass('d-none');
                }
                $("#tbl").append(
                    `<tr>
                        <td>
                            # ${rowCount}  <input type="checkbox" name="record">                               
                        </td>
                        <td>
                            <select class="form-control custom-select js-example-matcher-start" name="material_description[]">
                                <option disabled selected>Select Material</option>
                                @foreach ($materials as $material)
                                <option value="{{ $material->com_description }} {{ $material->com_code }}">{{ $material->com_description }} {{ $material->com_code }}</option>
                                @endforeach
                            </select>                                   
                        </td>
                        <td>
                            <input type="text" name="unit[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="text" name="size[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="text" name="quantity[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="text" name="used_for[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="date" name="requried_at[]" value="" style="border: none;" class="values">                                     
                        </td>
                        <td>
                            <input type="text" name="location[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="text" name="remark[]" value="" style="border: none;" class="values">                                   
                        </td>
                        <td>
                            <input type="file" name="attachment[]" value="" style="border: none;" class="values">                                   
                        </td>
                    </tr>`
                );
                rowCount++;
            });

            $('.delete_row').on('click', function() {
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });

            $(".js-example-matcher-start").select2({});
        })

    </script>
@endsection