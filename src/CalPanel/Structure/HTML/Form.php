<?php
    /**
     * User: Callum Carmicheal
     * Date: 16/03/2016
     * Time: 20:30
     */

    namespace CalPanel\Structure\HTML\Form; // What was that about?

    function Create($location, $classes="") {
        return '<form class="<?=$classes?>"';
    }

    function End() {
        return "</form>";
    }
?>