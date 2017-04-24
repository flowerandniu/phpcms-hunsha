<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--<ul>-->
<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>-->
    <!--<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
    <!--<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>-->
    <!--<?php $n++;}unset($n); ?>-->
<!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--</ul>-->
</body>
</html>