@extends('layout.app')

<?php
use App\Models\Catagorie;
use App\Models\Subcatagorie;
use App\Models\Childcatagorie;
use App\Models\Admins\Category;
use App\Models\Admins\Gallerie;
use App\Models\Admins\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Admins\Setting;
use App\Models\Admins\Rating;
?>


@section('content')

<!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
             @if(!empty($tags))
            <h1 class="font-weight-semi-bold text-uppercase mb-3"><?= $tags; ?></h1>
            @else
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Search</h1>
            @endif
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                @if(!empty($tags))
                <p class="m-0">{{$tags}}</p>
                @else
                <p class="m-0">Search</p>
                 @endif
            </div>
        </div>
    </div>
       
        
    @if(!empty($rproducts) && $rproducts->count())
        <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
           


            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                     @foreach ($rproducts as  $k=>$v)
                @if($v->status == 1)
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="/product/{{$v->slug}}"> <img class="img-fluid w-100" src="{{asset($v->image_one)}}" alt="{{$v->product_name}}"> </a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><a href="/product/{{$v->slug}}">{{$v->product_name}}</a></h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rs {{$v->discount_price}}</h6><h6 class="text-muted ml-2"><del>Rs {{$v->selling_price}}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/product/{{$v->slug}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a  id="{{$v->id}}"  class="btn btn-sm text-dark p-0 add-to-cart-item"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
                    @endif
                @endforeach
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

               
              
              
           

    @else
    <tr>
        <td colspan="10">There are no data.</td>
    </tr>
    @endif
               

@endsection
