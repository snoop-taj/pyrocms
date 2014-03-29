<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Show Latest blog in your site with a widget.
 *
 * Intended for use on cms pages. Usage :
 * on a CMS page add:
 *
 *     {widget_area('name_of_area')}
 *
 * 'name_of_area' is the name of the widget area you created in the  admin
 * control panel
 *
 * @author  Alireza Jahandideh
 * @author  Yohan
 * @package widget
 */
class Widget_Latest_stories extends Widgets
{

	public $author = 'Alireza Jahandideh';

	public $website = 'http://www.pyrocms.ir';

	public $version = '1.0.0';

	public $title = array(
		'en' => 'Latest stories',
		'fa' => 'آخرین داستان ها'
		
	);

	public $description = array(
		'en' => 'Display stories from blog posts with a widget'
	);

	// build form fields for the backend
	// MUST match the field name declared in the form.php file
	public $fields = array(
		array(
			'field' => 'limit',
			'label' => 'Number of posts',
		)
	);

	public function form($options)
	{
		$options['limit'] = ( ! empty($options['limit'])) ? $options['limit'] : 5;

		return array(
			'options' => $options
		);
	}

	public function run($options)
	{
		// load the blog module's model
		class_exists('Blog_m') OR $this->load->model('blog/blog_m');

		// sets default number of posts to be shown
		$options['limit'] = ( ! empty($options['limit'])) ? $options['limit'] : 5;

		// retrieve the records using the blog module's model
		$blog_widget = $this->blog_m
			->limit($options['limit'])
			->get_many_by(array('status' => 'live'));

		// returns the variables to be used within the widget's view
		return array('blog_widget' => $blog_widget);
	}

}
