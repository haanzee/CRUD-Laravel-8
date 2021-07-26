<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bs5\css\bootstrap.css')  }}">
    <title>Curd</title>
</head>
<body>
    <div class="container mt-5">
    <h1>Crud Application</h1>
    <hr>

        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" 
                            name="name" id="name" value="{{$student->name}}">
                    </div>   
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" 
                            name="city" id="city" value="{{$student->city}}">
                    </div>   
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" 
                            name="marks" id="marks" value="{{$student->marks}}">
                    </div> 
                    <Button type="submit" class="btn btn-primary">Update</Button>
                </form>
                @if(session()->has('status'))
                    <div class="alert alert-success">
                       {{session('status')}}     
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>