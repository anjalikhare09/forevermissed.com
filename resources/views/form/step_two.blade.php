@extends('layout.master')

@section('title', 'Home Page')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .additional-fields {
            display: none;
            transition: all 0.3s ease;
        }

        /* Body and Container */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            /* light gray */
            padding-top: 20px;
        }

        .container {
            background-color: #ffffff;
            /* white */
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* subtle shadow */
            padding: 30px;
            max-width: 600px;
            /* adjust to your preference */
            margin: 0 auto;
        }

        /* Headings */
        h2 {
            color: #333333;
            /* dark gray */
        }

        h3 {
            color: #555555;
            /* slightly darker gray */
        }

        /* Form Styling */
        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 4px;
        }

        .form-check-input[type="radio"],
        .form-check-input[type="checkbox"] {
            margin-top: 4px;
        }

        /* Additional Fields */
        .additional-fields {
            margin-top: 20px;
        }

        /* Button */
        .btn-primary {
            background-color: #007bff;
            /* primary blue */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* slightly darker blue on hover */
        }

        /* Show Additional Fields */
        #showAdditionalFields {
            color: #007bff;
            /* primary blue */
            cursor: pointer;
        }

        .m {
            width: 60%;
            height: 30px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 20px;
        }
    </style>



            <h2>Memorial Form</h2>
            <form action="{{ route('step_3') }}" method="POST">
                @csrf                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName"
                            placeholder="First Name"
                            value="{{ old('firstName', isset($data['first_name']) ? $data['first_name'] : '') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="middleName">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="middleName"
                            placeholder="Middle Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName"
                            placeholder="Last Name"
                            value="{{ old('lastName', isset($data['last_name']) ? $data['last_name'] : '') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label>Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="relationship">Relationship</label>
                    <select class="form-control" id="relationship" name="relationship">
                        <option value="">Select</option>
                        <option value="family">Family</option>
                        <option value="friend">Friend</option>
                        <option value="colleague">Colleague</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="memorialDesign">Memorial designation</label>
                    <select class="form-control" id="memorialDesign" name="desgination">
                        <option value="">Select</option>
                        <option value="design1">designation 1</option>
                        <option value="design2">designation 2</option>
                        <option value="design3">designation 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <span id="showAdditionalFields">Show Additional Fields</span>
                </div>

                <div class="additional-fields">
                    <div class="form-group">
                        <h3>Born date</h3>
                        <input type="date" class="form-control" id="bornDate" name="born_date">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="bornCountry">Country</label>
                            <input type="text" class="form-control" id="bornCountry" name="bornCountry">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bornCity">City/Town</label>
                            <input type="text" class="form-control" id="bornCity" name="bornCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bornState">State/Area</label>
                            <input type="text" class="form-control" id="bornState" name="bornState">
                        </div>
                    </div>
                    <div class="form-group">
                        <h3>Passed away date</h3>
                        <input type="date" class="form-control" id="passedAwayDate" name="passedAwayDate">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="passedAwayCountry">Country</label>
                            <input type="text" class="form-control" id="passedAwayCountry" name="passedAwayCountry">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="passedAwayCity">City/Town</label>
                            <input type="text" class="form-control" id="passedAwayCity" name="passedAwayCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="passedAwayState">State/Area</label>
                            <input type="text" class="form-control" id="passedAwayState" name="passedAwayState">
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    https:// <input type="text" class="form-control m" name="memorial_name"
                        placeholder="Your Memorial Name">.forevermissed.com
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    @endsection
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#showAdditionalFields').click(function() {
                $('.additional-fields').toggle($(this).prop('checked'));
            });
        });
    </script>

v
<!-- resources/views/home.blade.php -->

