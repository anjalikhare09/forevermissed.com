@extends('layout.master')

@section('title', 'Privacy Options')
@section('content')
<style>
    /* Card styles */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        max-width: 400px;
    }

    .card-header {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Radio button styles */
    .privacy-option {
        margin-bottom: 10px;
    }

    /* Button styles */
    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-green {
        background-color: #28a745;
    }

    .btn-green:hover {
        background-color: #218838;
    }

    .btn-blue {
        background-color: #007bff;
    }

    .btn-blue:hover {
        background-color: #0069d9;
    }
</style>

<div class="card">
    <div class="card-header">Privacy Options</div>
    <form action="{{ route('step_5') }}" method="POST">
        @csrf
        <div class="privacy-option">
            <input type="radio" id="option1" name="privacy" value="public">
            <label for="option1">All visitors can view and contribute.</label>
            <p>Recommended for most memorials. This option allows easy access to the website and facilitates collaboration.</p>
        </div>
        <div class="privacy-option">
            <input type="radio" id="option2" name="privacy" value="private">
            <label for="option2">Visible only to me.</label>
            <p>Choose this option if you do not want the memorial to be visible to others at this time.</p>
        </div>
        {{-- Include hidden input fields for each key-value pair of existing $data --}}
        @foreach ($data as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <button type="submit" class="btn btn-green">Save Changes</button>
    </form>
</div>

@endsection
