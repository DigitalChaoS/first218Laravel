<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class ="navbar-brand" href="#">WebsiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('thanks', ['name' => 'IS601'])}}">Thanks</a></li>
        </ul>
    </div>
</nav>