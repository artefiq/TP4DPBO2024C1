<?php
class EditBranchesView
{
    public function renderEditBranchesPage($data)
    {
        $dt = null;
        $dt .= '<div class="card-header bg-primary">
                <h1 class="text-white text-center">  Edit Member </h1>
                </div><br>

                <input type="hidden" name="id" class="form-control" value="' . $data["id_branch"] . '" required> <br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control" value="' . $data["name_branch"] . '" required> <br>

                <label> ADDRESS: </label>
                <input type="text" name="address" class="form-control" value="' . $data["address"] . '" required> <br>

                <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" href="branches.php"> Cancel </a><br>';
        
        $tpl = new Template("templates/create.html");
        $tpl->replace("CREATE_FORM", $dt);
        $tpl->write();
    }
}
