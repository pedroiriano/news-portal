@extends('admin.layouts.backend')

@section('content')
{{-- BEGIN::Page Body --}}
<div class="page-body">
    {{-- BEGIN::Page Body Title --}}
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- END::Page Body Title --}}

    {{-- BEGIN::Page Body Container --}}
    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0 chart-main">
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1001</h4><span>Purchase </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart1 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>1005</h4><span>Sales</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>100</h4><span>Sales return</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container"></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>101</h4><span>Purchase ret</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <h4>$95,900<span class="new-box">Hot</span></h4><span>Purchase Order Value</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-50 chart_data_right second d-none"> 
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content"> 
                                <h4>$95,000<span class="new-box">New</span></h4><span>Product Order Value</span>
                            </div>
                            <div class="knob-block text-center">
                                <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-xl-3 earning-content p-0">
                                <div class="row m-0 chart-left">
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>Dashboard</h5>
                                        <p class="font-roboto">Overview of last month</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>$4055.56 </h5>
                                        <p class="font-roboto">This Month Earning</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>$1004.11</h5>
                                        <p class="font-roboto">This Month Profit</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left_side_earning">
                                        <h5>90%</h5>
                                        <p class="font-roboto">This Month Sale</p>
                                    </div>
                                    <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
                                </div>
                            </div>
                            <div class="col-xl-9 p-0">
                                <div class="chart-right">
                                    <div class="row m-0 p-tb">
                                        <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                                            <div class="inner-top-left">
                                                <ul class="d-flex list-unstyled">
                                                    <li>Daily</li>
                                                    <li class="active">Weekly</li>
                                                    <li>Monthly</li>
                                                    <li>Yearly</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                                            <div class="inner-top-right">
                                                <ul class="d-flex list-unstyled justify-content-end">
                                                    <li>Online</li>
                                                    <li>Store</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card-body p-0">
                                                <div class="current-sale-container">
                                                    <div id="chart-currently"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-top m-0">
                                    <div class="col-xl-4 ps-0 col-md-6 col-sm-6">
                                        <div class="media p-0">
                                            <div class="media-left"><i class="icofont icofont-crown"></i></div>
                                            <div class="media-body">
                                                <h6>Referral Earning</h6>
                                                <p>$5,000.20</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-6">
                                        <div class="media p-0">
                                            <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                                            <div class="media-body">
                                                <h6>Cash Balance</h6>
                                                <p>$2,657.21</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-12 pe-0">
                                        <div class="media p-0">
                                            <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                                            <div class="media-body">
                                                <h6>Sales forcasting</h6>
                                                <p>$9,478.50     </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END::Page Body Container --}}
</div>
{{-- END::Page Body --}}
@endsection
