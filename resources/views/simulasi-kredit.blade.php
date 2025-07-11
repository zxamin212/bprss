<x-layout>
    <!-- Page Title -->
     <div class="page-title">
       <div class="heading">
         <div class="container">
           
         </div>
       </div>
       <nav class="breadcrumbs" >
         <div class="container">
           <ol>
             <li><a href="/">Home</a></li>
             <li class="current">Simulasi Kredit</li>
           </ol>
         </div>
       </nav>
     </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Kredit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2 class="text-center">Simulasi Kredit</h2>

    <form action="{{ route('hitung-kredit') }}" method="POST">
        @csrf
        <label for="pokokPinjaman">Pokok Pinjaman (Rp):</label>
        <input type="number" id="pokokPinjaman" name="pokokPinjaman" placeholder="Contoh: 100000000" required>

        <label for="bungaTahun">Suku Bunga Tahunan (%):</label>
        <input type="number" id="bungaTahun" name="bungaTahun" placeholder="Contoh: 12" required>

        <label for="jangkaWaktu">Jangka Waktu (tahun):</label>
        <input type="number" id="jangkaWaktu" name="jangkaWaktu" placeholder="Contoh: 5" required>

        <button type="submit">Hitung Angsuran</button>
    </form>

    @isset($angsuran)
        <div class="result">
            <h3>Angsuran Bulanan: Rp {{ number_format($angsuran, 2) }}</h3>
        </div>
    @endisset

</body>
</x-layout>
