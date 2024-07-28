@extends('main')
@section('content')
     <!--  Body Wrapper -->
    <div class="page-wrapper mt-5" id="main-wrapper">
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <div class="container">
          <!--  Row 1 -->
          <div class="row">
            <div class="col">
              <button class="btn btn-outline-primary">Back</button>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg align-items-strech">
              <div class="card w-100">
                <div class="card-body p-5">
                  <div
                    class="d-sm-flex d-block align-items-center justify-content-center">
                    <div class="mb-3 mb-sm-0">
                      <div class="row">
                        <div class="col text-center">
                          <img
                            src="{{ asset('images/google.png')}}"
                            alt=""
                            style="width: 100px" />
                          <h3 class="fw-semibold mt-1">Google Indonesia</h3>
                        </div>
                        <div class="col d-flex align-items-center">
                          <div>
                            <h3>EDM02.01</h3>
                            <h4 class="fw-lighter">
                              Establish the target investment mix
                            </h4>
                          </div>
                        </div>
                      </div>
                      <div class="row my-3">
                        <div class="circle-utama"></div>
                      </div>
                      <div class="row text-center mb-3">
                        <h1>F</h1>
                      </div>
                      <div
                        class="row d-flex align-items-center justify-content-center">
                        <button class="btn btn-primary w-50">Start</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
