@php
    $current_page = \Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{config('app.name')}}</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  @foreach ($admin_side_menu as $menu)
      @if (count($menu->appearedChildren) == 0)
        <li class="nav-item {{ $menu->id == getParentShowof($current_page) ? 'active' : null }}">
            <a class="nav-link" href="{{route('admin.'. $menu->as)}}">
                <i class="{{$menu->icon == '' ? $menu->icon : 'fas fa-home'}}"></i>
                <span>{{$menu->display_name}}</span>
            </a>
        </li>
      @else 
        <li class="nav-item {{ in_array($menu->parent_show, [getParentShowOf($current_page), getParentOf($current_page)]) ? 'active' : null }}">
            <a 
            class="nav-link {{ in_array($menu->parent_show, [getParentShowOf($current_page), getParentOf($current_page)]) ? 'collapsed' : null }}" 
            href="#" 
            data-toggle="collapse" data-target="#collapse_{{ $menu->route }}"
                aria-expanded="{{ $menu->parent_show == getParentOf($current_page) && getParentOf($current_page) != '' ? 'flase' : 'true' }}" 
                aria-controls="collapse_{{ $menu->route }}">
                <i class="{{$menu->icon == '' ? $menu->icon : 'fas fa-home'}}"></i>
                <span>{{$menu->display_name}}</span>
            </a>

            @if ($menu->appearedChildren !== null && count($menu->appearedChildren) > 0 )
                <div id="collapse_{{ $menu->route }}" 
                    class="collapse {{ in_array($menu->parent_show, [getParentShowOf($current_page), getParentOf($current_page)]) ? 'show' : null }}" 
                    aria-labelledby="heading_{{ $menu->route }}" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            @endif
        </li>       
      @endif      
        <!-- Divider -->
        <hr class="sidebar-divider">
  @endforeach

</ul>
<!-- End of Sidebar -->