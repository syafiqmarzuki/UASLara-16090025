@extends('frontend.default')
@section('content')
        <!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Squad</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Squad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-player-gridfull">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="sportsmagazine-player sportsmagazine-classic-player">
                                <ul class="row">
                                    @foreach($squad as $squad)
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="{{asset('images/'.$squad->foto)}}" alt=""></a>
                                            <figcaption>
                                                <div class="sportsmagazine-classic-player-info">
                                                    <h4><a href="#">{{$squad->nama}}</a></h4>
                                                    <span>{{$squad->posisi}}</span>
                                                    <ul class="classic-player-option">
                                                        <li><i class="fa fa-calendar-o"></i> <time datetime="2008-02-14 20:00">{{$squad->tgl_lahir}}</time></li>
                                                    </ul>
                                                    <a href="{{route('squad.detail',$squad->slug)}}" class="classic-redmore-btn">READ MORE</a>
                                                </div>
                                                <div class="sportsmagazine-classic-player-text">
                                                    <h4><a href="player-detail.html">{{$squad->nama}}</a></h4>
                                                    <span>{{$squad->posisi}}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                 <li><span class="page-numbers current">1</span></li>
                                 <li><a class="page-numbers" href="404.html">2</a></li>
                                 <li><a class="page-numbers" href="404.html">3</a></li>
                                 <li><a class="page-numbers" href="404.html">4</a></li>
                                 <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                              </ul>
                            </div>
                            <!--// Pagination \\-->
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@endsection