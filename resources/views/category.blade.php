<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>

<form method="POST">
    <span>Article title</span>
    <input type="text" title="title" placeholder="...">
    <input type="hidden" name="token" value="{{csrf_token()}}"><br/>
    <span>Article content</span>
    <textarea content="content" placeholder="Wpisz treść artykułu" rows="3"></textarea>
    <input type="hidden" name="token" value="{{csrf_token()}}"><br/>
    <button type="submit">Add article</button>
    <button type="reset">Cancel</button>
</form>