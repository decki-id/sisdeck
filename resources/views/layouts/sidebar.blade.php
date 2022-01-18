<div class="main-sidebar" id="sidebar-wrapper">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            @if(!empty(Auth::user()->profile->image))
            <img src="/storage/{{ Auth::user()->profile->image }}" class="rounded-circle" alt="User Image"/>
            @else
            <img src="{{ url('assets/images/default_user.png') }}" class="rounded-circle" alt="User Image"/>
            @endif
        </div>
        <div class="pull-left info">
            @if(Auth::guest())
                <p>SisDeck</p>
            @else
                <p>{{ Auth::user()->username }}</p>
            @endif
            <!-- Status -->
            <a href="#"><i class="fas fa-fw fa-circle text-success mr-1"></i>Online</a>
        </div>
    </div>

    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control dhs_search-input" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' title="Search" name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>

    <ul class="sidebar-menu" data-widget="tree">@include('/sisdeck/layouts/menu')</ul>
</div>