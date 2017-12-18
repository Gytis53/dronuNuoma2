@extends('layouts.master')

@section('title')
    Nuomos punktai
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Užsakymo patvirtinimas</h1>
            <div>
                <p><strong>Jūsų užsakymo duomenys:</strong></p>

                <table class="table">
                    <tbody>
                    <tr>
                        <td>Gavėjo vardas</td>
                        <td>{{$order['billing_name']}}</td>
                    </tr>
                    <tr>
                        <td>Kortelės numeris</td>
                        <td>{{$order['card_number']}}</td>
                    </tr>
                    <tr>
                        <td>Pristatymo adresas</td>
                        <td>{{$order['address']}}, {{$order['city']}}  </td>
                    </tr>
                    <tr>
                        <td>Telefono Nr.</td>
                        <td>{{$order['phone']}} </td>
                    </tr>
                    <tr>
                        <td>Papildoma informacija</td>
                        <td>{{$order['note']}} </td>
                    </tr>
                    </tbody>
                </table>
                {{--<button type="submit" class="btn btn-success">Patvirtinti</button>--}}
                <form action="{{ url('/checkout2') }}" name="foo" method="get">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Patvirtinti</button>
                </form>
                <hr>
            </div>
        </div>
    </div>


@endsection

{{--<div>--}}
    {{--@foreach($order->chunk(3) as $eventsChunk)--}}
        {{--<div class="row" style="margin-bottom:320px">--}}
            {{--@foreach($eventsChunk as $order)--}}
                {{--<div class="col-sm-2 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<p><strong>{{$order->delivery_name}}</strong></p>--}}
                        {{--<p>{{$order->note}}</p>--}}
                        {{--<p>nuo {{$order->cvv}} iki {{$order->delivery_name}})</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endforeach--}}
{{--</div>--}}