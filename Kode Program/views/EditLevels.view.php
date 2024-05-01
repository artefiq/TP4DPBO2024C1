<?php
class EditLevelsView
{
    public function renderEditLevelsPage($data)
    {
        $dt = null;
        $dt .= '<div class="card-header bg-primary">
                <h1 class="text-white text-center">  Edit Member </h1>
                </div><br>

                <input type="hidden" name="id" class="form-control" value="' . $data["id_level"] . '" required> <br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control" value="' . $data["level"] . '" required> <br>

                <label> BENEFITS: </label>
                <input type="text" name="benefits" class="form-control" value="' . $data["benefits"] . '" required> <br>

                <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" href="levels.php"> Cancel </a><br>';
        
        $tpl = new Template("templates/create.html");
        $tpl->replace("CREATE_FORM", $dt);
        $tpl->write();
    }
}
