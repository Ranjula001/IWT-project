<div class="container p-2">
    <h1 class="text-center"><b>Contact Us</h1></b>
    <div class="pb-1 pt-1 text-danger" id="errorMessage"></div>
    <form id="myform" onsubmit="" method="post" class="card p-4">
        <div class="row justify-content-center mb-2">
            <div class="col-2">
                <label for="fname">Full Name</label>
            </div>
            <div class="col-4">
                <input class="form-control" type="text" id="fname" name="fullname" placeholder="your full name...">
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-2">
                <label for="email">Email</label>
            </div>
            <div class="col-4">
                <input class="form-control" type="email" id="email" name="email" placeholder="enter email..">
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-2">
                <label for="message">Message</label>
            </div>
            <div class="col-4">
                <textarea class="form-control" id="value" name="message" rows="8" maxlength="100" onkeyup="charcounts( 'value','countchar' );" onkeydown="charcounts( 'value','countchar' );" onmouseout="charcounts( 'value','countchar' );" placeholder="write somethings..."></textarea>
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col text-center">
                <input class="btn btn-primary" type="submit" value="submit">
            </div>
        </div>
    </form>
</div>