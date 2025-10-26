<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #FD4E0F;
            color: white;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">Terima Kasih Telah Menghubungi Kami</div>
        <div class="content">
            <p>Halo {{ $name }},</p>
            <p>Terima kasih telah menghubungi kami. Pesan kamu sudah kami terima dan akan segera kami balas.</p>
            <p>Salam hangat,<br><strong>Goeks Team</strong></p>
        </div>
    </div>
</body>

</html>
