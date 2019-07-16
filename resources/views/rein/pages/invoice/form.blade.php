@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
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
                <div class="col-md-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design
                                <small>different form elements</small>
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
                            <br/>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                  method="POST" action="{{route('create_invoice')}}">
                                @csrf
                                <input type="text" hidden="hidden" name="prefix_no" value="{{$data->prefix_no}}">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Issuer</h4>
                                        <p class="font-gray-dark">
                                            Information of invoice sender
                                        </p>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_firstname"
                                                   value="{{$data->issuer['user_firstname']}}"
                                                   class="form-control has-feedback-left" id="User_FirstName"
                                                   placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address"
                                                   value="{{$data->issuer['user_address']}}" class="form-control"
                                                   id="User_Address" placeholder="Address">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_email" value="{{$data->issuer['user_email']}}"
                                                   class="form-control has-feedback-left" id="User_Email"
                                                   placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_phone" value="{{$data->issuer['user_phone']}}"
                                                   class="form-control" id="User_Phone" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Billed To</h4>
                                        <p class="font-gray-dark">
                                            Information for whom this invoice will be sended to
                                        </p>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_firstname"
                                                   value="{{$data->billed_to['for_firstname']}}"
                                                   class="form-control has-feedback-left" id="For_FirstName"
                                                   placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address"
                                                   value="{{$data->billed_to['for_address']}}" class="form-control"
                                                   id="For_Address" placeholder="Address">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_email"
                                                   value="{{$data->billed_to['for_email']}}"
                                                   class="form-control has-feedback-left" id="For_Email"
                                                   placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_phone"
                                                   value="{{$data->billed_to['for_phone']}}" class="form-control"
                                                   id="For_Phone" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>


                                <br/>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Invoice Setting</h4>
                                        <p class="font-gray-dark">
                                            Invoice Setting.....
                                        </p>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Payment
                                                Option</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control" name="payment_option">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Account_Name">Account
                                                Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_name"
                                                       value="{{$data->payment_option['account_name']}}"
                                                       id="Account_Name" required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"
                                                   for="Account_Number">Account Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_number"
                                                       value="{{$data->payment_option['account_number']}}"
                                                       id="Account_Number" required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Send Option</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control" name="send_option">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Invoice Setting</h4>
                                        <p class="font-gray-dark">
                                            Payment Terms...
                                        </p>
                                        <div class="form-group">
                                            <label for="Penalty" class="control-label col-md-4 col-sm-4 col-xs-12">Penalty
                                                In Percent</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Penalty" value="{{$data->payment_terms['penalty']}}"
                                                       class="form-control col-md-7 col-xs-12" type="text"
                                                       name="penalty">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Due In Days <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Due_Days" name="due_days"
                                                       value="{{$data->payment_terms['due_days']}}"
                                                       class="date-picker form-control col-md-7 col-xs-12"
                                                       required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Due In Months <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Due_Months" name="due_months"
                                                       value="{{$data->payment_terms['due_months']}}"
                                                       class="form-control col-md-7 col-xs-12" required="required"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Notes :</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="Notes" required="required" class="form-control"
                                                          name="notes" data-parsley-trigger="keyup"
                                                          data-parsley-minlength="0" data-parsley-maxlength="100"
                                                          data-parsley-validation-threshold="10">{{$data->payment_terms['notes']}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <h4>Invoice Item</h4>
                                        <p class="font-gray-dark">
                                            Item Details...
                                        </p>

                                        <div class="form-group">
                                            <label class="control-label">Qty :</label>
                                            <input type="text" name="qty" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Product :</label>
                                            <input type="text" name="product" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Serial :</label>
                                            <input type="text" name="disc" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description :</label>
                                            <input type="text" name="desc" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Subtotal :</label>
                                            <input type="text" name="price" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

@endsection
