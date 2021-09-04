@extends('plantilla')
@section('content')

<div class="row">
    <div class="col-12">
     <h1>Formulario</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{route('guardarFormulario')}}" method="post">  
            @csrf
            <!-- Name input-->
            <div class="form-floating mb-3">                                                     <!--name="name"-->
                <input class="form-control" name="name" type="text" placeholder="Enter your name..." 
                    />
                <label for="name">Full name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">                                                      <!--name="email"-->
                <input class="form-control" name="email" type="email" placeholder="name@example.com" 
                    />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
                <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890"
                    data-sb-validations="required" />
                <label for="phone">Phone number</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">Es obligatorio introducir un numero de
                    telefono.</div>
            </div>
            @error('capacity')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <!-- Message input-->
            <div class="form-floating mb-3">
                <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..."
                    style="height: 10rem" data-sb-validations="required"></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
           
            <!-- Submit Button-->
            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton"
                    type="submit">Submit</button></div>
        </form>
    </div>
</div>
@endsection