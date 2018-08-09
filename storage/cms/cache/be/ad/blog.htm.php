<?php 
class Cms5b6aa1090f65d991198994_45d083585c09aac1a4676d43993c5db0Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
