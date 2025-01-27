<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Training Certificates</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }

        .certificate {
            position: relative;
            width: 100%;
            height: 297mm; /* A4 height */
            padding: 40px;
            box-sizing: border-box;
            page-break-after: always;
            background: #fff;
        }

        .header {
            position: relative;
            text-align: center;
            margin-bottom: 50px;
            padding-top: 40px;
        }

        .logo {
            position: absolute;
            top: 20px;
            right: 40px;
            width: 80px;
            height: auto;
        }

        .title {
            color: #001973;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .content {
            text-align: center;
            margin-bottom: 60px;
        }

        .presenter {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .name {
            color: #3B4EDB;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .completion {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .course {
            color: #3B4EDB;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .date {
            color: #666;
            font-size: 14px;
            margin-bottom: 40px;
        }

        .signatures {
            position: absolute;
            bottom: 60px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            padding: 0 100px;
        }

        .signature-box {
            text-align: center;
            width: 200px;
        }

        .signature-img {
            width: 120px;
            height: auto;
            margin-bottom: 10px;
        }

        .seal-img {
            width: 100px;
            height: auto;
        }

        .signature-line {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }

        .signature-title {
            font-weight: bold;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .signature-subtitle {
            color: #666;
            font-size: 10px;
            margin: 5px 0 0 0;
            padding: 0;
        }
    </style>
</head>
<body>
    @foreach($participants as $participant)
    <div class="certificate">
        <div class="header">
            <img src="{{ $logoPath }}" alt="Logo" class="logo">
            <h1 class="title">CERTIFICATE OF TRAINING</h1>
        </div>

        <div class="content">
            <p class="presenter">THIS CERTIFICATE IS PROUDLY PRESENTED TO:</p>
            <h2 class="name">{{ $participant }}</h2>
            
            <p class="completion">For successfully completing</p>
            <p class="course">{{ $payment->katalog->judul }}</p>
            
            <p class="date">
                {{ $payment->katalog->tanggal_mulai->format('F d, Y') }} - 
                {{ $payment->katalog->tanggal_selesai->format('F d, Y') }}
            </p>
        </div>

        <div class="signatures">
            <div class="signature-box">
                <img src="{{ $signaturePath }}" alt="Training Director Signature" class="signature-img">
                <div class="signature-line">
                    <p class="signature-title">Training Director</p>
                    <p class="signature-subtitle">REPRESENTATIVES</p>
                </div>
            </div>

            <img src="{{ $approvedPath }}" alt="Approved Seal" class="seal-img">

            <div class="signature-box">
                <img src="{{ $signaturePath }}" alt="CEO Signature" class="signature-img">
                <div class="signature-line">
                    <p class="signature-title">Chief Executive Officer</p>
                    <p class="signature-subtitle">REPRESENTATIVES</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>