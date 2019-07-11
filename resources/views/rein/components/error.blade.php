@if ($errors->any())
    {!! implode('', $errors->all('
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
            <i class="nc-icon nc-simple-remove"></i>
        </button>:message
    </div>')) !!}
@endif
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
