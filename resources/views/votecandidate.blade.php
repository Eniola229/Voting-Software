\<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RECTEM VOTING</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
        <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin />
        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styless.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="index.php">RECTEM VOTING PLAFORM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                       <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('candidates')}}">CANDATES</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('candidates')}}">VOTE</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('login')}}">LOGIN</a></li>
                    </ul> 
                   
                </div>
            </div>
        </nav>
            <!-- Projects Section-->
            <form action="{{ route('vote.store') }}" method="POST">
            @csrf
           <div class="container">
    <div class="row mt-4">
        <div class="col-12" style="margin-top: 5%;">
            <h1 class="text-center mb-4">Vote For Your Candidate's</h1>
        </div>

        <div class="row">
    <div class="col-md-6">
        <h3>MATRIC NUMBER PLEASE</h3>
        <input type="text" placeholder="Matric Number" name="matric" class="form-control" required>
         <x-input-error style="color: red;" :messages="$errors->get('matric')" class="mt-2" />
</div>
</div>


<div class="row mt-5">
    <div class="col-md-6">
        <h3>PRESIDENTIAL CANDIDATE</h3>
        @foreach($presidents as $president) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="presidential_candidate" id="candidate_{{ $president->id }}" value="{{ $president->name }}">
                <label class="form-check-label" for="candidate_{{ $president->id }}">
                    {{ $president->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('presidential_candidate')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>VICE PRESIDENTIAL CANDIDATE</h3>
        @foreach($vice_presidents as $vice_president) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vice_presidential_candidate" id="vice_candidate_{{ $vice_president->id }}" value="{{ $vice_president->name }}">
                <label class="form-check-label" for="vice_candidate_{{ $vice_president->id }}">
                    {{ $vice_president->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('vice_presidential_candidate')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>
<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>GENERAL SECRETARY</h3>
        @foreach($general_secetarys as $general_secetary) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="general_secetary" id="candidate_{{ $general_secetary->id }}" value="{{ $general_secetary->name }}">
                <label class="form-check-label" for="candidate_{{ $general_secetary->id }}">
                    {{ $general_secetary->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('general_secetary')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>ASSISTANT GENERAL SECRETARY</h3>
        @foreach($ass_general_secetarys as $ass_general_secetary) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ass_general_secetary" id="candidate_{{ $ass_general_secetary->id }}" value="{{ $ass_general_secetary->name }}">
                <label class="form-check-label" for="candidate_{{ $ass_general_secetary->id }}">
                    {{ $ass_general_secetary->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('ass_general_secetary')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>
<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>TREASURER</h3>
        @foreach($treasurers as $treasurer) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="treasurer" id="candidate_{{ $treasurer->id }}" value="{{ $treasurer->name }}">
                <label class="form-check-label" for="candidate_{{ $treasurer->id }}">
                    {{ $treasurer->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('treasurer')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>WELFARE DIRECTORS</h3>
        @foreach($welfares as $welfare) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="welfare" id="candidate_{{ $welfare->id }}" value="{{ $welfare->name }}">
                <label class="form-check-label" for="candidate_{{ $welfare->id }}">
                    {{ $welfare->name }}
                </label>
            </div>
            <x-input-error style="color: red;" :messages="$errors->get('welfare')" class="mt-2" />
        @endforeach
    </div>
</div>
<hr>


<div class="row mt-2 mt-2">
    <div class="col-md-6">
        <h3>ASSISTANT WELFARE</h3>
        @foreach($ass_welfares as $ass_welfare) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ass_welfare" id="candidate_{{ $ass_welfare->id }}" value="{{ $ass_welfare->name }}">
                <label class="form-check-label" for="candidate_{{ $ass_welfare->id }}">
                    {{ $ass_welfare->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('ass_welfare')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>SPORT DIRECTOR</h3>
        @foreach($sports as $sport) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sport" id="candidate_{{ $sport->id }}" value="{{ $sport->name }}">
                <label class="form-check-label" for="candidate_{{ $sport->id }}">
                    {{ $sport->name }}
                </label>
                <x-input-error  style="color: red;":messages="$errors->get('sport')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>ASSISTANT SPORT DIRECTOR</h3>
        @foreach($ass_sports as $ass_sport) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ass_sport" id="candidate_{{ $ass_sport->id }}" value="{{ $ass_sport->name }}">
                <label class="form-check-label" for="candidate_{{ $ass_sport->id }}">
                    {{ $ass_sport->name }}
                </label>
                <x-input-error  style="color: red;":messages="$errors->get('ass_sport')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2" >
        <h3>SOCIAL DIRECTOR</h3>
        @foreach($socials as $social) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="social" id="candidate_{{ $social->id }}" value="{{ $social->name }}">
                <label class="form-check-label" for="candidate_{{ $social->id }}">
                    {{ $social->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('social')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>ASSISTANT SOCIAL DIRECTOR</h3>
        @foreach($ass_social as $ass_social) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ass_social" id="candidate_{{ $ass_social->id }}" value="{{ $ass_social->name }}">
                <label class="form-check-label" for="candidate_{{ $ass_social->id }}">
                    {{ $ass_social->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('ass_social')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>FINANCIAL SECRETARY</h3>
        @foreach($financial_sec as $financial_sec) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="financial_sec" id="candidate_{{ $financial_sec->id }}" value="{{ $financial_sec->name }}">
                <label class="form-check-label" for="candidate_{{ $financial_sec->id }}">
                    {{ $financial_sec->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('financial_sec')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>PUBLIC RELATION OFFICER</h3>
        @foreach($pro as $pro) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pro" id="pro{{ $pro->id }}" value="{{ $pro->name }}">
                <label class="form-check-label" for="pro{{ $pro->id }}">
                    {{ $pro->name }}
                </label>
            </div>
            <x-input-error style="color: red;" :messages="$errors->get('pro')" class="mt-2" />
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>ASSISTANT RELATION OFFICER</h3>
        @foreach($env as $env) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="env" id="candidate_{{ $env->id }}" value="{{ $env->name }}">
                <label class="form-check-label" for="candidate_{{ $env->id }}">
                    {{ $env->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('env')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>CHIEF WHIP</h3>
        @foreach($chief_whip as $chief_whip) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="chief_whip" id="chief_whip{{ $chief_whip->id }}" value="{{ $chief_whip->name }}">
                <label class="form-check-label" for="chief_whip{{ $chief_whip->id }}">
                    {{ $chief_whip->name }}
                </label>
                <x-input-error  style="color: red;":messages="$errors->get('chief_whip')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <div class="col-md-6 mt-2">
        <h3>STARTUPS</h3>
        @foreach($startups as $startup) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="startup" id="candidate_{{ $startup->id }}" value="{{ $startup->name }}">
                <label class="form-check-label" for="candidate_{{ $startup->id }}">
                    {{ $startup->name }}
                </label>
                <x-input-error  style="color: red;":messages="$errors->get('startup')" class="mt-2" />
            </div>
        @endforeach
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-md-6 mt-2">
        <h3>ASSISTANT STARTUPS</h3>
        @foreach($ass_startups as $ass_startup) 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ass_startup" id="candidate_{{ $ass_startup->id }}" value="{{ $ass_startup->name }}">
                <label class="form-check-label" for="candidate_{{ $ass_startup->id }}">
                    {{ $ass_startup->name }}
                </label>
                <x-input-error style="color: red;" :messages="$errors->get('ass_startup')" class="mt-2" />
            </div>
        @endforeach
    </div>
    <button  type="submit" class="btn btn-primary mt-2">Submit Vote</button>
</div>

</div>


        </main>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; RECTEM VOTING PLAFORM 2023. All Rights Reserved.</div>
                    <a href="www.rectem.edu.ng">www.rectem.edu.ng</a>
                   
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
