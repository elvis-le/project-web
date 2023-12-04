<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function sentChat(Request $request){
        $chat = new Chat;
        $chat->user_id = $request->userId;
        $chat->chat = $request->text;
        $chat->save();

        if ($request->ajax())
        {
            $output = "";
            $chats = Chat::where('user_id', $request->userId)->get();
            if ($chats) {
                foreach ($chats as $content) {

                        if($content->type == 0) {
                            $output .='<p style="color: black; background-color: #1E90FF; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); float: right; margin-top: 10px; margin-right: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">' . $content->chat . '</p>';
                        }
                        elseif($content->type == 1) {
                            $output .='<p style="color: black; background-color: white; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); margin-top: 10px; margin-left: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">' . $content->chat . '</p>';
                        };

                        }
                }
                return response($output);

        }
    }

    public function resentChat(Request $request){
        $chat = new Chat;
        $chat->user_id = $request->userId;
        $chat->chat = $request->text;
        $chat->type = 1;
        $chat->save();

        if ($request->ajax())
        {
            $output = "";
            $chats = Chat::where('user_id', $request->userId)->get();
            if ($chats) {
                foreach ($chats as $content) {

                    if($content->type == 1) {
                        $output .='<p style="color: black; background-color: #1E90FF; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); float: right; margin-top: 10px; margin-right: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">' . $content->chat . '</p>';
                    }
                    elseif($content->type == 0) {
                        $output .='<p style="color: black; background-color: white; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); margin-top: 10px; margin-left: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">' . $content->chat . '</p>';
                    };

                }
            }
            return response($output);

        }
    }
}
