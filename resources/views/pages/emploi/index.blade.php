@extends('pages.layouts.app')

@section('contenue')

<div class="container-fluid">

    <!-- DataTales Example -->
    
    <div class="row"> 
        <div class="col-md-7" style="margin-left: 200px;">
            <div class="card-header py-3">
                <a href="" data-toggle="modal" data-target="#exampleModal"><h6 class="btn btn-sm btn-success">Ajouter un membre</h6></a>
            </div>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Jour</th>
                        <th scope="col">heure</th>
                        <th scope="col">Matiere</th>
                        <th scope="col">Nom du prof</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">yghh</th>
                        <td>tyty</td>
                        <td>trtr</td>
                        <td>trtr</td>
                        <td>
                          <button class="btn btn-primary my-1"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-danger my-1"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr> 
                </tbody>
            </table>
            </div>
    </div>  
</div>
<form action="{{route('create_emploi')}}" method="post">
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
                <label for="jour">Jour</label>
                <select class="form-control" aria-label="Default select example" name="jour">
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                  </select>
            </div>
            
            <div class="form-group">
                <label for="time">Heure de debut</label>
                <input type="time" class="form-control" id="email" name="debut" >
            </div>

            <div class="form-group">
                <label for="time">Heure de fin</label>
                <input type="time" class="form-control" id="email" name="fin" >
            </div>
            
            <div class="form-group">
              <label for="fonction">Martière</label>
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

          <div class="form-group">
            <label for="time">Nom et Prénom du Prof</label>
            <select class="form-control" name="id_User" >
              @foreach ($users as $user)
                <option value="{{ $user->id }}" >{{ $user->nom }} {{ $user->prenom }}</option>
                @endforeach
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