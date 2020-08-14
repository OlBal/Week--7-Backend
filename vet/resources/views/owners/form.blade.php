@extends("app")

@section("content")
    <form method ="post"class="form card">
        @csrf
        <h2 class="card-header">Owner Form</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <input 
                required 
                placeholder = "First Name" 
                type = "text" id="first_name" name="first_name" 
                class="form-control @error('first_name')is-invalid @enderror" 
                value="{{  old('first_name')  }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Last Name" 
                type = "text" id="last_name" 
                name="last_name" 
                class="form-control @error('last_name')is-invalid @enderror" 
                value="{{ old('last_name') }}" />

                @error('last_name')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input required placeholder = "Address 1" 
                type = "text" id="address_1" 
                name="address_1" 
                class="form-control @error('address_1')is-invalid @enderror"
                value="{{ old('address_1') }}"/>

                @error('address_1')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
            
            <div class="form-group">
                <input required placeholder = "Address 2"
                type = "text" id="address_2"
                name="address_2" 
                class="form-control  @error('address_2')is-invalid @enderror" 
                value="{{ old('address_2') }}"/>

                @error('address_2')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input  
                required placeholder = "Town" 
                type="text" id="town"
                name="town"
                class="form-control @error('town')is-invalid @enderror"
                value="{{ old('town') }}" />

                @error('town')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Postcode" 
                type="text" id="postcode" 
                name="postcode" 
                class="form-control @error('postcode')is-invalid @enderror" 
                value="{{ old('postcode') }}"/>
               
                @error('postcode')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>

            <div class="form-group">
                <input 
                required placeholder = "Telephone" 
                type = "tel" id="telephone" 
                name="telephone" 
                class="form-control @error('telephone')is-invalid @enderror" 
                value="{{ old('telephone') }}"/>

                @error('telephone')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
            
            <div class="form-group">
                <input 
                placeholder = "Email" 
                type = "email" id="email" 
                name="email" 
                class="form-control  @error('email')is-invalid @enderror" 
                value=" {{ old('email') }}"/>

                @error('email')
                <p class="invalid-feedback">{{ $message }} </p>
                @enderror
            </div>
            
        </fieldset>
                
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection