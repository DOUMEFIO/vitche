@extends('layouts.app')

@section('contenue')
<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="" data-toggle="modal" data-target="#exampleModal"><h6 class="btn btn-sm btn-success">Ajouter un eleve</h6></a>
  </div>
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">Nom et Prenom</th>
        <th scope="col">Sexe</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Lieu</th>
        <th scope="col">Email parent</th>
        <th scope="col">Classe</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
</div>

<form action="create_eleve" method="post">
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