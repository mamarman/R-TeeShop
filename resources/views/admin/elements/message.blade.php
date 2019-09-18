@if (session('message'))
    @php
        $message = session('message');
    @endphp
    <div class="alert {{ ($message['status'] == true) ? 'alert-success' : 'alert-danger' }}">
        {{ $message['message'] }}
    </div>
@endif