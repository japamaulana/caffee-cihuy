
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100px, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        figure{
            text-align: center;
            margin: 0px;
            margin-top: 40px;
        }
        img{
            width: 120px;
        }
        .title{
            text-align: center;
            font-family: 'Ribeye Marrow';
            font-size: 40px;
            margin: 0;
        }
        .alamat{
            text-align: center;
            margin: 0;
            font-size: 22px;
        }
        .pos{
            margin:auto;

        }
        hr{
            margin: auto;
            width: 681px;
            border: 1px dashed #000000;
        }
        .Order{
            text-align: center;
            font-size: 25px;
        }
        .table-pesanan{
            margin: auto; 
            font-size: 22px;     
        }
        .table-total{
            margin: auto;
            
            font-size: 22px;     

        }
        .thanks{
            margin-top: 20px;
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    <figure>
        <img src="{{ asset('img/pandalogo.png') }}" alt="pandaman">
    </figure>
    <p class="title">Cihuy Cafe</p>
    <p class="alamat">Jl.Dipatiukur <br> Bandung</p>
    <table class="pos">
        <tr>
            <td style="text-align:right; width:630px;">Pos Title:</td>
            <td align="right" style="width: 50px;">Kasir</td>
        </tr>
    </table>
    <hr>
    <p class="Order">Order By: {{ $dtpemesan->nama_pemesan }} <br> No. Meja: {{ $dtpemesan->meja->no_meja }} <br> Order Date: {{ $dtpemesan->tgl_pesan }}</p>
    <hr>
    <hr style="margin-top: 4px">
    <table class="table-pesanan">
        <tr class="tr-head">
            <th style="width: 380px; text-align:left">Pesanan</th>
            <th style="width: 150px;">Harga</th>
            <th>QTY</th>
            <th style="text-align:right; width: 100px;">Total</th>
        </tr>
        @foreach($dtpemesan->menupesan as $pesan)
        <tr>
            <td>{{ $pesan->menu->nama_menu }}</td>
            <td align="center">Rp {{ $pesan->menu->harga }}</td>
            <td align="center">{{ $pesan->qty }}</td>
            <td align="right">Rp {{ $pesan->menu->harga*$pesan->qty}}</td>
        </tr>
        @endforeach
    </table>
    <hr>
    <table class="table-total">
        <tr>
            
            <th style="width: 530px; text-align: right;">Total :</th>
            <td style="width: 150px; text-align: right;">Rp {{ $dtpemesan->Total }}</td>
            <tr>
                <th style="width: 530px; text-align: right; text-bold" > <b>Kembalian :</th>
                <td style="width: 150px; text-align: right;">Rp {{ $dtpemesan->Angsul}}</td>
            </tr>

        </tr>
    </table>
    <hr>
    <hr style="margin-top: 4px">
    <p class="thanks"> Terima Kasih - Silahkan Datang Lagi!</p>
    <p class="thanks"> CIHUYYY!!!!!</p>
    
</body>
<script>
    window.print();

</script>
</html>
