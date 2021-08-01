@extends('layouts.chicoteca')
@section('content')

	<!-- Our Blog Area Start -->
    <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{asset('assets/img/bg-img/17.jpg') }});" id="publicaciones">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <a href="{{ route('chicotecas') }}">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Ir a Nuestro Blog</p>
                        <h4>Últimas Publicaciones</h4>
                    </div>
                    </a>
                </div>

                <!-- Single Blog Area -->
                @foreach($posts as $post)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ $post->file }}" alt="{{ $post->name }}">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="{{ route('post', $post->slug) }}">{{ $post->name }}</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> {{ $post->created_at }}</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Publicado</a>
                            </div>
                            <p>{{ $post->excerpt }}</p>
                        </div>
                        <div class="blog-btn">
                            <a href="{{ route('post', $post->slug) }}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->
@endsection
