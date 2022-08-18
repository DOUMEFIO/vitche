@extends('pages.layouts.app')

@section('contenue')

<div class="container-fluid">

    <!-- DataTales Example -->
    
        
        <div class="row">
            <div class="col-md-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <button class="btn btn-sm btn-success" style="border: none;" data-toggle="modal" data-target="#exampleModal">Ajouter un Professeur</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTable_length">
                                    <span>Recherche</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Matière</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Matière</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td>{{$member->nom}} </br> {{$member->prenom}}</td>
                                        <td>{{$member->matiere}}</td>
                                        <td>{{$member->contact}}</td>
                                        <td>
                                            <button class="btn btn-primary my-1"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger my-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div> 
            <div class="col-md-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <span>Professeurs ayant pas un mot de passe</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Identifiant</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Identifiant</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($membres as $membre)
                                    <tr>
                                        <td>{{$membre->nom}} </br> {{$membre->prenom}}</td>
                                        <td>{{$membre->idUnique}}</td>
                                    </tr>                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
</div>


<form method="POST" action="{{route('create')}}">
    @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un Professeur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="fonction">Nom</label>
                <input type="text" class="form-control" id="email" name="nom" >
            </div>
            
            <div class="form-group">
                <label for="fonction">Prenom</label>
                <input type="text" class="form-control" id="email" name="prenom" >
            </div>

            <div class="form-group">
                <label for="fonction">email</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="fonction">Matiere</label>
                <select class="form-control" aria-label="Default select example" name="matiere">
                    <option value="Français">Français</option>
                    <option value="Anglais">Anglais</option>
                    <option value="Mathématique">Mathématique</option>
                    <option value="Histoire">Histoire</option>
                    <option value="Allemand">Allemand</option>
                    <option value="PCT">PCT</option>
                    <option value="Philosophie">Philosophie</option>
                    <option value="SVT">SVT</option>
                    <option value="Philosophie">Philosophie</option>
                  </select>
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