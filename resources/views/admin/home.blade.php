{{--@extends('layouts.admin_navigation')--}}
{{--@section('admin-form')--}}
{{--    <div class="admin-body">--}}
{{--        <div class="chart">--}}
{{--            <div>--}}
{{--                <canvas id="myChart"></canvas>--}}
{{--            </div>--}}

{{--            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}

{{--            <script>--}}
{{--                const ctx = document.getElementById('myChart');--}}

{{--                new Chart(ctx, {--}}
{{--                    type: 'bar',--}}
{{--                    data: {--}}
{{--                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],--}}
{{--                        datasets: [{--}}
{{--                            label: '# of Votes',--}}
{{--                            data: [12, 19, 3, 5, 2, 3],--}}
{{--                            borderWidth: 1--}}
{{--                        }]--}}
{{--                    },--}}
{{--                    options: {--}}
{{--                        scales: {--}}
{{--                            y: {--}}
{{--                                beginAtZero: true--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            </script>--}}
{{--        </div>--}}
{{--        <div class="chatbox">--}}
{{--            <label for="sticky-chat">dsfsdf</label>--}}
{{--            <input id="sticky-chat" type="checkbox">--}}
{{--            <form method="post" action="/resentChat">--}}
{{--                @csrf--}}
{{--                @method('patch')--}}
{{--                @foreach($chat as $chatbox)--}}
{{--                    @if($chatbox->type == 0)--}}
{{--                        <p style="color: white">{{$chatbox->chat}}</p>--}}
{{--                    @endif--}}
{{--                    @if($chatbox->type == 1)--}}
{{--                        <p style="color: red">{{$chatbox->chat}}</p>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--                <input type="text" name="text" id="text">--}}
{{--                <button type="submit" name="id" value="{{Auth::user()->id}}">Sent</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}

@extends('layouts.admin_navigation')
@section('admin-form')

    <div class="admin-body">

        <div class="chart">
            <div>
                <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
    @foreach($users as $user)
        <div class="chatbox" id="chatbox">
            <button id="chatbox-toggle">
                <i><img src="{{$user->img}}"></i>
            </button>
            <div class="menu-chat" id="menu-chat">
                <div class="nav-chat">
                    <p>Chat box</p>
                    <button id="close-chat"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div id="chat-content" class="chat-content">
                    @csrf
                    @foreach($chat as $chatbox)
                        @if($chatbox->type == 1)
                            <p style="color: black; background-color: #1E90FF; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); float: right; margin-top: 10px; margin-right: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>
                        @endif
                        @if($chatbox->type == 0)
                            <p style="color: black; background-color: white; box-shadow: 2px 2px 2px 2px rgba(18,38,73,0.1); margin-top: 10px; margin-left: 10px; padding: 5px 10px; border-radius: 10px; max-width: 70%; display: block; clear: both;">{{$chatbox->chat}}</p>
                        @endif
                    @endforeach
                </div>
                <form class="sent-chat">
                    @csrf
                    @method('post')
                    <input type="text" name="text" id="text">
                    <button id="sent-new-chat" type="button" name="id" value="{{$user->id}}">Sent</button>
                </form>
            </div>
            <script type="text/javascript">
                $('#menu-chat').hide();
            </script>
        </div>
    @endforeach
@endsection

