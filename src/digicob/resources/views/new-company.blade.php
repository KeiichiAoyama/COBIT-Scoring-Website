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
              <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg align-items-strech">
                <div class="card w-100">
                <div class="card-body">
                  <div
                    class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                      <h3 class=" fw-semibold">New Company</h3>
                    </div>
                  </div>
                  <!-- Card Company -->
                        <form action="{{ route('addNewCompany')}}" method="POST" >
                          @csrf
                          <label class="form-label" for="companyName"
                            >Company Name</label
                          >
                          <input
                            class="form-control"
                            type="text"
                            name="companyName"
                            id="companyName" />
                          <label class="form-label" for="companyIndustry">Company Industry</label>
                          <input
                            class="form-control"
                            type="text"
                            name="companyIndustry"
                            id="companyIndustry" />
                          <label class="form-label" for="companyAddress"
                            >Company Address</label
                          >
                          <textarea
                            class="form-control"
                            name="companyAddress"
                            id="companyAddress"></textarea>
                          <div
                            class="row d-sm-flex d-block align-items-center justify-content-end mt-5">
                            <div class="col-2">
                              <button type="submit" class="btn btn-primary w-100">
                                Save
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
@endsection
