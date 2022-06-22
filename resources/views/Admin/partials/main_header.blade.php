 <!-- main header @s -->
 <div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{asset('admin/images/logo.png')}}" srcset="{{asset('admin/images/logo2x.png 2x')}}" alt="logo">
                    <img class="logo-dark logo-img" src="{{asset('admin/images/logo-dark.png')}}" srcset="{{asset('admin/images/logo-dark2x.png 2x')}}" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                        <div class="">
                            <p> </p>
                        </div>
                </div>
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    @include('backend.language.language')
                    @include('backend.deshboard.dashboard_profile')
                   @include('backend.notification.notification')
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
