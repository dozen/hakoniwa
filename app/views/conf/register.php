<div class="row">
<div class="col-sm-offset-1 col-sm-10 col-xs-12">
	<h1><?=$init->nameSuffix?>の登録・設定変更</h1>
	<?php $this->discovery($hako->islandNumber);?>
	<hr>
	<?php $this->changeIslandInfo($hako->islandList);?>
	<hr>
	<?php $this->changeOwnerName($hako->islandList);?>
</div>
</div>
