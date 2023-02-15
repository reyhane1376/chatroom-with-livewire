@extends('admin.layouts.master')

@section('head-tag')
    <title>داشبورد اصلی</title>
@endsection

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard 1</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript:void(0)" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 b-0">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">23</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>New projects</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-info"><i class="ti-wallet"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">76</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Total Earnings</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-success"><i class=" ti-shopping-cart"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">93</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Total Projects</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-warning"><i class="fa fa-dollar"></i></span>
                                        </li>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15">83</h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Net Earnings</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--row -->
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-info"></i>Mac</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-danger"></i>Windows</h5>
                                </li>

                            </ul>
                            <div id="ct-visits" style="height: 285px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="bg-theme-alt">
                            <div id="ct-daily-sales" class="p-t-30" style="height: 300px"></div>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h2 class="m-b-0 font-medium">Week Sales</h2>
                                    <h5 class="text-muted m-t-0">Ios app - 160 sales</h5>
                                </div>
                                <div class="col-xs-4">
                                    <div class="circle circle-md bg-info pull-right m-t-10"><i class="ti-shopping-cart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3 col-xs-12">
                        <div class="bg-theme white-box m-b-0">
                            <ul class="expense-box">
                                <li><i class="wi wi-day-cloudy text-white"></i>
                                    <div>
                                        <h1 class="text-white m-b-0">35<sup>o</sup></h1>
                                        <h4 class="text-white">Clear and sunny</h4>
                                    </div>
                                </li>
                            </ul>
                            <div id="ct-weather" style="height: 120px"></div>
                            <ul class="dp-table text-white">
                                <li>05 AM</li>
                                <li>10 AM</li>
                                <li>03 PM</li>
                                <li>08 PM</li>
                            </ul>
                        </div>
                        <div class="white-box">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h2 class="m-b-0 font-medium">Sunday</h2>
                                    <h5 class="text-muted m-t-0">March 2017</h5>
                                </div>
                                <div class="col-xs-4">
                                    <div class="circle circle-md bg-success pull-right m-t-10"><i class="wi wi-day-sunny"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- wallet, & manage users widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <!-- col-md-9 -->
                    <div class="col-md-8 col-lg-9">
                        <div class="manage-users">
                            <div class="sttabs tabs-style-iconbox">
                                <nav>
                                    <ul>
                                        <li><a href="#section-iconbox-1" class="sticon ti-user"><span>Select Users</span></a></li>
                                        <li><a href="#section-iconbox-2" class="sticon ti-lock"><span>Set Permissions</span></a></li>
                                        <li><a href="#section-iconbox-3" class="sticon ti-receipt"><span>Message Users</span></a></li>
                                        <li><a href="#section-iconbox-4" class="sticon ti-check-box"><span>Save and finish</span></a></li>
                                    </ul>
                                </nav>
                                <div class="content-wrap">
                                    <section id="section-iconbox-1">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Select Users to Manage</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="width: 150px;">NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row active">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox7" checked="" type="checkbox">
                                                                <label for="checkbox7"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="../plugins/images/users/varun.jpg" class="img-circle" width="30" alt="user img" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox8" type="checkbox">
                                                                <label for="checkbox8"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox9" type="checkbox">
                                                                <label for="checkbox9"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox10" type="checkbox">
                                                                <label for="checkbox10"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 p-t-30 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3>
                                            </div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-2">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Set Users Permission</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox19" type="checkbox">
                                                                <label for="checkbox19"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="../plugins/images/users/varun.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox11" checked="" type="checkbox">
                                                                <label for="checkbox11"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox12" type="checkbox">
                                                                <label for="checkbox12"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox13" type="checkbox">
                                                                <label for="checkbox13"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3>
                                            </div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-3">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Manage Users</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox14" type="checkbox">
                                                                <label for="checkbox14"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="../plugins/images/users/varun.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox15" type="checkbox">
                                                                <label for="checkbox15"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox16" checked="" type="checkbox">
                                                                <label for="checkbox16"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox17" type="checkbox">
                                                                <label for="checkbox17"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3>
                                            </div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Next</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                    <section id="section-iconbox-4">
                                        <div class="p-20 row">
                                            <div class="col-sm-6">
                                                <h3 class="m-t-0">Save and finish</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="side-icon-text pull-right">
                                                    <li><a href="#"><span class="circle circle-sm bg-success di"><i class="ti-plus"></i></span><span>Add Users</span></a></li>
                                                    <li><a href="#"><span class="circle circle-sm bg-danger di"><i class="ti-pencil-alt"></i></span><span>Edit</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="table-responsive manage-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>NAME</th>
                                                        <th>POSITION</th>
                                                        <th>JOINED</th>
                                                        <th>LOCATION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advance-table-row">
                                                        <td style="width: 10px;"></td>
                                                        <td style="width: 40px;">
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox23" type="checkbox">
                                                                <label for="checkbox23"> </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 60px;"><img src="../plugins/images/users/varun.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox20" type="checkbox">
                                                                <label for="checkbox20"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/genu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin</td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox21" type="checkbox">
                                                                <label for="checkbox21"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/sonu.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="sm-pd"></td>
                                                    </tr>
                                                    <tr class="advance-table-row active">
                                                        <td></td>
                                                        <td>
                                                            <div class="checkbox checkbox-circle checkbox-info">
                                                                <input id="checkbox22" checked="" type="checkbox">
                                                                <label for="checkbox22"> </label>
                                                            </div>
                                                        </td>
                                                        <td><img src="../plugins/images/users/pawandeep.jpg" alt="user img" class="img-circle" width="30" /></td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="p-10 row">
                                            <div class="col-sm-8">
                                                <h3>1 members selected</h3>
                                            </div>
                                            <div class="col-sm-2 pull-right m-t-10"><a href="javascript:void(0);" class="btn btn-block p-10 btn-rounded btn-danger"><span>Save</span><i class="ti-arrow-right m-l-5"></i></a></div>
                                        </div>
                                    </section>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /tabs -->
                        </div>
                    </div>
                    <!-- /col-md-9 -->
                    <!-- col-md-3 -->
                    <div class="col-md-4 col-lg-3">
                        <div class="panel wallet-widgets">
                            <div class="panel-body">
                                <ul class="side-icon-text">
                                    <li class="m-0"><a href="#"><span class="circle circle-md bg-success di vm"><i class="ti-plus"></i></span><div class="di vm"><h1 class="m-b-0">$458.50</h1><h5 class="m-t-0">Your wallet Banalce</h5></div></a></li>
                                </ul>
                            </div>
                            <div id="morris-area-chart2" style="height:208px"></div>
                            <ul class="wallet-list">
                                <li><i class="icon-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-handbag"></i><a href="javascript:void(0)">Shop Now</a></li>
                                <li><i class="ti-archive"></i><a href="javascript:void(0)">Add funds</a></li>
                                <li><i class=" ti-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-wallet"></i><a href="javascript:void(0)">Withdrow money</a></li>
                                <li><i class="icon-handbag"></i><a href="javascript:void(0)">Shop Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /col-md-3 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Profile, & inbox widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="panel">
                            <div class="p-30">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4"><img src="../plugins/images/users/varun.jpg" alt="varun" class="img-circle img-responsive"></div>
                                    <div class="col-xs-12 col-sm-8">
                                        <h2 class="m-b-0">Daniel Kristeen</h2>
                                        <h4>UIUX Designer</h4><a href="javascript:void(0)" class="btn btn-rounded btn-success"><i class="ti-plus m-r-5"></i> FOLLOW</a></div>
                                </div>
                                <div class="row text-center m-t-30">
                                    <div class="col-xs-4">
                                        <h2>14</h2>
                                        <h4>PHOTOS</h4>
                                    </div>
                                    <div class="col-xs-4 b-r">
                                        <h2>54</h2>
                                        <h4>VIDEOS</h4>
                                    </div>
                                    <div class="col-xs-4 b-r">
                                        <h2>145</h2>
                                        <h4>TASKS</h4>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-t-10" />
                            <div class="p-20 text-center">
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                                <hr>
                                <h4 class="m-t-30 font-medium">Followers</h4>
                                <ul class="dp-table m-t-30">
                                    <li><img src="../plugins/images/users/varun.jpg" alt="varun" width="60" data-toggle="tooltip" title="Varun Dhavan" class="img-circle"></li>
                                    <li><img src="../plugins/images/users/genu.jpg" alt="varun" width="60" data-toggle="tooltip" title="Varun Dhavan" class="img-circle"></li>
                                    <li><img src="../plugins/images/users/pawandeep.jpg" alt="varun" width="60" data-toggle="tooltip" title="Varun Dhavan" class="img-circle"></li>
                                    <li><a href="" class="circle circle-md bg-info di" data-toggle="tooltip" title="More">5+</a></li>
                                </ul>
                            </div>
                            <hr>
                            <ul class="dp-table profile-social-icons">
                                <li><a href="javascript:void(0)"><i class="fa fa-globe"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8 col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">MANAGE USERS</div>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px;" class="text-center">#</th>
                                            <th>NAME</th>
                                            <th>OCCUPATION</th>
                                            <th>EMAIL</th>
                                            <th>CATEGORY</th>
                                            <th>MANAGE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td><span class="font-medium">Daniel Kristeen</span>
                                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                            <td>Visual Designer
                                                <br/><span class="text-muted">Past : teacher</span></td>
                                            <td>daniel@website.com
                                                <br/><span class="text-muted">999 - 444 - 555</span></td>

                                            <td>
                                                <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- calendar & todo list widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="panel">
                            <div class="p-20">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h5 class="m-b-0">This months task</h5>
                                        <h3 class="m-t-0 font-medium">TO-DO LIST</h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="javascript:void(0)" class="pull-right btn btn-rounded btn-danger m-t-15" data-toggle="modal" data-target="#myModal">Add Task</a>
                                    </div>
                                </div>
                            </div>

                            <!-- .modal for add task -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                            <h4 class="modal-title">Add Task</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                                </div>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <div class="panel-footer">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                            <label for="inputSchedule"> <span>Schedule meeting with</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="../plugins/images/users/1.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Steave" /></li>
                                            <li><img src="../plugins/images/users/2.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Jessica" /></li>
                                            <li><img src="../plugins/images/users/3.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Priyanka" /></li>
                                            <li><img src="../plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Selina" /></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                            <label for="inputCall"> <span>Give Purchase report to</span> <span class="label label-danger label-rounded">Today</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="../plugins/images/users/3.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Priyanka" /></li>
                                            <li><img src="../plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Selina" /></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                            <label for="inputBook"> <span>Book flight for holiday</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                            <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning label-rounded">2 weeks</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                            <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>

                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                            <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success label-rounded">2 weeks</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="../plugins/images/users/1.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Steave" /></li>
                                            <li><img src="../plugins/images/users/2.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Jessica" /></li>
                                            <li><img src="../plugins/images/users/4.jpg" alt="user img" data-toggle="tooltip" data-placement="top" title="Assign to Selina" /></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-sm-12 m-b-30">
                        <div id="calendar"></div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="my-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Add Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-new-event">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="inverse">Inverse</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
                <!-- ============================================================== -->
                <!-- Blog-component -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="user" src="../plugins/images/big/img1.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="user" src="../plugins/images/big/img2.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="user" src="../plugins/images/big/img3.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="user" src="../plugins/images/big/img4.jpg">
                        <div class="white-box">
                            <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> May 16</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 38</a></div>
                            <h3 class="m-t-20 m-b-20">Top 20 Models are on the ramp</h3>
                            <p>Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                            <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- chats, message & profile widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-themecolor">
                                    <div class="panel-heading">
                                        CHAT LISTING
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chatonline">
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                            </li>

                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                            </li>
                                            <li>
                                                <div class="call-chat">
                                                    <button class="btn btn-success btn-circle btn-lg" type="button"><i class="fa fa-phone"></i></button>
                                                    <button class="btn btn-info btn-circle btn-lg" type="button"><i class="fa fa-comments-o"></i></button>
                                                </div>
                                                <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-lg-4 col-md-6 col-sm-12">

                        <div class="panel panel-themecolor">
                            <div class="panel-heading">USER ACTIVITY</div>
                            <div class="panel-body">
                                <div class="steamline">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div><a href="#">Tohnathan Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div><a href="#">Hritik Roshan</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Lorem Ipsum is simply dummy</div>
                                            <div class="row inline-photos">
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="../plugins/images/small/vd1.jpg"></div>
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="../plugins/images/small/vd2.jpg"></div>
                                                <div class="col-xs-4"><img class="img-responsive" alt="user" src="../plugins/images/small/vd3.jpg"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../plugins/images/users/sonu.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">The standard chunk of ipsum </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../plugins/images/users/ritesh.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Varun Dhavan</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../plugins/images/users/govinda.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">The generated lorem ipsum
                                                <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline btn-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline btn-danger">Refuse</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading"> CHATBOX
                                <div class="pull-right"> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true" role="dialog">
                                <div class="panel-body">
                                    <div class="chat-box" style="height: 510px;">
                                        <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                                            <li>
                                                <div class="chat-image"> <img alt="male" src="../plugins/images/users/sonu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Sonu Nigam</h4>
                                                        <p> Hi, All! </p> <b>10.00 am</b> </div>
                                                </div>
                                            </li>
                                            <li class="odd">
                                                <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Genelia</h4>
                                                        <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Ritesh</h4>
                                                        <p> Hi, Sonu and Genelia, </p> <b>10.05 am</b> </div>
                                                </div>
                                            </li>
                                            <li class="odd">
                                                <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                                                <div class="chat-body">
                                                    <div class="chat-text">
                                                        <h4>Genelia</h4>
                                                        <p> Hi, How are you Sonu? ur next concert? </p> <b>10.03 am</b> </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <textarea placeholder="Type your message here" class="chat-box-input"></textarea>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <button class="btn btn-success btn-circle btn-xl" type="button"><i class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <!-- ============================================================== -->
                <!-- start right sidebar -->
                <!-- ============================================================== -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="full-width"><b>With Dark sidebar</b></li>

                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme working">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
@endsection