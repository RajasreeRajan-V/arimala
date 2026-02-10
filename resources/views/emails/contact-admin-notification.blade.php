<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message | Arimala Hospital</title>
</head>

<body style="margin:0; padding:0; background:linear-gradient(135deg,#e6f2f6,#f4f9fb);
             font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
    <tr>
        <td align="center">

            <!-- Card -->
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="max-width:520px; background:#ffffff; border-radius:16px;
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
                    <td align="center"
                        style="font-size:22px; font-weight:600; color:#0E4968;
                               padding-bottom:20px;">
                        New Contact Message Received
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="font-size:15px; color:#444; line-height:1.7;">

                        <p style="margin:0 0 15px;">
                            You have received a new contact message through the website.
                        </p>

                        <!-- Details Box -->
                        <div style="background:#f1f7fa; border-left:4px solid #107A7C;
                                    padding:12px 15px; margin:20px 0;">
                            <p style="margin:0; font-size:14px; color:#0E4968;">
                                <strong>Name:</strong> {{ $data['name'] }}<br>
                                <strong>Email:</strong> {{ $data['email'] }}<br>
                                <strong>Subject:</strong> {{ $data['subject'] }}
                            </p>
                        </div>

                        <!-- Message Box -->
                        <p style="margin:0 0 8px; font-weight:600; color:#0E4968;">
                            Message:
                        </p>

                        <div style="background:#fafafa; border:1px solid #e5e7eb;
                                    padding:12px 15px; border-radius:8px;">
                            <p style="margin:0; font-size:14px; color:#444;">
                                {{ $data['message'] }}
                            </p>
                        </div>

                        <p style="margin:20px 0 0;">
                            Please respond to this enquiry at your earliest convenience.
                        </p>

                        <p style="margin:15px 0 0;">
                            Regards,<br>
                            <strong>Arimala Hospital Website</strong>
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center"
                        style="padding-top:30px; font-size:12px; color:#888;">
                        © {{ date('Y') }} Arimala Hospital. All rights reserved.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
