{{-- resources/views/results.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Page</title>
</head>
<body>
    <h1>Results</h1>

    @if($results)
        <ul>
            @foreach($results as $page => $content)
                <li>
                    <strong>{{ $page }}:</strong> {{ $content }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif

</body>
</html>
