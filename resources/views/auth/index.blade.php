@extends('website.layout.template')
@section('content')

  <div class="l-login">
    <div class="square blue-dark left-bottom hu_hu_animation ">
    </div>
    <div class="square red top-right hu__hu_r_ ">
    </div>
    <form method="post" action="{{url('login')}}">
    @csrf	
    <div class="l-login__form">
      <!-- <img  class="l-login__form-logo zoomInDown" src="https://www.borusanenbw.com.tr/_assets/img/visual-gallery/logo.jpg" alt="Company Logo" /> -->
      <div class="material-input__group">
        <i class="mdi mdi-account"></i>
        <input type="text" name="email" class="material-input__group__input iconic" required>
        <span class="material-input__group__highlight"></span>
        <span class="material-input__group-bar"></span>
        <label class="material-input__group__label iconic">Email</label>
      </div>
      <div class="material-input__group">
        <i class="mdi mdi-account"></i>
        <input type="Password" name="password" class="material-input__group__input iconic" required>
        <span class="material-input__group__highlight"></span>
        <span class="material-input__group-bar"></span>
        <label class="material-input__group__label iconic">Password</label>
      </div>
      <button type="submit" class="l-login__form__button"> <span >Login</span>
        <svg version="1.1" class="progress-svg circular-loader speed-normal"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80" height="80"
          viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="display:none">
          <path d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
          </path>
        </svg>
      </button>
    </div>
    </form>
    <div class="c-wind-turbine big">
      <div class="c-wind-turbine__inner">
        <svg version="1.1" id="Capa_1" class="c-wind-turbine__propeller big" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <circle style="fill:transparent;" cx="25" cy="25" r="25"/>
          <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16"/>
          <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34"/>
          <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>
        <svg version="1.1" id="Capa_1_poll" class="c-wind-turbine__poll big" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px" y="0px" width="100" height="225" width="554.625px" height="554.625px" viewBox="0 0 554.625 554.625"
          style="enable-background:new 0 0 554.625 554.625;" xml:space="preserve">
          <g>
            <polygon points="293.772,554.625 280.222,258.188 265.486,258.188 253.925,554.625"/>
            <circle cx="273.853" cy="212.766" r="19.823"/>
          </g>
          <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>
     </div>
    </div>
    <div class="c-wind-turbine">
      <div class="c-wind-turbine__inner">
        <svg version="1.1" id="Capa_1" class="c-wind-turbine__propeller" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <circle style="fill:transparent;" cx="25" cy="25" r="25"/>
          <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,34 25,25 34,16"/>
          <polyline style="fill:none;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;" points="16,16 25,25 34,34"/>
          <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>
        <svg version="1.1" id="Capa_1_poll" class="c-wind-turbine__poll" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px" y="0px" width="100" height="225" width="554.625px" height="554.625px" viewBox="0 0 554.625 554.625"
          style="enable-background:new 0 0 554.625 554.625;" xml:space="preserve">
          <g>
            <polygon points="293.772,554.625 280.222,258.188 265.486,258.188 253.925,554.625 	"/>
            <circle cx="273.853" cy="212.766" r="19.823"/>
          </g>
          <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>
     </div>
    </div>
  </div>

@endsection