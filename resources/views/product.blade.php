@extends('layouts.master')

@section('title')
    Produkto peržiūra
@endsection

@section('content')
    <div class="container">
        <p><a href="{{ url('/store') }}">Store</a> / {{ $product->name }}</p>
        <h1>{{ $product->name }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-6">
                @if(File::exists(public_path().'/uploads/'.$product->product_id.'.png'))
                    {{--<img src="{{url('/uploads/DNlogoWHITE.png')}}" alt="Image" class="img-responsive align-content-left" width="250px"--}}
                    {{-->--}}
                    <img src="{{url('/uploads/'.$product->product_id.'.png')}}"
                         alt="Image" class="img-responsive align-content-left" width="250px">
                @else
                    <img src="{{url('/uploads/DNlogoWHITE.png')}}" alt="Image" class="img-responsive align-content-left" width="250px"
                    >
                @endif
            </div>

            <div class="col-md-6">
                <h3>${{ $product->price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Dėti į krepšelį">
                </form>


                <br><br>

                {{ $product->description }}
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="spacer"></div>
{{--ATSILIEPIMAI--}}

        <form class="form-horizontal" enctype="multipart/form-data" action="{{route('prekyba.leaveReview')}}" method="post">
            <fieldset>
            {{ csrf_field() }}
            <!-- Form Name -->
                <legend>Palikti atsiliepimą</legend>
                <input type="hidden" name="pid" value="{{ $product->product_id }}">
                <!-- Text input-->
                <div class="form-group">
                    {{--<label class="col-md-4 control-label" for="message">Atsiliepimas:</label>--}}
                    <div class="col-md-6">
                    <input id="title" name="title" value="{{old('title')}}"type="text"
                           placeholder="Pavadinimas" class="form-control input-md" required="">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    {{--<label class="col-md-4 control-label" for="message">Atsiliepimas:</label>--}}
                    <div class="col-md-12">
                    <input id="message" name="message" value="{{old('message')}}"type="text"
                           placeholder="Jūsų atsiliepimas" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="rating">Įvertinimas [1-5]</label>
                    <div class="col-md-4">
                        <input id="rating" name="rating" value="{{old('rating')}}" type="number" step="1" placeholder="☆☆☆☆☆" max="5" min="1" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-success">Pateikti</button>
                    </div>
                </div>
            </fieldset>
        </form>

        <div class="spacer"></div>




    </div> <!-- end container -->


@endsection

