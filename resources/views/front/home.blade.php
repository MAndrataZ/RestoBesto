@extends('layouts.front.main')

@section('container')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>RestoBesto. <span clsas="d-block">Order Your Food easier</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sed est. Excepturi enim incidunt distinctio veniam error praesentium ea velit.</p>
                    <p><a href="{{ route('link.menu')  }}" class="btn btn-secondary me-2">Order Now</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="images/herofood.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Menu Recomendation Section -->

@endsection