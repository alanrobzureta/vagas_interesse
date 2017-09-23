    @if($errors->any())
    <ul class="callout callout-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif