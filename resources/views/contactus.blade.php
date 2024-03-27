@extends('layout.master')

@section('title', 'Contact Us')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Us</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf

                        <div class="form-group">
                            <label for="type_of_inquiry">Type of Inquiry</label>
                            <select class="form-control" id="type_of_inquiry" name="type_of_inquiry" required>
                                <option value="" selected="">Make a selection...</option>
                                <option value="question_or_comment">General question</option>
                                <option value="billing_question">Billing question</option>
                                <option value="report_a_problem">Report a problem</option>
                                <option value="make_a_suggestion">Make a suggestion</option>
                                <option value="share_feedback_or_testimonial">Share feedback or testimonial</option>
                                <option value="press_inquiries">Press inquiries</option>
                                <option value="partnership_inquiries">Partnership inquiries</option>
                                <option value="other">Other</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="re_enter_email">Re-enter Email address</label>
                            <input type="email" class="form-control" id="re_enter_email" name="re_enter_email" required>
                        </div>

                        <div class="form-group">
                            <label for="memorial_name">Memorial Name (optional)</label>
                            <input type="text" class="form-control" id="memorial_name" name="memorial_name">
                        </div>

                        <div class="form-group">
                            <label for="message_subject">Your Message</label>
                            <input type="text" class="form-control" id="message_subject" name="message_subject" placeholder="Input your subject here" required>
                        </div>

                        <div class="form-group">
                            <label for="message_details">Message Details</label>
                            <textarea class="form-control" id="message_details" name="message_details" rows="5" placeholder="Please enter specific details of your request. Please provide as much information as possible so we can help you quickly" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
