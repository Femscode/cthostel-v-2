@extends('layouts.frontend_master')

@section('main_content')
<!-- Search Bar and Section Title -->
<div style="margin-bottom: 30px;">
  <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 16px; margin-bottom: 24px;">
    <div>
      <h2 id="latesthostel" style="font-size: 24px; font-weight: 800; margin: 0; display: inline-flex; align-items: center; gap: 10px;">
        <i class="fas fa-hotel" style="color: var(--brand-green);"></i>
        @if(request()->routeIs('cheapest'))
        Cheapest Hostels
        @elseif(request()->routeIs('bestrated'))
        Best Rated Hostels
        @elseif(request()->routeIs('search'))
        Search Results
        @elseif(request()->routeIs('filter'))
        Filtered Hostels
        @else
        Available Hostels
        @endif
      </h2>
      <p style="margin: 4px 0 0; font-size: 14px; color: #64748b;">Hostels near {{ $school->first()->name ?? 'your campus' }}</p>
    </div>

    <!-- Keyword Search Box & Mobile Filter Trigger -->
    <div class="ct-search-filter-row">
      <button type="button" class="ct-mobile-filter-trigger-btn">
        <i class="fas fa-sliders-h"></i> Filter
      </button>
      <form method="post" action="{{route('search')}}" style="position: relative !important; flex-grow: 1 !important; flex-shrink: 1 !important; width: 100% !important; max-width: 100% !important; min-width: 0 !important; margin: 0 !important; display: block !important; height: 44px !important;">@csrf
        <input name="school_id" type="hidden" value="{{$school_id}}">
        <input type="text" name="searchinput" value="{{ request('searchinput') ?? session()->get('search_searchinput') }}" placeholder="Search hostels..." style="width: 100% !important; height: 100% !important; border: 1px solid rgba(15, 23, 42, 0.1) !important; border-radius: 99px !important; padding-left: 20px !important; padding-right: 44px !important; font-size: 14px !important; outline: none !important; background: #ffffff !important; transition: var(--transition-smooth) !important; box-sizing: border-box !important; display: block !important; margin: 0 !important;" onfocus="this.style.borderColor='var(--brand-green)'" onblur="this.style.borderColor='rgba(15, 23, 42, 0.1)'">
        <button type="submit" style="position: absolute !important; right: 6px !important; top: 50% !important; transform: translateY(-50%) !important; width: 32px !important; height: 32px !important; border-radius: 50% !important; border: none !important; background-color: var(--brand-green) !important; color: #ffffff !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; transition: var(--transition-smooth) !important; padding: 0 !important; margin: 0 !important;"><i class="fas fa-search" style="font-size: 12px;"></i></button>
      </form>
    </div>
  </div>
</div>

<!-- Interactive Sorting Tabs Navigation -->
<div class="ct-tabs-container">
  <ul class="ct-nav-tabs">
    <li class="ct-nav-tab-item {{ request()->routeIs('cthome') || request()->routeIs('latest') ? 'active' : '' }}">
      <a href="/latest/{{ $school_id }}" class="ct-nav-tab-link">
        <i class="far fa-clock" style="margin-right: 6px;"></i> Latest
      </a>
    </li>
    <li class="ct-nav-tab-item {{ request()->routeIs('cheapest') ? 'active' : '' }}">
      <a href="/cheapest/{{ $school_id }}" class="ct-nav-tab-link">
        <i class="fas fa-tags" style="margin-right: 6px;"></i> Cheapest
      </a>
    </li>
    <li class="ct-nav-tab-item {{ request()->routeIs('bestrated') ? 'active' : '' }}">
      <a href="/bestrated/{{ $school_id }}" class="ct-nav-tab-link">
        <i class="far fa-star" style="margin-right: 6px;"></i> Best Rated
      </a>
    </li>
    <li class="ct-nav-tab-item">
      <a href="#special-request-section" class="ct-nav-tab-link" id="special-request-tab-btn">
        <i class="far fa-envelope-open" style="margin-right: 6px;"></i> Special Request
      </a>
    </li>
  </ul>
</div>

<!-- Products Grid and Special Request Tab panels wrapper -->
<div class="tab-content-wrapper">

  <!-- Hostels card grid listing -->
  <div id="hostel-grid-panel">
    <div class="ct-products-grid" id="table_data">
      @forelse($latest as $album)
      <div class="ct-product-card">
        <div class="ct-prod-img-wrap">
          <!-- Labels -->
          <div class="ct-prod-labels">
            <span class="ct-prod-badge">10% Off</span>
          </div>

          <!-- Play button if video exists -->
          @if($album->video !== null)
          <div class="ct-prod-video-overlay" title="Video available">
            <i class="fas fa-play"></i>
          </div>
          @endif

          <!-- Image Anchor -->
          <a href="{{route('cthostel',[$album->slug,$album->id])}}">
            @if($album->image !== null)
            <img loading="lazy" src="{{$album->image}}" alt="{{$album->name}}" />
            @else
            <img loading="lazy" src="video.jpg" alt="Video Placeholder" />
            @endif
          </a>
        </div>

        <div class="ct-prod-body">
          <!-- Prices -->
          <div class="ct-prod-price-box">
            <span class="ct-prod-strike-price">₦{{number_format($album->price + ($album->price * 0.1))}}</span>
            <span class="ct-prod-actual-price">₦{{number_format($album->price)}}</span>
          </div>

          <!-- Name and Location category info -->
          <h3 class="ct-prod-title">
            <a href="{{route('cthostel',[$album->slug,$album->id])}}">
              {!!Str::limit($album->name,25)!!} <span style="font-weight: 500; font-size: 13px; color: #64748b;">({!!Str::limit($album->category->name ?? '--',25)!!})</span>
            </a>
          </h3>

          <!-- View Action -->
          <input id="getid" type="hidden" value="{{$school_id}}">
          <a href="{{route('cthostel',[$album->slug,$album->id])}}" class="ct-prod-btn">
            View Hostel <i class="fas fa-arrow-right" style="font-size: 11px;"></i>
          </a>
        </div>
      </div>
      @empty
      <div style="grid-column: 1 / -1; text-align: center; padding: 40px 20px; background: #ffffff; border-radius: 16px; border: 1px solid rgba(15, 23, 42, 0.05); margin-top: 20px;">
        <i class="fas fa-search" style="font-size: 48px; color: #cbd5e1; margin-bottom: 16px; display: block;"></i>
        <h3 style="font-size: 18px; font-weight: 700; color: #334155; margin: 0 0 8px;">No hostels found</h3>
        <p style="color: #64748b; margin: 0; font-size: 14px;">Try adjusting your filters or search keywords.</p>
      </div>
      @endforelse
    </div>

    <!-- Custom Styled Pagination -->
    <div class="ct-pagination-wrap">
      {{ $latest->links('pagination::bootstrap-4') }}
    </div>
  </div>

  <!-- Special Request Tab Panel (Initially hidden, shown when tab is clicked) -->
  <div id="special-request-panel" style="display: none; padding-top: 10px;">
    <div class="ct-request-box" id="special-request-section">
      <h3 class="ct-request-title"><i class="fas fa-paper-plane" style="color: var(--brand-green); margin-right: 8px;"></i> Make Special Request</h3>
      <form id="special_request">@csrf
        <div class="ct-request-form-group">
          <label for="name">Your Full Name</label>
          <textarea rows="2" name="name" id="name" class="ct-request-textarea" placeholder="Enter your full name" required></textarea>
        </div>
        <div class="ct-request-form-group">
          <label for="phone">Phone Number (Active)</label>
          <textarea rows="2" name="phone" id="phone" class="ct-request-textarea" placeholder="Enter your phone number" required></textarea>
        </div>
        <div class="ct-request-form-group">
          <label for="description">Detailed Description</label>
          <textarea rows="5" class="ct-request-textarea" name="description" id="description" placeholder="Tell us about the kind of hostel you want (location, amenities, price, etc.)" required></textarea>
        </div>
        <button type="submit" id="request" class="ct-request-submit-btn">Submit Request</button>
      </form>
    </div>
  </div>

</div>
@endsection