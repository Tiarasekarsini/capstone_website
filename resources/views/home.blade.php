@extends('template/theme')

@section('konten')
    <!--==========================-->
    <!--=         Banner         =-->
    <!--==========================-->
    <section class="banner banner-nine" data-bg-image="{{ env('APP_URL') }}/assets/images/banner.jpg"
        style="width: 100%; height: 470px;">

    </section><!-- /.banner banner-seven -->

    <!--===============================-->
    <!--=         Testimonial         =-->
    <!--===============================-->
    <section class="testimonials-marketing">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2093px" height="1290px"
            class="devaider">
            <path fill-rule="evenodd" stroke="rgb(113, 86, 251)" stroke-width="2px" stroke-linecap="butt"
                stroke-linejoin="miter" opacity="0.302" fill="none"
                d="M2090.938,29.403 C2008.273,81.128 1967.117,-147.023 1815.004,206.381 C1690.211,496.313 1614.987,697.559 1352.115,681.324 C1089.708,665.117 947.988,515.661 751.258,709.320 C554.529,902.979 669.232,1016.994 246.379,1059.277 C-176.473,1101.561 90.749,1167.786 42.428,1287.250 " />
        </svg>

        <div class="container">
            <div class="section-title style-six text-center">
                <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                    <span>Rekomendasi Menu</span>
                    Beberapa rekomendasi menu untuk kamu
                </h2>
            </div>
            <div class="row">

                @foreach ($posts as $p)
                    <div class="col-lg-4 col-md-6">
                        <article class="blog-post style-three wow pixFadeLeft" data-wow-delay="0.4s">
                            <div class="feature-image">
                                <a href="#">
                                    <img src="{{ $p->thumbnail }}" alt="blog-thumb"
                                        style="width: 100%;max-height: 300px;min-height: 280px;">
                                </a>
                            </div><!-- /.feature-image -->
                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li><a href="#">{{ date('d/m/Y, H:i', strtotime($p->created_at)) }}</a></li>
                                </ul>

                                <h3 class="entry-title">
                                    <a href="#">{{ $p->title }}</a><br>
                                    <a href="#"><small>{{ $p->category }}</small></a>
                                </h3>

                                <p class="d-none"
                                    style="max-height: 52px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">
                                    {!! strip_tags($p->body) !!}</p>

                                <div>Harga : Rp {{ number_format($p->harga, 0, '.', '.') }}</div>


                                <div class="mt-4">
                                    <a href="{{ env('APP_URL') . '/post/' . $p->id }}" class="btn btn-success">Detail</a>
                                    <a href="https://wa.me/+6283149562516" target="_blank" class="btn btn-primary">Pesan</a>
                                </div>

                            </div><!-- /.blog-content -->
                        </article><!-- /.blog-post -->

                    </div><!-- /.col-lg-4 col-md-6 -->
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->

    </section><!-- /.testimonial -->
@endsection
