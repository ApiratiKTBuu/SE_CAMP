<form action="/insert-major" method="POST">
    @csrf
    <label for="">Input Major</label>
     <input type="text" name="major_name"><br>   <!-- ตั้งชื่อให้ตรงกับ DB -->
    <button type="Submit">Submit</button>

</form>