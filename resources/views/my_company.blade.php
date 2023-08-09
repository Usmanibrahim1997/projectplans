@extends('frontend.layout.user_master_layout')
<link rel="stylesheet" href="{{ asset('assets/company.css') }}">
<style>
    #page-wrapper {
        background-image: url('./assets/image/PS-BG.svg');
        min-height: 82vh;
        background-size: cover;
        padding-bottom: 100px;
    }
    .export-link {
        background: #8080802e;
        border-radius: 8px;
        border: 1px solid;
        padding: 0px 10px;
        margin: 5px 5px;
        display: flex;
    }
    .export-link svg{
        justify-content: space-between
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
                                My Companies
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
                                <h1 class="text-white">My Companies</h1>
                            </div>
    
                            <div class="content mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach ($company as $com)
                                            <div class="card" style="min-height: 252px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-md-3 bg-light d-flex justify-content-center align-items-center">
                                                        <img class="" src="{{ asset($com->company_profile_logo) }}" width="100" height="100">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="card-heading">
                                                            <h3>{{ $com->company_name }}</h3>
                                                            <p class="mt-2">{{ $com->field_brief }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="company_action">
                                                       
                                                        <div class="export-link">
                                                            <a href="{{ route('edit_company') }}"><span>Edit</span>
                                                                <svg width="1rem" height="1rem" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="export-link">
                                                            <a href="{{ route('add_team_members') }}">Members<svg viewBox="0 0 22 22" width="15.708" height="15.061" xmlns="http://www.w3.org/2000/svg">
                                                                <g fill-rule="evenodd" fill="none">
                                                                <g fill="currentColor">
                                                                    <path transform="translate(-855 -37) translate(855 37)" d="M11.001.165C7.747.165 5.096 2.783 5.096 6c0 1.559.461 3.509 1.414 5.128.283.48.615.934.995 1.335-.03.232-.078.418-.131.536-.064.142-.108.17-.15.186-.597.223-2.205.351-3.723.82-1.52.47-3.078 1.397-3.49 3.29-.037.173.021.353.154.472 5.971 5.332 15.699 5.332 21.67 0 .133-.119.191-.299.154-.471-.412-1.894-1.97-2.821-3.49-3.29-1.518-.47-3.126-.599-3.72-.821h-.001c-.08-.03-.129-.07-.195-.198-.054-.103-.103-.264-.139-.47.402-.414.75-.887 1.046-1.389.953-1.62 1.414-3.57 1.414-5.128 0-3.218-2.648-5.836-5.903-5.836zm0 .989c2.715 0 4.903 2.163 4.903 4.847 0 1.36-.433 3.195-1.278 4.631-.845 1.437-2.034 2.446-3.625 2.446-1.591 0-2.781-1.01-3.626-2.446C6.53 9.196 6.096 7.36 6.096 6.001c0-2.684 2.191-4.847 4.905-4.847zM8.362 13.21c.749.529 1.63.856 2.64.856.991 0 1.86-.317 2.6-.83.027.07.057.137.091.203.15.289.402.546.73.67.94.352 2.414.418 3.778.84 1.277.395 2.344 1 2.738 2.28-5.512 4.71-14.366 4.71-19.878 0 .394-1.28 1.461-1.885 2.738-2.28 1.365-.422 2.84-.488 3.78-.84h.002c.337-.128.572-.409.706-.707.028-.062.053-.126.075-.191z"></path>
                                                                </g>
                                                                </g></svg>
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="export-link">
                                                            <a href="/en/company/2135/automation-rules">Auto<svg xmlns="http://www.w3.org/2000/svg" width="12.708" height="12.061" viewBox="0 0 12.708 12.061">
                                                            <path id="Exclusion_7" data-name="Exclusion 7" d="M4741.259,7509.781a.992.992,0,0,1-.677-.269l-.151-.141a1,1,0,0,0-1.363,0l-.151.141a.994.994,0,0,1-.678.269,1,1,0,0,1-.988-.817l-.028-.153a1,1,0,0,0-1.112-.808l-.173.022a1.054,1.054,0,0,1-.135.009,1,1,0,0,1-.892-1.441l.04-.083a1,1,0,0,0-.43-1.327l-.09-.047a1,1,0,0,1,0-1.77l.09-.047a1,1,0,0,0,.43-1.327l-.04-.083a1,1,0,0,1,.892-1.441,1.054,1.054,0,0,1,.135.009l.173.023a1,1,0,0,0,1.112-.809l.028-.153a1,1,0,0,1,1.666-.548l.151.141a1,1,0,0,0,1.363,0l.151-.141a.99.99,0,0,1,.677-.269,1,1,0,0,1,.987.817l.028.153a1,1,0,0,0,.982.817.991.991,0,0,0,.132-.009l.174-.023a1.054,1.054,0,0,1,.135-.009,1,1,0,0,1,.892,1.441l-.042.083a1,1,0,0,0,.432,1.327l.091.047a1,1,0,0,1,0,1.77l-.091.047a1,1,0,0,0-.432,1.327l.042.083a1,1,0,0,1-.892,1.441,1.054,1.054,0,0,1-.135-.009l-.174-.022a1,1,0,0,0-1.114.808l-.028.153A1,1,0,0,1,4741.259,7509.781Zm-1.51-8.524a2.993,2.993,0,1,0,2.993,2.993A3,3,0,0,0,4739.75,7501.257Z" transform="translate(-4733.396 -7498.22)" fill="none" stroke="#007a66" stroke-width="1"></path>
                                                            </svg>
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="export-link">
                                                            <a href="/company/2135/export">Export<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"></path>
                                                            <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"></path>
                                                            </svg></a>
                                                        </div>
                                                        
                                                        <div class="export-link"><a href="/ar/company/2135/edit">Translate<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-vector-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908l-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"></path>
                                                            <path fill-rule="evenodd" d="M2.832 13.228L8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                                                            </svg></a>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
