@extends('frontend.layout.user_master_layout')
<link rel="stylesheet" href="{{ asset('assets/company.css') }}">
<style>
    #page-wrapper {
        background-image: url('./assets/image/PS-BG.svg');
        min-height: 82vh;
        background-size: cover;
        padding-bottom: 100px;
    }
    .member_name{
        color: #007a66;
        font-size: 23px;
        text-transform: uppercase;
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
                                Add Company
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content mt-5">
                <nav role="navigation" aria-labelledby="block-tabs-4-menu" id="block-tabs-4"
                    class="block block-menu navigation menu--tabs">
                    <h2 class="sr-only" id="block-tabs-4-menu">Company tabs</h2>
                    <ul class="clearfix nav">
                        <li class="nav-item">
                            <a href="{{ route('add_company') }}"
                                class="nav-link nav-link--en-company-2135-edit">Company Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add_team_members') }}"
                                class="is-active nav-link nav-link--en-company-2135-team-members">Team Members</a>
                        </li>
                        <li class="nav-item">
                            <a href="/en/company/2135/automation-rules"
                                class="nav-link nav-link--en-company-2135-automation-rules">Automation</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="block-ps-authenticated-users-content" class="block block-system block-system-main-block">
                <div class="content">

                    <form class="ps-company-edit-form ps-company-form"
                        enctype="multipart/form-data" action="{{ route('save_company_member') }}" method="post"
                        accept-charset="UTF-8" data-once="form-updated"
                        data-drupal-form-fields="edit-field-logo-0-remove-button,edit-field-main-business-activity-1,edit-field-main-business-activity-2,edit-field-main-business-activity-3,edit-name-0-value,edit-field-brief-0-value,edit-field-address-0-address-country-code--2,edit-field-address-0-address-address-line1,edit-field-address-0-address-address-line2,edit-field-address-0-address-locality,edit-field-address-0-address-administrative-area,edit-field-address-0-address-postal-code,edit-field-telephone-0-value-int-phone,edit-field-fax-0-value-int-phone,edit-field-website-0-uri,edit-field-cr-0-value,edit-field-company-profile-0-upload,edit-field-company-profile-0-upload-button,search-edit-field-location-0-value,edit-field-location-0-value-map-actions-geolocation,lat-edit-field-location-0-value,lon-edit-field-location-0-value,edit-field-image-gallery-0-upload,edit-field-image-gallery-0-upload-button,edit-field-brands-gallery-0-upload,edit-field-brands-gallery-0-upload-button,edit-submit">
                        @csrf
                        

                        <div class="mt-3 field--type-string field--name-name field--widget-string-textfield js-form-wrapper form-group"
                            data-drupal-selector="edit-name-wrapper" id="edit-name-wrapper">

                            <fieldset
                                class=" js-form-item js-form-type-textfield form-type-textfield js-form-item-name-0-value form-item-name-0-value form-group">
                                <label for="edit-name-0-value" class="js-form-required form-required text-white">Enter member email <span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input class="js-text-full text-full form-text required form-control"
                                        data-drupal-selector="edit-name-0-value"
                                        aria-describedby="edit-name-0-value--description" type="email"
                                        id="edit-name-0-value" name="member_email"
                                        value="" size="60" maxlength="255"
                                        placeholder="Email" required="required" aria-required="true" style="background-color: #fff0;
                                        color: #fff;" >
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" id="edit-submit" value="Save"
                                        class="button btn-sm btn-primary">Add
                                        </button>  
                                    </div>
                                </div> 
                                <small id="edit-name-0-value--description" class="description text-muted">
                                    Enter team member email to add/invite the user to your company.
                                </small>
                            </fieldset>

                        </div>
                    </form>

                </div>
            </div>

            <div class="content">
                <h3 class="text-white">Team Members</h3>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 company-team-member-view ">
                        <div class="views-field views-field-nothing" style="background-color: #fff;
                        padding: 12px 15px;
                        border-radius: 15px 15px;
                        -webkit-box-shadow: 0px 3px 6px #0000002b;
                        box-shadow: 0px 3px 6px #0000002b;">
                            <div class="card-items-wrapper row"> 
                                <div class="col-4 member-image"> 
                                    <div class="personal-pic " style="    height: 100%;
                                    max-width: 81px;">       
                                        <img src="https://cdn.projectsuppliers.net/s3fs-public/styles/46x66/public/default_images/defalut_profile_pic_2.png?itok=mRg492qV" alt="" typeof="Image" style="
                                        border-radius: 14px;
                                        height: 100%;
                                        width: 100%;">
                                    </div>
                                </div> 
                                <div class="col-8 member-info "> 
                                    <div class="member-name ">  
                                        <h5 class="member_name">{{ auth()->user()->name }}</h5>
                                    </div> 
                                    <div class="member-position ">Owner</div>  
                                    <div class="btn-div mt-2" style="text-align:end">
                                        <a href="/company-team-member/2290/edit" class="btn-sm btn-secondary">Edit</a>
                                    </div>  
                                </div> 
                            </div>         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
