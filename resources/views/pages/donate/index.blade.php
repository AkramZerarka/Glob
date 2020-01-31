@extends('layouts.dashboard')
@section('content')
@if(session()->has('delete'))
<script>
    toastr.warning('Vous avez supprimé votre demande avec succès')
</script>
@endif
@if(session()->has('error'))
<script>
    toastr.error('Quelque chose ne va pas !')
</script>
@endif
<div class="content">
    <div class="row">
        <div class="col-md-6 pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 justify-content-end align-content-center align-items-center d-flex">
            <a href="{{ route('store.donor') }}" class="btn btn-outline-primary btn-round btn-sm">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive p-3">
                        <table class="table" id="myTable">
                            <thead class=" text-primary">
                                <tr>
                                    <th> Id </th>
                                    <th> Nom complet </th>
                                    <th> Date de naissance </th>
                                    <th> Lieu de naissance </th>
                                    <th> Profession </th>
                                    <th> E-Mail </th>
                                    <th> N° tel </th>
                                    <th> N° Mob </th>
                                    <th> Adresse </th>
                                    <th> Groupage </th>
                                    <th> Existance </th>
                                    <th> Photo </th>
                                    <th> Mise à Jour </th>
                                    <th> Supprimer </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donates as $donates => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->nom .' '. $value->prenom }}</td>
                                        <td>{{ $value->daten }}</td>
                                        <td>{{ $value->lieun }}</td>
                                        <td>{{ $value->profession }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ '+213 (0) '.$value->telephone }}</td>
                                        <td>{{ '+213 (0) '.$value->mobile }}</td>
                                        <td>{{ $value->adresse.' - '.$value->ville.' - '.$value->wilaya }}</td>
                                        <td>{{ $value->groupage }}</td>
                                        <td>
                                            @if ($value->existance == 1)
                                                Existant
                                            @else
                                                Non Existant
                                            @endif
                                        </td>
                                        <td>
                                            <a data-fancybox="{{ $value->id }}"
                                                href="{{ asset('img/profile/'.$value->photo) }}">
                                                <div class="card mt-3" style="max-width: 50px">
                                                    <img src="{{ asset('img/profile/'.$value->photo) }}"
                                                        width="50" class="card-img-top" alt="" srcset="">
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('update.donor', ['id'=>$value->id]) }}" class="btn btn-outline-default btn-round">Mise à jour</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-warning btn-round" data-fancybox data-src="#hidden-content{{ $value->id }}" href="javascript:;">
                                                Supprimer
                                            </a>
                                            <div style="display: none;" id="hidden-content{{ $value->id }}">
                                                <h2>Supprimer</h2>
                                                <p>Vous voulez Vraiment Supprimer Votre la catégorie !</p>
                                                <a href="{{ route('destroy.donor', ['id'=>$value->id]) }}" class="btn btn-warning">Oui</a>
                                            </div>
                                        </td>
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
<script>
$(document).ready( function () {
    var table = $('#myTable').DataTable();
} );
function myFunction(event) {
    var table = $('#myTable').DataTable();
    table.search( event ).draw();
}
</script>
@endsection
