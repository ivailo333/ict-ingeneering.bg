@extends('layouts.master') 
@section('title', $title) 
@section('content')
<!-- start pricing table -->
<section id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area wow fadeInLeft">
                    <h2 class="title">Цени<span></span></h2>
                    <p>Цените на услугите, доставени от "ИКТ Инженеринг" ЕООД са дадени по-долу:
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pricing-table-content">
                    <div class="row">
                        <!-- Start single plan -->
                        <div class="col-md-3 col-sm-6">
                            <div class="single-plan wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <div class="single-plan-head">
                                    <h5>Икономичен</h5>
                                    <p>20 лв./<span>м.</span></p>
                                </div>
                                <div class="single-plan-content">
                                    <ul>
                                        <li>5GB Пространство</li>
                                        <li>10GB Скорост</li>
                                        <li class="delete">15 Email Акаунта</li>
                                        <li class="delete">Интиграция с WordPress</li>
                                        <li class="delete">Неограничена поддръжка</li>
                                    </ul>
                                </div>
                                <div class="single-plan-bottom">
                                    <a class="btn btn-lg btn-info" href="/payment">Купи</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single plan -->
                        <!-- Start single plan -->
                        <div class="col-md-3 col-sm-6">
                            <div class="single-plan wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                                <div class="single-plan-head">
                                    <h5>Професионален</h5>
                                    <p>35 лв./<span>м.</span></p>
                                </div>
                                <div class="single-plan-content">
                                    <ul>
                                        <li>5GB Пространство</li>
                                        <li>10GB Скорост</li>
                                        <li>15 Email Акаунта</li>
                                        <li class="delete">Интиграция с WordPress</li>
                                        <li class="delete">Неограничена поддръжка</li>
                                    </ul>
                                </div>
                                <div class="single-plan-bottom">
                                    <a class="btn btn-lg btn-info" href="/payment">Купи</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single plan -->
                        <!-- Start single plan -->
                        <div class="col-md-3 col-sm-6">
                            <div class="single-plan wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="single-plan-head">
                                    <h5>Бизнес</h5>
                                    <p>50 лв./<span>м.</span></p>
                                </div>
                                <div class="single-plan-content">
                                    <ul>
                                        <li>5GB Пространство</li>
                                        <li>10GB Скорост</li>
                                        <li>15 Email Акаунта</li>
                                        <li>Интиграция с WordPress</li>
                                        <li class="delete">Неограничена поддръжка</li>
                                    </ul>
                                </div>
                                <div class="single-plan-bottom">
                                    <a class="btn btn-lg btn-info" href="/payment">Купи</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single plan -->
                        <!-- Start single plan -->
                        <div class="col-md-3 col-sm-6">
                            <div class="single-plan wow fadeInUp" data-wow-duration="1.25s" data-wow-delay="1.25s">
                                <div class="single-plan-head">
                                    <h5>Разширен</h5>
                                    <p>75 лв./<span>м.</span></p>
                                </div>
                                <div class="single-plan-content">
                                    <ul>
                                        <li>5GB Пространство</li>
                                        <li>10GB Скорост</li>
                                        <li>15 Email Акаунта</li>
                                        <li>Интиграция с WordPress</li>
                                        <li>Неограничена поддръжка</li>
                                    </ul>
                                </div>
                                <div class="single-plan-bottom">
                                    <a class="btn btn-lg btn-info" href="/payment">Купи</a>
                                </div>
                            </div>
                        </div>
                        <!-- End single plan -->
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End pricing table -->
@endsection