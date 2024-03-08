<h1>User List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Student id</td>
        <td>Fullname</td>
        <td>roles</td>
        <td>Major</td>
        <td>Action</td>
    </tr>
    @foreach($oe_users as $user)
    <tr>
        <td>{{$user['user_id']}}</td>
        <td>{{$user['user_student_id']}}</td>
        <td>{{$user['user_fname']}} {{$user['user_lname']}}</td>
        <?php
        if ($user['user_role_id']==1) {
            echo "<td>Admin</td>";
        }elseif ($user['user_role_id']==2) {
            echo "<td>Student</td>";
        }elseif ($user['user_role_id']==3) {
            echo "<td>Guest</td>";
        }
        foreach ($oe_majors as $major) {
            if($user['user_major_id']==$major['major_id']) {
                echo "<td>".$major['major_name']."</td>";
                break;
            }
        }
        ?>
        <td><a href={{"/delete-user/".$user['user_id']}}>Delete</a></td>
        <td><a href={{"/edit-user/".$user['user_id']}}>Edit</a></td>
    </tr>
    @endforeach
</table>
<span>
    {{$oe_users->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>
