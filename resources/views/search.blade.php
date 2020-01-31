@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="container">
        <div class="intro-text pt-5">
            @if ($donates->count() == 0)
            <div class="row pt-5">
                <div class="col-md-12 pt-5">
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="row justify-content-center d-flex p-5 bg-light shadow">
                            <div class="col-md-3 p-0">
                                <div class="form-group{{ $errors->has('groupage') ? 'has-danger' : '' }}">
                                    <select name="groupage" type="groupage" min="0" class="form-control rounded-0"
                                        id="groupage" aria-describedby="groupageHelp" required>
                                        <option selected disabled>Selectionner votre groupage</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    @if ($errors->has('groupage'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('groupage') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="form-group{{ $errors->has('wilaya') ? 'has-danger' : '' }}">
                                    <select name="wilaya" type="wilaya" min="0" class="form-control rounded-0 border-0"
                                        id="wilaya" aria-describedby="wilayaHelp" required>
                                        <option selected disabled>Selectionner votre wilaya</option>
                                        @foreach ($wilaya as $wilayas => $value)
                                        <option value="{{ $value->nom }}">{{ $value->nom }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('wilaya'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('wilaya') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <button type="submit" class="btn btn-block btn-danger rounded-0">Recherche</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="alert alert-light mt-5 pt-5 pb-5" role="alert">
                        Pas de Donneur Maintenant Veuillez nous excuser
                    </div>
                </div>
            </div>
            @else
            <div class="row pt-5">
                <div class="col-md-12 pt-5">
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="row justify-content-center d-flex p-5 bg-light shadow">
                            <div class="col-md-3 p-0">
                                <div class="form-group{{ $errors->has('groupage') ? 'has-danger' : '' }}">
                                    <select name="groupage" type="groupage" min="0" class="form-control rounded-0"
                                        id="groupage" aria-describedby="groupageHelp" required>
                                        <option selected disabled>Selectionner votre groupage</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    @if ($errors->has('groupage'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('groupage') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3 p-0">
                                <div class="form-group{{ $errors->has('wilaya') ? 'has-danger' : '' }}">
                                    <select name="wilaya" type="wilaya" min="0" class="form-control rounded-0 border-0"
                                        id="wilaya" aria-describedby="wilayaHelp" required>
                                        <option selected disabled>Selectionner votre wilaya</option>
                                        @foreach ($wilaya as $wilayas => $value)
                                        <option value="{{ $value->nom }}">{{ $value->nom }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('wilaya'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('wilaya') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2 p-0">
                                <button type="submit" class="btn btn-block btn-danger rounded-0">Recherche</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="card rounded-0 border-0 p-0">
                        <div class="card-header">
                            <h4 class="text-dark">La liste des donneurs</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th> Nom complet </th>
                                            <th> Date de naissance </th>
                                            <th> Lieu de naissance </th>
                                            <th> Profession </th>
                                            <th> E-Mail </th>
                                            <th> N° tel </th>
                                            <th> N° Mob </th>
                                            <th> Adresse </th>
                                            <th> Groupage </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donates as $donates => $value)
                                        <tr>
                                            <td>{{ $value->nom .' '. $value->prenom }}</td>
                                            <td>{{ $value->daten }}</td>
                                            <td>{{ $value->lieun }}</td>
                                            <td>{{ $value->profession }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ '+213 (0) '.$value->telephone }}</td>
                                            <td>{{ '+213 (0) '.$value->mobile }}</td>
                                            <td>{{ $value->adresse.' - '.$value->ville.' - '.$value->wilaya }}</td>
                                            <td>{{ $value->groupage }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>
</header>
@endsection
