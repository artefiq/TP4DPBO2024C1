<?php
include_once("conf.php");
include_once("models/Levels.class.php");
include_once("views/Levels.view.php");
include_once("views/AddLevels.view.php");
include_once("views/EditLevels.view.php");

class LevelsController
{
    private $levels;

    function __construct()
    {
        $this->levels = new levels(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->levels->open();
        $this->levels->getlevels();

        $data = array(
            'levels' => array(),
        );

        while ($row = $this->levels->getResult()) {
            array_push($data['levels'], $row);
        }

        $this->levels->close();

        $view = new LevelsView();
        $view->render($data);
    }

    public function addLevelsPage()
    {
        $view = new AddLevelsView();
        $view->renderAddLevelsPage();
    }

    public function editLevelsPage($id)
    {
        $this->levels->open();
        $this->levels->getLevelsById($id);

        $data = $this->levels->getResult();

        $this->levels->close();

        $view = new EditLevelsView();
        $view->renderEditLevelsPage($data);
    }

    function add($data)
    {
        $this->levels->open();
        $this->levels->add($data);
        $this->levels->close();

        header("location:levels.php");
    }

    function update($data, $id)
    {
        $this->levels->open();
        $this->levels->update($data, $id);
        $this->levels->close();

        header("location:levels.php");
    }

    function delete($id)
    {
        $this->levels->open();
        $this->levels->delete($id);
        $this->levels->close();

        header("location:levels.php");
    }
}
