<!DOCTYPE html>
<html>
<head>
    <title>Laporan Keuangan</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #000; padding: 4px; }
    </style>
</head>
<body>
    <h2>Laporan Keuangan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Waktu</th>
                <th>Departemen</th>
                <th>Akun</th>
                <th>Proyek</th>
                <th>Wilayah</th>
                <th>Pendapatan</th>
                <th>Pengeluaran</th>
                <th>Laba Rugi</th>
                <th>Laba Untung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->dimWaktu->nama ?? '-' }}</td>
                <td>{{ $row->dimDepartemen->nama ?? '-' }}</td>
                <td>{{ $row->dimAkun->nama ?? '-' }}</td>
                <td>{{ $row->dimProyek->nama ?? '-' }}</td>
                <td>{{ $row->dimWilayah->nama ?? '-' }}</td>
                <td>{{ number_format($row->total_pendapatan) }}</td>
                <td>{{ number_format($row->total_pengeluaran) }}</td>
                <td>{{ number_format($row->laba_rugi) }}</td>
                <td>{{ number_format($row->laba_untung) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
