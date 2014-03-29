<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Adonis extends Theme {

    public $name = 'Adonis';
    public $author = 'Yohan';
    public $author_website = 'http://www.pyrocms.ir';
    public $website = 'http://adonis.pyrocms.ir';
    public $description = 'Adonis is a responsive template for PyroCMS 2.2';
    public $version = '1.0.1';
    public $options = array(
        'show_breadcrumbs' => array(
            'title'         => 'Show Breadcrumbs',
            'description'   => 'Would you like to display breadcrumbs?',
            'default'       => 'yes',
            'type'          => 'radio',
            'options'       => 'yes=Yes|no=No',
            'is_required'   => TRUE
        ),
        
        'layout' => array(
            'title'         => 'Layout',
            'description'   => 'Which type of layout shall we use?',
            'default'       => 'sidebar-right',
            'type'          => 'select',
            'options'       => 'sidebar-right=Two Column - Sidebar at right |full-width=Full Width|sidebar-left=Two Columns - Sidebar left',
            'is_required'   => TRUE
        ),
        'color'=>array(
            'title'         => 'color',
            'title'         => 'Color of the theme',
            'description'   => 'Please choose one of the predefined colors. to use your own color consult to documentation',
            'default'       => 'default',
            'type'          => 'select',
            'options'       => 'default=Red|blue=Blue|cyan=Cyan|green=Green|pink=Pink|brown=Brown',
            'is_required'   => TRUE
        )
    );
    

}

