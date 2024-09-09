@extends('main')
@section('content')
<div class="page-wrapper mt-5" id="main-wrapper">
    <div class="body-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/' . $governancePracticeCompany->companyId . '/' . $governancePracticeCompany->governanceObjectCompany->domainCompany->domainId . '/' . $governancePracticeCompany->governanceObjectCompany->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId) }}"
                        class="btn btn-outline-primary">Back</a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Home</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-5">
                            <div class="d-sm-flex d-block align-items-center justify-content-center">
                                <div class="mb-3 mb-sm-0">
                                    <div class="row">
                                        <div class="col text-center">
                                            @php
                                                $img = ($userCompany->company->companyLogo) ? $userCompany->company->companyLogo : 'images/google.png';
                                            @endphp
                                            <img src="{{ asset($img)}}" alt="logo" style="width: 100px" />
                                            <h3 class="fw-semibold mt-1">{{ $userCompany->company->companyName }}</h3>
                                        </div>
                                        <div class="col">
                                            <h3>{{ $governancePracticeCompany->governancePracticeId }}</h3>
                                            <h4 class="fw-lighter">
                                                {{ $governancePracticeCompany->governancePractice->governancePracticeName }}
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        @php
                                            $startUrl = url('/' . $governancePracticeCompany->companyId . '/' . $domainId . '/' . $governancePracticeCompany->governancePractice->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId . '/audit/question');
                                          @endphp
                                        <a href="{{ $startUrl }}" class="btn btn-primary w-100">
                                            Start
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
