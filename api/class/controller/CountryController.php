<?php
    class CountryController
    {
        private $model;
        public function __construct(CountryModel $model)
        {
            $this->model = $model;
        }

        public function countrydata()
        {
          return  $this->model->allcountry();
        }

        public function savecountry($data)
        {
            $this->model->save($data);
        }
    }
    