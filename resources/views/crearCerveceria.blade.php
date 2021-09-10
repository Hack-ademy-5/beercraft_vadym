@extends('plantilla')
@section('content')

<div class="row my-4">
    <div class="col-12 d-flex justify-content-center">
     <h1 class="display-6">Formulario</h1>
    </div>
</div>

<div class="row">
    <div class="col-12  d-flex flex-column align-items-center">
        <form action="{{route('guardarFormulario')}}" method="post" class="w-50" id="form">  
            @csrf
            <!-- Name input-->
            <div class="form-floating mb-3">                                                     <!--name="name"-->
                <input id="name" class="form-control" name="name" type="text" placeholder="Enter your name..." 
                    />
                <label for="name">Full name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">                                                      <!--name="email"-->
                <input id="email" class="form-control" name="email" type="email" placeholder="name@example.com" 
                    />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
                <input id="phone" class="form-control" name="phone" type="tel" placeholder="(123) 456-7890"
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
                <textarea id="message" class="form-control" name="message" type="text" placeholder="Enter your message here..."
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
<style>

.invalid {
    animation: vibration 500ms forwards;
}

@keyframes vibration {
    0% {
        transform: translateX(0);
    }
    25% {
        transform: translateX(200px);
    }
    50% {
        transform: translateX(-100px);
    }
    75% {
        transform: translateX(100px);
    }
    100% {
        transform: translateX(0);
    }

}

</style>