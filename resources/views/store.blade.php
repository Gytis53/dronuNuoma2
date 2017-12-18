@extends('layouts.master')

@section('title')
    Nuomos punktai
@endsection

@section('content')
    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif


            @foreach($product->chunk(3) as $productsChunk)
                <div class="row">
                    @foreach($productsChunk as $product)

                        <div class="col-sm-2 col-md-4">
                            <div class="thumbnail">
                                <a href="{{ url('store', [$product->product_id]) }}">
                                        @if(File::exists(public_path().'/uploads/'.$product->product_id.'.png'))
                                            {{--<img src="{{url('/uploads/DNlogoWHITE.png')}}" alt="Image" class="img-responsive align-content-left" width="250px"--}}
                                            {{-->--}}
                                            <img src="{{url('/uploads/'.$product->product_id.'.png')}}"
                                                 alt="Image" class="img-responsive align-content-left"class="img-responsive align-content-left" >
                                        @else
                                            <img src="{{url('/uploads/DNlogoWHITE.png')}}" alt="Image" class="img-responsive align-content-left" width="250px"
                                            >
                                        @endif
                                    <div class="caption">
                                        <h3 class="text-center">{{$product -> name}}</h3>
                                        <p class="text-center">{{$product -> description}}</p>
                                        <p class="text-center">{{$product -> price}} €</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

    </div> <!-- end container -->

@endsection

