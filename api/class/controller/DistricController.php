<?php
    class DistricController
    {
        private $model;
        public function __construct(DistricModel $model)
        {
            $this->model = $model;
        }

        public function districdata()
        {
          return  $this->model->alldistricdata();
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    