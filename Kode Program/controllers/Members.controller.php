<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("models/Levels.class.php");
include_once("models/Branches.class.php");
include_once("views/Members.view.php");
include_once("views/AddMembers.view.php");
include_once("views/EditMembers.view.php");

class MembersController
{
    private $members;
    private $levels;
    private $branches;

    function __construct()
    {
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->levels = new Levels(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->branches = new Branches(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->members->open();
        $this->levels->open();
        $this->branches->open();
        $this->members->getMembers();
        $this->levels->getLevels();
        $this->branches->getBranches();

        $data = array(
            'members' => array(),
            'levels' => array(),
            'branches' => array()
        );

        while ($row = $this->members->getResult()) {
            array_push($data['members'], $row);
        }

        while ($row = $this->levels->getResult()) {
            array_push($data['levels'], $row);
        }

        while ($row = $this->branches->getResult()) {
            array_push($data['branches'], $row);
        }

        $this->members->close();
        $this->levels->close();
        $this->branches->close();

        $view = new MembersView();
        $view->render($data);
    }

    public function addMembersPage()
    {
        $this->levels->open();
        $this->branches->open();
        $this->levels->getLevels();
        $this->branches->getBranches();

        $data = array(
            'levels' => array(),
            'branches' => array()
        );

        while ($row = $this->levels->getResult()) {
            array_push($data['levels'], $row);
        }

        while ($row = $this->branches->getResult()) {
            array_push($data['branches'], $row);
        }

        $this->levels->close();
        $this->branches->close();

        $view = new AddMembersView();
        $view->renderAddMembersPage($data);
    }

    public function editMembersPage($id)
    {
        $this->members->open();
        $this->levels->open();
        $this->branches->open();
        $this->levels->getLevels();
        $this->branches->getBranches();
        $this->members->getMembersById($id);

        $data = array(
            'levels' => array(),
            'branches' => array()
        );

        while ($row = $this->levels->getResult()) {
            array_push($data['levels'], $row);
        }

        while ($row = $this->branches->getResult()) {
            array_push($data['branches'], $row);
        }

        // Assuming this line is meant to fetch data for members
        $data['members'] = $this->members->getResult();
        
        $this->members->close();
        $this->levels->close();
        $this->branches->close();

        $view = new EditMembersView();
        $view->renderEditMembersPage($data);
    }

    function add($data)
    {
        $this->members->open();
        $this->members->add($data);
        $this->members->close();

        header("location:index.php");
    }

    function update($data, $id)
    {
        $this->members->open();
        $this->members->update($data, $id);
        $this->members->close();

        header("location:index.php");
    }

    function delete($id)
    {
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();

        header("location:index.php");
    }
}
