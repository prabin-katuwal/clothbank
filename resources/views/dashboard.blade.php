<form action="{{route('donatenow.store')}}" method="post">
    @csrf
    <input type="text" name="fullname" value="{{Auth::user()->name}}" readonly>
    <input type="email" name="email" value="{{Auth::user()->email}}" readonly>
     <input type="hidden" name="userid" value="{{Auth::user()->id}}">
    <input type="text" name="location">
    <input type="text" name="quantity">
    <select name="bank">
       @foreach(App\Backend\Bank::all() as $b)
       <option value="{{$b->id}}">{{$b->fullname}}</option>
       @endforeach
    </select>
    <button type="submit">Donate Now</button>

</form>
