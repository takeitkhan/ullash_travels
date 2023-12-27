<?php

namespace App\Helpers;

use App\Mail\SendMail;
use Mail;

//use Maatwebsite\Excel\Facades\Excel;
//use \App\Exports\MailAttachment;

class MailHelper
{
    public static function send($data, $subject, $toaddress, $cc_emails = true)
    {
        Mail::to($toaddress)->send(new SendMail($data, $subject, $cc_emails));
    }
}
