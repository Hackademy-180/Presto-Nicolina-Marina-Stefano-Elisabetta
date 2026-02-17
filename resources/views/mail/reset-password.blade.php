<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body style="margin:0; padding:0; background:#f5f5f5; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:50px 0;">
        <tr>
            <td align="center">
                <!-- CARD -->
                <table width="520" cellpadding="0" cellspacing="0"
                       style="max-width:520px; width:100%; background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 8px 25px rgba(0,0,0,0.08);">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#DF2F2F; padding:25px; text-align:center;">
                            <h2 style="color:#ffffff; margin:0; font-size:22px;">
                                {{ __('ui.mail.reset_password.title') }}
                            </h2>
                        </td>
                    </tr>

                    <!-- CONTENT -->
                    <tr>
                        <td style="padding:35px 30px; text-align:center; color:#333;">

                            <p style="font-size:16px; margin-bottom:25px;">
                                {{ __('ui.mail.reset_password.request_message') }}
                            </p>

                            <!-- BUTTON -->
                            <a href="{{ $url }}"
                               style="display:inline-block;
                                      background:#DF2F2F;
                                      color:#ffffff;
                                      padding:14px 30px;
                                      text-decoration:none;
                                      border-radius:10px;
                                      font-weight:bold;
                                      font-size:15px;">
                                {{ __('ui.mail.reset_password.button') }}
                            </a>

                            <p style="font-size:14px; color:#777; margin-top:30px;">
                                {{ __('ui.mail.reset_password.expiry_notice') }}
                            </p>

                        </td>
                    </tr>

                    <!-- DIVIDER -->
                    <tr>
                        <td style="padding:0 30px;">
                            <hr style="border:none; border-top:1px solid #eeeeee;">
                        </td>
                    </tr>

                    <!-- FALLBACK LINK -->
                    <tr>
                        <td style="padding:25px 30px; text-align:center;">

                            <p style="font-size:13px; color:#888;">
                                {{ __('ui.mail.reset_password.fallback_text') }}
                            </p>

                            <p style="word-break:break-all; font-size:13px;">
                                <a href="{{ $url }}" style="color:#DF2F2F; text-decoration:none;">
                                    {{ $url }}
                                </a>
                            </p>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="padding:20px; text-align:center; font-size:12px; color:#999;">
                            {{ __('ui.mail.reset_password.ignore_notice') }}
                        </td>
                    </tr>

                </table>

                <!-- SMALL FOOTER -->
                <p style="font-size:12px; color:#bbb; margin-top:25px;">
                   {{ __('ui.mail.reset_password.footer', ['year' => date('Y')]) }}
                </p>

            </td>
        </tr>
    </table>

</body>
</html>
