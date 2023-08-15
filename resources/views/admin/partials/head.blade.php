<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bari CHEAC Procurement - Admin Dashboard.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('table/icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="{{ asset('table/icons/pe-icon-7-stroke/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('table/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
      max-width: 280px !important;
    }
    
    .box{
        color: white;
        padding: 3px;
        display: none;
    }
    .logo-src-new{
      height: 23px;
      width: 97px;
      background: url({{ asset('assets/image/dashboard.jpg') }});
    }
    #quoteTableHead tr th{
      text-align: left;
      padding: 11px;
    }
    </style>
  <body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
          <div class="app-header__logo">
            <div class="">
              <h4><b>Admin<sup class="text-warning">Dashboard</sup></b></h4>
            </div>
            <div class="header__pane ml-auto">
              <div>
                  <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button></div>
            </div>
          </div>
      
          <div class="app-header__content">
            <div class="app-header-right">
              <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="btn-group">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                          <img width="42" class="rounded-circle" src="{{ asset('assets/image/defalut_profile_pic.png') }}" alt="">
                          <i class="fa fa-angle-down ml-2 opacity-8"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                          <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                          <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                          <h6 tabindex="-1" class="dropdown-header">Header</h6>
                          <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                          <div tabindex="-1" class="dropdown-divider"></div>
                          <a type="button" tabindex="0" class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
  
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-left header-user-info">
                      <div class="widget-heading text-capitalize ">{{ auth()->user()->name }}</div>
                      <div class="widget-subheading">{{ auth()->user()->roles }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="app-main">
            @include('admin.partials.sidebar')
            <div class="app-main__outer container_fluid" style="width: -webkit-fill-available;">
                <div class="app-main__inner container_fluid">
                  <div class="container_fluid">
                    <div class="container_fluid">
                      
                      @yield('content')

                      {{-- <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                              <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                  </div>
                                  <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                      <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                  <div class="text-muted opacity-6">Income Target</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                              <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                  </div>
                                  <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                      <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                  <div class="text-muted opacity-6">Complete Target</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                              <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                  </div>
                                  <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                      <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                  <div class="text-muted opacity-6">Spendings Target</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                              <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                  </div>
                                  <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                  <div class="text-muted opacity-6">Totals Target</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

    <script src="{{ asset('table/js/jquery.min.js') }}"></script>
    <script src="{{ asset('table/js/popper.js') }}"></script>
    {{-- <script src="{{ asset('table/js/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('table/js/main.js') }}"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

    
      function getUnitPrice(id){
        var unitPrice = parseFloat($('.unit-price-' + id).val());
        var quantityValue = parseFloat($('.quantity-' + id).val());
        var totalPoValue = unitPrice * quantityValue;
        var vatAmount = totalPoValue * 0.15;
        var totalWithVat = totalPoValue + vatAmount;
        $(`.total-PO-Value-With-Vat-${id}`).val(totalWithVat);
        $(`.total-PO-Value-${id}`).val(totalPoValue);
      }

      $(document).ready(function(){
        $(".box1").click(function(){
            $(".box1").hide();
            $(".selectNew").removeClass('d-none');
        });
    
      });
    </script>
  </body>
</html>