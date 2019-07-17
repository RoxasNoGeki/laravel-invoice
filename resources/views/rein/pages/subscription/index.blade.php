@extends('rein.layouts.dashboard')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Plain Page</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Plain Page</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- page content -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_content">
                                        <p class="text-muted font-13 m-b-30">
                                            DataTables has most features enabled by default, so all you need
                                            to do to use it with your own tables is to call the construction
                                            function: <code>$().DataTable();</code>
                                        </p>
                                        <h5><a data-toggle="modal" data-target="#createsubs" href="#createsubs">Add Subscription</a></h5>

                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Plan</th>
                                                <th>Started At</th>
                                                <th>Ended At</th>
                                                <th>Auto Extend</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data as $dt)
                                                <tr>
                                                    <td>{{$dt->plan->name}}</td>
                                                    <td>{{$dt->created_at}}</td>
                                                    <td>{{$dt->ended_at}}</td>
                                                    <td>{{$dt->is_auto_extend}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
    @include('rein.pages.subscription.create',['plans' => $plans])
@endsection
