@extends('layouts.app')
<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  
</header>
@section('content')

<section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FASHION TODAY
                    </p>
                    <h2 class="primary-header">
                        Checkout Your Cart
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('img/baner.jpg')}}" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                {{$product->title}}
                                </h1>
                                <p class="description">
                                Batik merupakan karya seni khas Indonesia yang identik dengan nilai budaya yang ada di Indonesia
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{route('checkout.store', $product->id)}}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}" required />
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{Auth::user()->email}}" required/>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Gender</label>
                                    <input name="gender" type="text" class="form-control {{$errors->has('gender') ? 'is-invalid' : ''}}" value="{{old('gender') ?: Auth::user()->gender}}" required/>
                                    @if ($errors->has('gender'))
                                        <p class="text-danger">{{$errors->first('gender')}}</p>
                                    @endif
                                </div>
                                <div>
                                <div class="mb-4">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{old('phone') ?: Auth::user()->phone}}" required />
                                    @if ($errors->has('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{old('address') ?: Auth::user()->address}}" required />
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Discount Code</label>
                                    <input name="discount" type="text" class="form-control {{$errors->has('discount') ? 'is-invalid' : ''}}" value="{{old('discount')}}" />
                                    @if ($errors->has('discount'))
                                        <p class="text-danger">{{$errors->first('discount')}}</p>
                                    @endif
                                </div>

                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('img/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Optional JavaScript; choose one of the two! -->

   
@endsection