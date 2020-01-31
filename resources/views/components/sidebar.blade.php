<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo row">
        <a href="{{ url('/') }}" class="simple-text logo-mini" style="width: 90% !important;">
            <div class="logo-image-small">
                <h3 class="text-gray"><span class="text-danger">G</span>LOB</h3>
            </div>
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar">
        <ul class="nav">
            <li id="home">
                <a href="{{ url('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Tableau de bord</p>
                </a>
            </li>
            <li id="donor">
                <a href="{{ route('donor') }}">
                    <i class="nc-icon nc-user-run"></i>
                    <p>Donneurs</p>
                </a>
            </li>
        </ul>
    </div>
</div>
