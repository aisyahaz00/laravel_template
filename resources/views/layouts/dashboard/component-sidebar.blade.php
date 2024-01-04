<div class="sidebar">
    <div>
        <img src="/images/logo.jpg" class="w-full">
    </div>

    <div class="pt-4 space-y-4 px-3">
        <a href="{{ route('dashboard.beranda') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.beranda',
            ])>
            <x-fas-home class="w-5 h-5" />
            <div>Dashboard</div>
        </a>
        <a href="{{ route('dashboard.user.halamanUser') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.user.halamanUser',
            ])>
            <x-fas-users class="w-5 h-5" />
            <div>User</div>
        </a>
        <a href="{{ route('dashboard.barang.halamanBarang') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.barang.halamanBarang',
            ])>
            <x-fas-box class="w-5 h-5" />
            <div>Barang</div>
        </a>
        <a href="{{ route('dashboard.satuan.halamanSatuan') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.satuan.halamanSatuan',
            ])>
            <x-fas-box class="w-5 h-5" />
            <div>Satuan</div>
        </a>
        <a href="{{ route('dashboard.vendor.halamanVendor') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.vendor.halamanVendor',
            ])>
            <x-fas-box class="w-5 h-5" />
            <div>Vendor</div>
        </a>
        <a href="{{ route('dashboard.penjualan.halamanPenjualan') }}" @class([ 'sidebar-link' , 'active'=>
            Route::getCurrentRoute()->getName() === 'dashboard.penjualan.halamanPenjualan',
            ])>
            <x-fas-box class="w-5 h-5" />
            <div>Penjualan</div>
        </a>
    </div>
</div>