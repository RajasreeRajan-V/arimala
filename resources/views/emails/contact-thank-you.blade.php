<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thank You | Arimala Hospital</title>
</head>

<body
    style="margin:0; padding:0; background:linear-gradient(135deg,#e6f2f6,#f4f9fb); font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td align="center">

                <!-- Card -->
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width:520px; background:#ffffff; border-radius:16px;
                          box-shadow:0 10px 30px rgba(0,0,0,0.08);
                          padding:40px; border:1px solid #eef3f6;">

                    <!-- Logo -->
                    <tr>
                        <td align="center" style="padding-bottom:20px;">
                            <img src="{{ $message->embed(public_path('img/back-logo.png')) }}" alt="Arimala Hospital"
                                style="height:80px;">

                        </td>
                    </tr>

                    <!-- Title -->
                    <tr>
                        <td align="center" style="font-size:22px; font-weight:600; color:#0E4968;
                               padding-bottom:20px;">
                            Thank You for Contacting Us
                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="font-size:15px; color:#444; line-height:1.7;">

                            <p style="margin:0 0 15px;">
                                Dear <strong>{{ $data['name'] }}</strong>,
                            </p>

                            <p style="margin:0 0 15px;">
                                Thank you for contacting <strong>Arimala Hospital</strong>.
                                We have successfully received your message and our team
                                will get back to you shortly.
                            </p>

                            <!-- Subject Box -->
                            <div style="background:#f1f7fa; border-left:4px solid #107A7C;
                                    padding:12px 15px; margin:20px 0;">
                                <p style="margin:0; font-size:14px; color:#0E4968;">
                                    <strong>Your Subject:</strong><br>
                                    {{ $data['subject'] }}
                                </p>
                            </div>

                            <p style="margin:0;">
                                Warm regards,<br>
                                <strong>Arimala Hospital</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding-top:30px; font-size:12px; color:#888;">
                            © {{ date('Y') }} Arimala Hospital. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>