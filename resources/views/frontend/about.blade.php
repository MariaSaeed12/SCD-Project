@extends('frontend.layout1.main')

@section('main-container')


<body>


    <header class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to LittleHeartsHealth</h1>
            <p class="lead">Your trusted resource for children's health and wellness.</p>
        </div>
    </header>

    <div class="container my-5">
        <div class="row featurette">
            <div class="col-md-6">
                <h2 class="featurette-heading">Who We Are,<span class="text-muted">What We Believe
                </span></h2>
                <p class="lead">We are dedicated to empowering parents, guardians, and caregivers with the information, tools, and support they need to nurture happy, healthy children.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('images/Fotos Infancia _ Freepik.jpeg') }}" alt="Children's Health">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading">Our Mission,<span class="text-muted">Our Vision</span></h2>
                <p class="lead">At LittleHeartsHealth, we understand that raising children can be both rewarding and challenging. Our mission is to provide reliable, up-to-date information and expert advice on a wide range of topics, including nutrition, physical activity, mental health, and preventive care.</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img class="img-fluid" src="{{ asset('images/The 5 Keys to Raising a Responsible Child (Instead of an Entitled one).jpeg') }}" alt="Parenting Tips">
            </div>
        </div>
    </div>

    @endsection
