@extends('cms.template.app')

@section('custom-css')
    <style>
        .ticket {
            width: 300px;
            background-color: #ffcc00;
            /* Carnival yellow */
            border: 2px solid #ff6600;
            /* Carnival orange */
            padding: 20px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .ticket-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #ff6600;
            /* Carnival orange */
        }

        .ticket-info {
            margin-top: 20px;
            text-align: center;
        }

        .ticket-info p {
            margin: 10px 0;
            font-size: 18px;
        }

        .ticket-barcode {
            text-align: center;
            margin-top: 20px;
        }

        .ticket-barcode img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <div class="container" style="padding: 100px 0 50px 0;">
        <div class="ticket">
            <div class="ticket-item">
                <span class="ticket-label">Kredit: {{ $credit }}</span>

            </div>
            <div class="ticket-item">
                <span class="ticket-label">Point: {{ $point }}</span>

            </div>
            <div class="ticket-item">
                <span class="ticket-label">Kupon Atasan: {{ $atasan }}</span>

            </div>
            <div class="ticket-item">
                <span class="ticket-label">Kupon Bawahan: {{ $bawahan }}</span>

            </div>
            {{-- <div class="ticket-item">
                <span class="ticket-label">Kupon Aksesoris: {{ $aksesoris }}</span>

            </div> --}}
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
