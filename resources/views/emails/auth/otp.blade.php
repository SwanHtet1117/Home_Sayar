<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body style="margin:0;padding:0;background-color:#f1f3f6;font-family:Arial,Helvetica,sans-serif;color:#263445;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;background-color:#f1f3f6;">
        <tr>
            <td align="center" style="padding:28px 12px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%;max-width:440px;border-collapse:separate;border-spacing:0;background-color:#ffffff;border-radius:12px;">
                    <tr>
                        <td align="center" style="padding:28px 24px 12px;">
                            <a href="{{ $homeUrl }}" style="display:inline-block;text-decoration:none;">
                                <img src="cid:homesayar-logo@homesayar" width="82" alt="HomeSayar" style="display:block;width:82px;max-width:100%;height:auto;border:0;">
                            </a>
                            <h1 style="margin:18px 0 0;color:#214a73;font-size:21px;line-height:1.35;font-weight:700;">{{ $title }}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 24px 28px;font-size:14px;line-height:1.65;color:#334155;">
                            <p style="margin:0 0 14px;">Hello {{ $name }},</p>
                            <p style="margin:0 0 18px;">{{ $instruction }}</p>

                            <table role="presentation" align="center" cellpadding="0" cellspacing="0" style="margin:0 auto 22px;border-collapse:separate;border-spacing:0;background-color:#f0f5fb;border-radius:7px;">
                                <tr>
                                    <td align="center" style="padding:12px 20px;color:#214a73;font-size:24px;line-height:1.3;font-weight:700;letter-spacing:7px;">
                                        {{ $code }}
                                    </td>
                                </tr>
                            </table>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin:0 0 18px;border-collapse:collapse;background-color:#fff7e6;border-left:4px solid #e89a00;">
                                <tr>
                                    <td style="padding:10px 12px;color:#76500a;font-size:12px;line-height:1.6;">
                                        <strong style="font-size:13px;">Expires in <span style="padding:2px 5px;background-color:#ffe5a8;">10 minutes</span></strong>
                                        <br>This code can only be used once.
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0;color:#526174;">{{ $ignoreMessage }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 24px 26px;color:#8491a3;font-size:12px;line-height:1.5;">
                            HomeSayar
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
