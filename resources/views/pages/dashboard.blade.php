@extends('layouts.main')

@section('topName')
Dashboard
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">PrEP Total</p>
                                <p class="card-title">1455<p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update Now
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-check-2 text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">On PrEP</p>
                                <p class="card-title">853<p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Last day
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-button-pause text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Stop PrEP</p>
                                <p class="card-title">592<p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        In the last hour
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-alert-circle-i text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">อยู่ระหว่างดำเนินการ</p>
                                <p class="card-title">10<p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h6>ยอดการให้บริการ</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ส่งตรวจ</th>
                                <th>อนุมัติแล้ว</th>
                                <th>ไม่อนุมัติ</th>
                                <th>อยู่ระหว่างดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ไตรมาสนี้</td>
                                <td>300</td>
                                <td>290</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>เดือนนี้</td>
                                <td>35</td>
                                <td>33</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- <div class="card-footer">
                </div> --}}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h6>เคสรอดำเนินการ</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>รอทำ OPD</th>
                                <th>รอบันทึกผล Lab</th>
                                <th>รอการอนุมัติ PrEP</th>
                                <th>รอการบันทึก NAP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mplus</td>
                                <td>3</td>
                                <td>2</td>
                                <td>2</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>CAREMAT</td>
                                <td>0</td>
                                <td>5</td>
                                <td>5</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- <div class="card-footer">
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-7">
                            {{-- <div class="numbers pull-left">
                                PrEP by Site
                            </div> --}}
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                {{-- <span class="badge badge-pill badge-success">
                                    +18%
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="big-title">สัดส่วน PrEP ตามองค์กร</h6>
                    <canvas id="activeUsers" width="826" height="380"></canvas>
                </div>
                <div class="card-footer">
                    {{-- <hr>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="footer-title">Financial Statistics</div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                <button class="btn btn-success btn-round btn-icon btn-sm">
                                    <i class="nc-icon nc-simple-add"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 d-none">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="numbers pull-left">
                                169
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                <span class="badge badge-pill badge-danger">
                                    -14%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="big-title">total subscriptions in last 7 days</h6>
                    <canvas id="emailsCampaignChart" width="826" height="380"></canvas>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="footer-title">View all members</div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                <button class="btn btn-danger btn-round btn-icon btn-sm">
                                    <i class="nc-icon nc-button-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="row d-none">
                        <div class="col-sm-7">
                            <div class="numbers pull-left">
                                8,960
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                <span class="badge badge-pill badge-warning">
                                    ~51%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="big-title">อัตราการรับ PrEP ต่อเดือน</h6>
                    <canvas id="activeCountries" width="826" height="380"></canvas>
                </div>
                {{-- <div class="card-footer">
                    <hr>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="footer-title">View more details</div>
                        </div>
                        <div class="col-sm-5">
                            <div class="pull-right">
                                <button class="btn btn-warning btn-round btn-icon btn-sm">
                                    <i class="nc-icon nc-alert-circle-i"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Global Sales by Top Locations</h4>
                    <p class="card-category">All products that were shipped</p>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/US.png">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/DE.png">
                                                </div>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/AU.png">
                                                </div>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/GB.png">
                                                </div>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/RO.png">
                                                </div>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/BR.png">
                                                </div>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <div id="worldMap" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h4 class="card-title">Tasks</h4>
                    <h5 class="card-category">Backend development</h5>
                </div>
                <div class="card-body ">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="img-row">
                                        <div class="img-wrapper">
                                            <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" class="img-raised" />
                                        </div>
                                    </td>
                                    <td class="text-left">Sign contract for "What are conference organizers afraid of?"
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="nc-icon nc-ruler-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="img-row">
                                        <div class="img-wrapper">
                                            <img src="../assets/img/faces/erik-lucatero-2.jpg" class="img-raised" />
                                        </div>
                                    </td>
                                    <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="nc-icon nc-ruler-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="img-row">
                                        <div class="img-wrapper">
                                            <img src="../assets/img/faces/kaci-baum-2.jpg" class="img-raised" />
                                        </div>
                                    </td>
                                    <td class="text-left">Using dummy content or fake information in the Web design
                                        process can result in products with unrealistic
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="nc-icon nc-ruler-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="img-row">
                                        <div class="img-wrapper">
                                            <img src="../assets/img/faces/joe-gardner-2.jpg" class="img-raised" />
                                        </div>
                                    </td>
                                    <td class="text-left">But I must explain to you how all this mistaken idea of
                                        denouncing pleasure</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="nc-icon nc-ruler-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh spin"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">2020 Sales</h4>
                    <p class="card-category">All products including Taxes</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartActivity"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> Tesla Model S
                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-check"></i> Data information certified
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Project</h5>
                    <p class="card-category">สัดส่วนเคสรับ PrEP แต่ละ โครงการ</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartDonut1" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                </div>
                <div class="card-footer d-none">
                    <div class="legend">
                        <i class="fa fa-circle text-primary"></i> Open
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar"></i> Number of emails sent
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-none">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">New Visitators</h5>
                    <p class="card-category">Out Of Total Number</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartDonut2" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-warning"></i> Visited
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-check"></i> Campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-none">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-category">Total number</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartDonut3" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-danger"></i> Completed
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 d-none">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Subscriptions</h5>
                    <p class="card-category">Our Users</p>
                </div>
                <div class="card-body ">
                    <canvas id="chartDonut4" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                </div>
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-secondary"></i> Ended
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Total users
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">จำนวนยา PrEP คงเหลือ</h5>
                    <p class="card-category">ช่วงยาที่เคสยังมียากินอยู่ ณ ปัจจุบัน</p>
                </div>
                <div class="card-body ">
                    <canvas id="prep_med_left" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
                    {{-- <canvas id="prep_med_left" width="400" height="400"></canvas> --}}
                </div>
                {{-- <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-secondary"></i> Ended
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Total users
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('contentxx')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Capacity</p>
                                <p class="card-title">150GB<p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update Now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Revenue</p>
                                <p class="card-title">$ 1,345<p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i>
                        Last day
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-vector text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Errors</p>
                                <p class="card-title">23<p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i>
                        In the last hour
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-favourite-28 text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Followers</p>
                                <p class="card-title">+45K<p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();


        demo.initVectorMap();

    });
</script>
@endsection
