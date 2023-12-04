<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Request\RegisterRequest;

class RegisterController extends Controller
{

    /**
     * Create a new controller instance
     *
     * @return void
     */

    public function register(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
            're-password'=>'required',
        ]);

        if ($request['password'] == $request['re-password'] && $request['password'] == $request['re-password']){
            DB::table('users')->insert([
                ['email'=>$request['email'], 'password'=>$request['password']],
            ]);
            return redirect('customer/home');
        }else{
            return redirect('login');
        }
    }
//    public function boot(): void
//    {
//        // ...
//
//        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
//            return (new MailMessage)
//                ->subject('Verify Email Address')
//                ->line('Click the button below to verify your email address.')
//                ->action('Verify Email Address', $url);
//        });
//    }
//
//    /**
//     * Get the mail representation of the notification.
//     */
//    public function toMail(object $notifiable): MailMessage
//    {
//        $url = url('/invoice/'.$this->invoice->id);
//
//        return (new MailMessage)
//            ->greeting('Hello!')
//            ->line('One of your invoices has been paid!')
//            ->lineIf($this->amount > 0, "Amount paid: {$this->amount}")
//            ->action('View Invoice', $url)
//            ->line('Thank you for using our application!');
//    }
}
