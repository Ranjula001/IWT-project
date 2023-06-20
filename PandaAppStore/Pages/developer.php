<style>
    .developer {
        height: 100vh;
        background: white;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-card {
        width: 600px;
        text-align: center;
        border-radius: 8px;
        overflow: hidden;
    }

    .card-header {
        background: white;
        padding: 60px 40px;

    }

    .name {
        color: pink;
        font-size: 28px;
        font-weight: 600;
        margin: 10px 0;
    }

    .date {
        color: pink;
        font-size: 28px;
        font-weight: 600;
        margin: 10px 0;
    }

    .sm {
        display: flex;
        justify-content: space-between;

    }

    .card-footer {

        padding: 60px 10px;
    }

    .numbers {
        display: flex;
        align-items: center;
    }

    .item {
        flex: 1;
        text-transform: uppercase;
        font-size: 13px;
    }

    .item span {
        display: block;
        color: black;
        font-size: 30px;
    }

    .border {
        width: 1px;
        height: 30px;
        background: #bbb;
    }


    .container .title {
        font-size: 40px;
        font-weight: 700;
        color: #2F316E;
    }

    .container form .user-details {
        display: flex;
        justify-content: space-between;
        width: 75%;

    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: 45%;
    }

    .user-details .input-box .details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .user-details .input-box input {
        height: 25px;
        width: 100%;
        outline: none;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-left: 15px;
        font-size: 5x;

    }

    .apptype {
        display: flex;
        justify-content: space-between;
        width: 80%;
    }

    .dialog {
        display: flex;
        justify-content: space-between;
        width: 80%
    }

    .col {
        display: flex;
        justify-content: space-between;
        width: 50%;
    }

    input[type="submit"] {
        width: 100%;
        height: 50%;
        border: 1px solid;
        background: #FFFFF0;
        border-radius: 25px;
        font-size: 18px;
        color: #205A78;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    input[type="submit"]:hover {
        border-color: #FFFFF0;
        transition: .5s;
    }

    .card-footer .item {
        color: #D7476F;
        font-size: 15px;
    }

    .col .app {
        font-size: 17px;
        font-weight: 500;
    }
</style>

<table style="width:100%" border="1">

    <tr>
        <td style="height:100px;width:100px;" bgcolor="#2F316E">
            <div class="developer">
                <div class="profile-card">
                    <div class="card-header">
                        <div class="pic">
                            <img src="IMAGE/userImage.png" alt="" width="25%" height="25%">
                        </div>
                        <div class="name">Developer Name</div>
                        <div class="date">Joined Date</div>
                        <br>
                        <div class="sm">
                            <p> <a href="?page=edit-profile">Edit Profile </a></p>
                            <p>$1900</p>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="numbers">
                                <div class="item">
                                    <span>1M+</span>
                                    Downloads
                                </div>
                                <div class="border"></div>
                                <div class="item">
                                    <span>5</span>
                                    Apps
                                </div>
                                <div class="border"></div>
                                <div class="item">
                                    <span>3.9</span>
                                    Ratings
                                </div>
                            </div>
                        </div>
                    </div>
        </td>


        <td bgcolor="#F2F3F4">

            <div class="right">
                <div class="container">
                    <div class="title" align="center">Upload a new App</div>
                    <br>
                    <br>
                    <form action="#">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Name</span>
                                <input type="text" placeholder="Name of the App" required>
                            </div>

                            <div class="cato">
                                <span class="details">Category</span>
                                <select name="select" id="apps">
                                    <option value="kids">Kids</option>
                                    <option value="games">Games</option>
                                    <option value="opel">Social</option>
                                    <option value="audi">Creative</option>
                                </select>
                            </div>
                        </div>
                </div>
                <br>
                <div class="apptype">
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" value="confirm" name="confirmation">
                            <span>Free</span>
                        </label>
                    </div>

                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" value="confirm" name="confirmation">
                            <span>Paid</span>
                        </label>
                    </div>

                    <div class="input-box">
                        <span class="price">Price</span>
                        <input type="text" placeholder="$$$">
                    </div>
                </div>
                <br>
                <br>


                <div class="col">


                    <div class="group" style="font-size: 10px; width:200px;">
                        <div class="app">
                            <p>Upload Your Application</p>
                        </div>
                        <input type="file" class="form-control" accept="image/*">
                    </div>

                    <br>
                    <div class="group" style="font-size: 10px; width:200px;">
                        <div class="app">
                            <p>Upload App Icon</p>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>

                <div class="dialog">
                    <form action>
                        <label for="fname">Short Description: </label>
                        <input type="text" id="fname" name="fname"><br><br>
                        <label for="lname" width="25px" height="25px">Full Description: </label>
                        <input type="text" id="lname" name="lname"><br><br></br>
                    </form>
                </div>
                <br>
                <br>
                <br>
                <input type="submit" value="Submit">



            </div>
            </div>

        </td>

    </tr>

</table>