@extends('frontend.layout.user_layout')

<style>
    div#main-wrapper {
        padding-top: 13%;
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
                                Send An RFQ
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>


            <div class="row row-offcanvas row-offcanvas-left clearfix">
                <main class="main-content col" id="content" role="main">
                    <section class="section">
                        <a id="main-content" tabindex="-1"></a>
                        <div id="block-ps-new-content" class="block block-system block-system-main-block">


                            <div class="content">
                                <h1>Send an <strong>RFQ</strong></h1>
                                <div id="rfq-app"></div>
                            </div>
                        </div>


                    </section>
                </main>
            </div>
        </div>
    </div>
@endsection
