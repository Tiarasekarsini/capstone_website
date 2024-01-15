@extends('template/theme')

@section('konten')
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

        <div class="container mt-5">
            <!-- <div class="section-title style-six text-center">
                                                         <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                                                          <span>{{ $post->title }}</span>
                                                         </h2>
                                                        </div> -->
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <img src="{{ env('APP_URL') . '/assets/images/iklan1.png' }}" class="mb-2" alt="blog-thumb"
                        style="width: 100%;">
                    <img src="{{ env('APP_URL') . '/assets/images/iklan2.png' }}" alt="blog-thumb" style="width: 100%;">
                </div>
                <div class="col-lg-8 col-md-8">
                    <article class="blog-post style-three wow pixFadeLeft" data-wow-delay="0.4s">
                        <div class="feature-image">
                            <a href="#">
                                <img src="{{ env('APP_URL') . '/' . $post->thumbnail }}" alt="blog-thumb"
                                    style="width: 100%;">
                            </a>
                        </div><!-- /.feature-image -->
                        <div class="blog-content">
                            <ul class="post-meta">
                                <li><a href="#">{{ date('d/m/Y, H:i', strtotime($post->created_at)) }}</a></li>
                            </ul>

                            <h3 class="entry-title">
                                <a href="#">{{ $post->title }}</a><br>
                                <a href="#"><small>{{ $post->category }}</small></a>
                            </h3>
                            <div class="mb-4">Harga : Rp {{ number_format($post->harga, 0, '.', '.') }}</div>

                            <p style="">{!! strip_tags($post->body) !!}</p>

                            <div class="mt-4">
                                <a href="https://wa.me/+6283149562516" target="_blank"
                                    class="app-btn-two btn-light wow flipInX" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">
                                    <i><img src="{{ env('APP_URL') }}/assets/images/whatsapp.png" style="width:38px"
                                            alt=""></i>
                                    <span class="btn-text">
                                        <span class="text-top">Pesan Via</span>
                                        <span>WhatsApp</span>
                                    </span>
                                </a>
                                <a href="{{ url()->previous() }}" style="margin-top: -7px;"
                                    class="btn btn-primary pt-3 pb-3">Kembali</a>
                            </div>

                        </div><!-- /.blog-content -->
                    </article><!-- /.blog-post -->
                </div><!-- /.col-lg-4 col-md-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

    </section><!-- /.testimonial -->
@endsection
