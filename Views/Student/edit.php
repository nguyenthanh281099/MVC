<h1>Edit student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">name</label>
        <input type="text" class="form-control" id="sinhvien_name" placeholder="Enter a name" name="sinhvien_name" value ="<?php if (isset($sv["sinhvien_name"])) echo $sv["sinhvien_name"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>