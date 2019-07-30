@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Dashboard</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">{{$dt['title']}}</h4>
                                    <p class="card-category">{{$dt['subtitle']}}</p>
                                </div>

                                <hr>
                                <div id="finished">
                                    Akunmu sudah siap untuk membuat invoice tekan<a href="{{route('template')}}"
                                                                                    style="color: red"> disini </a>untuk
                                    memulai!
                                </div>
                                <div id="tutorial" hidden="hidden">
                                    <div class="progress" style="margin : 10px 20px 20px 20px;">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="40"
                                             aria-valuemin="0" aria-valuemax="100" style="width:{{$dt['persenan']}}%;">
                                        </div>
                                        <input type="hidden" value="{{$dt['persenan']}}" name="progress" id="progress">
                                    </div>

                                    <div class="row clearfix" style="texy-align :center;margin : 10px 80px 20px 80px;">
                                        @foreach($dt['step'] as $k => $v)
                                            <p class="col-md-{{12/max(count($dt['step']),1)}}"><a
                                                    href="{!!$v['action']!!}">{{$v['content']}}</a></p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
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
        function hiddenTutorial() {
            $progress = document.getElementById('progress').value;
            var tampilan = $('#tutorial');
            var finished = $('#finished');
            if ($progress == 100) {
                tampilan.prop('hidden', true);
                finished.prop('hidden', false);
            } else {
                tampilan.prop('hidden', false);
                finished.prop('hidden', true);
            }
        }

        hiddenTutorial();
    </script>
@endsection
