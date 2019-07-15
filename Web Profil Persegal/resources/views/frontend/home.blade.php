@extends('frontend.default')
@section('content')

		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="{{asset('assetfront/extra-images/banner-1.jpg')}}" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1> Selamat Datang di <strong class="sportsmagazine-color">Persegal Official</strong> </h1>
                                        <p>Website semua tentang informasi persegal.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sportsmagazine-banner-one-layer">
                    <img src="{{asset('assetfront/extra-images/banner-2.jpg')}}" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1> Selamat Datang di <strong class="sportsmagazine-color">Persegal Official</strong> </h1>
                                        <p>Website semua tentang informasi persegal.</p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->
            
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
						
                        <!--// Fixture Slider \\-->

                        <!--// Fixture Slider \\-->

                        <!--// Content \\-->
                        <div class="col-md-8">


                            <!--// Fancy Title \\--> <div class="sportsmagazine-fancy-title"><h2>Berita Terbaru</h2></div> <!--// Fancy Title \\-->
                            <!--// Blog's \\-->
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    @foreach($berita as $berita)
                                    <li class="col-md-6">
                                        <figure>
                                            <a href="blog-detail.html"><img src="{{asset('images/'.$berita->foto)}}" alt=""></a>
                                            <figcaption>
                                                <a href="{{route('berita.detail',$berita->slug)}}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="{{route('berita.detail',$berita->slug)}}">{{$berita->judul}}</a></h2>
                                            <p>{{str_limit($berita->isi_konten, 30)}}</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="#" alt=""> Admin</a>
                                            <ul>

                                            </ul>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--// Blog's \\-->




                        </div>
                        <!--// Content \\-->

                        <!--// SideBaar \\-->
                        <aside class="col-md-4">

                            <!--// Widget Next Match \\-->
                            <!--// Widget Next Match \\-->

                            


                            <!--// Widget Popular News \\-->
                            <div class="widget widget_popular_news">
                                <div class="sportsmagazine-fancy-title"><h2>Popular News</h2></div>
                                <ul>
                                    <?php $no = 1; ?>
                                    @foreach($beritas as $beritas)
                                    <li>
                                        <span>{{$no}}</span>
                                        <div class="popular_news_text">
                                            <a href="blog-detail.html">{{$beritas->judul}}</a>
                                            <time datetime="2008-02-14 20:00">{{$beritas->created_at}}</time>
                                        </div>
                                    </li>
                                    <?php $no++ ;?>
                                        @endforeach


                                </ul>
                            </div>
                            <!--// Widget Popular News \\-->

                            <!--// Widget Trending News \\-->

                            <!--// Widget Trending News \\-->

                            <!--// Widget Newsletter \\-->

                            <!--// Widget Newsletter \\-->



                        </aside>
                        <!--// SideBaar \\-->

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		
		<!--// Footer \\-->

  @endsection