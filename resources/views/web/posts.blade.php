@extends('layouts.post')

	@section('title')
	Chicotecas en lima, eventos, hacemos tu fiesta
	@endsection
 
@section('content')

				<div class="col-12 col-lg-8 col-xl-9">
                    <section class="our-blog-area bg-img section-padding-100-50"  id="publicaciones">
				        <div class="container" style="padding-bottom: 10%">
				            <div class="row">

				                <!-- Single Blog Area -->
				                @foreach($posts as $post)
				                <div class="col-12">
				                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
				                        <!-- Single blog Thumb -->
				                        <div class="single-blog-thumbPost blog">
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
                </div>



                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="confer-sidebar-area mb-100">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Post Author Widget -->
                            <div class="post-author-widget">
                                <!-- Thumbnail -->
                                <div class="post-author-avatar">
                                    <img src="{{asset('assets/img/bg-img/carlos.jpg')}}" alt="">
                                </div>
                                <!-- Author Content -->
                                <div class="post-author-content">
                                    <h5>Carlos Alonso</h5>
                                    <span>Chicotecas y Eventos</span>
                                    <p>Nosotros Organizaremos tu Fiesta</p>
                                </div>
                                <!-- Social Info -->
                                <div class="author-social-info">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Recent News</h5>
                            @foreach($posts as $post)
                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="{{ route('post', $post->slug) }}"><img src="{{ $post->file }}" alt="{{ $post->name }}"></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="{{ route('post', $post->slug) }}" class="post-title">{{ $post->name }}</a>
                                    <a href="#" class="post-date">
                                    	<i class="zmdi zmdi-time"></i> {{ $post->created_at }}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Categories</h5>

                            <!-- Catagories List -->
                            <ul class="categories-list">
                            	@foreach($categories as $category)
								<li><a href="{{ route('category', $post->category->slug) }}">{{ $category->name }}<span>(5)</span></a></li>
								@endforeach

                                
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Cloud de Etiquetas</h5>

                            <!-- Tag Cloud -->
                            <ul class="tag-cloud">
		                        @foreach($tags as $tag)
								<li><a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a></li>
								@endforeach
                            </ul>
                        </div>

                    </div>
                </div>



@endsection