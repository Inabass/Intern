<?php
/*
---ログイン
　・ログイン画面 作成
　・テストデータ(users) 挿入
　・ユーザー認証機能 追加-確認

---ホーム
　・ホーム画面(イベント一覧) 作成
　・テストデータ(users-events)
　・イベント一覧 確認

---イベント作成
　・イベント作成画面 作成
　・イベント作成機能＊(認証キー発行)＊ 追加-確認

---イベント編集
　・イベント編集画面 作成
　・イベント編集機能 追加-確認

---イベント削除確認
　・イベント削除確認画面 作成
　・イベント削除機能 追加-確認

---イベント編集
　・テストデータ(events-images)
　・写真登録機能 追加-確認
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
