<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #FD4E0F;
            color: #fff;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            background: #f3f3f3;
            text-align: center;
            font-size: 12px;
            color: #777;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Pesan Baru dari Form Kontak</div>
        <div class="content">
            <p><strong>Nama:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Pesan:</strong></p>
            <p>{{ $messageBody }}</p>
        </div>
        <div class="footer">
            © {{ date('Y') }} Goeks. Semua Hak Dilindungi.
        </div>
    </div>
</body>

</html>
