
@extends('layout.app2')
<?php
use App\Models\Catagorie;
use App\Models\Subcatagorie;
use App\Models\Childcatagorie;
use App\Models\Admins\Product;
use App\Models\Gallerie;
use Illuminate\Support\Facades\Session;
use App\Models\Admins\Setting;
use App\Models\Admins\Rating;
use App\Models\Admins\Slider;
  ?>
  @section('content')

      @include('includes/parts/home_slider')
      @include('includes/parts/home_feature')
      @include('includes/parts/home_categoy')
      @include('includes/parts/home_fproduct')
      @include('includes/parts/home_newsletter')
      @include('includes/parts/home_rproduct')



     @endsection