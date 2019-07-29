@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
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
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_name" class="form-control has-feedback-left"
                                                   id="User_FirstName" value="{{$data->issuer['user_name']}}"
                                                   placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left"
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
                                                   id="User_PostalCode" placeholder="Postal Code"
                                                   value="{{$data->issuer['user_address'][2]}}">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_email" class="form-control has-feedback-left"
                                                   id="User_Email" placeholder="Email"
                                                   value="{{$data->issuer['user_email']}}">
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
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_name" class="form-control has-feedback-left"
                                                   id="For_FirstName" placeholder="First Name"
                                                   value="{{$data->billed_to['for_name']}}">
                                            <span class="fa fa-user form-control-feedback left"
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
                                                   id="For_PostalCode" placeholder="Postal Code"
                                                   value="{{$data->billed_to['for_address'][2]}}">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_email" class="form-control has-feedback-left"
                                                   id="For_Email" placeholder="Email"
                                                   value="{{$data->billed_to['for_email']}}">
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
                                                       required="required" class="form-control col-md-7 col-xs-12"
                                                       value="{{$data->payment_option['account_name']}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"
                                                   for="Account_Number">Account Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_number" id="Account_Number"
                                                       required="required" class="form-control col-md-7 col-xs-12"
                                                       value="{{$data->payment_option['account_number']}}">
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
                                            For Further Information On How Your Invoice Are Being Sent Please Click
                                            <a data-toggle="modal" data-target=".bs-example-modal-lg"
                                                                style="color: red">HERE</a>
                                        </p>

                                        {{--                                       Large Modal--}}
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Invoice Setting</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Invoice Cycle</h4>
                                                        <p>Pada bagian invoice setting sistem memiliki 2 metode yang
                                                            berbeda untuk mengirim invoice yang kamu inginkan. </p>

                                                        <ul>
                                                            <li><h5>Fixed Reccuring</h5></li>
                                                            <p>Fixed Reccuring adalah metode dimana sistem akan
                                                                mengirimkan invoice milikmu dengan waktu yang sama
                                                                sesuai yang kamu inginkan tanpa menghitung hari yang ada
                                                                tiap bulannya.</p>

                                                            <p>Sebagai contoh, ketika kamu memilih untuk membuat invoice
                                                                fixed reccuring monthly pada tanggal 14 febuari. Invoice
                                                                berikutnya akan di kirim pada tanggal 14 maret, jika
                                                                kamu ingin mengirim invoice dengan jangka waktu setiap
                                                                30 hari kamu dapat memilih opsi non-fixed reccuring</p>
                                                            <p>Untuk fixed reccuring daily/weekly, sistem akan mengirim
                                                                invoice kamu berdasarkan hari yang dipilih. jika kamu
                                                                ingin mengirim invoice dengan jangka waktu yang di
                                                                tentukan sendiri (contoh : setiap 5 hari / 10 hari)
                                                                pilih opsi non-fixed reccuring </p>
                                                            <li><h5>Non-Fixed Reccuring</h5></li>
                                                            <p>Non-Fixed Reccuring adalah metode dimana sistem akan
                                                                mengirimkan invoice dengan menghitung waktu berdasarkan
                                                                hari yang ada tiap bulannya.</p>
                                                            <p>Contoh, pada non-fixed reccuring monthly jika
                                                                dimasukannya inputan 14 febuari 2019 sistem akan
                                                                mengirimkan invoice berikutnya pada tanggal 16 maret
                                                                2019. Karena pada bulan febuari 2019 hanya memiliki 28
                                                                hari</p>
                                                            <p>Pada daily/weekly non-fixed reccuring memiliki konsep
                                                                yang sama dengan monthly dimana tiap waktu akan di
                                                                hitung berdasarkan total hari setiap bulannya</p>
                                                        </ul>
                                                        <h4>Important NOTE:</h4>
                                                        <p>Fixed->Daily/Weekly = Menerima inputan <strong> hari.</strong>
                                                        <br>
                                                        Fixed->Monthly = Menerima inputan <strong> tanggal </strong>
                                                        kapan jatuh tempo. <br>
                                                        Non-Fixed->Daily/Weekly = Menerima inputan
                                                        <strong>angka </strong>
                                                        perulangan setiap berapa hari invoice akan di kirim<br>
                                                        (contoh : nilai 5 akan mengirim invoice setiap 5 hari
                                                        mulai dari waktu inovice dibuat)<br>
                                                        Non-Fixed->Monthly = Menerima inputan <strong> angka </strong>
                                                        perulangan
                                                        setiap berapa bulan sekali invoice akan di kirim <br>
                                                        (contoh
                                                        : nilai 1 akan mengirim invoice setiap 1 bulan sekali
                                                        mulai dari waktu invoice dibuat)
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        End Of Modal--}}

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
                                                <select class="form-control" name="sendOption" id="sendOption"
                                                        onchange="change()">
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
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Repeat
                                                Every</label>
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
                                                          data-parsley-validation-threshold="10">{{$data->payment_terms['notes']}}</textarea>
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
    </div>


    <!-- /page content -->

@endsection
@section('javascript')
    <script>

        $(document).ready(function () {
            inputset();
            change();
        });

        function inputset() {

            $("#sendOption").val({!! json_encode($data->payment_terms['sendOption']) !!});
            $("#day").val({!! json_encode($data->repeat_in_days) !!})
            if ({!! json_encode($data->payment_terms['optionsRadios']) !!}=='nonfixed'
        )
            {
                document.getElementById('optionsRadios2').checked = true;

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
