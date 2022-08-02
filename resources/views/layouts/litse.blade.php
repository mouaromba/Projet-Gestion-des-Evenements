@extends('layout.main')
@section('contenu')


    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste des evenements</h2>
    <div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('evenement.create')}}"> 

        </a>
         </div>  
      
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Categorie</th>
                <th scope="col">Designation</th>
                <th scope="col">Date</th>
                <th scope="col">Photo</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $evenement)
            <tr>
                <th scope="row">{{$evenement->id}}</td>
                <td>{{$evenement->categorie}}</td>
                <td>{{$evenement->designation}}</td>
                <td>{{$evenement->date}}</td>
                <td>{{$evenement->photo}}</td>
                <td><img src="{{asset('storage').'/'.$evenement->photo}}" style="width:30px;height:30px" alt=""></td>
                <td> <a class="button" href="{{route('evenement.show', [$evenement->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('evenement.edit', [$evenement->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_evenement/'.$evenement->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection