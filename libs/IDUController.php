<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.09.2018
 * Time: 10:11
 */
class IDUController extends Controller
{
    protected $curControllerName;
    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->curControllerName = strtolower(static::class);
        $this->data['curControllerName'] = strtolower(static::class);
    }

    public function index()
    {
        if (!isset($_POST[$this->model->tableRowId])) {
            $this->model->create($_POST);
        } elseif (isset($_POST[$this->model->tableRowId])) {
            $this->model->change($_POST[$this->model->tableRowId],
                $_POST);
        }

        $this->data['tableRowFields'] = $this->model->tableRowFields;
        $this->data['tableRowId'] = $this->model->tableRowId;
        $this->data['tableValues'] = $this->model->run();
        $this->view->render($this->curControllerName . '/index', $this->data);
    }

    public function create()
    {
        $this->data['tableRowFields'] = $this->model->tableRowFields;
        $this->view->render($this->curControllerName . '/create', $this->data);
    }

    public function change()
    {
        if (isset($_POST[$this->model->tableRowId])
            && isset($_POST[$this->model->tableRowFields[0]])
        ) {


            $this->data['tableValues'] = $_POST;
            $this->data['tableRowFields'] = $this->model->tableRowFields;
            $this->data['tableRowId'] = $this->model->tableRowId;

            $this->view->render($this->curControllerName . '/change', $this->data);
        } else {
            $this->index();
        }
    }

    public function delete()
    {
        if (isset($_POST[$this->model->tableRowId])) {
            $this->model->delete($_POST[$this->model->tableRowId]);
        }
    }

}