<?php
    class StateController
    {
        private $model;
        public function __construct(stateModel $model)
        {
            $this->model = $model;
        }

        public function statedata($id)
        {
          return  $this->model->allstate($id);
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    