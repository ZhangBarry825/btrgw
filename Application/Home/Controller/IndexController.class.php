<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页

        /*新闻中心轮播列表*/
        $wxzx_category=D('Category')->getChildrenId(39);
        $xwzx_count=D('Document')->listCount($wxzx_category);
        $xwzx_page=floor(($xwzx_count/4));
        for($i=1;$i<=$xwzx_page;$i++){
            $xwzx_lists[$i]=D('Document')->page($i,4)->lists(40);
        }
        $this->assign('xwzx_lists',$xwzx_lists);

                 
        $this->display();
    }

}