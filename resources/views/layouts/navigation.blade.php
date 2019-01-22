<div class="left-sidebar" >
    <div class="scroll-sidebar" style="background-color: #132238;">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" style="background-color: #132238;">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                @if(Auth::user()->role == 'staff')
                <li> <a href="{{Help::url('/')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu" >Dashboard</span></a>
                <li> <a href="{{Help::url('anggota')}}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Anggota </span></a>
                    <!-- <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('anggota/tambah-anggota')}}">Tambah Anggota </a></li>
                        <li><a href="{{Help::url('anggota')}}">Data Anggota </a></li>
                    </ul> -->
<!--                 </li>
                <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-male">
                </i><span class="hide-menu">Pendeta </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('pendeta/tambah-pendeta')}}">Tambah Pendeta </a></li>
                        <li><a href="{{Help::url('pendeta')}}">Data Pendeta </a></li>
                    </ul>
               </li>
               <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-calendar">
                </i><span class="hide-menu">Kegiatan </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('kegiatan/tambah-kegiatan')}}">Tambah Kegiatan </a></li>
                        <li><a href="{{Help::url('kegiatan')}}">Data Kegiatan </a></li>
                    </ul>
               </li>
               <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-id-card">
                </i><span class="hide-menu">Baptis </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('baptis/tambah-baptis')}}">Tambah Baptis </a></li>
                        <li><a href="{{Help::url('baptis')}}">Data Baptis </a></li>
                    </ul>
               </li>
               <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user-plus">
                </i><span class="hide-menu">Pernikahan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('pernikahan/tambah-pernikahan')}}">Tambah Pernikahan </a></li>
                        <li><a href="{{Help::url('pernikahan')}}">Data Pernikahan </a></li>
                    </ul>
               </li> -->
               <li><a class="has-arrow  " href="{{Help::url('admin')}}" aria-expanded="false"><i class="fa fa-user-plus">
                </i><span class="hide-menu">Admin</span></a>
                    <!-- <ul aria-expanded="false" class="collapse">
                        <li><a href="{{Help::url('admin/tambah-admin')}}">Tambah Admin </a></li>
                        <li><a href="{{Help::url('admin')}}">Data Admin </a></li>
                    </ul> -->
               </li>
                
                    
                @elseif(Auth::user()->role == 'pendeta')
                <li> <a href="{{Help::url('/')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                <li> <a href="#" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Anggota</span></a>
                @endif
            </ul>
        </nav>
    </div>
</div>