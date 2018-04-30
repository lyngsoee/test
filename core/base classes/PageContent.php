<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 25-04-2018
 * Time: 13:12
 */

class PageContent
{

    protected $layout;
    protected $title;

    public function __construct($_page)
    {
        $json = json_decode(file_get_contents("../layouts/$_page.json"),true);
        $this->layout = new LayoutData($json);

        $this->title = $_page;
    }

    public function Layout() {
        return $this->layout;
    }

}