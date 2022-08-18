@extends('pages.layouts.app')

@section('contenue')
<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="" data-toggle="modal" data-target="#exampleModal"><h6 class="btn btn-sm btn-success">Ajouter une classe</h6></a>
  </div>
  <div class="row">
    @foreach ($classes as $classe)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="text-align: center;">
                          {{$classe->nom}}  </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;">5 Elèves</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
      </div>
    @endforeach
  </div>
  
</div>


<form action="create_class" method="post">
    @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Votre jour libre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="time">Classe</label>
                <input type="text" class="form-control" id="email" name="nom" >
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermr</button>
          <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection