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
                                  method="POST" action="{{route('store')}}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 col-xs-12">
                                        <label for="Penalty"
                                               class="control-label col-md-2 col-sm-2 col-xs-12">Layout</label>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <input id="layout" class="form-control" type="text"
                                                   placeholder="Template Name"
                                                   name="layout" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12"></div>
                                    <div class="col-md-6 col-xs-6">
                                        <h4>Issuer</h4>
                                        <p class="font-gray-dark">
                                            Information of invoice sender
                                        </p>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_name" class="form-control has-feedback-left"
                                                   id="User_FirstName" placeholder="Your Name" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]"
                                                   class="form-control has-feedback-left" id="User_Address"
                                                   placeholder="Address" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]"
                                                   class="form-control has-feedback-left" id="User_State"
                                                   placeholder="State" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_address[]" class="form-control"
                                                   id="User_PostalCode" placeholder="Postal Code" required="required">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_email" class="form-control has-feedback-left"
                                                   id="User_Email" placeholder="Email" required="required">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="user_phone" class="form-control" id="User_Phone"
                                                   placeholder="Phone" required="required">
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
                                                   id="For_FirstName" placeholder="First Name" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>


                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]"
                                                   class="form-control has-feedback-left" id="For_Adress"
                                                   placeholder="Address" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]"
                                                   class="form-control has-feedback-left" id="For_State"
                                                   placeholder="State" required="required">
                                            <span class="fa fa-user form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_address[]" class="form-control"
                                                   id="For_PostalCode" placeholder="Postal Code" required="required">
                                            <span class="fa fa-user form-control-feedback right"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_email" class="form-control has-feedback-left"
                                                   id="For_Email" placeholder="Email" required="required">
                                            <span class="fa fa-envelope form-control-feedback left"
                                                  aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" name="for_phone" class="form-control" id="For_Phone"
                                                   placeholder="Phone" required="required">
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
                                            Set Where Should The Sender Send Their Bills Information To. And How Would
                                            You Want The Invoice To Be Delivered.
                                        </p>

                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Account_Name">Account
                                                Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_name" id="Account_Name"
                                                       required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12"
                                                   for="Account_Number">Account Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="account_number" id="Account_Number"
                                                       required="required" class="form-control col-md-7 col-xs-12">
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
                                            For Further Information On How Your Invoice Are Being Sent Please Click <a
                                                data-toggle="modal" data-target=".bs-example-modal-lg"
                                                style="color: red">HERE</a>
                                        </p>

                                        {{--                                         Large modal --}}
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
                                        {{--                                        End Of Large Modal--}}

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
                                                       name="penalty" required="required">
                                            </div>
                                        </div>

                                        <div class="form-group" id="dueIn" hidden="hidden">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Due In <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="due" name="due"
                                                       class="date-picker form-control col-md-7 col-xs-12"
                                                       type="text">
                                            </div>
                                        </div>

                                        <div class="form-group" id="repeatIn" hidden="hidden">
                                            <label class="control-label col-md-4 col-sm-4 col-xs-12">Repeat On <span
                                                    class="required">*</span>
                                            </label>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <input id="Due_Months" name="repeat"
                                                       class="form-control col-md-7 col-xs-12"
                                                       type="text">
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
                                                <textarea id="Notes" class="form-control"
                                                          name="notes" data-parsley-trigger="keyup"
                                                          data-parsley-minlength="0" data-parsley-maxlength="100"
                                                          data-parsley-validation-threshold="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Notes : Daily and Weekly will be count by days and Monthly will be count by
                                        months</p>
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
    </div>
@endsection
@section('javascript')
    <script>

        function change() {
            if (document.getElementById('optionsRadios1').checked == true) {
                if ($("#sendOption").val() == 1) {
                    $("#dueIn").prop('hidden', true);
                    $("#repeatIn").prop('hidden', true);
                    $("#repeatEvery").prop('hidden', false);

                    $("#dueIn").prop('required', false);
                    $("#repeatIn").prop('required', false);
                } else {
                    $("#dueIn").prop('hidden', true);
                    $("#repeatIn").prop('hidden', false);
                    $("#repeatEvery").prop('hidden', true);

                    $("#dueIn").prop('required', false);
                    $("#repeatIn").prop('required', true);
                }
            } else if (document.getElementById('optionsRadios2').checked == true) {
                $("#dueIn").prop('hidden', false);
                $("#repeatIn").prop('hidden', true);
                $("#repeatEvery").prop('hidden', true);

                $("#dueIn").prop('required', true);
                $("#repeatIn").prop('required', false);
            }
        }

    </script>
@endsection
