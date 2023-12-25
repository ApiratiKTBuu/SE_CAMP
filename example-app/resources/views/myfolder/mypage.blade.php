
<style>
    html{
        color: white;
        background: rgb(32, 33, 36);
    }
</style>
    <h1>My folder And My Page</h1>
    <h1><?php echo $val_a . ' ' . $val_b ?><h1>
    <h1>{{ $val_a}} {{$val_b}}</h1>

    <form method="post" action="/my-route">
        @csrf
        <input type="text" name="myinput" id="">
        <button type="submit">Submit</button>
    </form>
