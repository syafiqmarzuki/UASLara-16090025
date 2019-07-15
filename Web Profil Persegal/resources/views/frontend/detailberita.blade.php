@extends('frontend.default')
@section('content')
		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb">
                <span class="thumb-transparent"></span>
                <div class="sportsmagazine-thumb-text">

                    <div class="container">
                        <div class="row">


                            <div class="col-md-12">
                                    <h2>{{$berita->judul}}</h2>
                                    <ul class="sportsmagazine-thumb-option">
                                        <li><i class="fa fa-calendar-o"></i>{{$berita->created_at}}</li>

                                    </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            <div class="sportsmagazine-rich-editor">
                                {{--<img src="{{asset('images/'.$berita->foto)}}" style="position: center" width="300px" height="200px">--}}
                                <p>
                                    {{$berita->isi_konten}}
                                </p>


                            </div>




                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                            
                            <!--// Widget Popular Post \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Popular Posts</h2></div>
                            <div class="widget widget_popular_post">
                                <ul>
                                    <li>
                                        @foreach($popular as $pop)
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="{{route('berita.detail',$berita->slug)}}"><img src="{{asset('images/'.$pop->foto)}}" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">{{$pop->nama}}</a></h5>
                                                <time datetime="">{{$pop->created_at}}</time>
                                            </div>
                                            <span></span>
                                        </div>
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                            <!--// Widget Popular Post \\-->




                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

    @endsection