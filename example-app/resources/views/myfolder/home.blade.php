@extends('layouts.default')

@section('title','Homepage')

@section('content')
<style>
    td,tr{
        padding: 20px;
    }
    input{
        padding: 0px;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Personal Information Form</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary" style="margin: 0% auto">
                <div class="card-header">
                  <h3 class="card-title">Personal Information Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="personal-information-form">

                <div class="card-body">
                    <table>
                    <tr>
                    <div class="form-group">
                      <td ><label for="firstname-input">First name</label></td>
                      <td><input type="email" class="form-control" id="firstname-input" placeholder="Enter your first name"></td>
                    </div>

                    </tr>
                    <tr>
                    <div class="form-group">
                        <td><label for="lastname-input">Last name</label></td>
                        <td><input type="email" class="form-control" id="lastname-input" placeholder="Enter your last name"></td>
                      </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td>
                      <label for="exampleInputPassword1">Date of birth</label>
                        </td>
                        <td>
                      <input type="date" class="form-control" id="birthdate-input" >
                        </td>
                    </div>
                    </tr><tr>
                    <div class="form-group">
                        <td><label for="age-input">Age</label></td>
                        <td><input type="email" class="form-control" id="age-input" placeholder="Enter your age"></td>
                      </div>
                    </tr><tr>
                      <div class="form-group">
                        <td><label> Gender </label></td>
                        <br><td>
                        <input id ="male-radio" type="radio"name="gender" value="male" onclick="clearField('etc-gender-text')" style="margin-left: 10px"/>
                    <label for="male-radio">Male</label>
                    <input id ="female-radio" type="radio" name="gender" value="female" onclick="clearField('etc-gender-text')" style="margin-left: 10px"/>
                    <label for="female-radio">Female</label>
                    <input id ="none-radio" type="radio" name="gender" value="prefer not to say" onclick="clearField('etc-gender-text')" style="margin-left: 10px"/>
                    <label for="none-radio">Prefer not to say</label>
                    <input id = "etc-gender-radio" type="radio" name="gender" value="etc-gender-text" style="margin-left: 10px"/>
                    <label for="etc-gender-radio">Other <input id="etc-gender-text" type="text" placeholder="Please specify" onclick="checkRadio('etc-gender-radio')"/></label>
                        </td></div>
                    </tr><tr>
                    <div class="form-group">
                        <td><label for="user-pic-upload">Upload your picture</label></td>
                        <td><div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="user-pic-upload" accept="image/*">
                          <label class="custom-file-label" for="user-pic-upload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div></td>
                      </div>
                    </div>
                </tr><tr>
                    <div class="form-group">
                        <td><label for="address-textarea">Address</label></td>
                        <td><textarea name="address" id="address-textarea" cols="50" rows="6" placeholder="Enter your address"></textarea></td>
                      </div></tr><tr>
                        <div class="form-group">
                            <td><label for="fav-color-select">Favorite Color</label></td>
                            <td><select name="fav-color" id="fav-color-select">
                                <option disabled selected value="-">-</option>
                                <option value="red">Red</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="yellow">Yellow</option>
                                <option value="black">Black</option>
                                <option value="white">White</option>
                                    </select></td>
                          </div></tr><tr>
                            <div class="form-group">
                                <td><label >Favorite Music Genre</label></td>
                                <td>
                                    <input id="country-music-radio" type="radio" name="fav-music" value="country" onclick="clearField('etc-music-text')" style="margin-left: 10px"/>
                                    <label for="country-music-radio">Country</label>
                                    <input id="folk-music-radio" type="radio" name="fav-music" value="folk"onclick="clearField('etc-music-text')" style="margin-left: 10px"/>
                                    <label for="folk-music-radio">Folk</label>
                                    <input id="etc-music-radio" type="radio" name="fav-music" style="margin-left: 10px"/>
                                    <label for="etc-music-radio">Other <input id="etc-music-text" type="text" placeholder="Please specify" onclick="checkRadio('etc-music-radio')"></label>
                                    </td>
                              </div></tr>

                  </div>
                </tr>
                  <!-- /.card-body -->
                    </table>
                  <div class="card-footer">
                    <div class="form-check" style="margin: 2% 0">
                        <input type="checkbox" class="form-check-input" id="user-accepted-checkbox">
                        <label class="form-check-label" for="user-accepted-checkbox">Checking this box indicates that you have obtained consent for data collection.</label>
                      </div>
                    <button type="reset" class="btn btn-primary" id="reset-button" >reset</button>
                    <button type="button" class="btn btn-primary" onclick="submitData()" id="submit-button" style="margin-left:35%">Submit</button>

                  </div>
                </form>
              </div>
              <!-- /.card -->
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content -->
<script>
    function clearField(idInput)
    {
        document.getElementById(idInput).value='';
    }
    function checkRadio(idInput){
        document.getElementById(idInput).checked = true;
    }
    function getGenderFromRadio(){
        var gender;
        if(document.getElementById('etc-gender-radio').checked == true){
            gender = document.getElementById('etc-gender-text').value;
        }
        else if(document.getElementById('male-radio').checked == true){
            gender = document.getElementById('male-radio').value;
        }else if(document.getElementById('female-radio').checked == true){
            gender = document.getElementById('female-radio').value;
        }else if(document.getElementById('none-radio').checked == true){
            gender = document.getElementById('none-radio').value;
        }
        return gender;
    }
    function getFavMusicFromRadio(){
        var music;
        if(document.getElementById('etc-music-radio').checked == true){
            music = document.getElementById('etc-music-text').value;
        }
        else if(document.getElementById('country-music-radio').checked == true){
            music = document.getElementById('country-music-radio').value;
        }else if(document.getElementById('folk-music-radio').checked == true){
            music = document.getElementById('folk-music-radio').value;
        }
        return music;
    }
    function submitData(){
        if(document.getElementById('user-accepted-checkbox').checked == 1){
            showSubmitData();
            document.getElementById("personal-information-form").submit();

        }else{
            alert('กรุณาให้ความยินยอมในการเก็บข้อมูล');
        }

    }

    function showSubmitData(){
        var name = document.getElementById('firstname-input').value;
        var surname = document.getElementById('lastname-input').value;
        var birthdate = document.getElementById('birthdate-input').value;
        var age = document.getElementById('age-input').value;
        var gender = getGenderFromRadio();
        var favColor = document.getElementById('fav-color-select').value;
        var favMusic = getFavMusicFromRadio();
        var address = document.getElementById('address-textarea').value;
        alert('This is your personal Information'+'\nName : '+name +' '+surname
        +'\ndate of birth : '+birthdate+'\nAge : '+ age+'\nGender : '+gender+'\nFavorite Color : '+favColor+'\nFavorite Music Genre : '+favMusic+'\nAddress : '+address)
    }

</script>
    <!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
@endsection
