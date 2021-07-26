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
    <div class="container mt-5 shadow">
    <h1>Crud Application</h1>
    <hr>

        <div class="row my-5">
            <div class="col-sm-5">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                        @error('name')
                            {{$message}}    
                        @enderror    
                    </div>   
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city">
                        @error('city')
                            {{$message}}    
                        @enderror    

                    </div>   
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" name="marks" id="marks">
                        @error('marks')
                            {{$message}}    
                        @enderror    

                    </div> 
                    <Button type="submit" class="btn btn-primary">Submit</Button>
                    <br>                    
                </form>
                <div class="my-5">
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                        {{session('status')}}     
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-sm-7">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->marks}}</td>
                            <td>
                                <a href="{{ url('/edit', $item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ url('/delete', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>        
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
                

            </div>
        
        </div> 
    </div>
</body>
</html>