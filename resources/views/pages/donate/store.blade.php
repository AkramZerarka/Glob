@extends('layouts.dashboard')
@section('content')
@if(session()->has('message'))
<script>
    toastr.success('Vous avez ajouté votre demande avec succès')
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
                    <li class="breadcrumb-item text-danger"><a href="{{ route('donor') }}">Index</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter un nouveau article</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('store.donor') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('nom') ? 'has-danger' : '' }}">
                                <label for="nom">Nom</label>
                                <input name="nom" type="text" class="form-control" id="nom" aria-describedby="nomHelp">
                                @if ($errors->has('nom'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('prenom') ? 'has-danger' : '' }}">
                                <label for="prenom">Prénom</label>
                                <input name="prenom" type="text" class="form-control" id="prenom" aria-describedby="prenomHelp">
                                @if ($errors->has('prenom'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('daten') ? 'has-danger' : '' }}">
                                <label for="daten">Date de naissance</label>
                                <input name="daten" type="text" class="form-control " id="daten" aria-describedby="datenHelp" data-toggle="datepicker">
                                @if ($errors->has('daten'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('daten') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('lieun') ? 'has-danger' : '' }}">
                                <label for="lieun">Lieu de naissance</label>
                                <input name="lieun" type="text" class="form-control" id="lieun" aria-describedby="lieunHelp">
                                @if ($errors->has('lieun'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('lieun') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('profession') ? 'has-danger' : '' }}">
                                <label for="profession">Profession</label>
                                <input name="profession" type="text" class="form-control" id="profession" aria-describedby="professionHelp">
                                @if ($errors->has('profession'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('profession') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('telephone') ? 'has-danger' : '' }}">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" type="number" min="0" class="form-control" id="telephone" aria-describedby="telephoneHelp">
                                @if ($errors->has('telephone'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('mobile') ? 'has-danger' : '' }}">
                                <label for="mobile">Mobile</label>
                                <input name="mobile" type="number" min="0" class="form-control" id="mobile" aria-describedby="mobileHelp">
                                @if ($errors->has('mobile'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('email') ? 'has-danger' : '' }}">
                                <label for="email">Email</label>
                                <input name="email" type="email" min="0" class="form-control" id="email" aria-describedby="emailHelp">
                                @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('adresse') ? 'has-danger' : '' }}">
                                <label for="adresse">Adresse</label>
                                <input name="adresse" type="text" class="form-control" id="adresse" aria-describedby="adresseHelp">
                                @if ($errors->has('adresse'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('adresse') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('ville') ? 'has-danger' : '' }}">
                                <label for="ville">Ville</label>
                                <input name="ville" type="text" class="form-control" id="ville" aria-describedby="villeHelp">
                                @if ($errors->has('ville'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('ville') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('wilaya') ? 'has-danger' : '' }}">
                                <label for="wilaya">Wilaya</label>
                                <select name="wilaya" type="wilaya" min="0" class="form-control" id="wilaya" aria-describedby="wilayaHelp">
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('groupage') ? 'has-danger' : '' }}">
                                <label for="groupage">Groupage</label>
                                <select name="groupage" type="groupage" min="0" class="form-control" id="groupage" aria-describedby="groupageHelp">
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="frame" data-rotate-button="false">
                                <input type="file" name="file" id="myCropper"  />
                            </div>
                            <input type="hidden" name="x" id="x" value="">
                            <input type="hidden" name="y" id="y" value="">
                            <input type="hidden" name="width" id="width" value="">
                            <input type="hidden" name="height" id="height" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">Ajouter</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$('[data-toggle="datepicker"]').datepicker({
    format: 'yyyy-mm-dd',
});
</script>
@endsection
