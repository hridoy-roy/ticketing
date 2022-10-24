@extends('layout')

@section('hero')
     <section id="hero" class="d-flex align-items-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Bus Ticket Booking Platform</h1>
                    <h2>Your one stop bus ticket booking platform for your travel!</h2>
                    <div class="d-lg-flex">
                        <div class="d-lg-flex mb-3">
                            <form action="/result" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Depart From</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            <input type="" id="deptdate" name="depart_from" class="form-control js-example-basic-single" placeholder="Depart from" required="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Arrive at</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="arriveat" name="arrive_at" placeholder="Arrive at" required="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Departure Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-calendar"></i></div>
                                            </div>
                                            <input type="text" name="travel_date"class="form-control" id="datepicker1" placeholder="Departure Date" required="" autocomplete="false">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2" >
                                        <div class="text-center"><input class="btnsubmit" type="submit" value="Search Buses"  name="submit" /> </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section><!-- End Hero -->
@endsection


@section('main')
   <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>WHY BOOK WITH US?</h2>
        </div>

        <div class="row content d-flex flex-row align-items-center">
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3 fa-5x">

                <span style="color: #6e62a2;"><i class="fas fa-bus"></i></span>
            </div>
            <div >
                <h4>MULTIPLE BUS OPERATORS</h4>
                <p>Several bus service providers available on our platforms</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/pcicon.png')}}" alt="">
            </div>
            <div >
                <h4>FOUR PLATFORMS</h4>
                <p>Tickets are available for booking through website, mobile app, USSD and call center</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/chaticon.png')}}" alt="">
            </div>
            <div >
                <h4>SUPERIOR CUSTOMER SERVICE</h4>
                <p>Superior and professional customer service from booking to boarding the bus</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MORE FEATURES ON OUR PLATFORM</h2>

        </div>

        <div class="row content d-flex flex-row align-items-center">
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/locicon.png')}}" alt="">
            </div>
            <div >
                <h4>BUS LOCATION TRACKING</h4>
                <p>Track your bus for convenient pickup and drop-off locations</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/staricon.png')}}" alt="">
            </div>
            <div >
                <h4>SERVICE REVIEW</h4>
                <p>View previous travelers service experiences and ratings</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex flex-column align-items-center text-center">
            <div class="mb-3">
                <img src="{{asset('img/indexicons/moneyicon.png')}}" alt="">
            </div>
            <div >
                <h4>FLEXIBLE PAYMENT OPTIONS</h4>
                <p>Choose your preferred payment system from multiple payment options</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
@endsection
