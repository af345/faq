@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <body>
                    <div class="flex-center position-ref full-height">
                        <form action="{{ route('pushNotification') }}" method="post">
                            <input type="email" name="e-mail">
                            <input type="text" name="Body">
                            <button type="submit">Send Mail</button>
                            {{ csrf_field() }}
                        </form>
                    </div>
                    </body>
                </div>
    </div>
    </div>
    </div>

@endsection