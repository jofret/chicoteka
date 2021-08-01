@extends('layouts.post')
@section('title')
{{ $post->name }}
@endsection
@section('facebookgraph')
<!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
      <meta property="og:url"           content="{{asset('chicotecas/'.$post->slug)}}" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="{{ $post->name }}" />
      <meta property="og:description"   content="{{ $post->excerpt }}" />
      <meta property="og:image"         content="{{ $post->file }}" />
@endsection

@section('content')
				<div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
						<!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <img src="img/bg-img/46.jpg" alt="">
                            </div>

                            <div>
								Categoria:
								<a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
							</div>
                            <!-- Post Title -->
                            <h4 class="post-title">{{ $post->name }}</h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>{{ $post->created_at }}</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i>{{ $post->status }}</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Carlos Alfonso</a>
                            </div>
                            <hr>

                            <p>{{ $post->body }}</p>

                            <!-- Blockquote -->
                            <blockquote class="confer-blockquote">
                                <h5>{{ $post->excerpt }}</h5>
                            </blockquote>

                            <div class="row">
	                            @if($post->youtube)
								<div class="row">
									<div class="col-md-6">
										<iframe width="100%" height="270" src="https://www.youtube.com/embed/{{$post->youtubeVideo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>

									<div class="col-md-6"><img src="{{ $post->file }}" alt="" width=90% height="100%"></div>
								</div>
								
								@else
								<div class="col-md-12">
									<img src="{{ $post->file }}" alt="" width=100% height="100%">
							    </div>
								@endif
                            </div>
                        </div>
                        <!-- Post Tags & Social Info -->
                        <div class="post-tags-social-area mt-30 pb-5 d-flex flex-wrap align-items-center">
                            <!-- Popular Tags -->
                            <div class="popular-tags d-flex align-items-center">
                                <p><i class="zmdi zmdi-label"></i></p>
                                <ul class="nav">
                                	@foreach($post->tags as $tag)
                                	<li><a  href="{{ route('tag', $tag->slug) }}">
										{{ $tag->name }}
										</a>
									</li>
									@endforeach
                                </ul>
                            </div>

                            <!-- Author Social Info -->
                            <div class="author-social-info">
                                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-share"></i></a>
                            </div>
                            <div>
                                <div class="fb-like" data-href="{{asset('chicotecas/'.$post->slug)}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
                                </div>
                                 <div class="fb-comments" 
                                 data-href="{{asset('chicotecas/'.$post->slug)}}" data-width="" data-numposts="5">  
                                 </div>
                             </div>
                        </div>
                     </div>
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