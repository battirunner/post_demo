@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ __($error) }}</li>
        @endforeach 
        </ul>
    </div>
@endif