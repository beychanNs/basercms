<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Config
 * @since			baserCMS v 4.0.1
 * @license			http://basercms.net/license/index.html
 */

/**
 * 4.1.0 バージョン アップデートスクリプト
 *
 * ----------------------------------------
 * 　アップデートの仕様について
 * ----------------------------------------
 * アップデートスクリプトや、スキーマファイルの仕様については
 * 次のファイルに記載されいているコメントを参考にしてください。
 *
 * /lib/Baser/Controllers/UpdatersController.php
 *
 * スキーマ変更後、モデルを利用してデータの更新を行う場合は、
 * ClassRegistry を利用せず、モデルクラスを直接イニシャライズしないと、
 * スキーマのキャッシュが古いままとなるので注意が必要です。
 */

/**
 * mail_contents テーブル構造変更
 */
    if($this->loadSchema('4.1.0', '', 'mail_contents', $filterType = 'alter')) {
        $this->setUpdateLog('mail_contents テーブルの構造変更に成功しました。');
    } else {
        $this->setUpdateLog('mail_contents テーブルの構造変更に失敗しました。', true);
    }
