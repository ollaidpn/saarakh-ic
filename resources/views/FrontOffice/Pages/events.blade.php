
@extends('layouts.FrontOffice')
@section('content')
<main class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset ('assets/FrontOffice/img/events.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="img/events.jpg" alt="img"/>
        </picture>
        <div class="promo-primary__description"> <span>À venir</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                            <h1 class="promo-primary__title"><span>Nos </span> <span>Évènenemens</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- events inner start-->
    <section class="section events-inner"><img class="events-inner__bg" src="{{asset ('assets/FrontOffice/img/events_inner-bg.png')}}" alt="img"/>
        <div class="container">
            <div class="row offset-30">
                <div class="col-xl-10 offset-xl-1">
                    <div class="upcoming-item">
                        <div class="upcoming-item__date"><span>30</span><span>Avril, 21</span></div>
                        <div class="upcoming-item__body">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-xl-4">
                                    <div class="upcoming-item__img"><img class="img--bg" src="{{asset ('assets/FrontOffice/img/event_4.jpg')}}" alt="img"/></div>
                                </div>
                                <div class="col-lg-7 col-xl-8">
                                    <div class="upcoming-item__description">
                                        <h6 class="upcoming-item__title"><a href="event-details.html">Aider les malades hospitalisés</a></h6>
                                        <p>Collecter l'argent pour venir en aide les malades hospitalisés dans les hopitaux, contribuer a leurs frais hospitalisation et aux ordonances.
                                        </p>
                                        <div class="upcoming-item__details">
                                            <p>
                                                <svg class="icon">
                                                    <use xlink:href="#clock"></use>
                                                </svg> <strong>10 Avril 21,</strong> 10h00 - <strong>12 Avril 21,</strong> 18h00
                                            </p>
                                            <p>
                                                <svg class="icon">
                                                    <use xlink:href="#placeholder"></use>
                                                </svg> <strong>Albert Royer, Dantek, CNTS</strong>  Dakar Sénégal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="" aria-hidden="true"></i><span>Précédent</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        {{-- <li class="pagination__item pagination__item--active"><span>2</span></li> --}}
                        {{-- <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li> --}}
                        <li class="pagination__item pagination__item--next"><span>Suivant</span><i class="" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <!-- pagination end-->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
