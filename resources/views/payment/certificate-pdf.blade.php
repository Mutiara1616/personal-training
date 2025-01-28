<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            size: 297mm 210mm landscape;
            margin: 0;
        }
        body {
            margin: 0;
            height: 210mm;
            width: 297mm;
            position: relative;
        }
        .certificate-container {
            position: absolute;
            top: 10mm;
            left: 10mm;
            right: 10mm;
            bottom: 10mm;
            border: 1px solid #000080;
            border-radius: 10px;
        }
        .logo {
            position: absolute;
            top: 30mm;
            left: 30mm;
            width: 35mm;
            height: auto;
        }

        .content {
            width: 100%;
            text-align: center;
            position: absolute;
            top: 60mm;
        }
        .title {
            font-size: 36pt;
            color: #000080;
            font-weight: bold;
            margin-bottom: 15mm;
        }
        .presented {
            color: #666;
            font-size: 14pt;
            margin-bottom: 10mm;
        }
        .name {
            font-size: 28pt;
            color: #000080;
            font-weight: bold;
            margin-bottom: 10mm;
        }
        .completing {
            color: #666;
            font-size: 14pt;
            margin-bottom: 5mm;
        }
        .course {
            font-size: 18pt;
            color: #000080;
            margin-bottom: 5mm;
        }
        .date {
            font-size: 12pt;
            color: #666;
        }
        .stamp {
            position: absolute;
            left: 100mm;
            bottom: 90mm;
            width: 45mm;
            opacity: 0.9;
        }

        .signatures {
            position: absolute;
            bottom: 60mm;
            width: calc(100% - 60mm); /* Kurangi padding kiri dan kanan */
            padding: 0 30mm;
            display: flex;
            justify-content: space-between; /* Ini akan membuat spasi antara tanda tangan */
            align-items: flex-end;
        }

        .signature {
            text-align: center;
            width: 60mm;
        }

        .signature-left {
            margin-right: auto; /* Dorong ke kiri */
        }

        .signature-right {
            margin-left: auto; /* Dorong ke kanan */
        }
        .sign-img {
            width: 30mm;
            margin-bottom: 5mm;
        }

        .sign-line {
            width: 100%;
            border-top: 1px solid black;
            margin: 10mm 0 5mm 0;
        }

        .sign-name {
            font-size: 14pt;
            font-weight: bold;
            margin-bottom: 3mm;
        }

        .sign-title {
            font-size: 11pt;
            color: #666;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <img src="{{ $logoPath }}" class="logo">
        
        <div class="content">
            <div class="title">CERTIFICATE OF TRAINING</div>
            <div class="presented">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</div>
            <div class="name">{{ $participant }}</div>
            <div class="completing">For successfully completing</div>
            <div class="course">{{ $payment->katalog->judul }}</div>
            <div class="date">
                {{ \Carbon\Carbon::parse($payment->katalog->tanggal_mulai)->format('F d, Y') }} - 
                {{ \Carbon\Carbon::parse($payment->katalog->tanggal_selesai)->format('F d, Y') }}
            </div>
        </div>

        <img src="{{ public_path('images/approved.png') }}" class="stamp">

        <div class="signatures">
            <div class="signature signature-left">
                <img src="{{ $signaturePath }}" class="sign-img">
                <div class="sign-line"></div>
                <div class="sign-name">Training Director</div>
                <div class="sign-title">REPRESENTATIVES</div>
            </div>
            
            <div class="signature signature-right">
                <img src="{{ $signaturePath }}" class="sign-img">
                <div class="sign-line"></div>
                <div class="sign-name">Chief Executive Officer</div>
                <div class="sign-title">REPRESENTATIVES</div>
            </div>
        </div>
    </div>
</body>
</html>