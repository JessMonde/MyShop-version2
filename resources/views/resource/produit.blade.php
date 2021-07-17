@extends('welcome')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Ajouter des chaussures</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-list-view" class="data-list-view-header">
                <!-- DataTable starts -->
                <div class="table-responsive">
                    <table class="table data-list-view">
                        <thead>
                            <tr>
                                {{-- <th></th> --}}
                                <th>Photos</th>
                                <th>Libelles</th>
                                <th>CATEGORIES</th>
                                <th>Prix</th>
                                <th>Quantite disponible</th>
                                <th>Descriptions</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item )
                                <tr>
                                    <td>{{$item->images}}</td>
                                    <td>{{$item->libelle}}</td>
                                    <td>{{$item->Cat()->first()->libelle}}</td>
                                    <td>{{$item->prix}}</td>
                                    <td>{{$item->quantite}}</td>
                                    <td>{{$item->description}}</td>
                                    <td class="product-action">
                                        <a href="{{ route('Produits.edit', $item->id) }}" class="btn btn-primary">Editer</a>
                                        <form action="{{ route('Produits.destroy', $item->id) }}" method="post"
                                            onsubmit="return confirm('Etes vous sûr ?')" class="d-inline">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- DataTable ends -->

                <!-- add new sidebar starts -->
                <div class="add-new-data-sidebar">
                    <div class="overlay-bg"></div>
                    <div class="add-new-data">
                        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                            <div>
                                <h4 class="text-uppercase">Ajouter des chaussures</h4>
                            </div>
                            <div class="hide-data-sidebar">
                                <i class="feather icon-x"></i>
                            </div>
                        </div>
                        <div class="data-items pb-3">
                            <div class="data-fields px-2 mt-3">
                                <div class="row">
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-name">libelle</label>
                                        <input type="text" class="form-control" id="data-name">
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-category"> Categories </label>
                                        <select id="inputState1" class="form-control" title="produit" name="categorie_id" required="true">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                             
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-price">Prix</label>
                                        <input type="text" class="form-control" id="data-price">
                                    </div>
                                    <div class="col-sm-12 data-field-col">
                                        <label for="data-price">Description</label>
                                        <input type="text" class="form-control" id="data-price">
                                    </div>
                                    <div class="col-sm-12 data-field-col data-list-upload">
                                        <form action="{{route('Produits.upload',$album->id)}}" method="POST" class="dropzone dropzone-area" id="dataListUpload">
                                            <div class="dz-message">Ajouter Image</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                            <div class="cancel-data-btn">
                                <button class="btn btn-outline-danger">Annuler</button>
                            </div>
                            <div class="add-data-btn">
                                <button class="btn btn-primary">Valider</button>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!-- add new sidebar ends -->
            </section>
            <!-- Data list view end -->

        </div>
    </div>
</div>
@section('css')
<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END: Custom CSS-->
@endsection
@section('js')
 <!-- BEGIN: Vendor JS-->
 <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
 <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="../../../app-assets/js/core/app-menu.js"></script>
 <script src="../../../app-assets/js/core/app.js"></script>
 <script src="../../../app-assets/js/scripts/components.js"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="../../../app-assets/js/scripts/ui/data-list-view.js"></script>
 <!-- END: Page JS-->
@endsection
@endsection