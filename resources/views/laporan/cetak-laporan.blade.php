<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Laporan Dokumen</title>
    <style>
        /* Kop Surat Styles */
        .kop-surat {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        .logo {
            width: 80px;
            height: auto;
        }

        .perusahaan-info {
            text-align: center;
            /* Perubahan di sini */
        }

        /* Content Styles */
        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Kop Surat -->
    <div class="kop-surat">
        <div class="logo">
            <img src="path/to/logo.png" alt="Logo Perusahaan">
        </div>
        <div class="perusahaan-info text-center">
            <h3>Nama Perusahaan</h3>
            <p>Alamat Perusahaan</p>
            <p>No. Telepon: 123-456-789</p>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Isi Laporan -->
        <h2>Laporan Dokumen</h2>
        <div class="filter-tanggal">
            @if (isset($start_date) && isset($end_date))
                <p>Per Tanggal {{ $start_date }} Sampai Tanggal {{ $end_date }}</p>
            @else
                <p>Semua Data</p>
            @endif
        </div>

        <table class="table text-center">
            <thead>
                <tr>
                    <th style="width: 30px">NO</th>
                    <th style="width: 100px">Resi</th>
                    <th>Tanggal</th>
                    <th>Pengirim</th>
                    <th>Tujuan</th>
                    <th>Penerima</th>
                    <th>No Telp</th>
                    <th>Kategori</th>
                    <th>Pcs</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->resi }}</td>
                        <td>{{ $d->tgl_kirim }}</td>
                        <td>{{ $d->pengirim }}</td>
                        <td>{{ $d->rute->rute }}</td>
                        <td>{{ $d->penerima }}</td>
                        <td>{{ $d->no_telp_penerima }}</td>
                        <td>{{ $d->kat->nama_kategori }}</td>
                        <td>{{ $d->pcs }}</td>
                        <td>{{ 'Rp ' . number_format($d->total_harga, 0, ',', '.') }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Printing -->
    <script>
        function cetakLaporan() {
            var form = document.getElementById('cetak-form');
            var url = "{{ route('filter_print') }}" + '?' + new URLSearchParams(new FormData(form)).toString();

            window.open(url, '_blank');
        }
    </script>

    <script>
        window.print()
    </script>
</body>

</html>
