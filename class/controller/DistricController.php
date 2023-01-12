<?php
    class DistricController
    {
        private $model;
        public function __construct(DistricModel $model)
        {
            $this->model = $model;
        }

        public function statedata()
        {
          return  $this->model->allstatedata();
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    