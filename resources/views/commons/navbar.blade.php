<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Teaching Assistant</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">Topics</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Q&A</a></li>
                <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
                <li class="nav-item">{!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'nav-link'])!!}</a></li>
                <li class="nav-item"><a href="#" class="nav-link">利用規約</a></li>
            </ul>
        </div>
    </nav>
</header>