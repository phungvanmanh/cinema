<!doctype html>
<html class="no-js" lang="">
    <head>
        @include('client.share.css')
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="/assets_client/img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            @include('client.share.header')
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- movie-details-area -->
            <section class="movie-details-area" data-background="/assets_client/img/bg/movie_details_bg.jpg">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                                <img width="303px" height="430px" src="{{ $phim->avatar }}" alt="">
                                <a href="{{ $phim->trailer }}" class="popup-video"><img src="/assets_client/img/images/play_icon.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                                <h5>{{ $phim->dao_dien }}</h5>
                                <h2>{{ $phim->ten_phim }}</h2>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">{{ $phim->the_loai }}</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> {{ $phim->ngay_khoi_chieu }}</span>
                                            <span><i class="far fa-clock"></i> {{ $phim->thoi_luong }} min</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{ $phim->mo_ta }}</p>

                                <div class="mt-3">
                                    @foreach ($lich_chieu as $key => $value)
                                        <a href="/client/dat-ve/{{ $value->id }}" class="m-2 banner-btn btn wow fadeInUp">{{ $value->thoi_gian_bat_dau }}</a>
                                    @endforeach
                                </div>
                                <div class="movie-details-prime">
                                    <ul>
                                        <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                        <li class="streaming">
                                            <h6>Prime Video</h6>
                                            <span>Streaming Channels</span>
                                        </li>
                                        <li class="watch"><a href="{{ $phim->trailer }}" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-details-btn">
                            <a target="_blank" href="{{ $phim->avatar }}" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            {{-- <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="/assets_client/img/bg/episode_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Watch Full Episode</h2>
                                    </div>
                                    <div class="total-views-count">
                                        <p>2.7 million <i class="far fa-eye"></i></p>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="season">Season 2</span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="season">Season 1</span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="episode-img">
                                <img src="/assets_client/img/images/episode_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="movie-history-wrap">
                                <h3 class="title">About <span>History</span></h3>
                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                                Ipsum available, but the majority have suffered alteration in some injected humour.There are many variations of passages
                                of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                                over 200 Latin words, combined with a handful</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- episode-area-end -->

            <!-- tv-series-area -->
            <section class="tv-series-area tv-series-bg" data-background="/assets_client/img/bg/tv_series_bg02.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">Best TV Series</span>
                                <h2 class="title">World Best TV Series</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/assets_client/img/poster/ucm_poster09.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/assets_client/img/poster/ucm_poster10.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4k</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/assets_client/img/poster/ucm_poster03.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/assets_client/img/poster/ucm_poster04.jpg" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tv-series-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="/assets_client/img/bg/newsletter_bg.jpg">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end --> --}}

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        @include('client.share.footer')
        <!-- footer-area-end -->
		<!-- JS here -->
        @include('client.share.js')
    </body>
</html>
