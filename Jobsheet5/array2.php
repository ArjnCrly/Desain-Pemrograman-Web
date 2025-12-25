<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .data-dosen-table {
            width: 500px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px; 
            overflow: hidden; 
        }

        .data-dosen-table th, 
        .data-dosen-table td {
            border: 1px solid #dee2e6;
            padding: 12px 15px;
            text-align: left;
        }

        .data-dosen-table th {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        
        .data-dosen-table tr td:first-child {
            font-weight: 500;
            width: 35%;
        }
    </style>
</head>
<body>

    <h1>Data Dosen</h1>

    <table class="data-dosen-table">
        <thead>
            <tr>
                <th>Field</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>Elok Nur Hamdana</td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td>Malang</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>Perempuan</td>
            </tr>
        </tbody>
    </table>

</body>
</html>