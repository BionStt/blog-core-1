<?php /* Smarty version Smarty-3.1.15, created on 2014-06-10 20:59:34
         compiled from "/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282773482539771b6531c91-86763710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420f6f773f3cb827370e813c55b11b21d4935d56' => 
    array (
      0 => '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/templates/menu.tpl',
      1 => 1401910796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1282773482539771b6531c91-86763710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'contact' => 0,
    'service' => 0,
    'checker' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539771b65fc016_60026138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539771b65fc016_60026138')) {function content_539771b65fc016_60026138($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/ahmadassaf/Dropbox/Projects/My Personal Space/blog_source/includes/SMARTY/plugins/function.cycle.php';
?><div class="headerWrapper">
    <div class="header">
        <a href="/blog" class="icon-home extra-icon">HOME</a>
        <div id="responsiveMenu" class="wrapper-dropdown" tabindex="1">
            <span>Navigation Menu</span>
            <ul class="dropdown" tabindex="1"></ul>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value['menu'];?>

        <div class="follow-us">
            <div class="toggle-follow-us">
            	<span class="followtext">Follow me</span>

            	<i class="icon-twitter"></i>
            	<i class="icon-rss"></i>
            	<i class="icon-angle-down"></i>

                <div class="follow-us-popup">
                    <table>
    					<tbody>
							<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['contact_me']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['contact_array']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
 $_smarty_tpl->tpl_vars['service']->value = $_smarty_tpl->tpl_vars['contact']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['contact_array']['index']++;
?>
							<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>"1,2"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['checker'] = new Smarty_variable($_tmp1, null, 0);?>
								<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['contact_array']['index'])) {?><tr><?php }?>
								    <td>
								    	<div>
								    		<a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['link'];?>
" target="_blank">
									    		<i class="icon-<?php echo $_smarty_tpl->tpl_vars['service']->value;?>
"></i>
									    		<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>

								    		</a>
							    		</div>
						    		</td>
								<?php if (!(1 & $_smarty_tpl->tpl_vars['checker']->value)) {?></tr><?php }?>
							<?php } ?>
		        		</tbody>
                    </table>
                </div>
            </div>
            <div class="icon-search extra-icon">
                <div class="sb_dropdown">
                    <form role="search" id="searchFormHeader" class="searchForm" method="get" action="<?php echo $_smarty_tpl->tpl_vars['menu']->value['home_url'];?>
">
                        <input name="s" class="searchbox" type="text" value="" required placeholder="Search..."/>
						<input id ="cat_filter" type="hidden" name="cat" value="" />
                        <span class="submit" data-icon="&#59406;" data-spin="&#59413;" data-search="&#59406;"></span>
                    </form>
                    <ul>
                    <li class="sb_filter">Filter your search</li>
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['search_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                    	<li class="cat-filter <?php if ($_smarty_tpl->tpl_vars['category']->value['parent']=='0') {?> visible <?php } else { ?> hidden <?php }?>" data-hidden="<?php if ($_smarty_tpl->tpl_vars['category']->value['parent']=='0') {?>visible<?php } else { ?>hidden<?php }?>">
                			<input id="filterCat_.<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
" type="checkbox" name="filterCat" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"/>
                      		<label for="filterCat_.<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</label>
                      	</li>
                  	<?php } ?>
                    <li class="sb_filter expand_cat" data-action="expand" >+ Expand Categories</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
