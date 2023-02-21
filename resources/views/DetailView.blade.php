<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="navbar bg-base-200">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="{{ route('list') }}">Kembali
            </a>
        </div>
    </div>


    <div class="px-10 hero min-h-screen bg-base-100">
        <div class="hero-content flex-col lg:flex-row">
            <img src="/images/sate.jpg" class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">Sate Madura</h1>
                <p class="py-6">Sate Ayam Madura adalah makanan jenis sate yang terbuat dari bahan dasar daging ayam
                    dan diolah
                    dengan racikan bumbu yang khas dari Madura, Jawa Timur.</p>
            </div>
        </div>
    </div>

    <div class="text-center ">
        <h2 class="font-bold text-3xl">Resep Sate Madura</h2>
    </div>

    <div class="px-10 m-5">
        <h4 class="text-2xl font-bold">Bahan-bahan</h4>
        <ul>
            <li>1. Daging Ayam</li>
            <li>2. Kacang</li>
            <li>3. Kecap</li>
            <li>4. Micin</li>
        </ul>
    </div>


</body>

</html>
