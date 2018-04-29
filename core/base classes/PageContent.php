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
    protected $pageString;

    public function __construct($page)
    {
        $json = json_decode(file_get_contents("../layouts/$page.json"),true);
        $this->layout = new LayoutData($json);

        $this->pageString = $page;
    }

    public function Layout() {
        return $this->layout;
    }

}