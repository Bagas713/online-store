@extends('layouts.app')
@section('title', $viewData["title"])
{{--  @section('subtitle', $viewData["subtitle"])  --}}
@section('content')
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner img-fluid rounded">
        <div class="carousel-item active">
            <img src="{{ asset('img/banner-laptop1.png') }}"  width="100%" height="100%" alt="">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('img/banner-laptop2.png') }}"  width="100%" height="100%" alt="">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('img/banner-laptop3.png') }}"  width="100%" height="100%" alt="">
    </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>

{{--  <div class="album py-5">
    <div class="container">  --}}
        {{--  <div class="row">
            @foreach ($viewData["products"] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
                        class="btn bg-info text-black">{{ $product->getName() }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>  --}}
        {{--  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="row">
                @foreach ($viewData["products"] as $product)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
                            class="btn bg-info text-black">{{ $product->getName() }}</a>
                        </div>
                    </div>
                </div
                <div class="card shadow-sm">
                    <img src="{{ asset('img/Lenovo-Yoga-Slim-7i-Pro-Slate-Gr.png') }}" class="card-img-top img-card" alt="">
                    <div class="card-body">
                    <p class="card-text">Lenovo Yoga Slim 7i Pro</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>  --}}
        {{--  <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('img/dell-xps-15-9-100539027-large.png') }}" class="card-img-top img-card" alt="">

                <div class="card-body">
                <p class="card-text">Dell XPS 15.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('img/samsung-galaxy-book-pro.png') }}"class="card-img-top img-card" alt="">

                <div class="card-body">
                <p class="card-text">Samsung Galaxy Book Pro</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    </div>
                </div>
                </div>
            </div>
        </div>  --}}
    {{--  </div>
    </div>
</div>  --}}

<br>

<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
                class="btn bg-info text-black">{{ $product->getName() }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
