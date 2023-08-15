<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <!-- ... -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

     <!-- DevExtreme theme -->
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/22.2.4/css/dx.light.css">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('table/css/style.css') }}">

    <title>Document</title>
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
}

.box{
    color: white;
    padding: 3px;
    display: none;
}
</style>
<body>
    <div class="container mt-5">
        <div class="card" draggable="true" data-index="1" style=" box-shadow: none;">
            <div class="card-header" style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                <div class="generic-group-header-name can-drag collapsed bx-new-collapsed">
                    <div class=" d-flex">
                        <span class="collapse-group-button mr-3" type="button" data-toggle="collapse" data-target="#collapseTable1" aria-expanded="false" aria-controls="collapseTable">
                            <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20" role="button" tabindex="0" aria-hidden="false" class="icon_component icon_component--clickable">
                                <path d="M12.5303 9.46967L12 10L12.5303 10.5303C12.8232 10.2374 12.8232 9.76256 12.5303 9.46967ZM10.9393 10L7.46967 13.4697C7.17678 13.7626 7.17678 14.2374 7.46967 14.5303C7.76256 14.8232 8.23744 14.8232 8.53033 14.5303L12.5303 10.5303L12 10L12.5303 9.46967L8.53033 5.46967C8.23744 5.17678 7.76256 5.17678 7.46967 5.46967C7.17678 5.76256 7.17678 6.23744 7.46967 6.53033L10.9393 10Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="group-name" data-walkthrough-id="group-name" style="color: rgb(120, 75, 209);">
                            <div class="editable-heading--wrapper group-name-editable" aria-label="Beach Sand Click to Edit" id="" data-testid="">
                                <div role="input" data-testid="clickable" tabindex="0" class="monday-style-clickable monday-style-clickable--disable-text-selection">
                                    <h6 class="heading-component element-type-h4 size-medium single-line-ellipsis suggest-edit-on-hover" aria-label="" style="color: rgb(120, 75, 209); --heading-clamp-lines:1;">Beach Sand 1</h6>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="row ml-4">
                        <div class="col-md-5">
                           <span style="font-size: 12px;"> 1 Item / 1 Subitem</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="collapse" id="collapseTable1" aria-labelledby="cardHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="table-wrap">
                                <table class="table myaccordion" id="accordion" style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                  <thead>
                                    <tr>
                                      <th style="width: 3%;">
                                        <div>
                                          <input type="checkbox" class="control-input" id="checkbox-3">
                                        </div>
                                      </th>
                                      <th style="width: 30%;">Item</th>
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
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <tr>
                                      <td scope="row">
                                        <div>
                                            <input type="checkbox" class="control-input" id="checkbox-3">
                                        </div>
                                      </td>
                                      <td>
                                        <div class=" d-flex" style="width:222px">
                                          <span class="collapse-group-button mr-3 bg-white-o-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <svg viewBox="0 0 20 20" fill="currentColor" width="20" height="20" role="button" tabindex="0" aria-hidden="false" class="icon_component icon_component--clickable">
                                              <path d="M12.5303 9.46967L12 10L12.5303 10.5303C12.8232 10.2374 12.8232 9.76256 12.5303 9.46967ZM10.9393 10L7.46967 13.4697C7.17678 13.7626 7.17678 14.2374 7.46967 14.5303C7.76256 14.8232 8.23744 14.8232 8.53033 14.5303L12.5303 10.5303L12 10L12.5303 9.46967L8.53033 5.46967C8.23744 5.17678 7.76256 5.17678 7.46967 5.46967C7.17678 5.76256 7.17678 6.23744 7.46967 6.53033L10.9393 10Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                            </svg>
                                          </span>
                                          <input type="text" value="Laptop Technology AS2020" class="values" style="border: none;">
                                        </div>  
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
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <select name="" id="" class="form-control select">
                                          <option value="" selected disabled>Status</option>
                                          <option value="Working on it" class="bg-warning text-white">Working on it</option>
                                          <option value="Done" class="bg-success text-white">Done</option>
                                          <option value="Stuck" class="bg-danger text-white">Stuck</option>
                                        </select>

                                        <div class="red box bg-warning text-white" >Working on it</div>
                                        <div class="green box bg-success text-white">Done</div>
                                        <div class="blue box bg-danger text-white">stuck</div>
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;" class="values">                                     
                                      </td>
                                      <td>
                                        <input style="border: none;" class="values" type="date">                                     
                                      </td>
                                    </tr>
  
                                    <tr>
                                      <table id="collapseOne" class="collapse mt-3 ml-4 pb-3" data-parent="#accordion" style="width:80%;">
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
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td style="border-left: 5px solid rgb(120, 75, 209);margin: 0;">
                                              <div>
                                                  <input type="checkbox" class="control-input" id="checkbox-3">
                                              </div>
                                            </td>
                                            <td>
                                              <input type="text" style="border: none;" value="new">
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
                                              <select name="" id="" class="form-control select">
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
                                              <input type="date" style="border: none;">
                                            </td>
                                          </tr>

                                          <tr>
                                            <td style="border-left: 5px solid rgba(120, 75, 209, 0.336);margin: 0;">
                                              <div>
                                                  <input type="checkbox" class="control-input" disabled id="checkbox-3">
                                              </div>
                                            </td>
                                            <td>
                                              <input type="text" style="border: none;" placeholder="+ Add Subitem">
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
                                              <select name="" id="" class="form-control select">
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
                                              <input type="date" style="border: none;">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                                <table class="table myaccordion" id="accordion">
                                  <tbody>
                                    <tr>
                                      <td style="width: 3%; border-left: 5px solid rgba(120, 75, 209, 0.336);margin: 0;">
                                        <div>
                                            <input type="checkbox" class="control-input" id="checkbox-3">
                                        </div>
                                      </td>
                                      <td>
                                        <div class=" d-flex">
                                          <input type="text" placeholder="+ Add project" style="border: none; width:222px">
                                        </div> 
                                      </td>
                                      <td>
                                        <img src="{{ asset('table/images/dapulse-person-column.svg') }}" width="46" height="40" data-toggle="modal" data-target=".bd-example-modal-sm">
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
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <select name="" id="" class="form-control select" style="width:123px">
                                          <option value="" selected disabled>Status</option>
                                          <option value="red" class="bg-warning text-white">Working on it</option>
                                          <option value="green" class="bg-success text-white">Done</option>
                                          <option value="blue" class="bg-danger text-white">stuck</option>
                                        </select>

                                        <div class="red box bg-warning text-white" style="width:123px">Working on it</div>
                                        <div class="green box bg-success text-white" style="width:123px">Done</div>
                                        <div class="blue box bg-danger text-white" style="width:123px">stuck</div>
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border:none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none; width:190px;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none; width:228px;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none; width:210px;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input type="text" style="border: none;">                                     
                                      </td>
                                      <td>
                                        <input style="border: none;" type="date">                                     
                                      </td>
                                    </tr>
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

<script src="{{ asset('table/js/jquery.min.js') }}"></script>
<script src="{{ asset('table/js/popper.js') }}"></script>
<script src="{{ asset('table/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('table/js/main.js') }}"></script>

<script>
  $(document).ready(function(){
    $(".select").change(function(){
      $(this).find("option:selected").each(function(){
        var optionValue=$(this).attr("value");
        if(optionValue){
          $(".box").not("."+optionValue).hide();
          $("."+optionValue).show();
          $(".select").addClass('d-none');
        }else{
            $(".box").hide();
        }
      });
    }).change();

    $(".box").click(function(){
      $(".box").hide();
      $(".select").removeClass('d-none');
    });

    $('.values').on('change', function() {
      alert( this.value );
    });
  });
</script>
</body>
</html>