<?php !defined("__TPL_IN__") && exit(); ?><?php include $GLOBALS['__TPL__']->inc('../common/head.html'); ?><div style="width:400px;height:200px;margin:50px auto;margin-top:200px;border:2px solid #999;background:#E4E4E4;text-align:center;padding:10px;">

<div style="text-align:left;font-size:16px;font-weight:bold;">
    <?php echo lang('guest'); ?><?php echo lang('password'); ?>    </div>
<div style="line-height:6em;">
<form action="index.php?m=index&a=submitguestlogin" method="post" submittype="ajax">
            <?php echo lang('password'); ?>:<input type="password" class="text" name="password" /><br />
            <input type="submit" class="button" value="<?php echo lang('yes'); ?>" />
            <input type="button" class="button" value="<?php echo lang('switch'); ?>" onclick="tourl('index.php?m=index&a=login')" />
        </form>
</div>
</div><?php include $GLOBALS['__TPL__']->inc('../common/foot.html'); ?>