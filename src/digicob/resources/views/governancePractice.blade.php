@extends('main')
@section('content')
    <div class="page-wrapper mt-5" id="main-wrapper">
        <div class="body-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/' . $governancePracticeCompany->companyId . '/' . $governancePracticeCompany->governanceObjectCompany->domainCompany->domainId . '/' . $governancePracticeCompany->governanceObjectCompany->governanceObjectId) }}"
                            class="btn btn-outline-primary">Back</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Home</a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg align-items-strech">
                        <div class="card w-100">
                            <div class="card-body p-5">
                                <div class="d-sm-flex d-block align-items-center justify-content-between">
                                    <div class="mb-3 mb-sm-0">
                                        <div class="row">
                                            <h3 class="fw-semibold text-start" style="margin-bottom: 40px;">Governance
                                                Practice</h3>
                                            <div class="col-3 d-flex flex-column align-items-center">
                                                @php
                                                    $img = $userCompany->company->companyLogo
                                                        ? $userCompany->company->companyLogo
                                                        : 'images/google.png';
                                                @endphp
                                                <img src="{{ asset($img) }}" alt="logo" style="width: 100px" />
                                                <h3 class="fw-semibold mt-1 text-center">
                                                    {{ $userCompany->company->companyName }}
                                                </h3>
                                            </div>

                                            <div class="col-6 d-flex flex-column justify-content-center ps-4">
                                                <h4 class="fw-normal"><i class="ti ti-address-book"></i> Address</h4>
                                                <p>{{ $userCompany->company->companyAddress }}</p>
                                                <h4 class="fw-normal"><i class="ti ti-building-skyscraper"></i> Industry
                                                </h4>
                                                <p>{{ $userCompany->company->companyIndustry }}</p>
                                                <button id="pdfDownload" class="btn btn-warning w-50 mt-4">
                                                    Download as PDF
                                                </button>
                                            </div>

                                            <div class="col-3 d-flex flex-column justify-content-between">
                                                <div>
                                                    <h4>{{ $governancePracticeCompany->governancePracticeId }}</h4>
                                                    <p>{{ $governancePracticeCompany->governancePractice->governancePracticeName }}
                                                    </p>
                                                    <h4>{{ $governancePracticeCompany->governancePracticeCompanyLevel ? 'Level ' . $governancePracticeCompany->governancePracticeCompanyLevel : 'No Score' }}
                                                    </h4>
                                                </div>
                                                <a href="{{ url('/' . $governancePracticeCompany->companyId . '/' . $domainId . '/' . $governancePracticeCompany->governancePractice->governanceObjectId . '/' . $governancePracticeCompany->governancePracticeId . '/audit') }}"
                                                    class="btn btn-primary w-100 mt-4">
                                                    Audit Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-sm-0">
                                        @php
                                            $score = $governancePracticeCompany->governancePracticeCompanyScore;
                                        @endphp
                                        <div class="circle-utama">{{ number_format($score, 2) }}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($activitiesCompanyList as $activitiesCompany)
                            <div class="row">
                                <div class="col-lg align-items-strech">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-10">
                                                    <div class="row">
                                                        @php
                                                            $hidden = '';
                                                            $classification = null;
                                                            $score = $activitiesCompany->activitiesCompanyScore
                                                                ? $activitiesCompany->activitiesCompanyScore
                                                                : 0;

                                                            if ($score >= 85) {
                                                                $classification = 'Fully';
                                                            } elseif ($score >= 55 && $score < 85) {
                                                                $classification = 'Largely';
                                                            } elseif ($score < 55 && $score > 0) {
                                                                $classification = 'Partially';
                                                            } else {
                                                                $classification = 'None';
                                                            }

                                                            if (
                                                                empty($activitiesCompany->activitiesCompanyFindings) &&
                                                                empty($activitiesCompany->activitiesCompanyImpact) &&
                                                                empty(
                                                                    $activitiesCompany->activitiesCompanyRecommendations
                                                                ) &&
                                                                empty($activitiesCompany->activitiesCompanyResponse) &&
                                                                empty($activitiesCompany->activitiesCompanyStatus) &&
                                                                empty($activitiesCompany->activitiesCompanyDeadline) &&
                                                                empty(
                                                                    $activitiesCompany->activitiesCompanyPersonInCharge
                                                                )
                                                            ) {
                                                                $hidden = 'display: none;';
                                                            }
                                                        @endphp
                                                        <div
                                                            class="d-sm-flex d-block align-items-center justify-content-between">
                                                            <div class="mb-3 mb-sm-0 w-75">
                                                                <h4>{{ $activitiesCompany->activities->activitiesName }}
                                                                </h4>
                                                            </div>
                                                            <h3> {{ $classification }}</h3>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-2 p-1" style="{{ $hidden }}">
                                                            <button type="button"
                                                                class="btn btn-danger btn-round w-100 extraBtn"
                                                                data-toggle="modal" data-target="#exampleModalCenter"
                                                                data-id="{{ $activitiesCompany->activitiesCompanyId }}"
                                                                data-findings="{{ $activitiesCompany->activitiesCompanyFindings }}"
                                                                data-impact="{{ $activitiesCompany->activitiesCompanyImpact }}"
                                                                data-recommendations="{{ $activitiesCompany->activitiesCompanyRecommendations }}"
                                                                data-response="{{ $activitiesCompany->activitiesCompanyResponse }}"
                                                                data-status="{{ $activitiesCompany->activitiesCompanyStatus }}"
                                                                data-deadline="{{ $activitiesCompany->activitiesCompanyDeadline }}"
                                                                data-pic="{{ $activitiesCompany->activitiesCompanyPersonInCharge }}">
                                                                Extra
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center justify-content-center">
                                                    <div class="circle">{{ $score }}%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="companyId" value="{{ $userCompany->companyId }}">
    <input type="hidden" id="govPracCompId" value="{{ $governancePracticeCompany->governancePracticeCompanyId }}">

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="extraForm" action="{{ route('updateExtra') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Extra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="activitiesCompanyId" id="activitiesCompanyId">
                        <label class="form-label" for="activitiesCompanyFindings">Findings</label>
                        <input class="form-control" type="text" name="activitiesCompanyFindings"
                            id="activitiesCompanyFindings" />
                        <label class="form-label" for="activitiesCompanyImpact">Impact</label>
                        <input class="form-control" type="text" name="activitiesCompanyImpact"
                            id="activitiesCompanyImpact" />
                        <label class="form-label" for="activitiesCompanyRecommendations">Recommendation</label>
                        <input class="form-control" type="text" name="activitiesCompanyRecommendations"
                            id="activitiesCompanyRecommendations" />
                        <label class="form-label" for="activitiesCompanyResponse">Response</label>
                        <input class="form-control" type="text" name="activitiesCompanyResponse"
                            id="activitiesCompanyResponse" />
                        <div class="row g-3 mt-1">
                            <div class="col-4">
                                <label class="form-label" for="activitiesCompanyStatus">Status</label>
                                <input class="form-control" type="text" name="activitiesCompanyStatus"
                                    id="activitiesCompanyStatus" />
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="activitiesCompanyDeadline">Deadline</label>
                                <input class="form-control" type="date" name="activitiesCompanyDeadline"
                                    id="activitiesCompanyDeadline" />
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="activitiesCompanyPersonInCharge">PIC</label>
                                <input class="form-control" type="text" name="activitiesCompanyPersonInCharge"
                                    id="activitiesCompanyPersonInCharge" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.extraBtn').on('click', function() {
                var id = $(this).data('id');
                var findings = $(this).data('findings');
                var impact = $(this).data('impact');
                var recommendations = $(this).data('recommendations');
                var response = $(this).data('response');
                var status = $(this).data('status');
                var deadline = $(this).data('deadline');
                var pic = $(this).data('pic');

                if (deadline) {
                    var formattedDate = new Date(deadline).toISOString().split('T')[0];
                }

                $('#activitiesCompanyId').val(id);
                $('#activitiesCompanyFindings').val(findings);
                $('#activitiesCompanyImpact').val(impact);
                $('#activitiesCompanyRecommendations').val(recommendations);
                $('#activitiesCompanyResponse').val(response);
                $('#activitiesCompanyStatus').val(status);
                $('#activitiesCompanyDeadline').val(formattedDate);
                $('#activitiesCompanyPersonInCharge').val(pic);

                $('#exampleModalCenter').modal('show');
            });

            document.getElementById('extraForm').addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                axios.post('{{ route('updateExtra') }}', formData)
                    .then(function(response) {
                        console.log(response.data);
                        alert('Data saved successfully!');
                        $('#exampleModalCenter').modal('hide');
                        location.reload();
                    })
                    .catch(function(error) {
                        console.error(error);
                        alert('An error occurred: ' + error.message);
                    });
            });

            $('#pdfDownload').on('click', function() {
                axios.post('{{ route('pdf') }}', {
                        companyId: $('#companyId').val(),
                        governancePracticeCompanyId: $('#govPracCompId').val()
                    }, {
                        responseType: 'blob'
                    })
                    .then(function(response) {
                        console.log(typeof response.data);

                        if (response.status == 204) {
                            swal("Unable to generate PDF, no data is available.");
                        } else {
                            const blob = new Blob([response.data], {
                                type: 'application/pdf'
                            });
                            const link = document.createElement('a');
                            link.href = window.URL.createObjectURL(blob);
                            link.download = 'activities_report.pdf';
                            link.click();
                        }
                    })
                    .catch(function(error) {
                        console.error(error);
                        swal(error.message);
                    });
            });
        });
    </script>
@endsection
