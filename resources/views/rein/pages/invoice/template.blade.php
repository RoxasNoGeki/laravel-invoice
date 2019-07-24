@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tables
                        <small>Some examples to get you started</small>
                    </h3>
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
                            <h2>Stripped table
                                <small>Stripped table subtitle</small>
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">Template</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td class=" ">DEMO</td>
                                        <td class=" last"><a href="{{route('invoice_setting',['id'=>'12'])}}">View</a>
                                           </tr>
                                    <tr>
                                        <td class=" ">DEMO</td>
                                        <td class=" last"><a href="{{route('invoice_setting',['id'=>'17'])}}">View</a>
                                       </tr>
                                    <tr>
                                        <td class=" ">DEMO</td>
                                        <td class=" last"><a href="{{route('invoice_setting',['id'=>'18'])}}">View</a>
                                     </tr>
                                    <tr>
                                        <td class=" ">DEMO</td>
                                       <td class=" last"><a href="{{route('invoice_setting',['id'=>'19'])}}">View</a>
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
    <!-- /page content -->

@endsection