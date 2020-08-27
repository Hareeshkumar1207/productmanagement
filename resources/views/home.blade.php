@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-stripped">
                <tbody>
                    @foreach ($getAllProduct as $key => $value)
                    <tr>
                        <div class="card" style="width:100%">
                            <img class="card-img-top rounded mx-auto d-block" src="{{ Storage::disk('productImage')->url($value->product_image)}}" onerror="this.src='assets/img-temp/avatars/img1.jpg'" alt="Card image" style="width:40%">
                            <div class="card-body">
                                <h4 class="card-title">{{$value->product_name}}</h4>
                                <p class="card-text"> <b>Price : </b>{{ $value->product_price}} $</p>
                                <p class="card-text"> <b>Discount : </b> {{ $value->product_discount}} %</p>
                                <p class="card-text"> <b>Description : </b> {{ $value->product_description}}</p>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$getAllProduct->links()}}
        </div>
    </div>
</div>
@endsection