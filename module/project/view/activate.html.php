<?php
/**
 * The suspend file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang<wwccss@gmail.com>
 * @package     project 
 * @version     $Id: suspend.html.php 935 2013-01-16 07:49:24Z wwccss@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<?php js::import($jsRoot . 'misc/date.js');?>
<div class='container'>
  <div id='titlebar'>
    <div class='heading'>
      <span class='prefix'><?php echo html::icon($lang->icons['project']);?> <strong><?php echo $project->id;?></strong></span>
      <strong><?php echo html::a($this->createLink('project', 'view', 'project=' . $project->id), $project->name, '_blank');?></strong>
      <small class='text-success'> <?php echo $lang->project->activate;?> <?php echo html::icon($lang->icons['activate']);?></small>
    </div>
  </div>
  <form class='form-condensed' method='post' target='hiddenwin'>
    <table class='table table-form'>
      <tr>
        <th class='w-60px'><?php echo $lang->comment;?></th>
        <td><?php echo html::textarea('comment', '', "rows='6' class='form-control'");?></td>
      </tr>
      <tr>
        <th></th><td class='text-center'><?php echo html::submitButton() . html::linkButton($lang->goback, $this->session->taskList); ?></td>
      </tr>
    </table>
  </form>
  <div class='main'><?php include '../../common/view/action.html.php';?></div>
</div>
<?php include '../../common/view/footer.html.php';?>
