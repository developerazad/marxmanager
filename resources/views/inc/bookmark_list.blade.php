<h3>My Bookmarks</h3>
<ul class="list-group">
    @foreach($bookmarks as $bookmark)

        <li class="list-group-item">
            <a href="{{ $bookmark->url }}" target="_blank" style="margin-right: 10px;">{{ $bookmark->name }}</a>
            <span class="label label-default">{{ $bookmark->description }}</span>
            <span class="btn btn-danger btn-xs pull-right" data-id="{{ $bookmark->id }}" id="delete_bookmark">Delete</span>
        </li>

    @endforeach
</ul>