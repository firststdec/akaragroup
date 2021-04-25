=== Contact Form 7 add confirm ===
Contributors: Yuichiro ABE
Donate link:
Tags: contact, form, contact form
Requires at least: 3.8
Tested up to: 4.9.3
Stable tag: 5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: contact-form-7-add-confirm


"Contact Form 7 add confirm" can add confirm step to "Contact Form 7".

== Description ==

"Contact Form 7 add confirm" can add confirm step to "Contact Form 7".
"Contact Form 7 add confirm"に確認画面を追加するプラグインです。

This plug-in is not related to the developer of the "Contact Form 7".
このプラグインの作者はContact Form 7プラグイン開発元とは関係ありません、ご注意下さい。

== Installation ==

1. If you have not yet, Install Contact Form 7 Plugin
2. Upload the entire `contact-form-7-confirm` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

For basic usage, you can also have a look at the [plugin homepage](http://www.eyeta.jp/archives/908).

== Frequently asked questions ==

= A question that someone might have =

An answer to that question.

== Screenshots ==


== Changelog ==
1.3.8.5
 言語ファイルの読み込みバグ対応
 Javascript非対応のブラウザの場合、送信ボタンを初期から表示するように変更

1.3.8.6
 言語ファイルの読み込みバグ対応
 captchaで正常に動作していなかった点を修正

1.3.8.7
 ver記載ミス

1.3.8.8
 「Notice: Undefined index」が出ていた箇所を修正

1.3.8.9
 「Notice: Undefined index」が出ていた箇所を修正
 javascript上で$を利用しないように変更

1.3.8.10
 デグレしてしまっていた箇所の修正
 javascriptのaddClassとremoveClassの順序を変更

1.3.8.11
 flamingoプラグインで確認ボタンクリック時も記録されてしまう問題を修正

1.3.8.12
 Contact Form DBプラグインで確認ボタンクリック時に記録されてしまう問題を修正

1.3.8.13
 「on_confirm」オプションを追加、確認画面表示時に独自のJavascriptを追加できるようにしました。
 編集に戻る際は、ボタンに直接イベントをつけて下さい。

1.3.9.1
 せっかくスクロールアンカーをセットできるので
 　add_filter("wpcf7c_input_error_scroll", '__return_true');
 　とすることで、入力エラーじもアンカーまでスクロールするようにしました。
 　要素の表示非表示を制御するとスクロールが思った場所にいかないのでインターバルを入れました。
 Contact Form 7 3.9 に（無理矢理ですが）対応しました。
 input type="text"などについて、disabledは付けずにreadonlyのみにしました。
 textareaについて、入力内容が縦幅より大きい場合、確認画面で高さを伸ばすようにしました。

1.3.9.2
 エラーメッセージ表示のDIVが確認画面から編集画面に戻る際に
 display: blockのままだったものをnoneにするように修正

1.3.9.3
 WordPress4.0
 Contact Form 7 3.9.2に対応

1.3.9.4
 Contact Form DB 2.8.2以上に対応

1.3.9.4
 Contact Form DB 2.8.2以上に対応

1.3.9.5
 バグFIXデバックログ出力が残っていたものを削除

1.3.9.6
 Noticeが出ていた箇所を修正

4.1
 バージョンのカウント方法をcontact form 7とwordpressに合わせました。
 contact form DBプラグインの2.8.26以降で二重登録される不具合に対応。

4.1.1
 メール送信エラーなどの際にエラーメッセージが出ない不具合を修正

4.1.2
 CAPTCHA対応バグFIX

4.1.3
 quizに対応

4.2.1
 Contact Form 7 4.2.1に対応

4.2.1.1
 Contact Form 7 4.2より古いものと実行した場合の不具合を修正

4.2.1.1
 Contact Form 7 4.2より古いものと実行した場合の不具合を修正

4.3.1
 Check at WordPress4.4

4.3.2
 Contact Form 7がインストールされていないときに管理画面がおかしくなるバグを修正

4.3.3
 アンカースクロールバグ修正

4.6
 WordPress4.7対応

4.6.1
 Contact Form 7 ver.4.6に対応し
 wpcf7_add_form_tag関数に対応

4.6.2
 Contact Form 7 ver.4.6に対応し
 WPCF7_FormTagに対応

4.8
 Contact Form 7 ver.4.8に対応

5.0
 Contact Form 7 ver.5.0に対応
 
== Upgrade notice ==
5.1
 jQuery3.0対応としてscripts.js の size() を length に変更