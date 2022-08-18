@extends('layouts.app')

@section('contenue')
<div class="container">
    <h1>Inserer les information</h1>
    <form action="{{route('inserMembre')}}" method="post">
        @csrf
      <fieldset>
        <legend>d'Un membre</legend>
        
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="GIRAUD">
        </div>
        
        <div class="form-group">
          <label for="text">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Pierre">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="tata@gmail">
        </div> 

        <div class="form-group">
          <label for="text">Matières</label>
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
          <label for="fonction">Rôle</label>
          <select class="form-control" aria-label="Default select example" name="fonction">
            <option value="Professeur">Professeur</option>
          </select>
      </div> 
        <button class="" type="submit">Soumettre</button>      
        
    </fieldset>
    </form>
</div>
@endsection