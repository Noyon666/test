<div>
    <h1>Users</h1>

    <table border="1px">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            
            
        </tr>
        @endforeach
    </table>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
