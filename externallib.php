<?php
const EMD_COURSE = 8;

require_once(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/externallib.php');
require_once($CFG->dirroot.'/course/lib.php');


class local_reusecontent_webservice_external extends external_api {

    public static function reuse($oer_query_string) {
        global $CFG;
        require_once($CFG->dirroot . '/filter/reusecontent/filter.php');

        $filter = new filter_reusecontent();
        $text = "{reusecontent item=" . urldecode($oer_query_string) ."}";
//        echo(urlencode($filter->filter($text)));
        return urlencode($filter->filter($text));

    }

    public static function reuse_returns() {
        return new external_value(PARAM_TEXT, 'Content');

    }

    public static function reuse_parameters() {
        return new external_function_parameters(
            array(
                'oer_query_string' => new external_value(PARAM_TEXT, 'OER String')
            )
        );
    }


}