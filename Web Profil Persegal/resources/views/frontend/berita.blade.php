@extends('frontend.default')
@section('content')

		<!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Berita</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-blogmodren-full">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                    @foreach($berita as $berita)
                                    <li class="col-md-4">

                                        <figure>
                                            <a href="{{route('berita.detail',$berita->slug)}}"><img src="{{asset('images/'.$berita->foto)}}" width="50" height="50"  alt=""></a>
                                            <figcaption>
                                                <a href="{{route('berita.detail',$berita->slug)}}" class="sportsmagazine-link-btn"><i class="fa fa-link"></i></a>
                                            </figcaption>
                                        </figure>
                                        <section>
                                            <h2><a href="blog-detail.html">{{$berita->judul}}</a></h2>
                                            <p>{{str_limit($berita->isi_konten, 30)}}</p>
                                        </section>
                                        <div class="sportsmagazine-blog-grid-options">
                                            <a href="blog-detail.html" class="sportsmagazine-blog-grid-thumb"><img src="{{asset('assetfront/extra-images/blog-thumb-1.jpg')}}" alt=""> Admin</a>
                                        </div>
                                        @endforeach
                                    </li>


                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            {{--<div class="sportsmagazine-pagination">--}}

                            {{--</div>--}}
                            <!--// Pagination \\-->
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		

@endsection