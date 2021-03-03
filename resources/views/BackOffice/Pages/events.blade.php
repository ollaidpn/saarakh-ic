@extends('layouts.BackOffice')

@section('content')

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Simulor</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Informations général du système</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @include('includes.messages')
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title mb-3">Basic Example</h4> --}}

                        <form action="{{route('b-events-create')}}" method="POST" enctype="multipart/form-data"> @csrf
                           <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nom de l'lévènement</label>
                                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1"  >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Catégorie</label>
                                    <input type="text" name="categorie" class="form-control" id="email"  ">
                                </div>
                           </div>
                            <div class="form-group">
                                <label for="example-textarea">Description de lévènement</label>
                                    <textarea class="form-control" name="description" rows="5" id="example-textarea"></textarea>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date de début</label>
                                    <input type="date" name="d_debut" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Heure de début</label>
                                    <input type="time" name="h_debut" class="form-control" id="email" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date de fin</label>
                                    <input type="date" name="d_fin" class="form-control" id="exampleInputEmail1"  >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Heure de fin</label>
                                    <input type="time" name="h_fin" class="form-control" id="email">
                                </div>
                           </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="adresse">Lieu</label>
                                    <input type="text" name="lieux" class="form-control" id="adresse" >
                                </div>
                                <div class="form-group custom-file col-md-6">
                                    <label for="photo">Photo de l'évènement</label>
                                    <input  type="file" name="photo">
                                </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title mb-3">Cards</h4>

                                <div class="row">


                                    <div class="col-lg-6 col-xl-6">

                                        <div class="card d-block">
                                            <img class="card-img-top img-fluid" src="{{asset('assets/FrontOffive/images/small/img-2.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link text-custom">Card link</a>
                                                <a href="#" class="card-link text-custom">Another link</a>
                                            </div>
                                        </div>

                                    </div><!-- end col -->

                                    <div class="col-lg-6 col-xl-6">

                                        <div class="card d-block">
                                            <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="card-link text-custom">Card link</a>
                                                <a href="#" class="card-link text-custom">Another link</a>
                                            </div>
                                        </div>

                                    </div><!-- end col -->




                                </div>
                                <!-- end row -->


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="card">
                    {{-- <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4>Aperçu des informations sur le système</h4>

                            <ul class="mt-3">
                                <li>
                                    Nom de l'application: <strong>{{$infosSystem->nom_evenement}} </strong>
                                </li>
                                <li>
                                    A propos de l'application: <strong>{{$infosSystem->description}} </strong>
                                </li>
                                <li>
                                    Email: <strong>{{$infosSystem->email}} </strong>
                                </li>
                                <li>
                                    Téléphone (mobile): <strong>{{$infosSystem->mobile}} </strong>
                                </li>

                                <li>
                                    Téléphone (fixe): <strong>{{$infosSystem->fixe}} </strong>
                                </li>
                                <li>
                                    Adresse: <strong>{{$infosSystem->address}} </strong>
                                </li>

                            </ul>
                        </div>





                    </div>  <!-- end card-body --> --}}
                </div>  <!-- end card -->
            </div>  <!-- end col -->

        </div>

    </div> <!-- end container-fluid -->
</div>

@endsection


<!-- end row -->
