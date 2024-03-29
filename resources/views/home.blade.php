
<html>
    <head>
        <title>Website .: Profile</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
    </head>
    <body>
        <div class="uk-container uk-container-small">
            <form method="post"action="chat">
                @csrf
                <h2 class="uk-margin">This is {{Auth::user()->name}}</h2>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" name="name" type="text" placeholder="Name" aria-label="Input"value="{{Auth::user()->name}}" disabled>
                    </div>
                   <textarea class="uk-textarea" name="message" id="" cols="30" rows="10"></textarea>
                    
                    <hr/>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary">Send Comment</button>
                    </div>
                </fieldset>
            </form>
            <hr/>
            @foreach($chats as $item)
                <div class="uk-margin">
                    <h3>{{$item->user->email}}</h3>
                    <p>{{$item->message}}</p>
                    @if(Auth::user()->id == $item->user->id)
                    <a href="/chat/delete/{{$item->id}}">Hapus Chat</a>
                    @endif
                </div>
            @endforeach
            <a href="/login/logout">Logout</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>
    </body>
</html>