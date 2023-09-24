@php
    $currentUrl = url()->current();
    $urlSegments = explode('/', $currentUrl);
    $lastParameter = end($urlSegments);
    $decodedParam = urldecode($lastParameter);
@endphp

@if ($user)
    <div id="floating-icon-point" class="wehea-floating-icon wehea-point-section wehea-currency-section">
        <img src="{{ asset('images/wehea/usd-circle.svg') }}" alt="Point Icon" />
        <div>{{ $point }}</div>
    </div>

    <div id="floating-icon-credit" class="wehea-floating-icon wehea-credit-section wehea-currency-section">
        <img src="{{ asset('images/wehea/usd-square.svg') }}" alt="Credit Icon" />
        <div>{{ $credit }}</div>
    </div>

    <div id="floating-icon-kupon" class="wehea-floating-icon wehea-coupon-section wehea-currency-section">
        <img src="{{ asset('images/wehea/ticket.svg') }}" alt="Coupon Icon" />
        <div>Cek Kupon</div>
    </div>
@endif

<div class="wehea-floating-icon wehea-navigation-section">
    <label for="locationSelect" style="display:none;">Select a Location:</label>
    <select id="locationSelect" name="location">
        <option value="" disabled selected>
            @if ($lastParameter == 'wehea')
                BALAI KOTA
            @else
                {{ strtoupper($decodedParam) }}
            @endif
        </option>
        @if ($lastParameter != 'wehea')
            <option value="1">BALAI KOTA</option>
        @endif
        @if ($lastParameter != 'carnival')
            <option value="2">CARNIVAL</option>\
        @endif
        @if ($lastParameter != 'fashion')
            <option value="3">FASHION</option>
        @endif
        <option value="4">GEDUNG KESENIAN</option>
        @if ($lastParameter != 'fleamarket')
            <option value="4">FLEAMARKET</option>
        @endif
    </select>
</div>

@if ($isJoin == true)
    <div id="scanner-utama" class="wehea-floating-icon wehea-scanner-section scanner-utama">
        <img src="{{ asset('images/wehea/Scanner.svg') }}" alt="Scanner Icon" />
    </div>
@endif

<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-close">
    <img src="{{ asset('images/wehea/scanner close.svg') }}" alt="Scanner Close Icon" />
</div>


<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-arcade">
    <img src="{{ asset('images/wehea/scanner arcade.svg') }}" alt="Scanner Arcade Icon" />
</div>

<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-quest">
    <img src="{{ asset('images/wehea/scanner side quest.svg') }}" alt="Scanner Side Quest Icon" />
</div>

<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-dapat-kupon">
    <img src="{{ asset('images/wehea/scanner dapat kupon.svg') }}" alt="Scanner Dapat Kupon Icon" />
</div>

<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-tukar-kupon">
    <img src="{{ asset('images/wehea/scanner tukar kupon.svg') }}" alt="Scanner Tukar Kupon Icon" />
</div>

<div class="wehea-floating-icon wehea-scanner-fading wehea-scanner-section scanner-merchandise">
    <img src="{{ asset('images/wehea/scanner merchandise.svg') }}" alt="Scanner Merchandise Icon" />
</div>

@if ($user)
    <div class="wehea-floating-icon floating-chatbox-balai-kota-container floating-chatbox-point">
        <div class="floating-chatbox-balai-kota">
            <div class="triangle-point"></div>
            <div><span style="color: #ED927B;">POIN</span>, kamu bisa menukarkan poin dengan merchandise UMN ECO.</div>
        </div>
    </div>

    <div class="wehea-floating-icon floating-chatbox-balai-kota-container floating-chatbox-credit">
        <div class="floating-chatbox-balai-kota">
            <div class="triangle-credit"></div>
            <div><span style="color: #5B435D;">CREDIT</span>, adalah kesempatan kamu bermain di Arcade.
            </div>
        </div>
    </div>

    <div class="wehea-floating-icon floating-chatbox-balai-kota-container floating-chatbox-kupon">
        <div class="floating-chatbox-balai-kota">
            <div class="triangle-kupon"></div>
            <div><span style="color: #1f576f;">ATASAN - </span>{{ $atasan }}</div>
            <div><span style="color: #1f576f;">BAWAHAN - </span>{{ $bawahan }}</div>
        </div>
    </div>
@endif
