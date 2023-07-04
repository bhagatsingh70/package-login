       
          <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
          @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @php dd(Auth::user()) @endphp