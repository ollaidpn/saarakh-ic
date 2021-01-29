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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                            <li class="breadcrumb-item active">Ribbons</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ribbons</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body ribbon-box">
                        <div class="ribbon ribbon-dark float-left">Dark Ribbon</div>
                        <div class="ribbon-content">
                            <p class="mb-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, commodo dapibus odio.</p>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body ribbon-box">
                        <div class="ribbon ribbon-primary float-left">Primary Ribbon</div>
                        <div class="ribbon-content">
                            <p class="mb-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac.</p>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body ribbon-box">
                        <div class="ribbon ribbon-success float-left">Success Ribbon</div>
                        <div class="ribbon-content">
                            <p class="mb-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris.</p>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->
    </div>
</div>

@endsection

