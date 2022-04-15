<div>
<h4>adding user to {{$company->name}}</h4>
<form method="POST" action="{{ route('register',['company'=>$company]) }}">
 @csrf
<div class="grid grid-cols-2 w-full lowercase text-blueline gap-2 mt-3">
   <div class="col-start-1">
     <input id="name" class="text-blueline font-extralight mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="contact name"/>
     @error('name') <span class="error">{{ $message }}</span> @enderror

   </div>
   <div class="col-start-2">
     <input class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline"  type="email" name="email" value="{{ old('email') }}" required placeholder="email"  />
     @error('email') <span class="error">{{ $message }}</span> @enderror
   </div>
   <div class="col-start-1 row-start-2">
     <input name="password" class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" type="password" required placeholder="password" />
   @error('password') <span class="error">{{ $message }}</span> @enderror
   </div>
   <div class="col-start-2 row-start-2">
    <input type="password" name="password_confirmation" class="text-blueline font-extralight mt-0 w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blueline" required placeholder="confirm password"/>
    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
   </div>
   <div class="col-start-1 row-start-3">
    <button class=" text-blueline shadow-md border border-site-gray font-light p-1 rounded w-28" type="submit">add contact</button>
   </div>
   <div class="col-start-2 row-start-3">
   {{$slot}}
   </div>
</div>
</form>
<div>
