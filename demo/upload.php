<?php
if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  $area_path = "../../data/".substr($_FILES["user_id"]["name"], 0, 1);
  if(!file_exists($area_path)){
    if(mkdir($area_path, 0777)){
      chmod($area_path, 0777);
    }
  } 
  $user_path = $area_path."/".$_FILES["user_id"]["name"]."/";
  if(!file_exists($user_path)){
    if(mkdir($user_path, 0777)){
      chmod($user_path, 0777);
    }
    echo $user_path."ディレクトリを新たに作成しました．\n";
  }
  if (move_uploaded_file($_FILES["upfile"]["tmp_name"], $user_path . $_FILES["upfile"]["name"])) {
    chmod($user_path . $_FILES["upfile"]["name"], 0644);
    echo $_FILES["upfile"]["name"] . "をアップロードしました。";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}
?>
