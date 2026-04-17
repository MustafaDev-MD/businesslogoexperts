<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Package Request</title>
</head>

<body style="margin:0;padding:0;background-color:#0E0E0E;font-family:'Segoe UI',Arial,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#0E0E0E;padding:40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;">

                    {{-- Header --}}
                    <tr>
                        <td align="center" style="background:linear-gradient(135deg,#1F1F1F 0%,#100819 100%);border-radius:16px 16px 0 0;padding:40px 40px 30px;border:1px solid #C82AEF85;border-bottom:none;">
                            {{-- Logo placeholder - apna logo URL yahan dalo --}}
                            <div style="margin-bottom:16px;">
                                <span style="font-size:28px;font-weight:700;color:#FFFFFF;letter-spacing:2px;">
                                <img src="{{ config('app.url') }}/assets/image/logo.png" alt="BusinessLogoExperts" height="50" style="display:block;margin-bottom:16px;">
                                </span>
                            </div>
                            <div style="width:60px;height:3px;background:linear-gradient(90deg,#C82AEF,#9B1DB8);border-radius:2px;margin:0 auto 20px;"></div>
                            <h1 style="margin:0;font-size:22px;color:#FFFFFF;font-weight:600;letter-spacing:0.5px;">New Package Request</h1>
                            <p style="margin:8px 0 0;color:#8B8B8B;font-size:14px;">A new inquiry has been submitted</p>
                        </td>
                    </tr>

                    {{-- Package Badge --}}
                    <tr>
                        <td style="background:#1F1F1F;border-left:1px solid #C82AEF85;border-right:1px solid #C82AEF85;padding:0 40px;">
                            <div style="background:linear-gradient(135deg,#C82AEF15,#9B1DB815);border:1px solid #C82AEF85;border-radius:10px;padding:16px 24px;margin:24px 0;display:block;">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p style="margin:0 0 4px;color:#8B8B8B;font-size:12px;text-transform:uppercase;letter-spacing:1px;">Service</p>
                                            <p style="margin:0;color:#FFFFFF;font-size:16px;font-weight:600;">{{ $data['service'] }}</p>
                                        </td>
                                        <td align="right">
                                            <span style="background:#C82AEF;color:#FFFFFF;font-size:12px;font-weight:600;padding:6px 16px;border-radius:20px;letter-spacing:0.5px;">{{ $data['package'] }}</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>

                    {{-- Details --}}
                    <tr>
                        <td style="background:#1F1F1F;border-left:1px solid #C82AEF85;border-right:1px solid #C82AEF85;padding:0 40px 24px;">

                            {{-- Name --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;border:1px solid #9797971f;border-radius:10px;padding:14px 18px;">
                                        <p style="margin:0 0 4px;color:#8B8B8B;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Full Name</p>
                                        <p style="margin:0;color:#D1D1D1;font-size:15px;">{{ $data['first_name'] }} {{ $data['last_name'] }}</p>
                                    </td>
                                </tr>
                            </table>

                            {{-- Email --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;border:1px solid #9797971f;border-radius:10px;padding:14px 18px;">
                                        <p style="margin:0 0 4px;color:#8B8B8B;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Email Address</p>
                                        <p style="margin:0;color:#C82AEF;font-size:15px;">{{ $data['email'] }}</p>
                                    </td>
                                </tr>
                            </table>

                            @if(!empty($data['subject']))
                            {{-- Subject --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;border:1px solid #9797971f;border-radius:10px;padding:14px 18px;">
                                        <p style="margin:0 0 4px;color:#8B8B8B;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Subject</p>
                                        <p style="margin:0;color:#D1D1D1;font-size:15px;">{{ $data['subject'] }}</p>
                                    </td>
                                </tr>
                            </table>
                            @endif

                            {{-- Message --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="background:#0E0E0E;border:1px solid #9797971f;border-radius:10px;padding:14px 18px;">
                                        <p style="margin:0 0 8px;color:#8B8B8B;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Message</p>
                                        <p style="margin:0;color:#D1D1D1;font-size:15px;line-height:1.7;">{{ $data['message'] }}</p>
                                    </td>
                                </tr>
                            </table>

                            @if(!empty($data['files']))
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background:#0E0E0E;border:1px solid #9797971f;border-radius:10px;padding:14px 18px;">
                                        <p style="margin:0 0 8px;color:#8B8B8B;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Attached Files</p>
                                        @foreach($data['files'] as $file)
                                        @php
                                        $fileName = is_array($file) ? $file['name'] : basename($file);
                                        $filePath = is_array($file) ? $file['path'] : $file;
                                        $fileUrl = config('app.url') . '/storage/' . $filePath;
                                        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                                        $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                                        @endphp

                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                                            <tr>
                                                <td style="border:1px solid #9797971f;border-radius:8px;overflow:hidden;">

                                                    <!-- @if($isImage)
                                                    <a href="{{ $fileUrl }}" target="_blank">
                                                        <img src="{{ $fileUrl }}" alt="{{ $fileName }}"
                                                            style="width:100%;max-height:200px;object-fit:cover;display:block;">
                                                    </a>
                                                    @endif -->

                                                    <div style="padding:10px 14px;background:#1F1F1F;">
                                                        <a href="{{ $fileUrl }}" target="_blank"
                                                            style="color:#C82AEF;font-size:13px;text-decoration:none;">
                                                            &#128206; {{ $fileName }}
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                            @endif

                        </td>
                    </tr>

                    {{-- CTA Button --}}
                    <!-- <tr>
          <td align="center" style="background:#1F1F1F;border-left:1px solid #C82AEF85;border-right:1px solid #C82AEF85;padding:0 40px 32px;">
            <a href="{{ config('app.url') }}/admin" style="display:inline-block;background:linear-gradient(135deg,#C82AEF,#9B1DB8);color:#FFFFFF;text-decoration:none;font-size:14px;font-weight:600;padding:14px 36px;border-radius:8px;letter-spacing:0.5px;">
              View in Admin Panel
            </a>
          </td>
        </tr> -->

                    {{-- Footer --}}
                    <tr>
                        <td align="center" style="background:#100819;border:1px solid #C82AEF85;border-top:1px solid #9797971f;border-radius:0 0 16px 16px;padding:24px 40px;">
                            <p style="margin:0;color:#8B8B8B;font-size:16px;">
                                &copy; {{ date('Y') }}
                                <span style="color:#C82AEF;"><a href="businesslogoexperts.com" style="color:#C82AEF;">BusinessLogoExperts</a></span>
                                &mdash; All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>