<div class="left-sidebar" >
    <div class="scroll-sidebar" style="background-color: #132238;">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" style="background-color: #132238;">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                @if(Auth::user()->role == 'staff')
                <li> <a href="{{Help::url('/')}}" aria-expanded="false">
                    <i class="fa fa-tachometer"></i><span class="hide-menu" >Dashboard</span></a>
                <li> <a href="{{Help::url('anggota')}}" aria-expanded="false">
                    <i class="fa fa-group"></i><span class="hide-menu">Anggota </span></a>
                    <!-- <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('anggota/tambah-anggota')}}">Tambah Anggota </a></li>
                        <li><a href="{{Help::url('anggota')}}">Data Anggota </a></li>
                    </ul> -->
                </li>
                <li><a href="{{Help::url('pendeta')}}" aria-expanded="false">
                    <i class="fa fa-male"></i><span class="hide-menu">Pendeta </span></a>
                </li>
                <li><a href="{{Help::url('kegiatan')}}" aria-expanded="false">
                    <i class="fa fa-calendar"></i><span class="hide-menu">Kegiatan </span></a>
                </li>
                <li><a href="{{Help::url('baptis')}}" aria-expanded="false">
                    <i class="fa fa-id-card"></i><span class="hide-menu">Baptis </span></a>
                </li>
                <li><a href="{{Help::url('pernikahan')}}" aria-expanded="false">
                    <i class="fa fa-user-plus"></i><span class="hide-menu">Pernikahan</span></a>
                </li>
                <li><a href="{{Help::url('admin')}}" aria-expanded="false"><i class="fa fa-user-plus">
                    </i><span class="hide-menu">Admin</span></a>
                </li>
                
                    
                @elseif(Auth::user()->role == 'pendeta')
                <li> <a href="{{Help::url('/')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                <li> <a href="#" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Anggota</span></a>
                @endif
            </ul>
        </nav>
    </div>
</div>