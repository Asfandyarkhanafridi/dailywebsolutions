@if(session()->has('message'))
    <div class="alert alert-success" id="deleteAlert">
        {{ session()->get('message') }}
    </div>
@endif
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif
