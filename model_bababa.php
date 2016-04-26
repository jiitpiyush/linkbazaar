<!-- Modal -->
    <div class='modal fade' id='myModal' role='dialog'>
        <div class='modal-dialog modal-lg'>
            <!-- Modal content-->
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>Modal Header</h4>
                </div>
                <div class='modal-body'>
                    <form class='form-inline' role='form' method="post" action="/login/">
                        <div class='form-group'>
                            <label for='username'>Username:</label>
                            <input type='text' class='form-control' id='username' name='username' placeholder='Enter Username'>
                        </div>
                        <div class='form-group'>
                            <label for='password'>Password:</label>
                            <input type='password' class='form-control' id='password' name="password" placeholder='Enter password'>
                        </div>
                        <button type='submit' class='btn btn-default'>Login</button>
                    </form>
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                </div>
            </div>
        </div>
    </div>
<style type="text/css">
    .form-control{
        height: 45px;
    }
</style>