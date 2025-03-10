<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="{{ route('calculator.calculate') }}" method="POST">
        @csrf
        <input type="number" name="number1" placeholder="First number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="number2" placeholder="Second number" required>
        <button type="submit">Calculate</button>
    </form>

    @if(isset($result))
        <h2>Result: {{ $result }}</h2>
    @endif
</body>
</html>
