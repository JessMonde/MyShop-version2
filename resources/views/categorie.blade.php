@extends('welcome')
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ajouter un Categorie de produit</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" action="{{route('Categories.store')}}">
                                            <div class="form-body">
                                                <div class="row">
                                              <div class="col-md-12 col-12">
                                                  <div class="form-label-group">
                                                      <input type="text" id="" class="form-control" placeholder="Categories" name="">
                                                      <label for="">Categories</label>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <button type="reset" class="btn btn-outline-danger mr-1 mb-1">Annuler</button>
                                                  <button type="submit" class="btn btn-primary mr-1 mb-1">Valider</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- // Basic Floating Label Form section end -->
      </div>
  </div>
</div>
@endsection