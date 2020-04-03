
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css"  href="http://localhost/neustar/css/a.css">
</head>
<body class="layout">
    <header class="header">
    <h1 class="title">
        <span class="carret">~</span>
        Neustar
    </h1>
</header>
<main class="main">
    @if(isset($output))
        <pre class="main__results">{{ $output }}</pre>
    @endif

    @if($errors->has('input'))
        <p id="results" class="alert alert--danger">
            {{ $errors->first('input') }}
        </p>
    @endif
    @include('layout._partials.flash')

    <form id="form" method="post" action="/">
        {{ csrf_field() }}

        <span class="carret -green">&rarr;</span>
        <input
            id="url"
            name="command"
            placeholder="Enter a domain"
            autocomplete="off"
            autocorrect="off"
            autocapitalize="off"
            autofocus="autofocus"
            spellcheck="false"
        />

    </form>
</main>
</body>
</html>


<footer class="footer">
    © <a href='https://spatie.be/en/opensource'>Daniel</a> {{ date('Y') }} — type '<kbd>help</kbd>'
</footer>

@endsection
