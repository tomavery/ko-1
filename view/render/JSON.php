<?php
/**
 * JSON
 *
 * @package ko\view\render
 * @author jiangjw & zhangchu
 */

class Ko_View_Render_JSON extends Ko_View_Render_Base
{
    protected function _sRender()
    {
        return json_encode($this->_aData);
    }
}
