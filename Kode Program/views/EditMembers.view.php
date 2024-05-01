<?php
class EditMembersView
{
    public function renderEditMembersPage($data)
    {
        $dt = null;
        $dt .= '<div class="card-header bg-primary">
                <h1 class="text-white text-center">  Edit Member </h1>
                </div><br>

                <input type="hidden" name="id" class="form-control" value="' . $data["members"]["id"] . '" required> <br>

                <label> NAME: </label>
                <input type="text" name="name" class="form-control" value="' . $data["members"]["name"] . '" required> <br>

                <label> EMAIL: </label>
                <input type="text" name="email" class="form-control" value="' . $data["members"]["email"] . '" required> <br>

                <label> PHONE: </label>
                <input type="text" name="phone" class="form-control" value="' . $data["members"]["phone"] . '" required> <br>

                <label> BENEFIT LEVEL: </label>
                <select name="id_level" class="form-control" required>';
        
                foreach ($data['levels'] as $level) {
                    $id = $level['id_level'];
                    $levels = $level['level'];
                    $dt .= '<option value="'. $id .'">'. $levels .'</option>';
                }
                    
        $dt .= '</select>

                <label> BRANCH ORIGIN: </label>
                <select name="id_branch" class="form-control" required>';

                foreach ($data['branches'] as $branch) {
                    $id = $branch['id_branch'];
                    $branch = $branch['name_branch'];
                    $dt .= '<option value="'. $id .'">'. $branch .'</option>';
                }

        $dt .= '</select>
                <br><button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                <a class="btn btn-info" href="index.php"> Cancel </a><br>';
        
        $tpl = new Template("templates/create.html");
        $tpl->replace("CREATE_FORM", $dt);
        $tpl->write();
    }
}
