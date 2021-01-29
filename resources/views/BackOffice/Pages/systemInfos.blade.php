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

                        <form action="{{route('b-system-infos-create')}}" method="POST"> @csrf
                           <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nom de l'application</label>
                                    <input type="app-name" name="app_name" class="form-control" id="exampleInputEmail1"  value=" {{$infosSystem->app_name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"  value="{{$infosSystem->email}}">
                                </div>
                           </div>
                            <div class="form-group">
                                <label for="example-textarea">A propos de l'application</label>
                                    <textarea class="form-control" name="description" rows="5" id="example-textarea">{{$infosSystem->description}}</textarea>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="mobile">Téléphone (mobile)</label>
                                    <input name="mobile" type="number" class="form-control" id="mobile"  value="{{$infosSystem->mobile}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="fixe">Téléphone (fixe)</label>
                                    <input name="fixe" type="number" class="form-control" id="fixe"  value="{{$infosSystem->fixe}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" name="address" class="form-control" id="adresse"  value="{{$infosSystem->address}}">
                            </div>


                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4>Aperçu des informations sur le système</h4>

                            <ul class="mt-3">
                                <li>
                                    Nom de l'application: <strong>{{$infosSystem->app_name}} </strong>
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





                    </div>  <!-- end card-body -->
                </div>  <!-- end card -->
            </div>  <!-- end col -->

        </div>

    </div> <!-- end container-fluid -->
</div>

@endsection


<!-- end row -->
