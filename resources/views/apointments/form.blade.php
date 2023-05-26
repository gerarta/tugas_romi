<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TherapIn Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="css/style.css" rel="stylesheet"> --}}

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
  

<body>
    
    <form action="{{route('apointments.store')}}" method="post" role="form" class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value="">Select Department</option>
              <option value="Department 1">Department 1</option>
              <option value="Department 2">Department 2</option>
              <option value="Department 3">Department 3</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <div class="title">How are you doing</div>
          <textarea class="form-control" name="message" rows="5" placeholder="Plese write here, tell us how are you doing"></textarea>
          <div class="validate"></div>
        </div>
        <div class="form-group mt-3">
          <div class="title">Is there anything you want to talk about</div>
          <textarea class="form-control" name="message" rows="5" placeholder="Plese write all the things you might want to tell us"></textarea>
          <div class="validate"></div>
        </div>
        <div class="form-group mt-3">
          <div class="title">From 1-10, how much is your stress level lately?</div>
          <textarea class="form-control" name="message" rows="5" placeholder="Describe your stress level to us"></textarea>
          <div class="validate"></div>
        </div>
        <div class="form-group mt-3">
          <div class="title">Have you been eating and sleeping?</div>
          <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your recent eating and sleeping habit"></textarea>
          <div class="validate"></div>
        </div>
        
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>
</body>

</html>
