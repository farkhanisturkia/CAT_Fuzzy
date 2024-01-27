<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

    @foreach ($questions as $question)
    <div class="card">
        <div class="card-header">
            {{ $question['question'] }}
        </div>
        <div class="card-body">
            {{ $question['category'] }}
        </div>
    </div>
@endforeach
</body>
</html>