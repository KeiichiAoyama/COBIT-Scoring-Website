<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
            body {
                margin: 20mm;
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
        }

        th,
        td {
            padding: 8px;
            text-align: left;
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

    <div class="header">
        <h1>FORM KERJA AUDIT</h1>

        <table>
            <tr>
                <th>Auditee:</th>
                <td>Project Manager Sistem Informasi</td>
            </tr>
            <tr>
                <th>Standard/Kriteria:</th>
                <td>COBIT 2019 - APO08.01 (Level 2)</td>
            </tr>
            <tr>
                <th>Lokasi:</th>
                <td>On-Site</td>
            </tr>
            <tr>
                <th>Tanggal Audit:</th>
                <td>16 Mei 2023</td>
            </tr>
            <tr>
                <th>Auditor:</th>
                <td>Timotius Ammar Karo Karo</td>
            </tr>
        </table>
    </div>


    <h2>Langkah Kerja</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Uraian Langkah-langkah Kerja</th>
                <th>Rating (1)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mengenali pemangku kepentingan bisnis, minat mereka, dan bidang tanggung jawab mereka.</td>
                <td>88.33</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Meninjau arah perusahaan saat ini, masalah, tujuan strategis, dan keselarasan dengan arsitektur
                    perusahaan.</td>
                <td>88.33</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Memahami lingkungan bisnis saat ini, kendala atau masalah proses, ekspansi atau kontraksi geografis,
                    dan pendorong industri/peraturan.</td>
                <td>85.83</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Mempertahankan kesadaran akan proses bisnis dan aktivitas terkait.</td>
                <td>84.16</td>
            </tr>
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
