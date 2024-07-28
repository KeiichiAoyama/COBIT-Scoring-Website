@extends('main')
@section('content')
    <div
      class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div
            class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
              <img
                src="{{asset('images/logos/dark-logo.svg')}}"
                width="180"
                alt="" />
            </a>
            <div
              class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
              id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="sidebar-item">
                <button class="btn btn-primary">
                  <i class="ti ti-plus"></i> New Company
                </button>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">List</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="./ui-buttons.html"
                  aria-expanded="false">
                  <span class="hide-menu">Buttons</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <div class="container">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg align-items-strech">
              <div class="card w-100">
                <div class="card-body">
                  <div
                    class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Company List</h5>
                    </div>
                  </div>
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
                                    <h3>Company A</h3>
                                  </div>
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
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">
              Design and Developed by
              <a
                href="https://adminmart.com/"
                target="_blank"
                class="pe-1 text-primary text-decoration-underline"
                >AdminMart.com</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection
