@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Invoice
                                <small>You can see list of your current invoice</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>


                        <div class="x_content">

                            <a href="{{route('template')}}">
                                <button class="btn btn-primary">
                                    Generate Invoice
                                </button>
                            </a>

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">Template ID</th>
                                        <th class="column-title">Invoice Date</th>
                                        <th class="column-title">Invoice Due Date</th>
                                        <th class="column-title">Bill to Name</th>
                                        <th class="column-title">Notes</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($data as $dt=>$v)
                                        @for($i=0; $i<count($v->history);$i++)
                                            <tr class="even pointer">
                                                <td class=" ">{{$v->history[$i]->id}}</td>
                                                <td class=" ">{{$v->history[$i]->issued_at}} </td>
                                                <td class=" ">{{$v->history[$i]->due_at}}</td>
                                                <td class=" ">{{$v->history[$i]->billed_to['for_name'][0]}}</td>
                                                <td class=" ">{{$v->history[$i]->payment_terms['notes']}}</td>
                                                <td class=" last"><a href="{{route('view',['id'=>$v->history[$i]->id])}}">View</a>
                                                </td>
                                            </tr>
                                        @endfor
                                    @endforeach
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
