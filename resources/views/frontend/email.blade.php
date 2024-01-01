<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title></title>
</head>
<body style="margin: 0; padding: 0">
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-repeat: repeat-x; background-color: #ffffff; padding-top: 20px;">
    <tr>
        <td align="center">
            <div style="width: 100%; max-width: 650px; margin: 0 auto;">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 650px; margin: 0 auto;">
                    <tbody>
                    <tr>
                        <td>
                            <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 620px; margin: 0 auto; background: #ffffff;">
                                <tbody>
                                <tr>
                                    <td style="background-color: #ffffff;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding-top: 20px; padding-bottom: 20px;">
                                            <tbody>
                                            <tr>
                                                <td style="text-align: center;"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: #f9f9f9; color: #000000;" height="300">
                                        <div style="color: #1ca1ec; font-size: 30px; text-align: center; font-family: Verdana, sans-serif; font-weight: bold; margin-bottom: 20px;">Congratulations</div>
                                        <div style="color: #000000; font-size: 20px; font-family: Verdana, sans-serif; text-align: center;"> You have a new Contact Email from  comfybd </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border: 4px solid #f9f9f9;">
                                            <tbody>
                                            <tr>
                                                <td width="600" style="padding-top: 70px; padding-bottom: 40px; padding-left: 70px; padding-right: 70px;">
                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>
                                                        <tr>
                                                            <td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;"><label style="font-weight: bold; display: block; margin-bottom: 10px;">Name</label>
                                                                <div style="margin-bottom: 15px;">
                                                                    {!! $messages['name'] ?? null !!}
                                                                </div>
                                                                <div style="border-bottom: 2px solid #f4f4f4;"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;"><label style="font-weight: bold; display: block; margin-bottom: 10px;">Email</label>
                                                                <div style="margin-bottom: 15px;">
                                                                    <a href="mailto: {!! $messages['email'] ?? null !!}]" style="color: #000000;">
                                                                        {!! $messages['email'] ?? null !!}
                                                                    </a></div>
                                                                <div style="border-bottom: 2px solid #f4f4f4;"></div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;"><label style="font-weight: bold; display: block; margin-bottom: 10px;">Phone</label>
                                                                <div style="margin-bottom: 15px;">
                                                                    {!! $messages['phone'] ?? null !!}
                                                                </div>
                                                                <div style="border-bottom: 2px solid #f4f4f4;"></div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;"><label style="font-weight: bold; display: block; margin-bottom: 10px;">Subject</label>
                                                                <div style="margin-bottom: 15px;">
                                                                    {!! $messages['subject'] ?? null !!}
                                                                </div>
                                                                <div style="border-bottom: 2px solid #f4f4f4;"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px; line-height: 25px;"><label style="font-weight: bold; display: block; margin-bottom: 10px;">Message</label>
                                                                <div>
                                                                    {!! $messages['message'] ?? null !!}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="20"></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>

</table>
</body>
</html>
