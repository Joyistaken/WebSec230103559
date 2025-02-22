@extends('layouts.master')
@section('title', 'Factorial')
@section('content')
<div class="card m-4">
    <div class="card-header">Factorial Calculator</div>
    <div class="card-body">
        <form method="GET" action="/factorial">
            <div class="mb-3">
                <label for="number" class="form-label">Enter a number:</label>
                <input type="number" class="form-control" id="number" name="number" min="1" max="20" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        @if(isset($result))
            <div class="mt-4">
                <h5>Result:</h5>
                <p>The factorial of {{ $number }} is <strong>{{ $result }}</strong>.</p>
            </div>
        @endif
    </div>
</div>
@endsection