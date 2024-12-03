@extends('frontend.layout1.main')

@section('main-container')


<body>
   

    <!-- Contact Card -->
    <div class="container my-4">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Get in Touch</h5>
                <p class="card-text">For any queries or support, please contact us:</p>
                <ul class="list-unstyled">
                    <li>Email: <a href="mailto:contact@littleheartshealth.com">contact@littleheartshealth.com</a></li>
                    <li>Phone: <a href="tel:+1234567890">+1 234 567 890</a></li>
                    <li>Address: 123 Health St, Wellness City, HC 12345</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select your Query</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>General Inquiry</option>
                    <option>Appointment Request </option>
                    <option>Medical Advice</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Parent?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck1" id="gridCheckYes" value="yes">
                        <label class="form-check-label" for="gridCheckYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck1" id="gridCheckNo" value="no">
                        <label class="form-check-label" for="gridCheckNo">
                            No
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Guardian/Caretaker?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck2" id="gridCheckYes" value="yes">
                        <label class="form-check-label" for="gridCheckYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck2" id="gridCheckNo" value="no">
                        <label class="form-check-label" for="gridCheckNo">
                            No
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Are you a Doctor/Medical professional?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck3" id="gridCheckYes" value="yes">
                        <label class="form-check-label" for="gridCheckYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridCheck3" id="gridCheckNo" value="no">
                        <label class="form-check-label" for="gridCheckNo">
                            No
                        </label>
                    </div>

                </div>
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tell us about yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Elaborate Your Concern</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection
