<form action='?id=<?php echo $data['id']; ?>' method='post' enctype="multipart/form-data">
    <div class="form-group">
        <label for='number'>Password: </label>
        <input type='password' class='form-control' name='password'>
    </div>

    <div class="form-group">
        <label for='number'>Photo: </label>
        <input type='file' class='form-control' name='photo'>
    </div>

    <div class="form-group">
        <button type='submit' class='btn btn-success' name='update'>Update</button>
    </div>
</form>
