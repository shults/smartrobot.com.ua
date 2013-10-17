<?php

/**
 * Class Slim
 */
class Slim extends Slim\Slim
{

    /**
     * @param string $template
     * @param array $data
     * @param bool $return
     * @param null $status
     * @return string|void
     */
    public function render($template, $data = array(), $return = false, $status = null)
    {
        if ($return)
        {
            ob_start();
            parent::render($template, $data, null);
            $contents = ob_get_contents();
            ob_end_clean();
            return $contents;
        }
        else
        {
            parent::render($template, $data, $status);
        }
    }


}