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
                    <a href="{{ url('/' . $governancePracticeCompany->companyId . '/' . $governancePracticeCompany->governanceObjectCompany->domainCompany->domainId . '/' . $governancePracticeCompany->governanceObjectCompany->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId . '/audit') }}"
                        class="btn btn-outline-primary">Back</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg align-items-strech">
                    <div class="card w-100">
                        <div class="card-body p-5">
                            <div class="d-sm-flex d-block align-items-center justify-content-center">
                                <div class="mb-3 mb-sm-0">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{ asset('images/google.png')}}" alt="" style="width: 100px" />
                                            <h3 class="fw-semibold mt-1">Google Indonesia</h3>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <div>
                                                <h3>{{ $governancePracticeCompany->governancePracticeId }}</h3>
                                                <h4 class="fw-lighter">
                                                    {{ $governancePracticeCompany->governancePractice->governancePracticeName }}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="circle-utama">
                                            <h1>
                                                {{ $averageActivityScore }}
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row text-center mb-3">
                                        <h1>
                                            @php
                                                $score = $averageActivityScore;

                                                switch (true) {
                                                    case ($score > 85):
                                                        echo 'F';
                                                        break;
                                                    case ($score >= 55 && $score <= 85):
                                                        echo 'L';
                                                        break;
                                                    case ($score >= 35 && $score < 55):
                                                        echo 'P';
                                                        break;
                                                    case ($score < 35):
                                                        echo 'N';
                                                        break;
                                                }
                                            @endphp
                                        </h1>
                                    </div>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <a href="{{ url('/' . $governancePracticeCompany->companyId . '/' . $governancePracticeCompany->governanceObjectCompany->domainCompany->domainId . '/' . $governancePracticeCompany->governanceObjectCompany->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId) }}"
                                            class="btn btn-outline-primary">Ok</a>
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
