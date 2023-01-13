<?php
    class DistricController
    {
        private $model;
        public function __construct(DistricModel $model)
        {
            $this->model = $model;
        }

        public function districdata($id)
        {
          return  $this->model->alldistricdata($id);
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    