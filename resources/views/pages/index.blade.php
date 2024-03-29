@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('title', 'Index')

@section('body')
    @include('partials.main-navbar', [
        'auth' => 'index'
    ])

    <div id="home" class="container-fluid"></div>
    <div id="about" class="container mt-2">
        <div class="nav-pos row mb-5"></div>
        <div class="row pt-3">
            <div class="row col-12">
                <div class="about-title col-10 col-lg-6 ml-5 text-center">
                    Enterprise Project Management Assistant
                </div>
            </div>
            <div class="row col-12">
                <div class="about-text col-11 col-lg-7 ml-4 mt-n3 pt-4 pb-2">
                    EPMA is a system providing tools to facilitate management of projects and teams,
                    in order to allow companies to better manage their human resources and their
                    employees to coordinate better with each other.
                </div>
            </div>
        </div>
        <div class="row justify-content-end mt-5 mr-0">
            <div class="row col-12 justify-content-end">
                <div class="about-title col-10 col-lg-6 mr-4 text-center">EPMA for Agile Development</div>
            </div>
            <div class="row col-12 justify-content-end">
                <div class="about-text col-11 col-lg-7 mr-3 mt-n3 pt-4 pb-2">
                    EPMA allows for flexible teams working on multiple projects and provides communication
                    tools for discussing projects and tasks between contributors.
                    <br><br>
                    EPMA features roadmaps for projects, where tasks are assigned to milestones. Prioritize
                    your tasks and change your roadmap as needed throughout development.
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="row col-12">
                <div class="about-title col-10 col-lg-6 ml-5 text-center">Management of Resources</div>
            </div>
            <div class="row col-12">
                <div class="about-text col-11 col-lg-7 ml-4 mt-n3 pt-4 pb-2">
                    EPMA offers administrators the ability to easily manage their users and projects.
                    Create new projects and assign them a manager, rearrange your teams as needed,
                    and remove users and projects from the system. Manage your company’s resources
                    through a single interface.
                </div>
            </div>
        </div>
    </div>
    <div id="benefits" class="container">
        <div class="nav-pos row mb-5"></div>
        <div class="row justify-content-center mb-md-5">
            <div class="col-6 col-lg-3  mt-lg-3">
                <img id="idea-img" class="img-fluid d-block" src="{{ asset('img/idea.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-4 align-self-center py-3 py-lg-0">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center">Organize your <span>projects</span></div>
                    <div class="d-flex justify-content-center">Organize your <span>teams</span></div>
                    <div class="d-flex justify-content-center">Organize your <span>tasks</span></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 align-self-center py-3 py-lg-0 order-12 order-lg-1">
                <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center"><span>Share</span> your problems</div>
                    <div class="d-flex justify-content-center"><span>Share</span> your solutions</div>
                </div>
            </div>
            <div class="col-6 col-lg-3 order-1 order-lg-12">
                <img id="share-img" class="img-fluid mx-auto d-block" src="{{ asset('img/share.png') }}" alt="">
            </div>
        </div>
    </div>
    <div id="benefits-devices" class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="d-flex"><span>Work</span> from anywhere</div>
        </div>
        <div class="row align-items-end justify-content-center offset-md-1">
            <div class="col-3 col-md-2 col-lg-1 text-right">
                <img id="mobile-img" class="img-fluid" src="{{ asset('img/mobile.png') }}" alt="Mobile Home Page">
            </div>
            <div class="col-11 col-md-6 col-lg-4 text-center mt-4 mt-md-0">
                <img id="desktop-img" class="img-fluid" src="{{ asset('img/desktop.png') }}" alt="Desktop Work Page">
            </div>
            <div class="col-7 col-md-4 col-lg-3 text-left mt-4 mt-md-0">
                <img id="tablet-img" class="img-fluid" src="{{ asset('img/tablet.png') }}" alt="Tablet Login">
            </div>

        </div>

    </div>
    <div id="founders" class="container-fluid">
        <div class="nav-pos row mb-5"></div>
        <div class="row justify-content-center pt-5">
            <div class="d-flex">A system <span>developed</span> by</div>
        </div>
        <div class="row pt-2 d-flex">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="thumbnail my-3 my-lg-5 text-center">
                    <a href="https://github.com/cesarpinho">
                        <img src="{{ asset('img/cesar.png') }}" alt="Founder Picture">
                        <div class="caption">
                            <p>César Pinho</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail my-3 my-lg-5 text-center">
                    <a href="https://github.com/RuiGuedes">
                        <img src="{{ asset('img/rui.png') }}" alt="Founder Picture">
                        <div class="caption">
                            <p>Rui Guedes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail my-3 my-lg-5 text-center">
                    <a href="https://github.com/joaofcmb">
                        <img src="{{ asset('img/joao.jpg') }}" alt="Founder Picture">
                        <div class="caption">
                            <p>João Barbosa</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail my-3 my-lg-5 text-center">
                    <a href="https://github.com/Gwenevere">
                        <img src="{{ asset('img/alexandra.png') }}" alt="Founder Picture">
                        <div class="caption">
                            <p>Alexandra Mendes</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mb-5 pb-5"></div>
    </div>
@endsection