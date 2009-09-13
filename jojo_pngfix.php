<?php

class JOJO_Plugin_Jojo_pngfix extends JOJO_Plugin
{

    function customhead() {
        global $smarty;
        return($smarty->fetch('jojo_pngfix_head.tpl'));
    }

}