@extends('layouts.FrontOffice')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset('assets/FrontOffice/img/contacts.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/FrontOffice/img/contacts.jpg')}}" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span style="font-family: Quicksand;">Compassion</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                            <h1 class="promo-primary__title"><span>Contacts</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section contacts">
        <div class="container">
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/FrontOffice/img/icon_1-1.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--red">
                                <use xlink:href="#location-pin"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>Adress: Elliott Ave, Parkville VIC 3052, Melbourne Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/FrontOffice/img/icon_2-2.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--orange">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>Phone: <a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a> <a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/FrontOffice/img/icon_3-3.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--green">
                                <use xlink:href="#envelope"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>Email: <a class="icon-item__link" href="mailto:support@helpo.org">support@helpo.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img"><img class="img--layout" src="{{asset('assets/FrontOffice/img/icon_4-4.png')}}" alt="img"/>
                            <svg class="icon icon-item__icon icon--blue">
                                <use xlink:href="#share"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <!-- socials start-->
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- socials end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- contacts start-->
    @include('includes.messages')
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-12">
                        <form class="form message-form"  action="{{route('f-message-create')}}" method="POST">
                            @csrf
                            <h6 class="form__title">Contact</h6><span class="form__text">* The following info is required</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="nom" placeholder="First Name *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="profession" placeholder="Last Name *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="mobile" placeholder="Phone"/>
                                </div>
                                <div class="col-12">
                                    <textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts end-->

</main>
@endsection
