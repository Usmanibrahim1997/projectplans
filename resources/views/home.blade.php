@extends('frontend.layout.user_master_layout')
<style>
    div#main-wrapper {
        padding-top: 13%;
    }
    #page-wrapper{
        background-image: url('./assets/image/PS-BG.svg');
        min-height: 82vh;
        background-size: cover;
        padding-bottom: 100px;
    }
    .breadcrumb-item.active {
        color: #eee !important;
    }
    .breadcrumb-item a{
        color: #eeeeee !important;
    }
    .golden-button {
        background: #ce9e57;
        border-radius: 6px !important;
        padding: 8px 35px !important;
        text-transform: uppercase !important;
        font-size: 0.875rem !important;
        color: white !important;
        margin: 8px 6.5px !important;
        font-weight: 600 !important;
    }
    .golden-button:hover{
        color: #ce9e57 !important;
    }
    .views-field-view-ps-rfq {
        text-align: center;
        inset-inline-end: 0;
        border: 1px solid #007a66;
        border-radius: 6px;
        padding: 1px 0px;
        width: 120px;
        text-transform: uppercase;
        font-size: 0.875rem;
    }
    .view-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        background-color: #dddddd;
        padding: 8px 0;
        border-radius: 0 0 15px 15px;
    }
    .cmp_img {
        width: 92px;
        height: 92px;
        -o-object-fit: contain;
        object-fit: contain;
        border-radius: 6px;
        border: 1px solid #dddddd;
        margin-bottom: 0;
    }
    .card{
        border-radius: 12px !important;
    }
</style>
@section('contents')
<div id="main-wrapper" class="layout-main-wrapper clearfix">
    <div id="main" class="container">
        <div id="block-ps-new-breadcrumbs" class="block block-system block-system-breadcrumb-block">
            <div class="content">
                <nav role="navigation" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row row-offcanvas row-offcanvas-left clearfix mt-5">
            <main class="main-content col" id="content" role="main">
                <section class="section">
                    <a id="main-content" tabindex="-1"></a>
                    <div id="block-ps-new-content" class="block block-system block-system-main-block">
                        <div class="content">
                            <h1 class="text-white">Dashboard</h1>
                        </div>

                        <div class="content mt-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card" style="min-height: 252px;">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-3 bg-light d-flex justify-content-center align-items-center">
                                                <img class="" src="{{ asset('assets/image/defalut_profile_pic.png') }}" width="100" height="100">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-heading">
                                                    <h3>My Profile</h3>
                                                    <h5 class="mt-1" style="
                                                    color: #007a66;
                                                    font-size: 1.125rem;
                                                    text-transform: uppercase;">{{ auth()->user()->name }}</h5>

                                                    <p class="mt-4">You don't have a subscription at this time</p>

                                                    <a href="{{ route('pricing') }}" class="btn btn-primary golden-button mt-2">SUBSCRIBE NOW</a>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card" style="min-height: 252px;">
                                        <div class="card-body">
                                            <div class="card-heading">
                                                <h3>Quick access links</h3>
                                            
                                                <a href="{{ route('my_company') }}" class="btn btn-primary golden-button mt-2">My Companies</a>
                                                <a href="#" class="btn btn-primary golden-button mt-2">Send an RFQ</a>
                                                <a href="#" class="btn btn-primary golden-button mt-2">Received RFQs</a>
                                                <a href="#" class="btn btn-primary golden-button mt-2">Sent RFQs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="card" style="min-height: 252px;">
                                        <div class="card-body">
                                            <div class="card-heading">
                                                <h3>Sent RFQs</h3>
                                            
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td><b>RFQ #</b></td>
                                                            <td style="color: #007a66;">123456</td>
                                                            <td>12 Nov 2022</td>
                                                            <td></td>
                                                            <td>
                                                                <div class="views-field views-field-view-ps-rfq">
                                                                    <span class="field-content">
                                                                        <a href="/en/rfq/172564">View</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><b>RFQ #</b></td>
                                                            <td style="color: #007a66;">123456</td>
                                                            <td>12 Nov 2022</td>
                                                            <td></td>
                                                            <td>
                                                                <div class="views-field views-field-view-ps-rfq">
                                                                    <span class="field-content">
                                                                        <a href="/en/rfq/172564">View</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><b>RFQ #</b></td>
                                                            <td style="color: #007a66;">123456</td>
                                                            <td>12 Nov 2022</td>
                                                            <td></td>
                                                            <td>
                                                                <div class="views-field views-field-view-ps-rfq">
                                                                    <span class="field-content">
                                                                        <a href="/en/rfq/172564">View</a>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="view-footer">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="card" style="min-height: 252px;">
                                        <div class="card-body">
                                            <div class="card-heading">
                                                <h3>My Companies</h3>
                                            
                                                <div class="row justify-content-center">
                                                        <img class="cmp_img mt-3" src="{{ isset($company) && asset($company->company_profile_logo) ?? "https://cdn.projectsuppliers.net/s3fs-public/companies/logos/2022-06/CHEC.JPG" }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-footer">
                                            <a href="{{ route('my_company') }}">View All</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <div class="card" style="min-height: 252px;">
                                        <div class="card-body">
                                            <div class="card-heading">
                                                <h3>Notifications</h3>
                                            
                                                
                                            </div>
                                        </div>
                                        <div class="view-footer">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
            </main>
        </div>
    </div>
</div>
@endsection
