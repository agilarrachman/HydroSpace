<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E1EBE2;
            /* Warna latar belakang */
        }

        h2 {
            margin: 0;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            color: #333333;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            /* Warna kartu putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 80px;
        }

        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #333333;
            text-align: center;
            /* Center-align content */
        }

        .content a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777777;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #354E33;
            /* Warna tombol */
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="https://res.cloudinary.com/doag4xupp/image/upload/v1742724946/logo-icon-color_2_jxibku.png" alt="HydroSpace Logo">
            <h2>HydroSpace</h2>
        </div>
        <div class="content">
            <p style="text-align: left;">Halo,</p>
            <p style="text-align: left;">Kamu menerima email ini karena kami menerima permintaan untuk mereset password akun Kamu.</p>
            <p>
                <a href="{{ $resetUrl }}" class="button">Reset Password</a>
            </p>
            <p style="text-align: left;">Link reset password ini akan kedaluwarsa dalam 60 menit.</p>
            <p style="text-align: left;">Jika Kamu tidak meminta reset password, abaikan email ini.</p>
        </div>
        <div class="footer">
            <p>Salam,</p>
            <p>HydroSpace</p>
            <p>Jika Kamu mengalami masalah saat mengklik tombol "Reset Password", salin dan tempel URL di bawah ini ke browser Kamu:</p>
            <p>{{ $resetUrl }}</p>
        </div>
    </div>
</body>

</html>