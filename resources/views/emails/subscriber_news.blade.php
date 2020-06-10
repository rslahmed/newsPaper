@extends('emails.layout')
@section('content')
    <tr>
        <td align="center" height="100%" valign="top" width="100%">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;" bgcolor="#ffffff">
                <tr>
                    <td align="center" valign="top" style="font-size:16px;line-height: 24px; padding:25px 0px">
                        New article posted
                    </td>
                </tr>

                <!-- description  -->
                <tr>
                    <td align="left" valign="top" style="font-size:14px; line-height: 21px;padding:0 0 12px 15px;">
                        Hi
                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="font-size:14px; line-height: 21px;padding:0 60px 0 15px;">

                        we have posted a brand new article, click "View article" to see the article

                    </td>
                </tr>
                <tr>
                    <td align="left" valign="top" style="font-size:14px; line-height: 21px;padding:12px 0 20px 15px;">

                        Thank you for being connected with us

                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>



    <!-- button -->
    <tr>
        <td align="center" height="100%" valign="top" width="100%">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;" bgcolor="#ffffff">

                <tr>
                    <td align="center" valign="top" style="padding:40px 0 80px 0px">
                        <table width="150" height="30" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFD172">
                            <tr>
                                <td align="center" valign="middle" height="30" style="font-size:14px; ">
                                    <a href="{{route('post.show', $mailData->id)}}" target="_blank" style="color:#000; display: inline-block; text-decoration: none; line-height:21px; width:150px; ">View article</a>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>

@endsection
