<?php
    class StateController
    {
        private $model;
        public function __construct(stateModel $model)
        {
            $this->model = $model;
        }

        public function statedata()
        {
          return  $this->model->allstate();
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    