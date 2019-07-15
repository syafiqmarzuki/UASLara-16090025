@extends('frontend.default')
@section('content')

<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-player-thumb">
                <span class="thumb-transparent"></span>

                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="sportsmagazine-player-thumb-wrap">
                                <figure><img src="{{asset('images/'.$squad->foto)}}" alt=""></figure>
                                <div class="sportsmagazine-player-thumb-text">
                                    <h2>{{$squad->nomor_punggung}}</h2>
                                    <h3>{{$squad->nama}}</h3>
                                    <ul class="sportsmagazine-player-info">
                                        <li>
                                            <h5>Negara:</h5>
                                            <span>Indonesia</span>
                                        </li>
                                        <li>
                                            <h5>Tanggal Lahir:</h5>
                                            <span>{{$squad->tgl_lahir}}</span>
                                        </li>



                                        <li>
                                            <h5>Posisi:</h5>
                                            <span>{{$squad->posisi}}</span>
                                        </li>


                                    </ul>
                                </div>
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


                           
                            <div class="sportsmagazine-section-heading"><h2>Squad Lainnya</h2></div>
                            <div class="sportsmagazine-player sportsmagazine-player-grid">
                                <ul class="row">
                                    @foreach($popular as $pop)
                                    <li class="col-md-4">

                                        <figure><a href="{{route('squad.detail',$pop->slug)}}"><img src="{{asset('images/'.$pop->foto)}}" alt=""><i class="fa fa-link"></i></a><span></span></figure>
                                        <div class="sportsmagazine-player-grid-text">
                                            <a href="#" class="forward-btn">{{$pop->posisi}}</a>
                                            <h5><a href="#">{{$pop->nama}}</a></h5>
                                            <p>{{$pop->deksripsi}}</p>
                                            @endforeach
                                        </div>


                                    </li>

                                </ul>
                            </div>
                          

                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                            


                            <!--// Widget Popular Post \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Popular Berita</h2></div>
                            <div class="widget widget_popular_post">
                                <ul>
                                    @foreach($popularberita as $popberita)
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="{{route('berita.detail',$popberita->slug)}}"><img src="{{asset('images/'.$popberita->foto)}}" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="#">{{$popberita->judul}}</a></h5>
                                                <time datetime="2008-02-14 20:00">{{$popberita->created_at}}</time>
                                            </div>
                                            <span></span>
                                            @endforeach
                                        </div>
                                    </li>



                                </ul>
                            </div>
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Flicker Images \\-->
                            
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
@endsection