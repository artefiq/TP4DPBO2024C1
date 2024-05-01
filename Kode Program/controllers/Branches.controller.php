<?php
include_once("conf.php");
include_once("models/Branches.class.php");
include_once("views/Branches.view.php");
include_once("views/AddBranches.view.php");
include_once("views/EditBranches.view.php");

class BranchesController
{
    private $branches;

    function __construct()
    {
        $this->branches = new Branches(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index()
    {
        $this->branches->open();
        $this->branches->getBranches();

        $data = array(
            'branches' => array(),
        );

        while ($row = $this->branches->getResult()) {
            array_push($data['branches'], $row);
        }

        $this->branches->close();

        $view = new BranchesView();
        $view->render($data);
    }

    public function addBranchesPage()
    {
        $view = new AddBranchesView();
        $view->renderAddBranchesPage();
    }

    public function editBranchesPage($id)
    {
        $this->branches->open();
        $this->branches->getBranchesById($id);

        $data = $this->branches->getResult();

        $this->branches->close();

        $view = new EditBranchesView();
        $view->renderEditBranchesPage($data);
    }

    function add($data)
    {
        $this->branches->open();
        $this->branches->add($data);
        $this->branches->close();

        header("location:branches.php");
    }

    function update($data, $id)
    {
        $this->branches->open();
        $this->branches->update($data, $id);
        $this->branches->close();

        header("location:branches.php");
    }

    function delete($id)
    {
        $this->branches->open();
        $this->branches->delete($id);
        $this->branches->close();

        header("location:branches.php");
    }
}
