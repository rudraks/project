<?php

namespace app\controller {

    class BasicController extends AbstractController
    {

        /**
         * @Description - Welcome page
         *
         * @RequestMapping(url="welcome",method="GET",type="template")
         * @RequestParams(true)
         */
        public function welcome($model = null, $name = null)
        {

            $profile = array(
                "name" => $name
            );

            $model->assign("profile", $profile);

            return "welcome";
        }


        /**
         * @Description - Json Api
         *
         * @RequestMapping(url="api/data/{data_id}",method="GET",type="json")
         * @RequestParams(true)
         */
        public function sampleApi($model = null, $data_id = null)
        {

            return array(
                "id" => $data_id,
                "name" => "No Name yet"
            );

        }

        /**
         * @Description - Default page
         *
         * @RequestMapping(url="",method="GET",type="template")
         * @RequestParams(true)
         */
        public function index($model = null)
        {
            return "index";
        }
    }
}