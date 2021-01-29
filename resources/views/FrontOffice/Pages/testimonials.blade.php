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
    @include('includes.messages')

    <!-- contacts start-->
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-12">
                        <form class="form message-form"  action="{{route('f-temoignage-create')}}" method="POST"> @csrf
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
                                    <textarea class="form__message form__field" name="temoignage" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Envoyer</button>
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
