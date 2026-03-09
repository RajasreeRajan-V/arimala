<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>New Career Application</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f7; font-family: Arial, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f4f7; padding:40px 16px;">
    <tr>
      <td align="center">

        <!-- Card -->
        <table width="580" cellpadding="0" cellspacing="0" border="0"
          style="max-width:580px; width:100%; background-color:#ffffff;
                 border-radius:8px; overflow:hidden;
                 box-shadow: 0 2px 12px rgba(0,0,0,0.08);">

          <!-- Header -->
          <tr>
            <td style="background-color:#107A7C; padding:28px 36px;">
              <p style="margin:0 0 4px; font-size:11px; letter-spacing:2px; text-transform:uppercase;
                         color:#bfdbfe; font-family:Arial, sans-serif;">Career Portal</p>
              <h1 style="margin:0; font-size:20px; font-weight:600;
                          color:#ffffff; font-family:Arial, sans-serif;">
                New Career Application Received
              </h1>
            </td>
          </tr>

          <!-- Intro -->
          <tr>
            <td style="padding:28px 36px 16px;">
              <p style="margin:0; font-size:14px; color:#6b7280; line-height:1.6; font-family:Arial, sans-serif;">
                A new candidate has submitted an application. Please find the details below.
              </p>
            </td>
          </tr>

          <!-- Divider -->
          <tr>
            <td style="padding:0 36px;">
              <div style="height:1px; background-color:#e5e7eb;"></div>
            </td>
          </tr>

          <!-- Details -->
          <tr>
            <td style="padding:24px 36px;">
              <table width="100%" cellpadding="0" cellspacing="0" border="0">

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top; border-bottom:1px solid #f3f4f6;">Full Name</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top; border-bottom:1px solid #f3f4f6;">
                    {{ $application->name }}
                  </td>
                </tr>

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top; border-bottom:1px solid #f3f4f6;">Email</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top; border-bottom:1px solid #f3f4f6;">
                    {{ $application->email }}
                  </td>
                </tr>

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top; border-bottom:1px solid #f3f4f6;">Phone</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top; border-bottom:1px solid #f3f4f6;">
                    {{ $application->phone }}
                  </td>
                </tr>

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top; border-bottom:1px solid #f3f4f6;">Position</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top; border-bottom:1px solid #f3f4f6;">
                    {{ $application->position }}
                  </td>
                </tr>

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top; border-bottom:1px solid #f3f4f6;">Qualification</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top; border-bottom:1px solid #f3f4f6;">
                    {{ $application->qualification }}
                  </td>
                </tr>

                <tr>
                  <td width="140" style="padding:10px 0; font-size:12px; text-transform:uppercase;
                                          letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;
                                          vertical-align:top;">Experience</td>
                  <td style="padding:10px 0 10px 16px; font-size:14px; color:#111827;
                               font-family:Arial, sans-serif; vertical-align:top;">
                    {{ $application->experience }}
                  </td>
                </tr>

              </table>
            </td>
          </tr>

          @if($application->cover_letter)
          <!-- Cover Letter -->
          <tr>
            <td style="padding:0 36px 28px;">
              <div style="height:1px; background-color:#e5e7eb; margin-bottom:24px;"></div>
              <p style="margin:0 0 10px; font-size:12px; text-transform:uppercase;
                         letter-spacing:0.8px; color:#9ca3af; font-family:Arial, sans-serif;">
                Cover Letter
              </p>
              <p style="margin:0; font-size:14px; color:#374151; line-height:1.7;
                         font-family:Arial, sans-serif; padding:16px;
                         background-color:#f9fafb; border-left:3px solid #1a56db;
                         border-radius:0 4px 4px 0;">
                {{ $application->cover_letter }}
              </p>
            </td>
          </tr>
          @endif

          <!-- Footer -->
          <tr>
            <td style="background-color:#f9fafb; border-top:1px solid #e5e7eb;
                        padding:16px 36px; text-align:center;">
              <p style="margin:0; font-size:12px; color:#9ca3af; font-family:Arial, sans-serif;">
                This is an automated notification from the Career Portal.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>