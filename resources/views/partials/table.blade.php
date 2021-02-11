<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Genre</th>
            <th scope="col">Age</th>
    
          </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
            <tr>
                <th scope="row">{{$animal->id}}</th>
                <td>
                    <a href="/show-animal/{{$animal->id}}">
                        {{$animal->genre}}
                    </a>
                </td>
                <td>{{$animal->age}}</td>
                <td>
                    <form action="delete-animal/{{$animal->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger">Del</button>
                    </form>
                </td>

            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>