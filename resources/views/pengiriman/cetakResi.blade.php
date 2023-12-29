<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Card Pengiriman Barang</title>
    <style>
        /* Gaya khusus cetak */
        @media print {
            body * {
                visibility: hidden;
            }

            #printable-area,
            #printable-area * {
                visibility: visible;
            }

            #printable-area {
                position: absolute;
                left: 0;
                top: 0;
            }

            /* Menyesuaikan font dan margin cetak */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
            }

            .card {
                box-shadow: none;
                border: 1px solid #ddd;
                margin: 0;
            }

            .card-header,
            .card-footer {
                background-color: #dc3545;
                color: white;
            }

            /* Menyesuaikan ukuran kertas dan margin cetak */
            @page {
                size: auto;
                /* atau letter, A4, dll. */
                margin: 10mm;
                /* Atur margin sesuai kebutuhan Anda */
            }
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div id="printable-area">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h3 class="card-title">Detail Pengiriman</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-subtitle mb-2 text-muted">Nomor Resi:</h5>
                            <p class="card-text">{{ $data->resi }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Tanggal Pengiriman:</h5>
                            <p class="card-text">{{ $data->tgl_kirim }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Pengirim:</h5>
                            <p class="card-text">{{ $data->pengirim }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Tujuan:</h5>
                            <p class="card-text">{{ $data->rute->rute }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-subtitle mb-2 text-muted">Penerima:</h5>
                            <p class="card-text">{{ $data->penerima }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">No. Telepon Penerima:</h5>
                            <p class="card-text">{{ $data->no_telp_penerima }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Kategori:</h5>
                            <p class="card-text">{{ $data->kat->nama_kategori }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Jumlah Pcs:</h5>
                            <p class="card-text">{{ $data->pcs }}</p>

                            <h5 class="card-subtitle mb-2 text-muted">Total Harga:</h5>
                            <p class="card-text">{{ $data->total_harga }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        window.print()
    </script>
</body>

</html>
