<? if (!empty($activities)): ?>
		<table>
			<? foreach ($activities AS $row): ?>
				<? $user = $row['User'] ?>
				<? $activity = $row['Activity'] ?>
				<td valign="top" width="60">
					image
				</td>
				<td valign="top" align="left">
					<b><?= $user->getLink() ?></b> <?= $activity->get('activity') ?><br/>
					<span class="formtip"><?= Utility::getTimeAgo($activity->get('action_date')) ?> - <?= Utility::formatDateTime($activity->get('action_date')) ?></span>
				</td>
			</tr>
			<? endforeach ?>
		</table>
<? endif ?>