<!DUCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="Width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content ="ie= edge">
        <meta name ="scrf-token" content ="{{ csrf_token() }}">
        <style>
            table.static {
                position: relative;
                /* left: 3% */
                border: 1px solid #543535;
            }
        </style>
        <title> CETAK DATA DOKTER</title>
        </head>
        <body>
            <div class="form-group">
                <p align="center"><b>Laporan Data Dokter</b></p>
                <table class= "static" align="center" rules="all" border="1px" style="width: 95%">

                <tr> 
                    <th> No. </th>
                    <th> Gambar </th>
                    <th> Nama Dokter </th>
                    <th> Poli </th>
                </tr>

                     @foreach ($dokters as $dokter)
                     <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> 
                        @if ($dokter->image)
                        <img src="{{ asset('storage/' . $dokter->image) }}" alt="dokter" width ="40" height ="40">
                        @else
                            <img src="/img/user-photo.png" width ="40" height ="40">
                        @endif
                        </td>
                        <td> {{ $dokter->nama_dokter }} </td>
                        <td> {{ $dokter->polis->nama_poli }}</td>
                    </tr>
                    
                     @endforeach
                </table>
                </div>
                <script type="text/javascript">
                    window.print();

                </script>
                </body>
                </html>