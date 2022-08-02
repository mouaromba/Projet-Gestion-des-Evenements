@extends('layout.main')
@section('contenu')
<div class="container">
    <h2 class="text-center mt-3 text-primary  p-3">Formulaire d'enregistrement</h2>
    <h5 class="text-center p-2">Enregistrement des evenements</h5>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('evenement.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Designation</label>
            <input type="text" class="form-control" name="designation" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
        <div>
                <button type="submit" class="btn btn-info w-100">Enregistrerr</button>
            </div> &nbsp;&nbsp;&nbsp;
            <div>
                <button type="submit" class="btn btn-success w-100">Envoyer</button>
            </div> &nbsp;&nbsp;&nbsp;
            <div>
                <button type="reset" class="btn btn-danger w-100">Annuler</button>
            </div>
        </div>
    </form>
</div>
@endsection