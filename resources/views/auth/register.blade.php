@extends('layouts.app')

@section('content')
<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
   <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="mb-4">
    <label for="name" class="sr-only">Name</label>
    <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}" id="name" name="name" placeholder="Name">
    
    @error('name')
<div class="text-red-500 mt-2 text-sm">
{{$message}}
</div>
    @enderror
    </div> 
    
        
    <div class="mb-4">
      <label for="Username" class="sr-only">Username</label>
      <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}" id="username" name="username" placeholder="Your Username">
      @error('username')
      <div class="text-red-500 mt-2 text-sm">
      {{$message}}
      </div>
          @enderror
      </div>

    <div class="mb-4">
      <label for="email" class="sr-only">Email</label>
      <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}" id="email" name="email" placeholder="Your Email">
      @error('email')
      <div class="text-red-500 mt-2 text-sm">
      {{$message}}
      </div>
          @enderror  
    </div>

      <div class="mb-4">
        <label for="password" class="sr-only">Password</label>
        <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="" id="password" name="password" placeholder="Your Password">
        @error('password')
        <div class="text-red-500 mt-2 text-sm">
        {{$message}}
        </div>
            @enderror  
      </div>

        <div class="mb-4">
          <label for="password_confirmation" class="sr-only">Confirm Password</label>
          <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" id="password_confirmation" name="password_confirmation" placeholder="Confirm Your Password">
           
        </div>

          <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
          </div>
   </form>
  </div>
</div>
    
@endsection