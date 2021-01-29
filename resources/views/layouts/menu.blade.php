{{-- Statistik --}}
<li class=" navigation-header"><span>Statistik</span></li>
<li class="{{ (request()->is('/')) ? 'active' : '' }} nav-item"><a href="{{ url('/') }}" title="Dasbor"><i class="feather icon-grid"></i><span class="menu-title">Dashboard</span></a></li>

{{-- Data Master --}}
<li class=" navigation-header"><span>Data Master</span></li>
<li class="{{ (request()->is('data-master/user')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/user') }}"><i class="feather icon-user"></i><span class="menu-title">User</span></a></li>
<li class="{{ (request()->is('data-master/kamar')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/kamar') }}"><i class="feather icon-home"></i><span class="menu-title">Kamar</span></a></li>
<li class="{{ (request()->is('data-master/customer')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/customer') }}"><i class="feather icon-users"></i><span class="menu-title">Customer</span></a></li>
<li class="{{ (request()->is('data-master/pemesanan')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/pemesanan') }}"><i class="feather icon-edit"></i><span class="menu-title">Pemesanan</span></a></li>
<li class="{{ (request()->is('data-master/check')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/check') }}"><i class="feather icon-check"></i><span class="menu-title">Check-In/Check-Out</span></a></li>
<li class="{{ (request()->is('data-master/pembayaran')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-master/pembayaran') }}"><i class="feather icon-tag"></i><span class="menu-title">Pembayaran</span></a></li>

{{-- Data Laporan --}}
<li class=" navigation-header"><span>Data Laporan</span></li>
<li class="{{ (request()->is('data-laporan/pemesanan')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-laporan/pemesanan') }}"><i class="feather icon-edit" title="Laporan"></i><span class="menu-title">Pemesanan</span></a></li>
<li class="{{ (request()->is('data-laporan/pembayaran')) ? 'active' : '' }} nav-item"><a href="{{ url('/data-laporan/pembayaran') }}" title="Template"><i class="feather icon-tag"></i><span class="menu-title">Pembayaran</span></a></li>