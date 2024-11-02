<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        @media print {
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 8px;
                text-align: left;
            }

            tr {
                page-break-inside: avoid;
            }

            table {
                page-break-after: auto;
            }
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        tr {
            page-break-inside: avoid;
        }

        table {
            page-break-after: auto;
        }

        .rating-table td {
            text-align: center;
        }

        .footer {
            margin-top: 20px;
            font-size: 10px;
            text-align: center;
        }

        .header table {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .header th,
        .header td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .header th {
            width: 30%;
            background-color: #f2f2f2;
        }

        .header td {
            width: 70%;
        }
    </style>
</head>

<body>

    @php
        $activityCompany = $activityCompanies->first();
        $governancePractice = $activityCompany->activities->governancePractice;
        $governancePracticeCompany = $activityCompany->governancePracticeCompany;
        $auditor = $activityCompany->user;
    @endphp

    <div class="header">
        <h1>FORM KERJA AUDIT</h1>

        <table>
            <tr>
                <th>Auditee:</th>
                <td>Project Manager Sistem Informasi</td>
            </tr>
            <tr>
                <th>Standard/Kriteria:</th>
                <td>COBIT 2019 - {{ $governancePractice->governancePracticeId }}</td>
            </tr>
            <tr>
                <th>Lokasi:</th>
                <td>On-Site</td>
            </tr>
            <tr>
                <th>Tanggal Audit:</th>
                <td>{{ \Carbon\Carbon::now()->format('d F Y') }}</td>
            </tr>
            <tr>
                <th>Auditor:</th>
                <td>{{ $auditor->username }}</td>
            </tr>
        </table>
    </div>

    <h2>Activity Score</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Activity Name</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activityCompanies as $index => $activityCompany)
                @if ($activityCompany->activities)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $activityCompany->activities->activitiesName }}</td>
                        <td>{{ $activityCompany->activitiesCompanyScore }}</td>
                    </tr>
                @endif
            @endforeach

            <tr>
                <td colspan="2"><strong>Total Score</strong></td>
                <td><strong>{{ $governancePracticeCompany->governancePracticeCompanyScore }}</strong></td>
            </tr>
        </tbody>
    </table>

    <h2>Activity Details</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activityCompanies as $index => $activityCompany)
                <tr>
                    <td style="border-bottom: none;">{{ $index + 1 }}</td>
                    <td>Findings</td>
                    <td>{{ $activityCompany->activitiesCompanyFindings ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td>Impact</td>
                    <td>{{ $activityCompany->activitiesCompanyImpact ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td>Recommendations</td>
                    <td>{{ $activityCompany->activitiesCompanyRecommendations ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td>Response</td>
                    <td>{{ $activityCompany->activitiesCompanyResponse ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td>Status</td>
                    <td>{{ $activityCompany->activitiesCompanyStatus ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td>Deadline</td>
                    <td>{{ $activityCompany->activitiesCompanyDeadline ? \Carbon\Carbon::parse($activityCompany->activitiesCompanyDeadline)->format('d F Y') : '-' }}
                    </td>
                </tr>
                <tr>
                    <td style="border-top: none;"></td>
                    <td>Person In Charge</td>
                    <td>{{ $activityCompany->activitiesCompanyPersonInCharge ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <h2>Keterangan Pemberian Rating</h2>
    <table class="rating-table">
        <thead>
            <tr>
                <th>Rating</th>
                <th>Percentage</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>N - Not Achieved</td>
                <td>0% - 15%</td>
                <td>Ada sedikit atau tidak ada bukti pencapaian atribut yang didefinisikan dalam proses yang dinilai.
                </td>
            </tr>
            <tr>
                <td>P - Partially Achieved</td>
                <td>15% - 50%</td>
                <td>Ada beberapa bukti pendekatan, dan beberapa pencapaian, atribut yang didefinisikan dalam proses yang
                    dinilai.</td>
            </tr>
            <tr>
                <td>L - Largely Achieved</td>
                <td>50% - 85%</td>
                <td>Ada bukti pendekatan sistematis dan pencapaian signifikan, atribut yang ditentukan dalam proses yang
                    dinilai.</td>
            </tr>
            <tr>
                <td>F - Fully Achieved</td>
                <td>85% - 100%</td>
                <td>Ada bukti pendekatan yang lengkap dan sistematis, serta pencapaian penuh dari atribut yang dinilai.
                </td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Kampus UMN, Scientia Garden, Jl. Boulevard Gading Serpong, Tangerang - Banten</p>
        <p>Telp. (021) 5422 0808 ext 2600, Fax: (021) 5422 0800</p>
    </div>

</body>

</html>
