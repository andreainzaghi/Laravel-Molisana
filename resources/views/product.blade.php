@extend('layout.app')

@section('title')
{{$productElement['titolo']}}
@endsection

@section('contect')
    <h1>
        {{$productElement['titolo']}}
    </h1>
    <h1>
        {{$productElement['tipo']}}
    </h1>
    <h1>
        {{$productElement['peso']}}
    </h1>
@endsection
