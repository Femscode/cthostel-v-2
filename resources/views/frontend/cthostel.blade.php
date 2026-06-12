@extends('layouts.frontend_master')

@section('title', 'CTHostel | ' . ($album->name ?? 'Hostel Details'))

@section('main_content')
<!-- Breadcrumb Row -->
<div class="ct-details-back-row" style="margin-bottom: 24px;">
  <a href="/latest/{{ $school_id }}" class="ct-back-btn" style="display: inline-flex; align-items: center; gap: 8px; color: var(--brand-slate); font-weight: 700; text-decoration: none; transition: var(--transition-smooth); font-size: 14px;">
    <i class="fas fa-arrow-left"></i> Back to Hostels Listing
  </a>
</div>

<!-- Hostel Header & Verification Stamp -->
<div class="ct-details-header" style="margin-bottom: 30px; border-bottom: 1px solid rgba(15, 23, 42, 0.05); padding-bottom: 20px;">
  <div style="display: flex; align-items: flex-start; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
    <div>
      <h1 style="font-size: 28px; font-weight: 900; margin: 0 0 8px; color: var(--brand-dark); font-family: var(--font-outfit) !important;">{{ $album->name }}</h1>
      <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
        <span style="background-color: #f1f5f9; color: #475569; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 6px;"><i class="fas fa-map-marker-alt" style="color: var(--brand-green); margin-right: 4px;"></i> {{ $album->category->name }}</span>
        <span style="background-color: #f1f5f9; color: #475569; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 6px;"><i class="fas fa-user-tie" style="color: var(--brand-green); margin-right: 4px;"></i> Agent: {{ $album->user->name }}</span>
      </div>
    </div>

    <div>
      @if($user->plan == 'Premium Mode')
      <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 10px; padding: 10px 16px; font-size: 13px; font-weight: 700; display: inline-flex; align-items: center; gap: 8px;">
        <i class="fas fa-check-circle" style="color: #28a745; font-size: 16px;"></i> Verified by CTHostel Team
      </div>
      @else
      <div style="background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 10px; padding: 10px 16px; font-size: 13px; font-weight: 700; display: inline-flex; align-items: center; gap: 8px;">
        <i class="fas fa-exclamation-triangle" style="color: #ffc107; font-size: 16px;"></i> Unverified Agent (Pay with caution)
      </div>
      @endif
    </div>
  </div>
</div>

<!-- Main Section: Image gallery, pricing, specs -->
<div style="display: grid; grid-template-columns: 1fr; gap: 30px;">

  <!-- Main Gallery Viewer -->
  <div>
    <div style="position: relative; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); margin-bottom: 16px; background: #f1f5f9; aspect-ratio: 16/9; max-height: 480px; display: flex; align-items: center; justify-content: center;">
      @if($album->image !== null && $album->image !== 'video.jpg')
      <img id="main-gallery-img" src="{{ $album->image }}" alt="{{ $album->name }}" style="width: 100%; height: 100%; object-fit: cover;">
      @else
      <img id="main-gallery-img" src="video.jpg" alt="Video Placeholder" style="width: 100%; height: 100%; object-fit: cover;">
      @endif
    </div>

    <!-- Gallery Thumbnails -->
    @if(count($album->albumimages) > 0)
    <div style="display: flex; gap: 10px; overflow-x: auto; padding-bottom: 8px; margin-bottom: 24px; scrollbar-width: thin;">
      <div class="gallery-thumbactive active" onclick="swapMainImage('{{ $album->image }}', this)" style="flex: 0 0 80px; width: 80px; height: 80px; border-radius: 12px; overflow: hidden; cursor: pointer; border: 2px solid var(--brand-green); transition: var(--transition-smooth); box-sizing: border-box;">
        <img src="{{ $album->image }}" alt="Hostel Main Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
      </div>

      @foreach($album->albumimages as $img)
      <div class="gallery-thumb" onclick="swapMainImage('{{ $img->image }}', this)" style="flex: 0 0 80px; width: 80px; height: 80px; border-radius: 12px; overflow: hidden; cursor: pointer; border: 2px solid transparent; transition: var(--transition-smooth); box-sizing: border-box;">
        <img src="{{ $img->image }}" alt="Hostel Image Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
      @endforeach
    </div>

    <script>
      function swapMainImage(imgSrc, element) {
        document.getElementById('main-gallery-img').src = imgSrc;
        document.querySelectorAll('.gallery-thumb, .gallery-thumbactive').forEach(function(el) {
          el.style.borderColor = 'transparent';
        });
        element.style.borderColor = 'var(--brand-green)';
      }
    </script>
    @endif
  </div>

  <!-- Pricing Summary Card -->
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
      <div>
        <span style="font-size: 13px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Annual Rent</span>
        <div style="display: flex; align-items: baseline; gap: 8px; margin-top: 4px;">
          <span style="font-size: 28px; font-weight: 900; color: var(--brand-green); font-family: var(--font-outfit) !important;">₦{{ number_format($album->price) }}</span>
          <span style="font-size: 15px; font-weight: 600; color: #ef4444; text-decoration: line-through;">₦{{ number_format($album->price * 1.1) }}</span>
        </div>
      </div>
      <div>
        <span style="background-color: var(--brand-glow); color: var(--brand-green); font-size: 12px; font-weight: 800; padding: 6px 12px; border-radius: 8px; text-transform: uppercase;">10% Off</span>
      </div>
    </div>
  </div>

  <!-- Description Block -->
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px;">
    <h3 style="font-size: 18px; font-weight: 800; margin-top: 0; margin-bottom: 16px; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 12px; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-align-left" style="color: var(--brand-green);"></i> Description</h3>
    <p style="font-size: 15px; line-height: 1.8; color: #475569; margin: 0;">{{ $album->description }}</p>
  </div>

  <!-- Walkthrough Video Player -->
  @if($album->video !== null)
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px;">
    <h3 style="font-size: 18px; font-weight: 800; margin-top: 0; margin-bottom: 16px; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 12px; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-video" style="color: var(--brand-green);"></i> Hostel Walkthrough Video</h3>
    <div style="border-radius: 16px; overflow: hidden; background: #000; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
      <video width="100%" height="auto" controls style="display: block; width: 100%; outline: none; border-radius: 16px;">
        <source src="{{ $my_video }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
  @endif

  <!-- Map Block (Distance from Campus check) -->
  @if($school_id == 1 && !empty($album->address))
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px;">
    <h3 style="font-size: 18px; font-weight: 800; margin-top: 0; margin-bottom: 16px; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 12px; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-map-marked-alt" style="color: var(--brand-green);"></i> Location Map</h3>
    <div style="border-radius: 16px; overflow: hidden; margin-bottom: 16px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
      <iframe width="100%" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=320&amp;hl=en&amp;q=alabata%20{{ urlencode($album->address) }}+()&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border: 0; display: block;"></iframe>
    </div>
    <a target="_blank" href="https://www.google.com/maps/dir/Motion+ground,+funaab+Funaab+Ceremonial+Building.+Ceremonial+Rd+110122,+Alabata/FUNAAB,+Alabata/@7.2269683,3.4348851,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x103a37343cf266c9:0xa14e9a2430b152c0!2m2!1d3.438713!2d7.2300323!1m5!1m1!1s0x103a37b89a9419d5:0x7c5b31ad6e99daab!2m2!1d3.4403079!2d7.2234932" style="background-color: var(--brand-slate); color: #ffffff !important; display: flex; align-items: center; justify-content: center; gap: 8px; height: 48px; border-radius: 12px; text-decoration: none !important; font-weight: 700; font-size: 14px; transition: var(--transition-smooth);" onmouseover="this.style.backgroundColor='var(--brand-dark)'" onmouseout="this.style.backgroundColor='var(--brand-slate)'">
      <i class="fas fa-directions"></i> Check Distance From Main Gate
    </a>
  </div>
  @endif

  <!-- Contact Agent Section -->
  <div style="background: #ffffff; border: 2px solid var(--brand-green); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(8, 154, 73, 0.1); margin-bottom: 10px;">
    <h3 style="font-size: 20px; font-weight: 900; margin-top: 0; margin-bottom: 16px; color: var(--brand-dark); display: flex; align-items: center; gap: 10px; font-family: var(--font-outfit) !important;">
      <i class="fas fa-headset" style="color: var(--brand-green); font-size: 24px;"></i> Contact Agent ({{ $album->user->name }})
    </h3>
    <p style="font-size: 14px; color: #475569; margin-bottom: 20px;">Please provide your details to contact the agent. We will securely save this on your device for future inquiries.</p>

    <form action="{{ route('counter') }}" method="GET" id="agentContactForm">
      @csrf
      <input type="hidden" name="album_id" value="{{ $album->id }}">
      <input type="hidden" name="type" id="contact_type" value="message">

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
        <div>
          <label style="font-size: 13px; font-weight: 700; color: #475569; margin-bottom: 6px; display: block;">Your Full Name *</label>
          <input type="text" name="name" id="contact_name" required style="height: 48px; padding: 0 16px; width: 100%; border: 1px solid #cbd5e1; border-radius: 12px; font-family: var(--font-inter); outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='var(--brand-green)'" onblur="this.style.borderColor='#cbd5e1'" placeholder="e.g. John Doe">
        </div>
        <div>
          <label style="font-size: 13px; font-weight: 700; color: #475569; margin-bottom: 6px; display: block;">Your Phone Number *</label>
          <input type="text" name="phone" id="contact_phone" required style="height: 48px; padding: 0 16px; width: 100%; border: 1px solid #cbd5e1; border-radius: 12px; font-family: var(--font-inter); outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='var(--brand-green)'" onblur="this.style.borderColor='#cbd5e1'" placeholder="e.g. 08012345678">
        </div>
      </div>

      <div style="display: flex; gap: 12px; flex-wrap: wrap;">
        <button type="submit" onclick="document.getElementById('contact_type').value='message'; saveContactData();" style="flex: 1; background-color: #25d366; color: #ffffff; border: none; border-radius: 12px; height: 50px; font-weight: 800; font-size: 15px; cursor: pointer; transition: 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;">
          <i class="fab fa-whatsapp" style="font-size: 18px;"></i> WhatsApp Agent
        </button>
        <button type="submit" onclick="document.getElementById('contact_type').value='call'; saveContactData();" style="flex: 1; background-color: var(--brand-green); color: #ffffff; border: none; border-radius: 12px; height: 50px; font-weight: 800; font-size: 15px; cursor: pointer; transition: 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;">
          <i class="fas fa-phone-alt" style="font-size: 16px;"></i> Call Agent
        </button>
      </div>
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Pre-fill from localStorage if available
      var savedName = localStorage.getItem('cthostel_user_name');
      var savedPhone = localStorage.getItem('cthostel_user_phone');

      if (savedName) document.getElementById('contact_name').value = savedName;
      if (savedPhone) document.getElementById('contact_phone').value = savedPhone;
    });

    function saveContactData() {
      var name = document.getElementById('contact_name').value;
      var phone = document.getElementById('contact_phone').value;

      if (name && phone) {
        localStorage.setItem('cthostel_user_name', name);
        localStorage.setItem('cthostel_user_phone', phone);
      }
    }
  </script>

  <!-- Roommate Matching Panel -->
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
      <h3 style="font-size: 18px; font-weight: 800; margin: 0; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-users" style="color: var(--brand-green);"></i> Roommate Seekers</h3>
      <button type="button" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: var(--brand-green); color: #ffffff !important; border: none; border-radius: 10px; height: 38px; padding: 0 16px; font-weight: 700; font-size: 13px; cursor: pointer; transition: var(--transition-smooth); box-shadow: 0 4px 10px rgba(8,154,73,0.15);" onmouseover="this.style.backgroundColor='var(--brand-green-hover)'" onmouseout="this.style.backgroundColor='var(--brand-green)'">
        Request Roommate
      </button>
    </div>

    @if(count($roommate) > 0)
    <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
      @foreach($roommate as $rm)
      <div style="background: #f8fafc; border: 1px solid rgba(15, 23, 42, 0.04); border-radius: 16px; padding: 18px; display: flex; flex-direction: column; justify-content: space-between; gap: 16px;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 8px;">
          <h4 style="font-size: 15px; font-weight: 800; color: var(--brand-slate); margin: 0;">{{ $rm->name }}</h4>
          <div style="display: flex; flex-wrap: wrap; gap: 6px; font-size: 11px; font-weight: 700;">
            <span style="background: rgba(8,154,73,0.08); color: var(--brand-green); padding: 3px 8px; border-radius: 4px;">Gender: {{ $rm->gender }}</span>
            <span style="background: rgba(11,44,61,0.08); color: var(--brand-slate); padding: 3px 8px; border-radius: 4px;">Religion: {{ $rm->religion }}</span>
            <span style="background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Level: {{ $rm->level }}</span>
            <span style="background: #f1f5f9; color: #475569; padding: 3px 8px; border-radius: 4px;">Dept: {{ $rm->department }}</span>
          </div>
        </div>
        <a href="https://wa.me/234{{ substr($rm->phone, 1) }}?text=Hi%2C%20I%20got%20your%20number%20from%20CTHostel.%20I%20am%20also%20in%20need%20of%20a%20roommate%20for%20{{ urlencode($album->name) }}" target="_blank" style="background-color: #25d366; color: #ffffff !important; display: inline-flex; align-items: center; justify-content: center; gap: 6px; height: 38px; border-radius: 8px; text-decoration: none !important; font-weight: 700; font-size: 12px; width: 140px; transition: var(--transition-smooth);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
          <i class="fab fa-whatsapp"></i> Chat Seeker
        </a>
      </div>
      @endforeach
    </div>
    @else
    <div style="text-align: center; padding: 30px 10px; background: #f8fafc; border-radius: 16px; border: 1px dashed rgba(15, 23, 42, 0.08);">
      <i class="fas fa-users-slash" style="font-size: 32px; color: #cbd5e1; margin-bottom: 10px; display: block;"></i>
      <p style="color: #64748b; margin: 0; font-size: 13px;">No roommate pairing requests found for this hostel.</p>
    </div>
    @endif
  </div>

  <!-- Lodging Complaint widget -->
  <div style="background: #ffffff; border: 1px solid rgba(15, 23, 42, 0.05); border-radius: 24px; padding: 24px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02); margin-bottom: 10px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
    <div>
      <h4 style="font-size: 16px; font-weight: 800; color: var(--brand-slate); margin: 0 0 4px;">Having issues with this hostel?</h4>
      <p style="color: #64748b; font-size: 13px; margin: 0;">Let us know if you find any inaccurate details or experience service issues.</p>
    </div>
    <a href="/feedback" style="background-color: #ef4444; color: #ffffff !important; height: 40px; display: inline-flex; align-items: center; justify-content: center; padding: 0 18px; border-radius: 10px; text-decoration: none !important; font-weight: 700; font-size: 12px; transition: var(--transition-smooth);" onmouseover="this.style.backgroundColor='#dc2626'" onmouseout="this.style.backgroundColor='#ef4444'">
      Make Complaint
    </a>
  </div>

  <!-- More Hostels from same Landlord/Agent -->
  @if(count($agenthostel) > 0)
  <div style="margin-top: 20px;">
    <h3 style="font-size: 20px; font-weight: 800; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 12px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-home" style="color: var(--brand-green);"></i> More Hostels by This Agent</h3>
    <div class="ct-products-grid">
      @foreach($agenthostel as $agent_h)
      @if($agent_h->id !== $album->id)
      <div class="ct-product-card">
        <div class="ct-prod-img-wrap" style="height: 150px;">
          <a href="{{ route('cthostel', [$agent_h->slug, $agent_h->id]) }}">
            @if($agent_h->image !== null)
            <img loading="lazy" src="{{ $agent_h->image }}" alt="{{ $agent_h->name }}">
            @else
            <img loading="lazy" src="video.jpg" alt="Video Placeholder">
            @endif
          </a>
        </div>
        <div class="ct-prod-body" style="padding: 16px;">
          <div class="ct-prod-price-box" style="margin-bottom: 8px;">
            <span class="ct-prod-actual-price" style="font-size: 15px;">₦{{ number_format($agent_h->price) }}</span>
          </div>
          <h3 class="ct-prod-title" style="font-size: 14px !important; height: 38px; margin-bottom: 12px;">
            <a href="{{ route('cthostel', [$agent_h->slug, $agent_h->id]) }}">{!! Str::limit($agent_h->name, 22) !!}</a>
          </h3>
          <a href="{{ route('cthostel', [$agent_h->slug, $agent_h->id]) }}" class="ct-prod-btn" style="height: 36px; font-size: 12px; border-radius: 8px;">View details</a>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  @endif

  <!-- Similar Hostels nearby -->
  @if(count($similar_hostels) > 0)
  <div style="margin-top: 30px;">
    <h3 style="font-size: 20px; font-weight: 800; border-bottom: 2px solid rgba(8, 154, 73, 0.1); padding-bottom: 12px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px; font-family: var(--font-outfit) !important;"><i class="fas fa-building" style="color: var(--brand-green);"></i> Similar Hostels Nearby</h3>
    <div class="ct-products-grid">
      @foreach($similar_hostels as $sim_h)
      @if($sim_h->id !== $album->id)
      <div class="ct-product-card">
        <div class="ct-prod-img-wrap" style="height: 150px;">
          <a href="{{ route('cthostel', [$sim_h->slug, $sim_h->id]) }}">
            @if($sim_h->image !== null)
            <img loading="lazy" src="{{ $sim_h->image }}" alt="{{ $sim_h->name }}">
            @else
            <img loading="lazy" src="video.jpg" alt="Video Placeholder">
            @endif
          </a>
        </div>
        <div class="ct-prod-body" style="padding: 16px;">
          <div class="ct-prod-price-box" style="margin-bottom: 8px;">
            <span class="ct-prod-actual-price" style="font-size: 15px;">₦{{ number_format($sim_h->price) }}</span>
          </div>
          <h3 class="ct-prod-title" style="font-size: 14px !important; height: 38px; margin-bottom: 12px;">
            <a href="{{ route('cthostel', [$sim_h->slug, $sim_h->id]) }}">{!! Str::limit($sim_h->name, 22) !!}</a>
          </h3>
          <a href="{{ route('cthostel', [$sim_h->slug, $sim_h->id]) }}" class="ct-prod-btn" style="height: 36px; font-size: 12px; border-radius: 8px;">View details</a>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  @endif

</div>

<!-- Roommate Request Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 24px; border: none; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
      <div class="modal-header" style="background-color: var(--brand-dark); color: #ffffff; padding: 20px 24px; border-bottom: none; display: flex; align-items: center; justify-content: space-between;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 18px; font-weight: 800; color: #ffffff; margin: 0; font-family: var(--font-outfit) !important;"><i class="fas fa-user-plus" style="color: var(--brand-green); margin-right: 8px;"></i> Roommate Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff; background: none; border: none; font-size: 24px; cursor: pointer; padding: 0;">&times;</button>
      </div>
      <form id="roommate_request" method="post" style="margin: 0;">
        @csrf
        <div class="modal-body" style="padding: 24px; display: grid; gap: 16px; background-color: #fbfcff;">
          <input type="hidden" value="{{ $album->id }}" id="album_id">

          <div class="ct-request-form-group" style="margin: 0;">
            <label for="name" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Your Full Name</label>
            <input type="text" id="name" name="name" class="ct-request-textarea" style="height: 44px; padding: 0 16px;" placeholder="e.g. John Doe" required>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <div class="ct-request-form-group" style="margin: 0;">
              <label for="gender" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Gender</label>
              <select id="gender" class="ct-request-textarea" style="height: 44px; padding: 0 16px;" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="ct-request-form-group" style="margin: 0;">
              <label for="religion" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Religion</label>
              <select id="religion" class="ct-request-textarea" style="height: 44px; padding: 0 16px;" name="religion" required>
                <option value="">Select Religion</option>
                <option value="Christianity">Christianity</option>
                <option value="Islamic">Islamic</option>
                <option value="Traditional">Traditional</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
            <div class="ct-request-form-group" style="margin: 0;">
              <label for="department" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Department</label>
              <input type="text" id="department" name="department" class="ct-request-textarea" style="height: 44px; padding: 0 16px;" placeholder="e.g. Computer Science" required>
            </div>

            <div class="ct-request-form-group" style="margin: 0;">
              <label for="level" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Academic Level</label>
              <select class="ct-request-textarea" style="height: 44px; padding: 0 16px;" id="level" name="level" required>
                <option value="">Select Level</option>
                <option value="100 Level">100 Level</option>
                <option value="200 Level">200 Level</option>
                <option value="300 Level">300 Level</option>
                <option value="400 Level">400 Level</option>
                <option value="500 Level">500 Level</option>
                <option value="600 Level">600 Level</option>
              </select>
            </div>
          </div>

          <div class="ct-request-form-group" style="margin: 0;">
            <label for="phone" style="font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 6px; display: block;">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="ct-request-textarea" style="height: 44px; padding: 0 16px;" placeholder="e.g. 08012345678" required>
          </div>
        </div>
        <div class="modal-footer" style="padding: 16px 24px; border-top: none; background-color: #f1f5f9; display: flex; gap: 10px; justify-content: flex-end;">
          <button type="button" class="ct-back-btn" data-dismiss="modal" style="background: none; border: none; font-size: 13px; font-weight: 700; color: #64748b; cursor: pointer; height: 44px; padding: 0 20px;">Cancel</button>
          <button type="submit" id="request" class="ct-filter-btn" style="width: auto !important; height: 44px !important; padding: 0 24px !important; margin: 0 !important; font-size: 13px !important;">Submit Request</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- AJAX handler for roommate requests -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Handle Roommate Form Submission
    var roommateForm = document.getElementById('roommate_request');
    if (roommateForm) {
      roommateForm.addEventListener('submit', function(e) {
        e.preventDefault();
        var submitBtn = document.getElementById('request');
        if (submitBtn) submitBtn.disabled = true;

        var fd = new FormData();
        fd.append('name', document.getElementById('name').value);
        fd.append('album_id', document.getElementById('album_id').value);
        fd.append('gender', document.getElementById('gender').value);
        fd.append('religion', document.getElementById('religion').value);
        fd.append('department', document.getElementById('department').value);
        fd.append('level', document.getElementById('level').value);
        fd.append('phone', document.getElementById('phone').value);

        $.ajax({
          type: 'POST',
          url: "{{ route('storeroommate') }}",
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(data) {
            $('#exampleModalCenter').modal('hide');
            if (typeof swal !== 'undefined') {
              swal("Success", "Request submitted successfully!", "success");
            } else {
              alert("Request submitted successfully!");
            }
            setTimeout(function() {
              window.location.reload();
            }, 1500);
          },
          error: function(xhr, status, error) {
            console.log(error);
            if (typeof swal !== 'undefined') {
              swal("Oops", "Request not submitted, please try again.", "error");
            } else {
              alert("Request not submitted, please try again.");
            }
            if (submitBtn) submitBtn.disabled = false;
          }
        });
      });
    }
  });
</script>
@endsection