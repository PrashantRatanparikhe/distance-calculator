@extends('layouts.app')
 
@section('title', 'Home')

@section('content')
<section class="container py-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('calculate') }}" method="post">
                @csrf
                <div class="form-group mt-3">
                    <label for="string_one">{{ __('String One') }}</label>
                    <input type="text" name="string_one" class="form-control @error('string_one') is-invalid @enderror" value="{{ ($params ?? []) ? $params['string_one'] : old('string_one') }}" placeholder="Enter...">
                    @error('string_one')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="string_two">{{ __('String Two') }}</label>
                    <input type="text" name="string_two" class="form-control @error('string_two') is-invalid @enderror" value="{{ ($params ?? []) ? $params['string_two'] : old('string_two') }}" placeholder="Enter...">
                    @error('string_two')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('Calculate') }}</button>

                @if (count($result ?? []) > 0)
                    <div class="alert alert-dark my-4" role="alert">
                        Hamming distance between both the strings is: <strong>{{ $result['hamming_distance'] }}</strong><br>
                        Levenshtein distance between both the strings is: <strong>{{ $result['levenshtein_distance'] }}</strong>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Instructions for CLI -->
    <div class="jumbotron mt-3">
        <h3>How to run above calculation (Hamming & Levenshtein distance) using command line interface?</h3>
        <ul class="mt-3">
            <li>
                Goto your project directory using the following command.
                <pre>cd /distance-calculator</pre>
            </li>
            <li>
                Run this command
                <pre>php artisan app:calculate</pre>
            </li>
            <li>
                Input first string and hit Enter.
            </li>
            <li>
                Input second string and hit Enter.
            </li>
            <li>
                You should see the distance calculation of both the strings in the result.
            </li>
        </ul>
    </div>
</section>
@endsection