<h1>Hello World</h1>

<ul>
    @foreach ($entries as $entry)
    <li>{{ $entry->name }}: {{ $entry->content }}</li>
    @endforeach
</ul>

<form method="post" action="{{ route('guestbook.store') }}">
    {!! csrf_field() !!}
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="content">Message</label>
    <textarea name="content" id="content"></textarea>

    <input type="submit" value="Post" id="post">
</form>