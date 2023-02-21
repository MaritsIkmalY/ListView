<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl" href="{{ route('list') }}">Mam</a>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
                <input type="text" placeholder="Mau Maem Apa?" class="input input-bordered" />
            </div>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="/images/Gojo.jpg" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center m-5">
        <h1 class="font-bold">List Maeman</h1>
    </div>

    <div class="flex flex-wrap gap-2 px-10 my-5">
        {{-- 1 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/sate.jpg"></figure>
                <div class="card-body">
                    <h2 class="card-title">Sate Madura</h2>
                    <p>Sate Ayam Madura adalah makanan jenis sate yang terbuat dari bahan dasar daging ayam dan diolah
                        dengan racikan bumbu yang khas dari Madura, Jawa Timur.</p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('detail') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/soto.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Soto Lamongan</h2>
                    <p>Soto Ayam Lamongan adalah jenis soto yang berkembang di Kabupaten Lamongan. Ciri makanan khas
                        Jawa Timur adalah penggunaan serbuk koya sebagai pelengkap.</p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('detail') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/pempek.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Pempek Palembang</h2>
                    <p>Pempek merupakan makanan tradisional yang berasal dari Palembang, Provinsi Sumatera Selatan.
                        Pempek terbuat dari tepung sagu dan ikan ini telah menjadi kegemaran masyarakat di luar
                        Palembang.</p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('detail') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 4 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/sate2.jpeg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Sate Padang</h2>
                    <p>Sate Padang memakai bahan daging sapi, lidah, atau jeroan dengan bumbu kuah kacang kental yang
                        ditambah dengan cabai yang banyak sehingga rasanya pedas.</p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('detail') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 5 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/kerak.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Kerak Telor</h2>
                    <p>Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam
                        atau bebek, ebi yang disangrai kering ditambah bawang merah goreng,</p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('list') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 6 --}}
        <div class="row-4 my-2">
            <div class="card card-compact h-96 w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/mi.jpeg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Mie Ayam</h2>
                    <p>Mi ayam adalah hidangan khas Indonesia yang terbuat dari mi gandum yang dibumbui dengan daging
                        ayam yang biasanya dipotong dadu. Di Indonesia, mi ayam merupakan hidangan Tionghoa-Indonesia.
                    </p>
                    <div class="card-actions justify-between">
                        <div class="rating">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <a href="{{ route('list') }}"><button class="btn btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
