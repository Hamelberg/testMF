<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Checklist Outlet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    table, th, td {
        border: 1px solid #000;
        border-collapse: collapse;
        font-size: 12px;
    }
    th, td {
        padding: 4px;
        text-align: center;
    }
    .section-header {
        background-color: #e0f0e0;
        font-weight: bold;
        text-align: center;
    }
    .signature {
        height: 60px;
    }
  </style>
</head>
<body class="bg-white">
<div class="container py-4">
  
  <h5 class="text-center mb-3">FORM CHECKLIST OUTLET</h5>
  <p><strong>Nama Outlet:</strong> __________ &nbsp;&nbsp; <strong>Tanggal:</strong> __________</p>

  <table class="table table-bordered w-100">
    <thead>
      <tr>
        <th style="width:30%">Bagian</th>
        <th style="width:2%">Baik</th>
        <th style="width:2%">Rusak</th>
        <th style="width:2%">Bersih</th>
        <th style="width:2%">Kotor</th>
        <th style="width:2%">Rapih</th>
        <th style="width:2%">Tidak Rapih</th>
        <th style="width:40%">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      {{-- Section ESB --}}
    <div>
      <tr>
        <td colspan="8" class="section-header ">ESB</td>
      </tr>
      <tr>
        <td>Touch screen layar POS/Kalibrasi Layar</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>
          <div>
            <textarea class="form-control"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>Printer Kasir</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>
          <div>
            <textarea class="form-control"></textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td>TV LED Outlet</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Kabel LAN di POS / Kabel Printer</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>UPS POS Kasir</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Cash Drawer Kasir</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>

      {{-- Section CCTV --}}
    <div>
      <tr>
        <td colspan="8" class="section-header ">CCTV</td>
      </tr>
      <tr>
        <td>Kabel LAN</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>DVR</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Harddisk CCTV</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Hasil Rekaman (bisa record)</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Adaptor CCTV</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Kamera CCTV Outlet</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>

      {{-- Section Internet (MODEM) --}}
        <div>
      <tr>
        <td colspan="8" class="section-header ">Internet (MODEM)</td>
      </tr>
      <tr>
        <td>Kabel LAN</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Indikator Modem</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Adaptor Modem</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Switch</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Router Ruijie</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Hasil SpeedTest Internet</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>
      {{-- Section HP Outlet --}}
    <div>
      <tr>
        <td colspan="8" class="section-header ">HP Outlet </td>
      </tr>
      <tr>
        <td>Cek Kelayakan HP Outlet (Memory Internal)</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Charger HP Outlet</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Update WA, Online Food & VolumevHP </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>
      {{-- Section TV Outlet --}}
    <div>
      <tr>
        <td colspan="8" class="section-header ">TV Outlet </td>
      </tr>
      <tr>
        <td>Cek TV Kondisi Normal Nyala </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Remot TV Berfungsi </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Cek USB Flashdisk untuk TV Promo </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>
    {{-- Section LAPTOP Outlet --}}
    <div>
      <tr>
        <td colspan="8" class="section-header ">LAPTOP Outlet </td>
      </tr>
      <tr>
        <td>Cek Kelayakan Laptop Outlet </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Charger Laptop Outlet </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
      <tr>
        <td>Wifi Laptop Berfungsi </td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td>@include('partials.checkbox')</td>
        <td></td>
      </tr>
    </div>
    </tbody>
  </table>

  {{-- Tanda tangan --}}
  <div class="row mt-4 text-center">
    <div class="col-6">
      <p>Diperiksa Oleh:</p>
      <div class="signature"></div>
      <p>( Supervisor )</p>
    </div>
    <div class="col-6">
      <p>Disetujui Oleh:</p>
      <div class="signature"></div>
      <p>( Store Manager )</p>
    </div>
    <div class="col-6">
      <p>Disetujui Oleh:</p>
      <div class="signature"></div>
      <p>( Store Manager )</p>
    </div>
  </div>

</div>
</body>
</html>
