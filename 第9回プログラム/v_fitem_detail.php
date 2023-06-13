﻿<!doctype html>
<html lang="ja">
<head>
<?php include("./html/meta.htm"); ?>
  <title>拾得物管理システム</title>
</head>

<body>
  <?php include("./html/header.htm"); ?>
  
  <div class="container">
    <div class="row mt-3 mb-1">
      <div class="col"><p class="h2 p-1  bg-success w-100 rounded text-center text-white">拾得物詳細</p></div>
      <div class="col align-self-end"><a href="v_fitem_search.php" class="badge btn-success">戻る</a></div>
    </div>
    <div class="row">
        <div class="col">
            <p class="bg-light p-1 border m-0">拾得物詳細画面では，一覧画面で選択した行の拾得物について，詳細情報の表示と現在に至るまでの管理状況の変化について確認が可能です．管理状況を変更する場合には，対応者と状態を入力し，変更を選択してください．また，一覧画面に戻る場合は，戻るを選択してください</p>
            <hr>
      </div>
    </div>

    <div class="row mt-1">
        <div class="col">
          <span id="r1"></span>
        </div>
        <div class="col">
          <span id="r2"></span>
        </div>
    </div>

    <div class="row">
        <div class="col mt-1">
            <hr>
            <form class="needs-validation" novalidate method="post" action="c_insert.php">
            <table>
                <tr><td>対応者（ユーザ）</td><td><input type="text" required class="form-control user"><span class="valid-feedback"></span><input type="hidden" name="p1" value="" class="userid"></td></tr>
                <tr><td>状態</td><td><select name="p3"><option value="返還">返還</option><option value="展示">展示</option><option value="期限切れ">期限切れ</option></select></td></tr>
            </table>
            <button class="btn btn-success">変更</button>
            <input type="hidden" name="data" value="fitem_st">
<?php
echo("<input type='hidden' name='p2' value='{$_REQUEST["id"]}'>");
?>
            </form>
        </div>
    </div>

  </div>
  <?php include("./html/footer.htm"); ?>
  <script src="./js/main.js"></script>
<?php
  $html = "<script>";
  $html .= "\$(function(){ get_fitem_detail(['r1','r2'],{$_REQUEST["id"]}) });";
  $html .= "</script>";
  echo($html);
?>
</body>
</html>
