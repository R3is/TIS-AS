<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['  escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" style="color: red; background-color: yellow;text-align: center ; padding-top: 10px; padding-bottom: 10px; width: 600px; border-radius: 20px" onclick="this.classList.add('hidden');"><?= $message ?></div>
