@if(Auth::user()->image)
    {{--                                    <img src="{{ url('/user/avatar/' . Auth::user()->image) }}" alt="" width="100px">--}}
    <div class="container-avatar">
    <img src="{{ route('user.avatar', ['filename' => Auth::user()->image]) }}"
         alt=""
         class="avatar">
    </div>
@endif
