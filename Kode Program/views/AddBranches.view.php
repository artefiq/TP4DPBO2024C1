<?php
class AddBranchesView
{
    public function renderAddBranchesPage()
    {
        $data = null;
        $data .= '<div class="card-header bg-primary">
                <h1 class="text-white text-center">  Create New Member </h1>
                </div><br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control" required> <br>

                <label> ADDRESS: </label>
                <input type="text" name="address" class="form-control" required> <br>

                <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" href="address.php"> Cancel </a><br>';
        

        $tpl = new Template("templates/create.html");
        $tpl->replace("CREATE_FORM", $data);
        $tpl->write();
    }
}
?>
