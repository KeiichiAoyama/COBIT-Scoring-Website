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
                    class="d-sm-flex d-block align-items-center justify-content-between">
                    <div class="mb-3 mb-sm-0">
                      <div class="row">
                        <div class="col-3">
                          <img
                            src="{{ asset('images/google.png')}}"
                            alt=""
                            style="width: 100px" />
                          <h3 class="fw-semibold mt-1">Google Indonesia</h3>
                        </div>
                        <div class="col-6">
                          <h4 class="fw-normal">
                            <i class="ti ti-address-book"></i>
                          </h4>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                          </p>
                          <h4 class="fw-normal">
                            <i class="ti ti-building-skyscraper"></i>
                          </h4>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mb-sm-0">
                      <div class="circle-utama">90%</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg align-items-strech">
                  <div class="card w-100">
                    <div class="card-body">
                      <!-- Card Company -->
                      <div class="row">
                        <a href="company-detail.html">
                          <div class="card w-100">
                            <div class="card-body">
                              <div class="row d-flex align-items-center">
                                <div class="col-10">
                                  <div class="row">
                                    <div
                                      class="d-sm-flex d-block align-items-center justify-content-between">
                                      <div class="mb-3 mb-sm-0">
                                        <h3>Evaluate, Direct, and Monitor</h3>
                                      </div>
                                      <h3>Level 2</h3>
                                    </div>
                                  </div>
                                  <hr />
                                  <div class="row">
                                    <div class="col-2 p-1">
                                      <button
                                        class="btn btn-danger btn-round w-100">
                                        EDM | Level 2
                                      </button>
                                    </div>
                                    <div class="col-2 p-1">
                                      <button
                                        class="btn btn-danger btn-round w-100">
                                        EDM | Level 2
                                      </button>
                                    </div>
                                    <div class="col-2 p-1">
                                      <button
                                        class="btn btn-danger btn-round w-100">
                                        EDM | Level 2
                                      </button>
                                    </div>
                                    <div class="col-2 p-1">
                                      <button
                                        class="btn btn-danger btn-round w-100">
                                        EDM | Level 2
                                      </button>
                                    </div>
                                    <div class="col-2 p-1">
                                      <button
                                        class="btn btn-danger btn-round w-100">
                                        EDM | Level 2
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="col-2 d-flex align-items-center justify-content-center">
                                  <div class="circle">90%</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
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
