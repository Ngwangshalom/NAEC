@extends('layouts.front')

@section('title', $homesetting->meta_title)
@section('meta', $homesetting->meta_description)

@section('content')
<style>
    .slideshow {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 93vh;
    }

    .carousel-item {
        width: 100%;
        height: 100%;
        position: relative;
        transition: transform 0.6s ease;
    }

    .carousel-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .carousel-caption {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        padding: 20px;
        text-align: center;
        width: 50%;
        transition: transform 0.3s ease;
    }

    .carousel-caption h5,
    .carousel-caption p {
        margin: 0;
    }

    @media (max-width: 768px) {
    *{
        overflow-x: hidden;
    }
        .slideshow {
            height: 40vh;
        }

        .carousel-caption {
            top: 70%;
            max-width: 90%;
        }

        .btn-group {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<section class="slideshow" id="slideshow">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost:8000/public/images/media/1719435557IMG-20200717-WA0130.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                    <h5>Film Making Excellence</h5>
                    <p>Embark on a journey of cinematic storytelling with our expert film production services. From conceptualization to execution, we bring narratives to life with unmatched creativity and technical prowess.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-style1">Learn More</a>
                        <a href="#" class="btn btn-style1">Explore</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost:8000/public/images/media/1719437769theater.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption">
                    <h5>Theater</h5>
                    <p>Experience the art of photography like never before. Our creative photoshoots capture not just moments, but emotions and stories, turning fleeting instances into timeless memories.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-style1">Learn More</a>
                        <a href="#" class="btn btn-style1">Explore</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost:8000/public/images/media/1719439328DSC_7625.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption">
                    <h5>Community Engagement</h5>
                    <p>Transform your digital visions into tangible reality with our expert printing services. Whether it's posters, banners, or high-quality prints, we deliver precision and excellence in every detail.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-style1">Learn More</a>
                        <a href="#" class="btn btn-style1">Explore</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost:8000/public/images/media/1719435597biyeh.jpg" class="d-block w-100" alt="Slide 4">
                <div class="carousel-caption">
                    <h5>Youth Empowerment</h5>
                    <p>Dive into compelling stories and transformative narratives through our captivating documentaries. We uncover truths, provoke thoughts, and inspire action with each frame and storyline.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-style1">Learn More</a>
                        <a href="#" class="btn btn-style1">Explore</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



    <div class="about-section">
        <div class="container">
            <div class="row">

                <div class="col-md-7">

                    <div class="pictures-row">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item-about">
                                    <div class="imgone big-paral">
                                        <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{$homesetting->about_image1}}" alt="two-images-1.jpg"></div>
                                    </div>
                                    <div class="exp-about">
                                        <h5 class="nmb-font-about">{{$homesetting->about_yearstitle}}</h5>
                                        <h6 class="service_summary-about">{{$homesetting->about_yearstext}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item-about">
                                    <div class="imgtwo big-paral">
                                        <div class="simpleParallax"><img src="/public/img/loading-blog.gif" width="500" height="820" class="lazy thumparallax img-fluid" data-src="{{$homesetting->about_image2}}" alt="two-images-1.jpg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-5">

                    <h4 class="about-heading1-home">{!!$homesetting->about_subtitle!!}</h4>
                    <h3 class="about-heading2-home">{!!$homesetting->about_title!!}</h3>

                    {!!$homesetting->about_description!!}

                    <a href="{{$homesetting->about_buttonlink}}" target="_self" class="btn btn-style1"><span>{{$homesetting->about_buttontext}}</span></a>

                </div>


            </div>
        </div>
    </div>


    <div class="services-section">
        <div class="container">

            <h3>{!!$homesetting->services_title!!}</h3>

            <div class="description-services">{!!$homesetting->sevices_text!!}</div>

            <div class="service-boxes-slider owl-carousel">

                @foreach( $services as $service )

                <div class="card-parent">
                    <div class="card featured to-top-left">

                        <div class="heading-wrapper">
                            <h4 class="heading">{!!$service->icon!!} {{$service->title}}</h4>
                        </div>

                        <div class="paragraph-wrapper">
                            <p class="paragraph">{{$service->description}}</p>
                        </div>

                        <div class="image-wrapper to-bottom">
                            <div class="gallery">
                                <img width="400" height="400" class="lazy img-fluid" src="/public/img/loading-blog.gif" data-src="{{$service->photo ? '/public/images/media/' . $service->photo->file : '/public/img/200x200.png'}}" alt="{{$service->title}}">
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>

     <div class="portfolio-section">
        <div class="container">
            <h4>{{$homesetting->projects_subtitle}}</h4>
            <h3>{!!$homesetting->projects_title!!}</h3>



            <div class="row">

                @foreach($projects as $key=>$project)

                    <div class="col-md-6">
                        <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}">
                            <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"  data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="30"  class="project-box-div">

                                <div class="project-image-container">
                                    <div class="project-image-container-inner">
                                        <img class="project-image lazy" width="410" height="230" src="/public/img/loading-blog.gif " data-src="{{$project->photo ? '/public/images/media/' . $project->photo->file : '/public/img/200x200.png'}}" alt="{{$project->title}}">
                                    </div>
                                </div>
                                <div class="project-meta">
                                    <div class="project-meta-title">
                                        <span class="project__text">{{$project->title}}</span>
                                    </div>

                                    <div class="divider"></div>
                                    <div class="project-category">
                                        <span class="block_text">{{$project->project_category->name}} </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @if ($key == 3)
                        @break
                    @endif


                @endforeach


            </div>
        </div>
    </div>

     <div class="fun-facts-section" id="fun-facts">
        <div class="container">

            <h3 class="fun-facts-heading1">{{$homesetting->fun_title}}</h3>

            <p>{{$homesetting->fun_description}}</p>

            <div class="row fun-facts-timer">
                <div class="col-md-3">
                    <div class="radial">
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number1}}" data-speed="4000">{{$homesetting->count_number1}}</span>
                        <h4>{{$homesetting->count_description1}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number2}}" data-speed="4000">{{$homesetting->count_number2}}</span>
                        <h4>{{$homesetting->count_description2}}</h4>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number3}}" data-speed="4000">{{$homesetting->count_number3}}</span>
                        <h4>{{$homesetting->count_description3}}</h4>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <span class="timer" data-from="0" data-to="{{$homesetting->count_number4}}" data-speed="4000">{{$homesetting->count_number4}}</span>
                        <h4>{{$homesetting->count_description4}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="radial">
                        <span class="timer" data-from="0" data-to="500000" data-speed="5000">500,000</span>
                        <h4>People Reached Online</h4>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="testimonial-section">

        <div class="testimonial-section-slider owl-carousel">

            @foreach($testimonials as $testimonial)
            <blockquote class="testimonial-slide">
                <div class="section_title">{{$testimonial->subtitle}}</div>
                <span class="testimonial_slider_title">{{$testimonial->title}}</span>
                    <div class="testimonial-area">
                        <div class="testimonial-layoutArea">
                           <p>{{$testimonial->description}}</p>
                        </div>
                    </div>
                <div class="testimonials_slider_name"> {{$testimonial->name}}<span> - {{$testimonial->position}}</span></div>
            </blockquote>
            @endforeach

        </div>

    </div>

    <div class="blog-section">

        <div class="container">

            <h3 class="blog-section-subtitle">{!!$homesetting->blog_subtitle!!}</h3>
            <h3 class="blog-section-title">{!!$homesetting->blog_title!!}</h3>

            <div class="row">

                @foreach($posts as $post)
                <div class="col-md-4">
                    <article class="blog-single-post">
                        <div class="blog_custom">

                            <div class="post-thumbnail">
                                <a class="relative" href="{{URL::to('/')}}/post/{{$post->slug}}">
                                    <div class="featured_image_blog">
                                        <img class="lazy blog_post_image img-fluid" width="350" height="300" src="https://cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}" alt="{{$post->title}}">
                                        <div class="flex-icon">
                                            <div class="flex-icon-inside">
                                                <i class="fas fa-link"></i>
                                            </div>
                                      </div>
                                    </div>
                                </a>
                                <div class="post-categories">
                                   <p>{{$post->category->name}}</p>
                                </div>
                            </div>

                            <div class="post-details">
                                <h3 class="post-name">
                                    <a href="{{URL::to('/')}}/post/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a>
                                </h3>
                                <div class="post-category-comment-date">
                                   <span class="post-date"><i class="far fa-clock"></i> {{ date('d.M.Y', strtotime($post->created_at)) }}</span>
                                   <span class="post-author">
                                   <i class="far fa-user" ></i>
                                   <a href="#0">{{$post->user->name}}</a>
                                   </span>
                                </div>


                            </div>
                        </div>
                    </article>
                </div>
                @endforeach


            </div>

        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
          const slides = document.querySelectorAll(".slide");
          const next = document.querySelector(".next");
          const prev = document.querySelector(".prev");
          let index = 0;

          function changeSlide(newIndex) {
            slides[index].classList.remove("is-active");
            index = (newIndex + slides.length) % slides.length;
            slides[index].classList.add("is-active");
          }

          next.addEventListener("click", function() {
            changeSlide(index + 1);
          });

          prev.addEventListener("click", function() {
            changeSlide(index - 1);
          });

          setInterval(() => {
            changeSlide(index + 1);
          }, 5000);
        });
        </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slideshowHeight = document.getElementById('slideshow').clientHeight;
        const carouselImages = document.querySelectorAll('.carousel-item img');

        carouselImages.forEach(img => {
            img.style.height = slideshowHeight + 'px';
        });
    });
</script>

@endsection


