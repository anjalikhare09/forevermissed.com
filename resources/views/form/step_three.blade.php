@extends('layout.master')

@section('title', 'Subscription Package')
@section('content')

<style>
    /* Styling for the cards */
    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin: 10px;
        width: 300px;
        display: inline-block;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Styling for the buttons */
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }
</style>

<form action="{{route('step_4')}}" method="POST">
    @csrf

    {{-- Include hidden input fields for each key-value pair of existing $data --}}
    @foreach ($data as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach

    <div class="card">
        <h2>Basic Package</h2>
        <p>Basic features</p>
        <p>$10/month</p>
        <input type="hidden" name="package" value="basic">
        <button type="submit" class="button">Select</button>
    </div>

    <div class="card">
        <h2>Premium Package</h2>
        <p>More advanced features</p>
        <p>$20/month</p>
        <input type="hidden" name="package" value="premium">
        <button type="submit" class="button">Select</button>
    </div>

    <div class="card">
        <h2>Lifetime Package</h2>
        <p>All features for a lifetime</p>
        <p>$299</p>
        <input type="hidden" name="package" value="lifetime">
        <button type="submit" class="button">Select</button>
    </div>
</form>


@endsection
