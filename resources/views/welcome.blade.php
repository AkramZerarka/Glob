@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="container">
        <div class="intro-text pt-5 mt-5">
            <div class="intro-heading text-uppercase bg-danger mt-5">DONATE BLOOD AND GET REAL BLESSINGS.</div>
            <div class="intro-lead-in">
                Blood is the most precious gift that anyone can give to another person.
                Donating blood not only saves the life also save donor's lives.
            </div>
            <form action="{{ route('search') }}" method="get">
                @csrf
                <div class="row justify-content-center d-flex p-5 bg-light shadow">
                    <div class="col-md-3 p-0">
                        <div class="form-group{{ $errors->has('groupage') ? 'has-danger' : '' }}">
                            <select name="groupage" type="groupage" min="0" class="form-control rounded-0" id="groupage"
                                aria-describedby="groupageHelp" required>
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
                            <select name="wilaya" type="wilaya" min="0" class="form-control rounded-0 border-0" id="wilaya"
                                aria-describedby="wilayaHelp" required>
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
    </div>
</header>
<section class="masthead pt-0">
    <div class="container">
        <div class="intro-text pt-5 pb-5">
            <div class="intro-heading text-uppercase bg-danger text-white text-center">DONATION PROCESS</div>
            <div class="intro-lead-in text-center">
                The donation process from the time you arrive center until the time you leave
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="img/process_1.jpg" alt="service">
                        <div class="step">
                            <h3 class="display-3 text-danger">1</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Registration</h2>
                        <p>You need to complete a very simple registration form. Which contains all required contact
                            information to enter in the donation process.</p>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="img/process_2.jpg" alt="process">
                        <div class="step">
                            <h3 class="display-3 text-danger">2</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Screening</h2>
                        <p>A drop of blood from your finger will take for simple test to ensure that your blood iron
                            levels are proper enough for donation process.</p>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="process-layout">
                    <figure class="process-img">
                        <img src="img/process_3.jpg" alt="process">
                        <div class="step">
                            <h3 class="display-3 text-danger">3</h3>
                        </div>
                    </figure>
                    <article class="process-info">
                        <h2>Donation</h2>
                        <p>After ensuring and passed screening test successfully you will be directed to a donor bed for
                            donation. It will take only 6-10 minutes.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="masthead pt-0 pb-1">
    <div class="container">
    </div>
</section>
@endsection
