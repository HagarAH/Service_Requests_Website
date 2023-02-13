<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="{{ route('home') }}"
           class="page-logo-link press-scale-down d-flex align-items-center position-relative"
           data-target="#modal-shortcut">
            <img src="img/diyanet1.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
            <span class="page-logo-text mr-1">Sistem Talep Uygulamasi</span>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">

        <div class="info-card">
            @if( auth()->user()->profile->fname  != null)

                <div class="d-flex justify-content-center my-3">
                    <div
                        class="profile-photo_sm rounded-circle d-flex align-items-center justify-content-center">
                        <p class="text-center">
                            {{ substr(auth()->user()->profile->fname, 0, 1) }}{{ substr(auth()->user()->profile->lname, 0, 1) }}</p>
                    </div>
                </div>

                <div class="info-card-text">
                    <a href="{{ route('home') }}" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ auth()->user()->profile->fname }} {{ auth()->user()->profile->lname }}
                                    </span>
                    </a>
                    <span class="d-inline-block text-truncate text-truncate-sm">
                    {{ auth()->user()->profile->daire->name }},
                    {{ auth()->user()->profile->daire->mudurluk->name }}
                </span>
                </div>
            @else
                <div class="d-flex justify-content-center my-3">
                    <div
                        class="profile-photo rounded-circle d-flex align-items-center justify-content-center">
                        <p class="text-center">{{ substr($profile->fname, 0, 1) }}{{ substr($profile->lname, 0, 1) }}</p>
                    </div>
                </div>
                <div class="info-card-text">
                    <a href="{{ route('home') }}" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ auth()->user()->name }}
                                    </span>
                    </a>
                </div>
            @endif
            <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
        </div>

        <ul id="js-nav-menu" class="nav-menu">

            @if(auth()->user()->role == 'user')

                <li class="nav-title">Talep Olustur</li>

                <li>
                    <a href="{{ route('user.server.create') }}" title="Sunucu Talep Olustur">
                        <i class="fal fa-hdd"></i>
                        <span class="nav-link-text">Sunucu Talep Oluştur</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Post.create') }}" title="Kullanici Talep Olustur">
                        <i class="fal fa-user-plus"></i>
                        <span class="nav-link-text">Kullanıcı Talep Oluştur</span>
                    </a>
                </li>

                <li class="nav-title">Talep Listelerim</li>

                <li>
                    <a href="{{ route('user.server.index') }}" title="Sunucu Talep Olustur">
                        <i class="fal fa-server"></i>
                        <span class="nav-link-text">Sunucu Talep Listem</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Post.index') }}" title="Kullanici Talep Olustur">
                        <i class="fal fa-users"></i>
                        <span class="nav-link-text">Kullanıcı Talep Listem</span>
                    </a>
                </li>

            @elseif(auth()->user()->role == 'admin')

                <li class="nav-title">Talep Listesi</li>

                <li>
                    <a href="{{ route('admin.server.index') }}" title="Sunucu Talep Listesi">
                        <i class="fal fa-server"></i>
                        <span class="nav-link-text">Sunucu Talep Listesi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.post.index') }}" title="Kullanici Talep Listesi">
                        <i class="fal fa-users"></i>
                        <span class="nav-link-text">Kullanıcı Talep Listesi</span>
                    </a>
                </li>

                <li class="nav-title">Ayarlar</li>

                <li>
                    <a href="#" title="Sunucu Ayarlari">
                        <i class="fal fa-hdd"></i>
                        <span class="nav-link-text">Sunucu Ayarları</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.cpu.index') }}" title="CPU Listesi">
                                <span class="nav-link-text">CPU Listesi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ram.index') }}" title="RAM Listesi">
                                <span class="nav-link-text">RAM Listesi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.disk.index') }}" title="Disk Listesi">
                                <span class="nav-link-text">Disk Listesi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.system.index') }}" title="Disk Listesi">
                                <span class="nav-link-text">Işletim Sistemi Versiyonu Listesi</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Kullanici Ayarlari">
                        <i class="fal fa-id-card-alt"></i>
                        <span class="nav-link-text">Kullanıcı Ayarları</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.mudurluk.index') }}" title="Genel Mudurluk Listesi">
                                <span class="nav-link-text">Genel Müdürlük Listesi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.daire.index') }}" title="Daire Baskanligi Listesi">
                                <span class="nav-link-text">Daire Başkanligi Listesi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.category.index') }}" title="Genel Mudurluk Listesi">
                                <span class="nav-link-text">Sorunlar Tipi Listesi</span>
                            </a>
                        </li>
                    </ul>
                </li>

            @endif

        </ul>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
</aside>


