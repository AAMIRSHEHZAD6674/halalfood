
@if(@$errors)

    @foreach($errors->all() as $e)
        <ul>

            <li>
                {{ $e }}
            </li>
        </ul>
    @endforeach

@endif



<form action="/addPost" method="post">
    @csrf
    <label for="fname">Country Name:</label><br>
    <input type="text" id="name"  name="name" value="{{ old('name') }}"><br>
    @error('name')
    <label for="fname">{{ $message }}:</label><br>
    @enderror
    <br>
    <label for="fname">Country Code:</label><br>
    <input type="text" id="code" name="code" value="{{ old('code') }}" ><br>
    @error('code')
    <label for="fname">{{ $message }}:</label><br>
    @enderror<br>
    <input type="submit" value="Submit">
</form>
