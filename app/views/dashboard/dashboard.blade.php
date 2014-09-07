@section('content')
    <h1>Raumdaten</h1>
    @foreach ($data as $sensorName => $sensor)
        <div class="col-xs-1">
            <img class="img-responsive img-circle" alt="{{{$sensor}}}" src="holder.js/50x50/text:{{{$sensor}}}" />
            <h4>{{{$sensorName}}}</h4>
        </div>
    @endforeach
@stop

@section('js')
    {{ HTML::script('js/holderjs/holder.js') }}
@stop

