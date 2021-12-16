<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feedback Form</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        
        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </head>
    <body class="antialiased">
        <div class="container pt-3"> 
            <form action="{{ route('feedback.submit') }}" method="POST">
                @csrf
            
                <div class="row"> 
                    <div class="col-xl-12 m-auto">
                        <div class="card shadow">

                            <div class="card-body pl-4 pr-4">

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="name"> Name <span class="text-danger">*</span> </label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name')}}">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="email"> Email <span class="text-danger">*</span> </label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email')}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="message"> Message <span class="text-danger">*</span> </label>
                                            <textarea type="text" name="message" id="message" class="form-control" placeholder="Message" value="{{ old('message')}}"> </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 offset-lg-6 text-right">
                                        <button type="submit" class="btn btn-success"> Submit </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
