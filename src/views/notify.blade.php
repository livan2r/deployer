<h1>Deploy notification</h1>
<strong>Project:</strong><span>{{ env('APP_NAME', 'App name') }}</span>

@foreach($projects as $repository => $tasks)
    <h2><strong>Repository:</strong> {{ $repository }}</h2>
    <h2><strong>Message:</strong> {{ $payload->message }}</h2>
    @foreach($tasks as $task)
        <h3><strong>Task:</strong>{{ $task }}</h3>
        @if (!empty($results[$task]))
            <p>{!! nl2br($results[$task]) !!}</p>
        @else
            <p>Not ran</p>
        @endif
    @endforeach
@endforeach
