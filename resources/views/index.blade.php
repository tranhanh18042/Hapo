@extends('layouts.app')
@section('content')

<body>
    <div class="banner">
        <div class="banner-content">
            <p class="content-title">Learn Anytime, Anywhere</p>
            <span class="content-where">at HapoLearn <img src="/img/logo_mini.png" alt="LogoMini">
                !</span>
            <p class="content-text">Interactive lessons, "on-the-go" <br> practice, peer support</p>
            <div class="btn-link-start">
                <a href="#" class="link-start">Start Learning Now!</a>
            </div>
        </div>
    </div>
    <section class="login-and-register">
        <!-- Modal -->
        <div class="modal fade modal-login-register" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <!-- login -->
                <div class="modal-content content-login">
                    <div class="modal-header header-login">
                        <button class="btn-login-header" href="#">LOGIN</button>
                        <button class="btn-register" href="#">REGISTER</button>
                    </div>
                    <div class="modal-body body-login">
                        <div class="mb-3 username">
                            <label for="exampleInputEmail1" class="form-label title-username">Username:</label>
                            <input type="email" class="form-control text-username" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 password">
                            <label for="exampleInputPassword1" class="form-label title-password">Password:</label>
                            <input type="password" class="form-control text-password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <div class="remember-me">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <a href="#">Forgot password</a>
                        </div>
                        <div class="btn-login">
                            <button href="#">LOGIN</button>
                        </div>
                    </div>
                    <div class="login-with">
                        <div class="line-left"></div>
                        <p>Login with</p>
                        <div class="line-right"></div>
                    </div>
                    <div class="modal-footer footer-login">
                        <button type="button" class="btn-google"><i class="fa-brands fa-google-plus-g"></i>
                            Google</button>
                        <button type="button" class="btn-facebook"><i class="fa-brands fa-facebook-f"></i>
                            Facebook</button>
                    </div>
                </div>
                <!-- end login -->
                <!-- register -->
                <div class="modal-content content-register">
                    <div class="modal-header header-register">
                        <button class="btn-login-header" href="#">LOGIN</button>
                        <button class="btn-register" href="#">REGISTER</button>
                    </div>
                    <div class="modal-body body-register">
                        <div class="mb-3 username">
                            <label for="exampleInputEmail1" class="form-label title-username">Username:</label>
                            <input type="email" class="form-control text-username" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 email">
                            <label for="exampleInputPassword1" class="form-label title-email">Email:</label>
                            <input type="email" class="form-control text-email" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 password">
                            <label for="exampleInputPassword1" class="form-label title-password">Password:</label>
                            <input type="password" class="form-control text-password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 repeat-password">
                            <label for="exampleInputPassword1" class="form-label title-repeat-password">Repeat
                                Password:</label>
                            <input type="password" class="form-control text-repeat-password" id="exampleInputPassword1">
                        </div>
                        <div class="btn-login">
                            <button href="#">REGISTER</button>
                        </div>
                    </div>
                </div>
                <!-- end register -->
            </div>
        </div>
    </section>
    <section class="courses">
        <div class="gradient-background"></div>
        <div class="container">
            @foreach($courses as $course)
            <div class="container-card">
                <img src="{{ $course->avatar }}" class="card-img-top" alt="icon html">
                <div class="card-body body-card">
                    <p class="card-title">{{$course->courses}}</p>
                    <p class="card-text text-detail">{{ $course->description}}</p>
                    <a href="#" class="btn btn-primary btn-take-this-courses">Take This Course</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="other">
        <div class="container-title">
            <p class="title-other-courses">Other courses</p>
        </div>
        <div class="container container-card-other">
            @foreach($courses as $course)
            <div class="container-card container-card-other-courses">
                <img src="{{ $course->avatar}}" class="card-img-top" alt="icon css">
                <div class="card-body body-card">
                    <p class="card-title">{{ $course->courses }}</p>
                    <p class="card-text text-detail">{{$course->description}}</p>
                    <a href="#" class="btn btn-primary btn-take-this-courses">Take This Course</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="view-all">
            <a href="#" class="btn-view-all">View All Our Courses</a>
            <img src="/img/arrow.png" class="img-arrow" alt="arrow">
        </div>
    </section>
    <section class="why-hapo-learn">
        <div class="container-why-hapo-learn">
            <img src="/img/keyboard.png" class="img-keyboard" alt="keyboard">
            <p class="title">Why HapoLearn?</p>
            <div class="pragraph">
                <span class="line-pragraph"> <img src="/img/check.png" alt="check"> Interactive lessons,
                    "on-the-go"
                    practice, peer support.</span>
                <span class="line-pragraph"> <img src="/img/check.png" alt="check"> Interactive lessons,
                    "on-the-go"
                    practice, peer support.</span>
                <span class="line-pragraph"> <img src="/img/check.png" alt="check"> Interactive lessons,
                    "on-the-go"
                    practice, peer support.</span>
                <span class="line-pragraph"> <img src="/img/check.png" alt="check"> Interactive lessons,
                    "on-the-go"
                    practice, peer support.</span>
                <span class="line-pragraph"> <img src="/img/check.png" alt="check"> Interactive lessons,
                    "on-the-go"
                    practice, peer support.</span>
            </div>
            <img src="/img/laptop_tablet.png" class="img-laptop-tablet" class="img-fluid" alt="laptop tablet">
        </div>
    </section>
    <section class="feedback">
        <div class="container-feedback">
            <div class="box-title-feedback">
                <p class="title-feedback">Feedback</p>
            </div>
            <div class="box-text-feedback">
                <p class="text-feedback">What other students turned professionals have to say about us after learning
                    with us and reaching their goals</p>
            </div>
            <div class="feedback-body">
                <div class="slick-slide">
                    @foreach($reviews as $review)
                    <div class="feedback-student">
                        <div class="box-feedback">
                            <p class="text-feedback-student">“{{$review->commet}}”</p>
                        </div>
                        <div class="profile-feedback">
                            <div class="img-avatar">
                                <img class="avatar-img" src="{{$review->User->avatar}}" alt="img_cat">
                            </div>
                            <div class="detail-profile">
                                <p class="name">{{$review->User->name}}</p>
                                <p class="langgue">{{$review->User->status}}</p>
                                <p class="star">
                                    @for($i = 0; $i < $review->vote; $i++)
                                        @if( $i < $review->vote )
                                            <i class="fas fa-star"></i>
                                            @endif
                                            @if($i >= $review->vote)
                                            <i class="fa-solid fa-star"></i>
                                            @endif
                                            @endfor
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="become">
        <div class="container-become">
            <p class="text-become">Become a member of our growing community!</p>
            <div class="btn-start">
                <a class="link-btn" href="#">Start Learning Now!</a>
            </div>
        </div>
    </section>
    <section class="static">
        <div class="container-static">
            <div class="static">
                <p class="title-static">Statistic</p>
            </div>
            <div class="list-static">
                <div class="item-static">
                    <p>Courses</p>
                    <p class="amount">{{$courseCount}}</p>
                </div>
                <div class="item-static">
                    <p>Lessons</p>
                    <p class="amount">{{$lessonCount}}</p>
                </div>
                <div class="item-static">
                    <p>Learners</p>
                    <p class="amount">{{$userLessonCount}}</p>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection