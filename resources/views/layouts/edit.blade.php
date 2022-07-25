@extends('layout.main')
@section('contenu')
<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
    <h5 class="text-center mb-3">Veuillez insérer vos données dans le formulaire ci-dessous.</h5>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('evenement.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categorie</label>
            <input type="text" class="form-control" value="{{ $finds->Categorie }}" name="Categorie" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Designation</label>
            <input type="text" class="form-control" value="{{ $finds->designation}}" name="designation" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <input type="text" class="form-control" value="{{ $finds->type }}" name="type" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="col-sm-3 control-label">Date</label>
            <input type="date" class="form-control" value="{{ $finds->date }}" name="type" id="exampleInputEmail1" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" value="{{ $finds->photo }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-success w-100">Modifier</button>
            </div> &nbsp;&nbsp;&nbsp;
        </div>
    </form>
</div>
@endsection