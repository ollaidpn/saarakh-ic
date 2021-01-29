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
                    <h4 class="page-title">Causes</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @include('includes.messages')
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title mb-3">Basic Example</h4> --}}

                        <form action="{{route('b-causes-create')}}" method="POST"> @csrf
                           <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nom de la cause</label>
                                    <input type="app-name" name="nom_cause" class="form-control" id="exampleInputEmail1"  value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mobile">Catégorie</label>
                                    <input name="categorie" type="text" class="form-control" id="mobile"  value="">
                                </div>
                           </div>

                            <div class="form-group">
                                <label for="example-textarea">A propos de l'application</label>
                                <textarea class="form-control" name="description" rows="5" id="example-textarea"></textarea>

                            </div>






                                <div class="form-group">
                                    <label for="fixe">Montant de collecte (Objectif)</label>
                                    <input name="objectif_collecte" type="number" class="form-control" id="fixe"  value="">
                                </div>



                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col -->

            <div class="col-lg-9">
                <div class="card">




                                    <div class="card-body">
                                        <h4 class="header-title">Aperçu des informations sur le système</h4>
                                        {{-- <h4>Aperçu des informations sur le système</h4>
                                        <p class="sub-header">
                                            Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                        </p> --}}

                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom de la cause</th>
                                                    <th>Catégorie</th>
                                                    <th>Description</th>
                                                    <th>Objectif</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($causes as $cause)
                                                    <tr>
                                                        <th scope="row">{{$cause->id}}</th>
                                                        <td>{{$cause->nom_cause}}</td>
                                                        <td>{{$cause->description}}</td>
                                                        <td>{{$cause->categorie}}</td>
                                                        <td>{{$cause->objectif_collecte}}</td>
                                                        <td>---</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>

                            </div> <!-- end col -->
                        </div>






            </div>  <!-- end col -->

        </div>

    </div> <!-- end container-fluid -->
</div>

@endsection


<!-- end row -->
