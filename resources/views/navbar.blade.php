@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/images/main_icon.png') }}" width="30" height="30" class="d-inline-block align-top" alt="メインアイコン">
            TimeTravel-Chat
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">ログイン </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">新規登録</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="キーワード" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </div>
</nav>

@endsection
