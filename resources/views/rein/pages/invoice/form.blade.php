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
                                <input type="hidden" name="prefix_no" value="{{$data->prefix_no}}">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Issuer</h4>
                                        <p class="font-gray-dark">
                                            Information of invoice sender
                                        </p>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_name[]" class="form-control has-feedback-left"
                                                   id="User_FirstName" value="{{$data->issuer['user_name'][0]}}" placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_name[]" class="form-control"
                                                   id="User_LastName" value="{{$data->issuer['user_name'][1]}}" placeholder="Last Name">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]"
                                                   class="form-control has-feedback-left" id="User_Address"
                                                   placeholder="Address" value="{{$data->issuer['user_address'][0]}}">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]"
                                                   class="form-control has-feedback-left" id="User_State"
                                                   placeholder="State" value="{{$data->issuer['user_address'][1]}}">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]" class="form-control"
                                                   id="User_PostalCode" placeholder="Postal Code" value="{{$data->issuer['user_address'][2]}}">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_email" class="form-control has-feedback-left"
                                                   id="User_Email" placeholder="Email" value="{{$data->issuer['user_email']}}">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_phone" class="form-control" id="User_Phone"
                                                   placeholder="Phone" value="{{$data->issuer['user_phone']}}">
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
                                            <input type="text" name="for_name[]" class="form-control has-feedback-left"
                                                   id="For_FirstName" placeholder="First Name" value="{{$data->billed_to['for_name'][0]}}">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_name[]" class="form-control" id="For_LastName"
                                                   placeholder="Last Name" value="{{$data->billed_to['for_name'][1]}}">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]"
                                                   class="form-control has-feedback-left" id="For_Adress"
                                                   placeholder="Address" value="{{$data->billed_to['for_address'][0]}}">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]"
                                                   class="form-control has-feedback-left" id="For_State"
                                                   placeholder="State" value="{{$data->billed_to['for_address'][1]}}">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]" class="form-control"
                                                   id="For_PostalCode" placeholder="Postal Code" value="{{$data->billed_to['for_address'][2]}}">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_email" class="form-control has-feedback-left"
                                                   id="For_Email" placeholder="Email" value="{{$data->billed_to['for_email']}}">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_phone" class="form-control" id="For_Phone"
                                                   placeholder="Phone" value="{{$data->billed_to['for_phone']}}">
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
                                            Payment Setting...
                                        </p>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Account_Name">Account
                                                Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_name" id="Account_Name"
                                                       required="required" class="form-control col-md-7 col-xs-12" value="{{$data->payment_option['account_name']}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"
                                                   for="Account_Number">Account Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_number" id="Account_Number"
                                                       required="required" class="form-control col-md-7 col-xs-12" value="{{$data->payment_option['account_number']}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Send By</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control" name="send_option">
                                                    <option value="Email">Email</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Invoice Setting</h4>
                                        <p class="font-gray-dark">
                                            Payment Terms... <a data-toggle="modal" data-target=".bs-example-modal-lg"
                                                                style="color: red">HERE</a>
                                        </p>

                                        <!-- Large modal -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl
                                                            consectetur et. Vivamus sagittis lacus vel augue laoreet
                                                            rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                            commodo cursus magna, vel scelerisque nisl consectetur et.
                                                            Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                            fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="button" class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-6">

                                            <label>
                                                <input type="radio" checked="" value="fixed" id="optionsRadios1"
                                                       name="optionsRadios" onchange="change()"> Fixed Reccuring
                                            </label>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <label>
                                                <input type="radio" value="nonfixed" id="optionsRadios2"
                                                       name="optionsRadios" onchange="change()"> Non-Fixed Reccuring
                                            </label>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Send Option</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control" name="sendOption" id="sendOption" onchange="change()">
                                                    <option value="1">Daily / Weekly</option>
                                                    <option value="2">Monthly</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Penalty" class="control-label col-md-4 col-sm-4 col-xs-12">Penalty
                                                In Percent</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Penalty" class="form-control col-md-7 col-xs-12" type="text"
                                                       name="penalty" value="{{$data->payment_terms['penalty']}}">
                                            </div>
                                        </div>

                                        <div class="form-group" id="dueIn" hidden="hidden">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Due In<span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="due" name="due"
                                                       class="date-picker form-control col-md-7 col-xs-12"
                                                       type="text"
                                                       @if (!$data->due_in_days==null)
                                                       value="{{$data->due_in_days}}"
                                                       @elseif (!$data->due_in_months==null)
                                                       value="{{$data->due_in_months}}"
                                                       @endif

                                                >
                                            </div>

                                        </div>


                                        <div class="form-group" id="repeatOn" hidden="hidden">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Repeat On <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Due_Months" name="repeat"
                                                       class="form-control col-md-7 col-xs-12"
                                                       value="{{$data->repeat_in_months}}"
                                                       type="text"

                                                >
                                            </div>
                                        </div>

                                        <div class="form-group" id="repeatEvery">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Repeat Every</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <select class="form-control" name="day" id="day">
                                                    <option value="Sunday">Sunday</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Notes :</label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <textarea id="Notes" required="required" class="form-control"
                                                          name="notes" data-parsley-trigger="keyup"
                                                          data-parsley-minlength="0" data-parsley-maxlength="100"
                                                          data-parsley-validation-threshold="10" >{{$data->payment_terms['notes']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" hidden="hidden" value="DEMO" name="layout">
                                    <p>Notes : Daily and Weekly will be count by days and Monthly will be count by
                                        months</p>
                                </div>



                                <div class="clearfix">&nbsp;</div>
                                    <div class="clearfix">&nbsp;</div>


                                    <div class="col-md-12 col-xs-12">
                                        <div class="row group">
                                            <div class="col-md-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2>Basic Tables
                                                            <small>basic table subtitle</small>
                                                        </h2>
                                                        <ul class="nav navbar-right panel_toolbox">
                                                            <li>
                                                                <button type="button" id="btnAdd"
                                                                        class="btn btn-primary">Add More
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">

                                                        <table class="table" id="dynamic_field">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th style="width: 6%;">Qty</th>
                                                                <th>Desc</th>
                                                                <th>Price</th>
                                                                <th>Disc</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="qty[]"
                                                                               class="form-control col-md-12 col-xs-12">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="desc[]"
                                                                               class="form-control col-md-12 col-xs-12">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="price[]"
                                                                               class="form-control col-md-12 col-xs-12">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" name="disc[]"
                                                                               class="form-control col-md-12 col-xs-12">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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
@section('javascript')
    <script>

        $(document).ready(function() {
            inputset();
            change();
        });

        function inputset(){

            $("#sendOption").val({!! json_encode($data->payment_terms['sendOption']) !!});
            $("#day").val({!! json_encode($data->repeat_in_days) !!})
            if({!! json_encode($data->payment_terms['optionsRadios']) !!}=='nonfixed'){
                document.getElementById('optionsRadios2').checked=true;

            }
        }




        var i = 1;

        $('#btnAdd').click(function () {
            i++;
            $('#dynamic_field').append('' +
                '<tr id="row' + i + '" class="dynamic-added">' +
                '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td>' +
                '<td><input type="text" name="qty[]" class="form-control col-md-12 col-xs-12"></td>' +
                '<td><input type="text" name="desc[]" class="form-control col-md-12 col-xs-12"></td>' +
                '<td><input type="text" name="price[]" class="form-control col-md-12 col-xs-12"></td>' +
                '<td><input type="text" name="disc[]" class="form-control col-md-12 col-xs-12"></td>' +
                '</tr>'
            );
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

        function change() {
            if (document.getElementById('optionsRadios1').checked == true) {
                if ($("#sendOption").val() == 1) {
                    $("#dueIn").prop('hidden', true);
                    $("#repeatOn").prop('hidden', true);
                    $("#repeatEvery").prop('hidden', false);

                    $("#dueIn").prop('required', false);
                    $("#repeatIn").prop('required', false);
                } else {
                    $("#dueIn").prop('hidden', true);
                    $("#repeatOn").prop('hidden', false);
                    $("#repeatEvery").prop('hidden', true);

                    $("#dueIn").prop('required', false);
                    $("#repeatOn").prop('required', true);
                }
            } else if (document.getElementById('optionsRadios2').checked == true) {
                $("#dueIn").prop('hidden', false);
                $("#repeatOn").prop('hidden', true);
                $("#repeatEvery").prop('hidden', true);

                $("#dueIn").prop('required', true);
                $("#repeatIn").prop('required', false);
            }
        }

    </script>
@endsection
