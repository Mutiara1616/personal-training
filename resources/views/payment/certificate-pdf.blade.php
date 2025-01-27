<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @page {
            size: 210mm 297mm landscape;
            margin: 0;
        }
        body {
            margin: 0;
            height: 210mm;
            width: 297mm;
            position: relative;
        }
        .border {
            position: absolute;
            top: 5mm;
            left: 5mm;
            right: 5mm;
            bottom: 5mm;
            border: 2px solid #000080;
            border-radius: 2mm;
        }
        .logo {
            position: absolute;
            top: 20mm;
            left: 50%;
            transform: translateX(-50%);
            width: 30mm;
        }
        .content {
            position: absolute;
            top: 60mm;
            left: 0;
            right: 0;
            text-align: center;
        }
        .title {
            color: #000080;
            font-size: 24pt;
            font-weight: bold;
            margin-bottom: 10mm;
        }
        .subtitle {
            color: #666;
            font-size: 12pt;
            margin-bottom: 5mm;
        }
        .name {
            color: #000080;
            font-size: 20pt;
            font-weight: bold;
            margin: 5mm 0;
            border-bottom: 1pt solid #000080;
            display: inline-block;
            padding: 0 20mm;
        }
        .course {
            font-size: 16pt;
            margin: 5mm 0;
        }
        .date {
            font-size: 12pt;
            color: #666;
            margin: 5mm 0;
        }
        .signature-container {
            position: absolute;
            bottom: 30mm;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            padding: 0 50mm;
        }
        .signature {
            text-align: center;
            width: 60mm;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .signature img {
            width: 25mm;
            margin-bottom: 3mm;
        }
        .signature-name {
            font-size: 11pt;
            font-weight: bold;
            margin-bottom: 1mm;
        }
        .signature-title {
            font-size: 9pt;
            color: #666;
        }
        .stamp {
            position: absolute;
            bottom: 50mm;
            left: 50%;
            transform: translateX(-50%);
            width: 25mm;
            z-index: 1;
        }
        .signature-line {
            width: 50mm;
            border-top: 1px solid #000;
            margin-top: 2mm;
            margin-bottom: 2mm;
        }
    </style>
</head>
<body>
    <div class="border">
        <img src="{{ $logoPath }}" class="logo">
        
        <div class="content">
            <div class="title">TIBOOOOO</div>
            
            <div class="subtitle">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</div>
            
            <div class="name">{{ $payment->member->name }}</div>
            
            <div class="subtitle">For successfully completing</div>
            
            <div class="course">{{ $payment->katalog->judul }}</div>
            
            <div class="date">
                {{ \Carbon\Carbon::parse($payment->katalog->tanggal_mulai)->format('F d, Y') }} - 
                {{ \Carbon\Carbon::parse($payment->katalog->tanggal_selesai)->format('F d, Y') }}
            </div>
        </div>

        <img src="{{ $logoPath }}" class="stamp">

        <div class="signature-container">
            <div class="signature">
                <img src="{{ $signaturePath }}">
                <div class="signature-line"></div>
                <div class="signature-name">Training Director</div>
                <div class="signature-title">REPRESENTATIVES</div>
            </div>
            
            <div class="signature">
                <img src="{{ $signaturePath }}">
                <div class="signature-line"></div>
                <div class="signature-name">Chief Executive Officer</div>
                <div class="signature-title">REPRESENTATIVES</div>
            </div>
        </div>
    </div>
</body>
</html>