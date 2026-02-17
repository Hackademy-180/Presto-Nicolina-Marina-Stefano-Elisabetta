<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ __('ui.workRequestMessage') }}</title>
</head>

<body style="margin:0; padding:0; background:#f5f5f5; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:48px 0;">
        <tr>
            <td align="center">

                <!-- CARD -->
                <table width="520" cellpadding="0" cellspacing="0"
                       style="max-width:520px; width:100%; background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 8px 25px rgba(0,0,0,0.08);">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#DF2F2F; padding:26px 24px; text-align:center;">
                            <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700;">
                                {{ __('ui.workRequestMessage') }}
                            </h1>
                        </td>
                    </tr>

                    <!-- CONTENT -->
                    <tr>
                        <td style="padding:30px 28px; color:#333;">

                            <h2 style="margin:0 0 14px 0; font-size:18px; font-weight:700;">
                                {{ __('ui.userDetailsLabel') }}
                            </h2>

                            <!-- USER BOX -->
                            <div style="background:#fafafa; border:1px solid #eeeeee; border-radius:12px; padding:16px 16px; margin-bottom:18px;">
                                <p style="margin:0 0 10px 0; font-size:14px;">
                                    <strong>{{ __('ui.firstName') }}:</strong> {{ $name }}
                                </p>
                                <p style="margin:0; font-size:14px;">
                                    <strong>{{ __('ui.emailLabel') }}:</strong> {{ $email }}
                                </p>
                            </div>

                            <p style="margin:0 0 18px 0; font-size:14px; line-height:1.5;">
                                {{ __('ui.makeRevisor', ['name' => $name]) }}
                            </p>

                            @if($user)
                                <!-- BUTTON -->
                                <div style="text-align:center; margin:22px 0 10px 0;">
                                    <a href="{{ route('make.revisor', $user) }}"
                                       style="display:inline-block; background:#DF2F2F; color:#ffffff; text-decoration:none;
                                              padding:12px 22px; border-radius:10px; font-weight:700; font-size:14px;">
                                        {{ __('ui.grantRevisorRole') }}
                                    </a>
                                </div>

                            
                                <p style="margin:14px 0 0 0; font-size:12px; color:#777; text-align:center;">
                                    {{ __('ui.mail.reset_password.fallback_text') }}
                                </p>
                                <p style="margin:8px 0 0 0; font-size:12px; word-break:break-all; text-align:center;">
                                    <a href="{{ route('make.revisor', $user) }}" style="color:#DF2F2F; text-decoration:none;">
                                        {{ route('make.revisor', $user) }}
                                    </a>
                                </p>
                            @endif

                            <hr style="border:none; border-top:1px solid #eeeeee; margin:24px 0;">

                        
                            <p style="margin:0; font-size:12px; color:#888; text-align:center;">
                                {{ __('ui.cvAttached') }}
                            </p>

                        </td>
                    </tr>

                </table>

                <!-- FOOTER -->
                <p style="margin:16px 0 0 0; font-size:12px; color:#bbb; text-align:center;">
                   {{ __('ui.mail.reset_password.footer', ['year' => date('Y')]) }}
                </p>

            </td>
        </tr>
    </table>

</body>
</html>
