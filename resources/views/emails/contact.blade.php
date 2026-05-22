<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>

<body style="margin:0;padding:0;background-color:#0E0E0E;font-family:'Segoe UI',Arial,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0E0E0E;padding:40px 20px;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:linear-gradient(135deg,#1F1F1F 0%,#100819 100%);
                                   border-radius:16px 16px 0 0;
                                   padding:40px 40px 30px;
                                   border:1px solid #C82AEF85;
                                   border-bottom:none;">

                            <img src="{{ config('app.url') }}/assets/image/logo.png"
                                 alt="Logo"
                                 height="50"
                                 style="display:block;margin-bottom:16px;">

                            <div style="width:60px;height:3px;background:linear-gradient(90deg,#C82AEF,#9B1DB8);border-radius:2px;margin:0 auto 20px;"></div>

                            <h1 style="margin:0;font-size:22px;color:#FFFFFF;font-weight:600;">
                                New Contact Message
                            </h1>

                            <p style="margin:8px 0 0;color:#8B8B8B;font-size:14px;">
                                A new contact inquiry has been submitted
                            </p>

                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="background:#1F1F1F;
                                   border-left:1px solid #C82AEF85;
                                   border-right:1px solid #C82AEF85;
                                   padding:32px 40px;">

                            <!-- Name -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;
                                               border:1px solid #9797971f;
                                               border-radius:10px;
                                               padding:14px 18px;">

                                        <p style="margin:0 0 4px;
                                                  color:#8B8B8B;
                                                  font-size:11px;
                                                  text-transform:uppercase;
                                                  letter-spacing:1px;">
                                            Full Name
                                        </p>

                                        <p style="margin:0;color:#D1D1D1;font-size:15px;">
                                            {{ $data['first_name'] }}
                                            {{ $data['last_name'] ?? '' }}
                                        </p>

                                    </td>
                                </tr>
                            </table>

                            <!-- Email -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;
                                               border:1px solid #9797971f;
                                               border-radius:10px;
                                               padding:14px 18px;">

                                        <p style="margin:0 0 4px;
                                                  color:#8B8B8B;
                                                  font-size:11px;
                                                  text-transform:uppercase;
                                                  letter-spacing:1px;">
                                            Email Address
                                        </p>

                                        <p style="margin:0;color:#C82AEF;font-size:15px;">
                                            {{ $data['email'] }}
                                        </p>

                                    </td>
                                </tr>
                            </table>

                            <!-- Subject -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;
                                               border:1px solid #9797971f;
                                               border-radius:10px;
                                               padding:14px 18px;">

                                        <p style="margin:0 0 4px;
                                                  color:#8B8B8B;
                                                  font-size:11px;
                                                  text-transform:uppercase;
                                                  letter-spacing:1px;">
                                            Subject
                                        </p>

                                        <p style="margin:0;color:#D1D1D1;font-size:15px;">
                                            {{ $data['subject'] }}
                                        </p>

                                    </td>
                                </tr>
                            </table>

                            <!-- Message -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:#0E0E0E;
                                               border:1px solid #9797971f;
                                               border-radius:10px;
                                               padding:14px 18px;">

                                        <p style="margin:0 0 8px;
                                                  color:#8B8B8B;
                                                  font-size:11px;
                                                  text-transform:uppercase;
                                                  letter-spacing:1px;">
                                            Message
                                        </p>

                                        <p style="margin:0;
                                                  color:#D1D1D1;
                                                  font-size:15px;
                                                  line-height:1.7;">
                                            {{ $data['message'] }}
                                        </p>

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#100819;
                                   border:1px solid #C82AEF85;
                                   border-top:1px solid #9797971f;
                                   border-radius:0 0 16px 16px;
                                   padding:24px 40px;">

                            <p style="margin:0;color:#8B8B8B;font-size:16px;">
                                &copy; {{ date('Y') }}

                                <span style="color:#C82AEF;">
                                    <a href="businesslogoexperts.com" style="color:#C82AEF;">BusinessLogoExperts</a>
                                </span>

                                — All rights reserved.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>