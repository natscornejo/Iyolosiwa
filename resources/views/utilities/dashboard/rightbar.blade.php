<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h5 class="m-0 text-white">Settings</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('assets/images/users/Avatar-Lg-BWBLK-1.jpg') }}" alt="user-img" title="Mat Helme"
                    class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>
            <h5><a href="javascript: void(0);">{{ Auth::user()->name }}</a> </h5>
            <p class="text-muted mb-0"><small>Product Owner</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <div class="row">
            <div class="col-6 text-center">
                <p class="m-0">Usuario desde</p>
                <h4 class="mb-1 mt-0">{{ Auth::user()->created_at }}</h4>
            </div>
            <div class="col-6 text-center">
                <p class="m-0">Modificado el</p>
                <h4 class="mb-1 mt-0">{{ Auth::user()->updated_at }}</h4>
            </div>
        </div>
        <hr class="mb-0" />

        <!--<div class="p-3">
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">Notifications</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">API Access</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
            </div>
            <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                <label class="custom-control-label" for="customSwitch4">Online Status</label>
            </div>
        </div> -->

        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3 pr-3">Ultimos posts</h5>
        <hr class="mb-0" />
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('assets/images/users/Avatar-S-RED-2.jpg') }}"
                            class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('assets/images/users/Avatar-S-BLK-4.jpg') }}"
                            class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
