<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">クレカマニア</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('charts.chart', 'クレカ診断', ['id' => 7]) !!}</li>
                    <li>{!! link_to_route('cards.search', 'クレカ条件検索') !!}</li>
                    <li>{!! link_to_route('cards.create', 'カードデータ登録') !!}</li>
                    <li>{!! link_to_route('charts.create', 'チャート登録') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>