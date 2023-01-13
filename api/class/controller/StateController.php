<?php
    class StateController
    {
        private $model;
        public function __construct(stateModel $model)
        {
            $this->model = $model;
        }

        public function countrydata()
        {
          return  $this->model->allcountry();
        }

        public function save($data)
        {
            $this->model->save($data);
        }
    }
    