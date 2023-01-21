@extends('layouts.main')

@section('content')
    <div class="home-banner">
        <div class="container content-banner ">
            <div class="row">
                <div class="col-lg-6 col-sm-12 d-flex align-items-center">
                    <div class="raise-text text-white">
                        <h1>Book Your Auto Rental</h1>
                        <h4>Luxury Cars at low-cost, starts <span class="text-danger">$75 / day</span>
                            from over 100 premium locations</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="book-form">
                        <form action="" method="post">
                            <div class="mb-4">
                                <label for="from-date" class="form-label">PICK-UP DATE</label>
                                <input type="date" name="from-date" class="form-control" id="from-date">
                            </div>
                            <div class="mb-4">
                                <label for="to-date" class="form-label">DROP-OFF DATE</label>
                                <input type="date" name="to-date" class="form-control" id="to-date">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">MAKERS OF VEHICLE</label>
                                <select name="car-typ" class="form-select">
                                    <option selected>Car</option>
                                    <option value="1">BMWW</option>
                                    <option value="2">ROLS ROY</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger">FIND IT NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('image/background/wave.png') }}" alt="" draggable="false" class="w-100">
    </div>
    <div class="container">
        <div class="benefits">
            <div class="text-center">
                <h4>OUR BENEFITS</h4>
                <p>Luxury AutoStar Rental Services</p>
            </div>
            <div class="detail-benefits">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="benefit-title text-center">
                            <img src="{{ asset('image/background/like.jpg') }}" draggable="false" alt="">
                            <p>Our Customers Always 100% Satisfied</p>
                        </div>
                        <div class="description-text text-center mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam
                            quis notrud exercitation
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="benefit-title text-center">
                            <img src="{{ asset('image/background/note.jpg') }}" draggable="false" alt="">
                            <p>We Provide Easier
                                & Faster Bookings</p>
                        </div>
                        <div class="description-text text-center mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam
                            quis notrud exercitation
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="benefit-title text-center">
                            <img src="{{ asset('image/background/location.jpg') }}" draggable="false" alt="">
                            <p>Your Choice of
                                Any Pickup Location</p>
                        </div>
                        <div class="description-text text-center mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam
                            quis notrud exercitation
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rental-fleet">
            <div class="fleet">
                <div class="fleet-detail p-4">
                    <div>
                        <h4>OUR RENTAL FLEETS</h4>
                        <p>Luxury AutoStar Rental Services</p>
                        <p class="description-text ">
                            Amco laboris nisi ut aliquip xea comod consequt duis aute irure dolor reprehenderit voluptate
                            velit
                            cillum dolore fugiat lore ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                            tempor
                            incididunt</p>
                    </div>
                </div>

                <div class="fleet-banner"></div>

            </div>
        </div>

        <div class="vehicle-feature">
            
        </div>
    </div>
@endsection
