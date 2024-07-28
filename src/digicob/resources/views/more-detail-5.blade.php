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
                    <div class="row">
                      <div class="col-2">
                        <img
                          src="{{ asset('images/google.png')}}"
                          alt=""
                          style="width: 100px" />
                        <h3 class="fw-semibold mt-1">Google Indonesia</h3>
                      </div>
                      <div class="col">
                        <h4>EDM02.01</h4>
                        <p>Establish the target investment mix</p>
                        <h4>
                          What percentage of the current IT budget is allocated
                          to the creation and maintanace portofolios of
                          I&T-enabled investment programs, IT services, and IT
                          assets, that support the I&T tactical and strategic
                          plans?
                        </h4>
                        <form class="" novalidate>
                          <div class="row">
                            <div class="col-4">
                              <input
                                type="text"
                                class="form-control"
                                id=""
                                value=""
                                required />
                            </div>
                            <h5 class="col">%</h5>
                          </div>
                          <label class="form-label" for="finding"
                            >Findings</label
                          >
                          <input
                            class="form-control"
                            type="text"
                            name="finding"
                            id="finding" />
                          <label class="form-label" for="impact">Impact</label>
                          <input
                            class="form-control"
                            type="text"
                            name="impact"
                            id="impact" />
                          <label class="form-label" for="recommendation"
                            >Recommendation</label
                          >
                          <input
                            class="form-control"
                            type="text"
                            name="recommendation"
                            id="recommendation" />
                          <label class="form-label" for="response"
                            >Response</label
                          >
                          <input
                            class="form-control"
                            type="text"
                            name="response"
                            id="response" />
                          <div class="row g-3 mt-1">
                            <div class="col-4">
                              <label class="form-label" for="status"
                                >Status</label
                              >
                              <input
                                class="form-control"
                                type="text"
                                name="status"
                                id="status" />
                            </div>
                            <div class="col-4">
                              <label class="form-label" for="deadline"
                                >Deadline</label
                              >
                              <input
                                class="form-control"
                                type="text"
                                name="deadline"
                                id="deadline" />
                            </div>
                            <div class="col-4">
                              <label class="form-label" for="PIC">PIC</label>
                              <input
                                class="form-control"
                                type="text"
                                name="PIC"
                                id="PIC" />
                            </div>
                          </div>
                          <div
                            class="row d-sm-flex d-block align-items-center justify-content-end mt-5">
                            <div class="col-2">
                              <button class="btn btn-primary w-100">
                                Next
                              </button>
                            </div>
                          </div>
                        </form>
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