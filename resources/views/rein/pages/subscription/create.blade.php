@inject('dollar', '\App\Helpers\Dollar')
<div class="modal fade modal-primary" id="createsubs" tabindex="-1" role="dialog" aria-labelledby="createsubsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-bulb-63"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <ul class="list-group">
                    <form method="POST" action="{{route('subscription.store')}}">
                        @csrf
                        <select class="form-control" name="plan_id">
                            @foreach($plans as $k => $v)
                                <option value="{{$v['id']}}">{{$v['name']}} ( {{$dollar::display($v['price']['price'])}} )</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" type="submit">Register Now</button>
                    </form>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
