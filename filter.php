<?php
class filter_codehl_filter extends moodle_text_filter {
    public function filter($text, array $options = array()) {
        global $PAGE;
        global $CFG;
        $PAGE->requires->js_call_amd('filter_codehl_filter/highlight', 'init', array($CFG->wwwroot));
        return $text;
    }
}
?>