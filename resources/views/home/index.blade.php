@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="slider">
                        <div class="slider__body">
                            <div class="slider__previews">
                                <div class="slider__preview">
                                    <figure class="preview__img preview__img_1" style="background: url('https://cdn.karar.com/news/1408327.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;"></figure>
                                    <div class="bg-overlay"></div>
                                    <div class="preview__description description">
                                        <p class="description__p">Gram Altın Rekor Kırdı
                                        </p>
                                    </div>
                                </div>
                                <div class="slider__preview">
                                    <figure class="preview__img preview__img_2" style="background: url('https://cdn.karar.com/news/1408419.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;"></figure>
                                    <div class="preview__description description">
                                        <p class="description__p">Starbucks(Спб)</p>
                                    </div>
                                </div>
                                <div class="slider__preview">
                                    <figure class="preview__img preview__img_3"style="background: url('https://cdn.karar.com/news/1408413.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;"></figure>
                                    <div class="preview__description description">
                                        <p class="description__p">Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </div>
                                <div class="slider__preview">
                                    <figure class="preview__img preview__img_4"style="background: url('https://cdn.karar.com/news/1408405.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;"></figure>
                                    <div class="preview__description description">
                                        <p class="description__p">Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="slider__preview">
                                    <figure class="preview__img preview__img_5" style="background: url('https://cdn.karar.com/news/1408401.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;"></figure>
                                    <div class="preview__description description">
                                        <p class="description__p"> Quisque vel mollis turpis. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="slider__posts">
                                <div class="slider__post description">
                                    <h3 class="post__title description__title">1</h3>
                                </div>
                                <div class="slider__post description">
                                    <h3 class="post__title description__title">2</h3>
                                </div>
                                <div class="slider__post description">
                                    <h3 class="post__title description__title">3</h3>
                                </div>
                                <div class="slider__post description">
                                    <h3 class="post__title description__title">4</h3>
                                </div>
                                <div class="slider__post description">
                                    <h3 class="post__title description__title">5</h3>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="slider__btn_prev"></a>
                        <a href="javascript:void(0);" class="slider__btn_next"></a>
                        <nav class="slider__controls"></nav>
                    </div>
                    <div class="slider__popup"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" alt=""></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" alt=""></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" alt=""></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" alt=""></div>
                <div class="swiper-slide"><img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <section class="p-t-40 p-b-40">
        <div class="container">
            <div class="grid-articles">
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408399.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">NEWS</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel
                                        dolor</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408394.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Venenatis eu, sodales vel dolor</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408405.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">A true story, that never been told!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408339.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Fusce id mi diam, non ornare orci</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408310.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- end: NEWS GRID -->
    <!-- CAROUSEL -->
    <section class="pt-2 pb-2">
        <div class="container">
            <div class="grid-articles carousel post-carousel m-b-20">
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/author/83_s.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta px-1">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-light">Ahmet Taşgetiren</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#" style="font-size:14px">Tek Belirleyicilik Ve Model</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/author/2_s.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-light">Mehmet Ocaktan</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#" style="font-size:14px">Fukaranın Hakkını Koruma Vaziyeti</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/author/3_s.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-light">Yusuf Ziya Cömert</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#" style="font-size:14px">Neden Duramıyorlar?</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/author/86_s.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-light">Taha Akyol</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#" style="font-size:14px">U Dönüşleri</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1407928.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1407983.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408001.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-light text-right">
                <a class="read-more" href="blog-post.html">
                    All stories in Highlights <i class="fa fa-long-arrow-alt-right"></i></a></div>
        </div>
    </section>
    <!-- end: CAROUSEL -->
    <!-- HIGHTLIGHTS -->
    <section class="p-t-0 p-b-40">
        <div class="container">
            <div class="heading-text heading-line">
                <h4>HIGHTLIGHTS</h4>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408388.jpg">
                            <div class="post-thumbnail-content">
                                <h3><a href="#">A true story, that never been told!</a></h3>
                                <p>Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi
                                    sapien ut justo. The most happiest time of the day!. Morbi sagittis, sem quis
                                    lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. </p>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408339.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">A true story, that never been told!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408338.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Beautiful nature, and rare feathers!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408310.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">The most happiest time of the day!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1407823.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Consectetur ipsum dolor sit amet</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>

                            </div>
                            <div class="marketing-box">ADVERTISEMENT</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408340.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">A true story, that never been told!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408302.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Beautiful nature, and rare feathers!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408335.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">The most happiest time of the day!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="https://cdn.karar.com/news/1408390.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">New costs and rise of the economy!</a>
                                        <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                            </div>
                            <div class="marketing-box">ADVERTISEMENT</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end: HIGHTLIGHTS -->

    <section class="no-padding">
        <div class="container">
            <div class="grid-articles carousel arrows-visibile" data-items="3" data-margin="0" data-dots="false">
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408367.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">NEWS</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel
                                        dolor</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408403.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Beautiful nature, and rare feathers!</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 10m ago</span>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408402.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">A true story, that never been told!</a></h2>
                                <span class="post-date"><i class="far fa-clock"></i> 14m ago</span>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408246.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Fusce id mi diam, non ornare orci</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 18m ago</span>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408266.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 30m ago</span>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408404.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 1h ago</span>
                        </div>
                    </div>
                </article>
                <article class="post-entry">
                    <a href="#" class="post-image"><img alt="" src="https://cdn.karar.com/news/1408406.jpg"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge badge-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                            <span class="post-date"><i class="far fa-clock"></i> 2h ago</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- end: CAROUSEL -->


    <!-- BOXES -->
    <section class="p-t-60 p-b-40">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>FOOD</h4>
                    </div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408248.jpg">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                <h3><a href="#">Morbi ac neque at mi</a></h3>
                                <p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>TECHNOLOGY</h4>
                    </div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408225.jpg">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                <h3><a href="#">Fringilla consectetur amet</a></h3>
                                <p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>AUTO</h4>
                    </div>
                    <div class="post-thumbnail">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408292.jpg">
                            <div class="post-thumbnail-content">
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                <h3><a href="#">Dolor sit amet ipsum</a></h3>
                                <p>The most happiest time of the day!. Morbi ac neque at mi elementum gravida.</p>

                            </div>
                        </div>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>

                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: BOXES -->

    <!-- ADVERTISEMENT -->
    <section class="p-t-20 p-b-40">
        <div class="container">
            <div class="marketing-box">ADVERTISEMENT</div>
        </div>
    </section>
    <!-- end: ADVERTISEMENT -->

    <!-- CATEGORIES -->
    <section class="p-t-0 p-b-40">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>TECH</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408294.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408280.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408306.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408194.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>SPORT</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408279.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408280.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1363965.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408354.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">New costs and rise of the economy!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>FASHION</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408371.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408328.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408194.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408279.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: CATEGORIES -->

    <!-- ADVERTISEMENT -->
    <section class="p-t-0 p-b-40">
        <div class="container">
            <div class="marketing-box">ADVERTISEMENT</div>
        </div>
    </section>
    <!-- end: ADVERTISEMENT -->

    <!-- CATEGORIES -->
    <section class="p-t-0 p-b-40">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>ENTERTAINMENT</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1407738.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1407824.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408289.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408294.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>NATURE</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1407269.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1407738.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408376.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408377.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">New costs and rise of the economy!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="heading-text heading-line">
                        <h4>POLITICS</h4>
                    </div>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408367.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408246.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408358.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">The most happiest time of the day!</a>
                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="https://cdn.karar.com/news/1408285.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Consectetur ipsum dolor sit amet</a>
                                <span class="post-date"><i class="far fa-clock"></i> 8h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: CATEGORIES -->

    <!-- CALL TO ACTION -->
    <div class="call-to-action call-to-action-colored background-colored m-b-0">
        <div class="container">
            <div class="col-lg-10">
                <h3>Ready to purchase POLO Template?</h3>
                <p>This is a simple hero unit, a simple call-to-action-style component for calling extra attention to
                    featured content.</p>
            </div>
            <div class="col-lg-2"><a
                    href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923"
                    class="btn btn-light btn-outline">Purchase</a></div>
        </div>
    </div>
    <!-- END: CALL TO ACTION -->
    <script>
        $(document).ready(function () {
            var currentIndex;
            var slideCount;
            var timerId;
            var prev = function () {
                slideSelect(currentIndex - 1);
            };
            var next = function () {
                slideSelect(currentIndex + 1);
            };
            function tick() {
                timerId = setTimeout(
                    function () {
                        next();
                        tick();
                    },
                    10000
                );
            }
            function resetTick() {
                clearTimeout(timerId);
                tick();
            }

            function addFakeSlides() {
                var firstPreview = $('.slider__preview:first-child');

                var lastPreview = $('.slider__preview:last-child');

                $('.slider__previews').append(firstPreview[0].outerHTML).prepend(lastPreview[0].outerHTML);

                var firstPost = $('.slider__post:first-child');

                var lastPost = $('.slider__post:last-child');

                $('.slider__posts').append(firstPost[0].outerHTML).prepend(lastPost[0].outerHTML);

            }

            function addControls() {
                var length = $('.slider .slider__preview').length - 2;

                var str = '';
                for (i = 0; i < length; i++) {
                    str = str + '<a href="javascript:void(0);" class="slider__control"></a>';
                }
                $('.slider__controls').html(str);

                slideCount = length;

            }

            function slideSelect(index) {
                if (index === slideCount) {
                    index = 0;
                } else if (index === -1) {
                    index = slideCount - 1;
                }
                currentIndex = index;


                var controls = $('.slider__control');
                controls.removeClass('slider__control_active').eq(index).addClass('slider__control_active');

                index++;
                var posts = $('.slider__post');

                posts.removeClass('slider__post_active').eq(index).addClass('slider__post_active');

                var previews = $('.slider__preview');

                previews.removeClass('slider__preview_active').eq(index).addClass('slider__preview_active');

                checkSlidePosition(index);
            }

            function checkSlidePosition(index) {
                var width = $('.slider__preview').outerWidth();

                if ($(window).width() < 1024) {
                    $('.slider .slider__preview, .slider .slider__post').css('transform', 'translateX(' + (-(width * index) + 45) + 'px)');
                }
                else {
                    $('.slider__preview, .slider__post').css('transform', '');
                }
            }

            addFakeSlides();

            addControls();

            slideSelect(0);

            tick();

            $(window).resize(function () {
                checkSlidePosition(currentIndex + 1);
            });

            $('.slider__post').on('mouseover', function () {
                var index = $('.slider__post').index(this) - 1;
                slideSelect(index);
                if ($(window).width() < 1024) {
                    $('body').addClass('popup-opened');
                    $('.slider__popup').html($('.slider__preview_active')[0].outerHTML)
                        .find('.slider__preview').css('transform', '').prepend('<button class="btn popup__btn_close" type="button"></button>');
                    clearTimeout(timerId);
                }
            });




            $('.slider__control').on('mouseover', function () {
                resetTick();
                var index = $('.slider__control').index(this);
                slideSelect(index);
            });

            $('.slider__btn_prev').on('mouseover', function () {
                resetTick();
                prev();
            });
            $('.slider__btn_next').on('mouseover', function () {
                resetTick();
                next();
            });

        });
    </script>
@endsection
